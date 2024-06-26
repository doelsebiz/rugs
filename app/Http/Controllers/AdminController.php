<?php

namespace App\Http\Controllers;
use App\Helper\Cmf;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Product;
use App\Models\product_images;
use App\Models\product_colors;
use App\Models\product_variation_images;
use App\User;
use App\Models\Category;
use App\Rules\MatchOldPassword;
use Hash;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use DB;
class AdminController extends Controller
{
    public function searchproduct(Request $request)
    {
        $input = $request->all();


        $q = Product::query();

        if (!empty($input['keyword']))
        {
            $q->where('title','like', '%' . $input['keyword'] . '%' );
        }
        if (!empty($input['category_id']))
        {
            $q->where('cat_id','like', '%' . $input['category_id'] . '%' );
        }
        $products = $q->orderBy('id' , 'desc')->paginate(200);

        $category=Category::where('is_parent',1)->get();
        return view('backend.product.index')->with('products',$products)->with('categories',$category);
    }
    public function saveorder(Request $request)
    {
        $update = product_images::find($request->id);
        $update->orderby = $request->ordernumber;
        $update->save();
        $productid = $request->product_id;
        $html = view('backend.product.saveorder', compact('productid'))->render();
        return $html;
    }
    public function getvariations($id)
    {
        $colors = DB::table('product_colors')->where('product_id' , $id)->orderby('colors')->get();
        return view('backend.product.getvariations')->with(array('colors' => $colors,'id'=>$id));
    }
    public function deletevariation($id)
    {
        DB::table('product_colors')->where('id' , $id)->delete();
        request()->session()->flash('success','Variation Deleted  Successfully');
        return redirect()->back();
    }
    public function attributes()
    {
        $colors = DB::table('sizeandcolors')->groupby('colors')->get();
        return view('backend.product.attributes')->with(array('colors' => $colors));
    }
    public function addnewcolor(Request $request)
    {
        $KPI =  DB::table('sizeandcolors')->insertGetId([
            'colors' => $request->color,
            'tone' => $request->tone
        ]);
        request()->session()->flash('success','Color Added  Successfully');
        return redirect()->back();
    }
    public function updatecolor(Request $request)
    {
        DB::table('sizeandcolors')->where('id',$request->id)->update(['colors' =>  $request->color,'tone' =>  $request->tone]);
        request()->session()->flash('success','Color Updated Successfully');
        return redirect()->back();
    }
    public function updatevariationsimages(Request $request)
    {
        $input  = $request->all();
        foreach ($request->images as $i) {
            $addimage = new product_variation_images();
            $addimage->product_id = $request->product_id;
            $addimage->color = $request->color;
            $addimage->image = Cmf::sendimagetodirectory($i);
            $addimage->save();
        }  
        request()->session()->flash('success','Product Image Added Successfully');
        return redirect()->back();
    }
    public function updatevariations(Request $request)
    {
        $input  = $request->all();
        foreach ($request->id as $key => $id) {
            $updatevariation = product_colors::find($input['id'][$key]);
            $updatevariation->stock = $input['stock'][$key];
            $updatevariation->sku = $input['sku'][$key];
            $updatevariation->price = $input['price'][$key]; 
            $updatevariation->save();
        }
        request()->session()->flash('success','Product Variations Updated Successfully');
        return redirect()->back();
    }
    public function index(){
        $data = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();
     $array[] = ['Name', 'Number'];
     foreach($data as $key => $value)
     {
       $array[++$key] = [$value->day_name, $value->count];
     }
    //  return $data;
     return view('backend.index')->with('users', json_encode($array));
    }
    public function addproductimages(Request $request)
    {
        foreach ($request->photo as $r) {
            $images = new product_images();
            $images->image = Cmf::sendimagetodirectory($r);
            $images->product_id = $request->id;
            $images->save();
        }
        request()->session()->flash('success','Product Image Added Successfully');
        return redirect()->back();
    }
    public function deleteimage($id)
    {
        product_images::where('id' , $id)->delete();
        request()->session()->flash('success','Product Image Added Successfully');
        return redirect()->back();
    }
    public function deletevariationimage($id)
    {
        product_variation_images::where('id' , $id)->delete();
        request()->session()->flash('success','Product Image Added Successfully');
        return redirect()->back();
    }
    public function profile(){
        $profile=Auth()->user();
        // return $profile;
        return view('backend.users.profile')->with('profile',$profile);
    }

    public function profileUpdate(Request $request,$id){
        // return $request->all();
        $user=User::findOrFail($id);
        $data=$request->all();
        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Successfully updated your profile');
        }
        else{
            request()->session()->flash('error','Please try again!');
        }
        return redirect()->back();
    }

    public function settings(){
        $data=Settings::first();
        return view('backend.setting')->with('data',$data);
    }

    public function settingsUpdate(Request $request){
        // return $request->all();
        $this->validate($request,[
            'short_des'=>'required|string',
            'description'=>'required|string',
            'address'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string',
        ]);
        $data=$request->all();
        // return $data;
        $settings= Settings::first();
        // return $settings;
        $status=$settings->fill($data)->save();

        if($request->photo)
        {
            $update = Settings::find($settings->id);
            $update->photo = Cmf::sendimagetodirectory($request->photo);
            $update->save();
        }
        if($request->logo)
        {
            $update = Settings::find($settings->id);
            $update->logo = Cmf::sendimagetodirectory($request->logo);
            $update->save();
        }
        if($status){
            request()->session()->flash('success','Setting successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again');
        }
        return redirect()->route('admin');
    }

    public function changePassword(){
        return view('backend.layouts.changePassword');
    }
    public function changPasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('admin')->with('success','Password successfully changed');
    }

    // Pie chart
    public function userPieChart(Request $request){
        // dd($request->all());
        $data = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();
     $array[] = ['Name', 'Number'];
     foreach($data as $key => $value)
     {
       $array[++$key] = [$value->day_name, $value->count];
     }
    //  return $data;
     return view('backend.index')->with('course', json_encode($array));
    }

    // public function activity(){
    //     return Activity::all();
    //     $activity= Activity::all();
    //     return view('backend.layouts.activity')->with('activities',$activity);
    // }

    public function storageLink(){
        // check if the storage folder already linked;
        if(File::exists(public_path('storage'))){
            // removed the existing symbolic link
            File::delete(public_path('storage'));

            //Regenerate the storage link folder
            try{
                Artisan::call('storage:link');
                request()->session()->flash('success', 'Successfully storage linked.');
                return redirect()->back();
            }
            catch(\Exception $exception){
                request()->session()->flash('error', $exception->getMessage());
                return redirect()->back();
            }
        }
        else{
            try{
                Artisan::call('storage:link');
                request()->session()->flash('success', 'Successfully storage linked.');
                return redirect()->back();
            }
            catch(\Exception $exception){
                request()->session()->flash('error', $exception->getMessage());
                return redirect()->back();
            }
        }
    }
}
