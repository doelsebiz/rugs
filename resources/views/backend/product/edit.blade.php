@extends('backend.layouts.master')

@section('main-content')

<div class="container-fluid">
  <div class="row">
  <div class="col-md-8">
      <div class="card">
          <h5 class="card-header">Edit Product</h5>
          <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="{{route('product.update',$product->id)}}">
              @csrf 
              @method('PATCH')
              <div class="form-group">
                <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$product->title}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
                <textarea class="form-control" id="summary" name="summary">{{$product->summary}}</textarea>
                @error('summary')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="description" class="col-form-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>


              <div class="form-group">
                <label for="is_featured">Is Featured</label><br>
                <input type="checkbox" name='is_featured' id='is_featured' value='{{$product->is_featured}}' {{(($product->is_featured) ? 'checked' : '')}}> Yes                        
              </div>
                    {{-- {{$categories}} --}}

              <div class="form-group">
                <label for="cat_id">Category <span class="text-danger">*</span></label>
                <select name="cat_id" id="cat_id" class="form-control">
                    <option value="">--Select any category--</option>
                    @foreach($categories as $key=>$cat_data)
                        <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->title}}</option>
                    @endforeach
                </select>
              </div>
              @php 
                $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
              // dd($sub_cat_info);

              @endphp
              {{-- {{$product->child_cat_id}} --}}
              <div class="form-group {{(($product->child_cat_id)? '' : 'd-none')}}" id="child_cat_div">
                <label for="child_cat_id">Sub Category</label>
                <select name="child_cat_id" id="child_cat_id" class="form-control">
                    <option value="">--Select any sub category--</option>
                    
                </select>
              </div>

              <div class="form-group">
                <label for="price" class="col-form-label">Price(NRS) <span class="text-danger">*</span></label>
                <input id="price" type="number" name="price" placeholder="Enter price"  value="{{$product->price}}" class="form-control">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                <label for="size">Size</label>
                <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
                    <option value="">--Select any size--</option>
                    @foreach($items as $item)              
                      @php 
                      $data=explode(',',$item->size);
                      // dd($data);
                      @endphp
                    <option value="S"  @if( in_array( "S",$data ) ) selected @endif>Small</option>
                    <option value="M"  @if( in_array( "M",$data ) ) selected @endif>Medium</option>
                    <option value="L"  @if( in_array( "L",$data ) ) selected @endif>Large</option>
                    <option value="XL"  @if( in_array( "XL",$data ) ) selected @endif>Extra Large</option>
                    @endforeach
                </select>
              </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="color">Color</label>
                    <select name="color[]" class="form-control selectpicker"  multiple data-live-search="true">
                        <option value="">--Select any size--</option>
                        @foreach($items as $item)              
                          @php 
                          $color=explode(',',$item->color);
                          // dd($data);
                          @endphp
                        <option value="Black"  @if( in_array( "Black",$color ) ) selected @endif>Black</option>
                        <option value="Red"  @if( in_array( "Red",$color ) ) selected @endif>Red</option>
                        <option value="White"  @if( in_array( "White",$color ) ) selected @endif>White</option>
                        <option value="Orange"  @if( in_array( "Orange",$color ) ) selected @endif>Orange</option>
                        @endforeach
                    </select>
                  </div>
                </div> 
              </div>  
                      
              <div class="form-group">
                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                <select name="status" class="form-control">
                  <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
                  <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
              </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                 <button class="btn btn-success" type="submit">Update</button>
              </div>
            </form>
          </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="card">
          <h5 class="card-header">Add Product Images</h5>
          <div class="card-body">
            <form enctype="multipart/form-data" method="post" action="{{url('admin/product/addproductimages')}}">
              @csrf 
              <input type="hidden" value="{{ $product->id }}" name="id">
              <div class="form-group">
                <label for="address" class="col-form-label">Photo <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="photo" >
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                 <button class="btn btn-success" type="submit">Add Images</button>
              </div>
            </form>
          </div>
      </div>
      <div class="card mt-4">
          <h5 class="card-header">Product Images</h5>
          <div class="card-body">
              <div class="row">
                @foreach(DB::table('product_images')->where('product_id' , $product->id)->get() as $r)
                <div class="col-md-6 mt-2">
                    <a href="{{ url('admin/product/deleteimage') }}/{{ $r->id }}" class="fas fa-trash-alt"></a>
                    <img style="width: 100px;height: 100px;object-fit: cover;" src="{{ url('public/images') }}/{{ $r->image }}">
                </div>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</div>
</div>


@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('public/backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
<script src="{{asset('public/backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>

    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail Description.....",
          tabsize: 2,
          height: 150
      });
    });
</script>

<script>
  var  child_cat_id='{{$product->child_cat_id}}';
        // alert(child_cat_id);
        $('#cat_id').change(function(){
            var cat_id=$(this).val();

            if(cat_id !=null){
                // ajax call
                $.ajax({
                    url:"/admin/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        _token:"{{csrf_token()}}"
                    },
                    success:function(response){
                        if(typeof(response)!='object'){
                            response=$.parseJSON(response);
                        }
                        var html_option="<option value=''>--Select any one--</option>";
                        if(response.status){
                            var data=response.data;
                            if(response.data){
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data,function(id,title){
                                    html_option += "<option value='"+id+"' "+(child_cat_id==id ? 'selected ' : '')+">"+title+"</option>";
                                });
                            }
                            else{
                                console.log('no response data');
                            }
                        }
                        else{
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);

                    }
                });
            }
            else{

            }

        });
        if(child_cat_id!=null){
            $('#cat_id').change();
        }
</script>
@endpush