@extends('frontend.layouts.master')

@section('title')
<title>Pay Via Credit/Debit Card</title>
@endsection
@section('main-content')
<style type="text/css">
    .hide{
        display: none;
    }
</style>
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Pay Via Credit/Debit Card</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Pay Via Credit/Debit Card</span></li>
        </ul>
    </div>
</section>
<section class="checkout-page section-space">
    <div class="container">
        <form role="form" action="{{ route('stripe.post') }}"
                            method="post"
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="pk_test_51KgNzLGYKnD3UcVFc6pbI8vf14Xv75FNbsbpnFDyytIc02YpzGi5doArgfuakgFh4D2EQWLzI8vglHcor41wVlX500cA31EGhm"
                            id="payment-form">
         @csrf
        <div class="row gutter-y-30">
            <div class="col-xl-8 col-lg-7">
                <div class="checkout-page__billing-address">
                    <h2 class="checkout-page__billing-address__title checkout-page__title">Billing Details</h2>
                    
                       
                        <div class="col-lg-12">
                            <div class='form-row row'>
                               <div class='col-md-12 form-group required'>
                                  <label class='control-label'>Name on Card</label> <input
                                     class='form-control' size='4' type='text'>
                               </div>
                            </div>
                            <input type="hidden" value="{{ $data->id }}" name="orderid">
                            <div class='form-row row'>
                               <div class='col-md-12 form-group required'>
                                  <label class='control-label'>Card Number</label> <input
                                     autocomplete='off' id="cc" class='form-control card-number' size='20'
                                     type='text'>
                               </div>
                            </div>
                            <div class='form-row row'>
                               <div class='col-xs-12 col-md-4 form-group cvc required'>
                                  <label class='control-label'>CVC</label> <input id="cvv" autocomplete='off'
                                     class='form-control card-cvc' placeholder='ex. 311' maxlength="4"
                                     type='text'>
                               </div>
                               <div class='col-xs-12 col-md-4 form-group expiration required'>
                                  <label class='control-label'>Expiration Month</label> <input
                                     class='form-control card-expiry-month' maxlength="2" id="month" placeholder='MM' size='2'
                                     type='text'>
                               </div>
                               <div class='col-xs-12 col-md-4 form-group expiration required'>
                                  <label class='control-label'>Expiration Year</label> <input
                                     class='form-control card-expiry-year' maxlength="4" id="year" placeholder='YYYY' size='4'
                                     type='text'>
                               </div>
                            </div>
                            <div class='form-row row'>
                               <div class='col-md-12 error form-group hide'>
                                  <div class='alert-danger alert'>Please correct the errors and try
                                     again.
                                  </div>
                               </div>
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
                                    <button class="checkout-page__order-btn floens-btn" type="submit"><span>Continue to Payement</span>
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
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ asset('public/assetstwo/payement.js') }}"></script>      
@endsection