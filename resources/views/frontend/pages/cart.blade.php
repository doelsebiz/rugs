@extends('frontend.layouts.master')
@section('title')
<title>Cart</title>
@endsection
@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Cart</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Cart</span></li>
        </ul>
    </div>
</section>
<section class="cart-page section-space">
    <div class="container">
        @if(session('cart'))
        <div class="row gutter-y-50">
            <div class="col-xl-8">
                <div class="table-responsive">
                    <table class="table cart-page__table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@php $total = 0 @endphp
						        @if(session('cart'))
						            @foreach(session('cart') as $id => $details)
						                @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{ $id }}">
                                <td>
                                    <div class="cart-page__table__meta">
                                        <div class="cart-page__table__meta__img">
                                        	@if(DB::table('product_images')->where('product_id' , $details['product_id'])->first())
								            <img src="{{ url('public/images') }}/{{ DB::table('product_images')->where('product_id' , $details['product_id'])->first()->image }}" alt="{{ DB::table('products')->where('id' , $details['product_id'])->first()->title }}">
								            @else
								            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh_2e8C2K5k5slozTp96XOBMD6aYMlj2YQ223BxU-kQA&s">
								            @endif
                                        </div>
                                        <h3 class="cart-page__table__meta__title"><a href="{{route('product-detail',DB::table('products')->where('id' , $details['product_id'])->first()->slug)}}">{{ DB::table('products')->where('id' , $details['product_id'])->first()->title }}</a>
                                        </h3>
                                    </div>
                                </td>
                                <td class="cart-page__table__price">${{ DB::table('products')->where('id' , $details['product_id'])->first()->price }}</td>
                                <td>
                                    <div class="product-details__quantity">
                                        <div class="quantity-box">
                                            <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="{{$details['quantity']}}">
                                            <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-page__table__total">${{ DB::table('products')->where('id' , $details['product_id'])->first()->price*$details['quantity'] }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="cart-page__table__remove remove-from-cart"><i class="fas fa-times"></i> remove</a>
                                </td>
                            </tr>
                            @endforeach
        				@endif
                        </tbody>
                    </table>
                </div>
            </div><!-- /.col-xl-8 -->
            <div class="col-xl-4">
                <div class="cart-page__cart-checkout">
                    <ul class="cart-page__cart-total list-unstyled">
                        <li><span>Subtotal</span><span class="cart-page__cart-total__amount">${{ $total }}</span></li>
                        <li>
                            
                        </li>
                        <li><span>Total</span><span class="cart-page__cart-total__amount">${{ $total }}</span></li>
                    </ul>
                    <a href="{{ url('checkout') }}" class="floens-btn cart-page__checkout-btn">
                        <span>Procced to checkout</span>
                        <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
        @else
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="https://farmfreshshop.com/public/img/empty-cart1.gif">
                    <h1 class="mt-4">Your cart is currently empty.</h1>
                </div>
            </div>
        @endif
    </div><!-- /.container -->
</section><!-- /.cart-page -->
@endsection
@section('scripts')
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection