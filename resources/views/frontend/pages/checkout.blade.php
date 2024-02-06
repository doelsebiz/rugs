@extends('frontend.layouts.master')

@section('title')
<title>Checkout</title>
@endsection
@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Checkout</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Checkout</span></li>
        </ul>
    </div>
</section>
<section class="checkout-page section-space">
    <div class="container">
        <form method="POST" action="{{route('cart.order')}}" class="checkout-page__form row gutter-y-17">
             @csrf
        <div class="row gutter-y-30">
            <div class="col-xl-8 col-lg-7">
                <div class="checkout-page__billing-address">
                    <h2 class="checkout-page__billing-address__title checkout-page__title">Billing Details</h2>
                    
                       
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="full-name">your Name *</label>
                                <input type="text" class="form-control" name="name" id="full-name" value="" required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control" name="email" id="email" value="" required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="phone">Phone *</label>
                                <input type="tel" name="phone" id="phone"  required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="company-name">Company Name (Optional)</label>
                                <input type="text" class="form-control" name="companyname" id="company-name" value="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label>Country / Region *</label>
                                <select class="form-control" name="country" aria-label="Default select example">
                                    <option selected="">Select a country</option>
                                    @foreach(DB::table('country')->get() as $r)
                                    <option value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="town-city">State *</label>
                                <input type="text" name="state" id="town-city" value="" required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="town-city">Town / City *</label>
                                <input type="text" name="city" id="town-city" value="" required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box checkout-page__input-box--address">
                                <label for="address">Street Address *</label>
                                <input type="text" name="address1" id="address"  required="">
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box">
                                <label for="zip-code">ZIP Code *</label>
                                <input name="post_code" id="zipcode" type="text" pattern="[0-9]*" required>
                            </div>
                        </div>
                        
                        <div class="col-xl-12">
                            <div class="checkout-page__input-box checkout-page__input-box--message">
                                <label for="order-notes">Order Notes (Optional)</label>
                                <textarea name="ordernotes" id="order-notes" cols="30" rows="10" placeholder="note about your order . . ."></textarea>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="checkout-page__your-order">
                    <h2 class="checkout-page__your-order__title checkout-page__title">Your order</h2>
                    <table class="checkout-page__order-table">
                        <thead class="checkout-page__order-table__heade">
                            <tr>
                                <th>Product</th>
                                <th class="right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr>
                                <td class="pro__title">{{ DB::table('products')->where('id' , $details['product_id'])->first()->title }}</td>
                                <td class="pro__price">${{ DB::table('products')->where('id' , $details['product_id'])->first()->price*$details['quantity'] }}</td>
                            </tr>
                            @endforeach
                        @endif
                            <tr>
                                <td class="pro__sub-title">Subtotal</td>
                                <td class="pro__sub-price">${{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="checkout-page__radio-box checkout-page__radio-box--right">
                                        <div class="checkout-page__input-item custom-radio">
                                            <input checked type="radio" value="cod" id="cash" name="payment_method" class="custom-radio__input">
                                            <label for="cash" class="custom-radio__title">Cash On Delivery</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="checkout-page__order-text">Your personal data will be used to process your order, support your experience throughout this website.</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="checkout-page__order-btn floens-btn" type="submit"><span>Complete Order</span>
                                        <i class="icon-right-arrow"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
    </div>
</section><!-- /.checkout-page -->            
@endsection