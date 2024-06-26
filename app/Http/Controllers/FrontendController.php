<?php

namespace App\Http\Controllers;
use App\Helper\Cmf;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Cart;
use App\Models\Order;
use App\Models\ProductReview;
use App\Models\enquiries;
use App\Models\Brand;
use App\Models\product_variation_images;
use App\Models\product_colors;
use App\User;
use Auth;
use Session;
use Image;
use Newsletter;
use DB;
use Stripe;
use Hash;
use Redirect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
    public function projectwork()
    {
        return view('frontend.pages.projectwork');
    }
    public function customwork()
    {
        return view('frontend.pages.customwork');
    }
    public function addproductreview(Request $request)
    {
        $data = new ProductReview();
        $data->product_id = $request->product_id;
        $data->rate = $request->rating;
        $data->review = $request->commemt;
        $data->status = 'inactive';
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        request()->session()->flash('cartadded','Product Added in Cart');
        return redirect()->back();
    }
    public function filterproducts(Request $request)
    {
        $query = Product::query();
        if (!empty($request->category)) {
            $query->whereIn('cat_id', $request->category);
        }
        if (!empty($request->yarn)) {
            $query->whereIn('yarn', $request->yarn);
        }
        $data = $query->get();
        if(!empty($request->colors))
        {
            $colors = $request->colors;
        }else{
            $colors = Null;
        }
        if(!empty($request->size))
        {
            $sizes = $request->size;
        }else{
            $sizes = Null;
        }
        $html = view('frontend.filterproducts', compact('data','colors' , 'sizes'))->render();
        return $html;
    }
    public function projectinquiery(Request $request)
    {
        return "Your Query Submited Successfully. Our Team Will Contact You With in 24 Hours";
    }
    public function bycolor($id)
    {
        $color   = $id;
        $products = product_colors::select('products.id', 'products.slug', 'products.title', 'products.cat_id', 'products.price')->leftJoin('products', 'products.id', '=', 'product_colors.product_id')->where('product_colors.colors' , $id)->groupBy('product_colors.product_id')->get();
        return view('frontend.pages.product-color' ,compact('products','color'));
    }
    public function getstock(Request $request)
    {
        $data = product_colors::where('product_id' , $request->product_id)->where('colors' , $request->color)->where('sizes' , $request->size)->get()->first();
        return response()->json(['stock' =>$data->stock, 'price' =>$data->price, 'sku' =>$data->sku]);
    }
    public function selectcolor(Request $request)
    {
        $data = product_variation_images::where('product_id' , $request->product_id)->where('color' , $request->id)->get();
        $html = view('frontend.pages.productappendimages', compact('data'))->render();
        return $html;
    }
    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }
    public function addToCart(Request $request){
        $product = Product::findOrFail($request->product_id);
        $cart = session()->get('cart', []);
        $cart[$request->product_id] = [
            "name" => $product->title,
            "size" => $request->size,
            "color" => $request->color,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "product_id" => $product->id
        ];
        session()->put('cart', $cart);
        request()->session()->flash('cartadded','Product Added in Cart');
        return redirect()->back();
    }
    public function removefromcart($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product removed successfully');
        return redirect()->back();
    }
    public function allproducts()
    {
        $data = Product::where('status','active')->orderBy('price','DESC')->paginate(12);
        return view('frontend.allproducts')
                ->with('data',$data);
    }
    public function enquery(Request $request)
    {
        $addsad = new enquiries();
        $addsad->name = $request->name;
        $addsad->product_id = $request->product_id;
        $addsad->email = $request->email;
        $addsad->phonenumber = $request->phonenumber;
        $addsad->message = $request->message;
        $addsad->save();
        return 'Your Inquiry Submitted Successfully. We Will Be in Touch With You Within 24 Hours.';
    }
    public function deleteenquiery($id)
    {
        enquiries::where('id' , $id)->delete();
        request()->session()->flash('success','Deleted Successfully');
        return redirect()->back();
    }


    public function stripepayment($id)
    {
        $data = DB::table('orders')->where('order_number' , $id)->first();
        return view('frontend.stripepayment')->with('data',$data);
    }
    public function stripePost(Request $request)
    {
        $data = DB::table('orders')->where('id' , $request->orderid)->first();     
        $totalprice = $data->total_amount*100;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $payement = Stripe\Charge::create ([
                "amount" => $totalprice,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => 'test'
        ]);
        if(!empty($payement->id))
        {
            $order=Order::find($request->orderid);
            $order->payment_status = 'paid';
            $order->save();
            session()->forget('cart');
            $url = url('');
            return Redirect::to($url);
        }
        else
        {
            
        }   
    }
    public function home(){
        $featured=Product::where('status','active')->where('is_featured',1)->orderBy('price','DESC')->limit(2)->get();
        $posts=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // return $banner;
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(6)->get();
        $category=Category::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
        // return $category;
        return view('frontend.index')
                ->with('featured',$featured)
                ->with('posts',$posts)
                ->with('product_lists',$products)
                ->with('category_lists',$category);
    }   

    public function aboutUs(){
        return view('frontend.pages.about-us');
    }
    public function returnpolicy()
    {
        return view('frontend.pages.returnpolicy');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }

    public function productDetail($slug){
        $product_detail= Product::getProductBySlug($slug);
        // dd($product_detail);
        return view('frontend.pages.product_detail')->with('product_detail',$product_detail);
    }

    public function productGrids(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids);
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(9);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productLists(){
        $products=Product::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=Category::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // dd($cat_ids);
            $products->whereIn('cat_id',$cat_ids)->paginate;
            // return $products;
        }
        if(!empty($_GET['brand'])){
            $slugs=explode(',',$_GET['brand']);
            $brand_ids=Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            return $brand_ids;
            $products->whereIn('brand_id',$brand_ids);
        }
        if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='title'){
                $products=$products->where('status','active')->orderBy('title','ASC');
            }
            if($_GET['sortBy']=='price'){
                $products=$products->orderBy('price','ASC');
            }
        }

        if(!empty($_GET['price'])){
            $price=explode('-',$_GET['price']);
            // return $price;
            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));
            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));
            
            $products->whereBetween('price',$price);
        }

        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // Sort by number
        if(!empty($_GET['show'])){
            $products=$products->where('status','active')->paginate($_GET['show']);
        }
        else{
            $products=$products->where('status','active')->paginate(6);
        }
        // Sort by name , price, category

      
        return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
    }
    public function productFilter(Request $request){
            $data= $request->all();
            // return $data;
            $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

            $catURL="";
            if(!empty($data['category'])){
                foreach($data['category'] as $category){
                    if(empty($catURL)){
                        $catURL .='&category='.$category;
                    }
                    else{
                        $catURL .=','.$category;
                    }
                }
            }

            $brandURL="";
            if(!empty($data['brand'])){
                foreach($data['brand'] as $brand){
                    if(empty($brandURL)){
                        $brandURL .='&brand='.$brand;
                    }
                    else{
                        $brandURL .=','.$brand;
                    }
                }
            }
            // return $brandURL;

            $priceRangeURL="";
            if(!empty($data['price_range'])){
                $priceRangeURL .='&price='.$data['price_range'];
            }
            if(request()->is('e-shop.loc/product-grids')){
                return redirect()->route('product-grids',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
            else{
                return redirect()->route('product-lists',$catURL.$brandURL.$priceRangeURL.$showURL.$sortByURL);
            }
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
                    ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }


    public function searchproduct(Request $request)
    {
        $products=Product::orwhere('title','like','%'.$request->name.'%')
                    ->orwhere('slug','like','%'.$request->name.'%')
                    ->orwhere('description','like','%'.$request->name.'%')
                    ->orwhere('summary','like','%'.$request->name.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('frontend.pages.product-lists-search' ,compact('products'));
    }


    public function productBrand(Request $request){
        $products=Brand::getProductByBrand($request->slug);
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->products)->with('recent_products',$recent_products);
        }

    }
    public function productCat(Request $request){
        $products = Category::getProductByCat($request->slug);
        $categoryname = DB::Table('categories')->where('slug' , $request->slug)->first();
        // return $request->slug;
        $products = $products->products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids' ,compact('categoryname','products'));
        }
        else{
            return view('frontend.pages.product-lists' ,compact('categoryname','products'));
        }

    }
    public function productSubCat(Request $request){
        $products=Category::getProductBySubCat($request->sub_slug);
        // return $products;
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();

        if(request()->is('e-shop.loc/product-grids')){
            return view('frontend.pages.product-grids')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }
        else{
            return view('frontend.pages.product-lists')->with('products',$products->sub_products)->with('recent_products',$recent_products);
        }

    }

    public function blog(){
        $post=Post::query();
        
        if(!empty($_GET['category'])){
            $slug=explode(',',$_GET['category']);
            // dd($slug);
            $cat_ids=PostCategory::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            return $cat_ids;
            $post->whereIn('post_cat_id',$cat_ids);
            // return $post;
        }
        if(!empty($_GET['tag'])){
            $slug=explode(',',$_GET['tag']);
            // dd($slug);
            $tag_ids=PostTag::select('id')->whereIn('slug',$slug)->pluck('id')->toArray();
            // return $tag_ids;
            $post->where('post_tag_id',$tag_ids);
            // return $post;
        }

        if(!empty($_GET['show'])){
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate($_GET['show']);
        }
        else{
            $post=$post->where('status','active')->orderBy('id','DESC')->paginate(9);
        }
        // $post=Post::where('status','active')->paginate(8);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }

    public function blogDetail($slug){
        $post=Post::getPostBySlug($slug);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        // return $post;
        return view('frontend.pages.blog-detail')->with('post',$post)->with('recent_posts',$rcnt_post);
    }

    public function blogSearch(Request $request){
        // return $request->all();
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $posts=Post::orwhere('title','like','%'.$request->search.'%')
            ->orwhere('quote','like','%'.$request->search.'%')
            ->orwhere('summary','like','%'.$request->search.'%')
            ->orwhere('description','like','%'.$request->search.'%')
            ->orwhere('slug','like','%'.$request->search.'%')
            ->orderBy('id','DESC')
            ->paginate(8);
        return view('frontend.pages.blog')->with('posts',$posts)->with('recent_posts',$rcnt_post);
    }

    public function blogFilter(Request $request){
        $data=$request->all();
        // return $data;
        $catURL="";
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catURL)){
                    $catURL .='&category='.$category;
                }
                else{
                    $catURL .=','.$category;
                }
            }
        }

        $tagURL="";
        if(!empty($data['tag'])){
            foreach($data['tag'] as $tag){
                if(empty($tagURL)){
                    $tagURL .='&tag='.$tag;
                }
                else{
                    $tagURL .=','.$tag;
                }
            }
        }
        // return $tagURL;
            // return $catURL;
        return redirect()->route('blog',$catURL.$tagURL);
    }

    public function blogByCategory(Request $request){
        $post=PostCategory::getBlogByCategory($request->slug);
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post->post)->with('recent_posts',$rcnt_post);
    }

    public function blogByTag(Request $request){
        // dd($request->slug);
        $post=Post::getBlogByTag($request->slug);
        // return $post;
        $rcnt_post=Post::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.pages.blog')->with('posts',$post)->with('recent_posts',$rcnt_post);
    }

    // Login
    public function login(){
        return view('frontend.pages.login');
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            if(Auth::user()->status == 'inactive')
            {
                Auth::logout();
                return back()->with('errormessage','This Retailor is In Active Please Contact For Approval');
            }else{
                return redirect()->route('retailerdashboard');
            }
        }
        else{
            return back()->with('errormessage','Credentials Not Matched');
        }
    }
    public function retailerdashboard()
    {
        if(Auth::check())
        {
            $products=Product::getAllProduct();
            return view('retailerdashboard')->with('products',$products);
        }else{
            Auth::logout();
            return redirect()->route('home');
        }
    }
    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }

    public function register(){
        return view('frontend.pages.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);

        $update = User::find($check->id);
        $update->status = 'inactive';
        $update->save();
        if($check){
            return back()->with('message','Retailor Registerd Successfully. Please Wait For Approval.');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }
    // Reset password
    public function showResetForm(){
        return view('auth.passwords.old-reset');
    }

    public function subscribe(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
                Newsletter::subscribePending($request->email);
                if(Newsletter::lastActionSucceeded()){
                    request()->session()->flash('success','Subscribed! Please check your email');
                    return redirect()->route('home');
                }
                else{
                    Newsletter::getLastError();
                    return back()->with('error','Something went wrong! please try again');
                }
            }
            else{
                request()->session()->flash('error','Already Subscribed');
                return back();
            }
    }
    
}
