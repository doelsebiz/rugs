@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
<div class="container-fluid">
   <div class="row mb-3">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
   <div class="row">
      <div class="col-md-8">
        <div class="card shadow mb-4">
    
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Product Variations</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="product-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Color</th>
              <th>Size</th>
              <th>SKU</th>
              <th>Stock</th>
              <th>Price</th>
            </tr>
          </thead>
          <form method="POST" action="{{ url('admin/product/updatevariations') }}">
            @csrf
          <tbody>
            @foreach($colors as $r)
                <input type="hidden" value="{{ $r->id }}" name="id[]">
                <tr>
                    <td style="width:20%;">{{$r->colors}}</td>
                    <td style="width:20%;">{{$r->sizes}}</td>
                    <td style="width:30%;"><input name="sku[]" value="{{ $r->sku }}" type="text" class="form-control"></td>
                    <td style="width:20%;"><input name="stock[]" value="{{ $r->stock }}" type="text" class="form-control"></td>
                    <td style="width:20%;"><input name="price[]" value="{{ $r->price }}" type="text" class="form-control"></td>
                </tr>
            @endforeach
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><button class="btn btn-success form-control">Save</button></td>
            </tr>
          </tbody>

          </form>
        </table>
      </div>
    </div>
</div>
      </div>
      <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary float-left">Product Variation Images</h6>
            </div>

            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" action="{{ url('admin/product/updatevariationsimages') }}">
              @csrf
                <input type="hidden" value="{{ $id }}" name="product_id">
                <div class="form-group">
                  <label>Select Color</label>
                  <select onchange="getcolorimages(this.value)" class="form-control" name="color" required>
                    <option value="">Select Color</option>
                    @foreach(DB::table('product_colors')->where('product_id' , $id)->groupby('colors')->get() as $c )
                    <option value="{{ $c->colors }}">{{ $c->colors }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label>Select Image</label>
                    <input multiple type="file" required class="form-control" name="images[]" style="height: 45px;">
                </div>
                <div class="form-group">
                  <button class="btn btn-success">Save</button>
                  <span data-toggle="modal" data-target="#myModal" style="display: none;" class="btn btn-primary" id="viewimages">View Images</span>
                </div>
            </div>
            </form>
        </div>
      </div>
   </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          @foreach(DB::table('product_variation_images')->where('product_id' , $id)->get() as $r)
          <div class="col-md-6 mt-2 allnone colorimage{{ $r->color }}" style="display:none;">
              <a href="{{ url('admin/product/deletevariationimage') }}/{{ $r->id }}" class="fas fa-trash-alt"></a>
              <img style="width: 100px;height: 100px;object-fit: cover;" src="{{ url('public/images') }}/{{ $r->image }}">
          </div>
          @endforeach
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
  function getcolorimages(id) {
    if(id)
    {
      $('.modal-title').html(id+' Images')
      $('#viewimages').show();
      $('.allnone').hide();
      $('.colorimage'+id).show();
    }else{
      $('.allnone').hide();
      $('#viewimages').hide();
    }
  }
</script>
@endsection