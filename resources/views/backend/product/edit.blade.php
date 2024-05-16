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
                <label for="yarn" class="col-form-label">Yarn <span class="text-danger">*</span></label>
                <input id="yarn" type="text" name="yarn" placeholder="Enter Yarn"  value="{{$product->yarn}}" class="form-control">
                @error('yarn')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="yarn" class="col-form-label">Taglines</label>
                <input id="yarn" type="text" name="weave_type" placeholder="Enter Tagline Seprated With ',' "  value="{{$product->weave_type}}" class="form-control">
                @error('yarn')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              @php
                $productsizes = DB::table('product_colors')->where('product_id' , $product->id)->groupby('sizes')->get();
                $productcolors = DB::table('product_colors')->where('product_id' , $product->id)->groupby('colors')->get();
              @endphp
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                <label for="size">Size</label>
                <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
                    <option value="">--Select any size--</option>
                    @foreach(DB::table('sizeandcolors')->groupby('size')->get() as $r)              
                    <option @if($productsizes) @foreach($productsizes as $productsize) @if($productsize->sizes == $r->size) selected @endif  @endforeach @endif value="{{ $r->size }}">{{ $r->size }}</option>
                    @endforeach
                </select>
              </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="color">Color</label>
                    <select name="color[]" class="form-control selectpicker"  multiple data-live-search="true">
                        <option value="">--Select any size--</option>
                        @foreach(DB::table('sizeandcolors')->groupby('colors')->get() as $r)              
                        <option @if($productcolors) @foreach($productcolors as $productcolor) @if($productcolor->colors == $r->colors) selected @endif  @endforeach @endif value="{{ $r->colors }}">{{ $r->colors }}</option>
                        @endforeach
                    </select>
                  </div>
                </div> 
              </div> 
              <a target="_blank" href="{{ url('admin/product/Variations') }}/{{ $product->id }}">View Variations</a>
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
                <input required multiple type="file" class="form-control" name="photo[]" >
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
              <table class="table table-bordered">
                  <tbody id="productmainimages">
                      @foreach(DB::table('product_images')->where('product_id' , $product->id)->orderby('orderby' , 'ASC')->get() as $r)
                      <tr>
                        <td><img style="width: 100px;height: 100px;object-fit: cover;" class="img-thumbnail" src="{{ url('public/images') }}/{{ $r->image }}"></td>
                        <td><input id="ordernumber{{ $r->id }}" type="number" class="form-control mt-3" value="{{ $r->orderby }}" name="product_order[]"></td>
                        <td><button onclick="saveorder({{$r->id}})" class="btn btn-success mt-3">Save</button></td>
                        <td><a href="{{ url('admin/product/deleteimage') }}/{{ $r->id }}" class="fas fa-trash-alt mt-3"></a></td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
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
<script type="text/javascript">
  function saveorder(id) {
      var ordernumber = $('#ordernumber'+id).val();
      var product_id = '{{ $product->id }}';
      $.ajax({
          type: "POST",
          url: "{{ url('admin/product/saveorder') }}",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
              id:id,
              product_id:product_id,
              ordernumber:ordernumber,
          },
          success: function(res) {
              $('#productmainimages').html(res);
          },
          error: function(error) {
              console.log('Error updating card position:', error);
          }
      });
  }
</script>
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