@foreach(DB::table('product_images')->where('product_id' , $productid)->orderby('orderby' , 'ASC')->get() as $r)
<tr>
  <td><img style="width: 100px;height: 100px;object-fit: cover;" class="img-thumbnail" src="{{ url('public/images') }}/{{ $r->image }}"></td>
  <td><input id="ordernumber{{ $r->id }}" type="number" class="form-control mt-3" value="{{ $r->orderby }}" name="product_order[]"></td>
  <td><button onclick="saveorder({{$r->id}})" class="btn btn-success mt-3">Save</button></td>
  <td><a href="{{ url('admin/product/deleteimage') }}/{{ $r->id }}" class="fas fa-trash-alt mt-3"></a></td>
</tr>
@endforeach