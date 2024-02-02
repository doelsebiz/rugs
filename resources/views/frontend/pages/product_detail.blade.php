@extends('frontend.layouts.master')
@section('title')
<title>{{$product_detail->title}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='copyright' content=''>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
<meta name="description" content="{{$product_detail->summary}}">
<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{$product_detail->title}}">
<meta property="og:image" content="{{$product_detail->photo}}">
<meta property="og:description" content="{{$product_detail->description}}">
@endsection
@section('title','E-SHOP || PRODUCT DETAIL')
@section('main-content')
<section class="product-details section-space" style="padding-top: 150px;">
	<div class="container">
	    <!-- /.product-details -->
	    <div class="row gutter-y-50">
	        <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
	            <div class="product-details__img">
	                <div class="swiper product-details__gallery-top">
	                    <div class="swiper-wrapper">
	                    	@foreach(DB::table('product_images')->where('product_id' , $product_detail->id)->get() as $r)
	                        <div class="swiper-slide">
	                            <img src="{{ url('public/images') }}/{{ $r->image }}" alt="{{$product_detail->title}}" class="product-details__gallery-top__img">
	                        </div>
	                        @endforeach
	                    </div>
	                </div>
	                <div class="swiper product-details__gallery-thumb">
	                    <div class="swiper-wrapper">
	                    	@foreach(DB::table('product_images')->where('product_id' , $product_detail->id)->get() as $r)
	                        <div class="product-details__gallery-thumb-slide swiper-slide">
	                            <img src="{{ url('public/images') }}/{{ $r->image }}" alt="{{$product_detail->title}}" class="product-details__gallery-thumb__img">
	                        </div>
	                        @endforeach
	                    </div>
	                </div>
	            </div>
	        </div><!-- /.column -->
	        <div class="col-lg-6 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
	            <div class="product-details__content">
	                <div class="product-details__top">
	                    <div class="product-details__top__left">
	                        <h3 class="product-details__name">{{$product_detail->title}}</h3><!-- /.product-title -->
	                        <h4 class="product-details__price">${{$product_detail->price}}</h4><!-- /.product-price -->
	                    </div><!-- /.product-details__price -->
	                    @if($product_detail->video)
	                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="product-details__video video-button video-popup">
	                        <span class="icon-play"></span>
	                        <i class="video-button__ripple"></i>
	                    </a><!-- /.video-button -->
	                    @endif
	                </div>
	                <div class="product-details__review">
	                    <div class="floens-ratings @@extraClassName">
	                        <span class="icon-star"></span>
	                        <span class="icon-star"></span>
	                        <span class="icon-star"></span>
	                        <span class="icon-star"></span>
	                        <span class="icon-star"></span>
	                    </div><!-- /.product-ratings -->
	                    <a href="product-details.html">(3 customer reviews)</a>
	                </div><!-- /.review-ratings -->
	                <div class="product-details__excerpt">
	                    <p class="product-details__excerpt__text1">
	                        {{$product_detail->summary}}
	                    </p>
	                </div><!-- /.excerp-text -->
	                @if($product_detail->color)
	                <div class="product-details__color">
	                    <h3 class="product-details__content__title">Color</h3>
	                    <div class="product-details__size__box">
	                    	@foreach(explode(',' , $product_detail->color) as $r)
	                        <button type="button" class="product-details__size__btn"><span>{{ $r }}</span></button>
	                        @endforeach
	                    </div><!-- /.product-details__size__box -->
	                </div><!-- /.product-details__color -->
	                @endif
	                @if($product_detail->size)
	                <div class="product-details__size mt-4">
	                    <h3 class="product-details__content__title">Size</h3>
	                    <div class="product-details__size__box">
	                    	@foreach(explode(',' , $product_detail->size) as $r)
	                        <button type="button" class="product-details__size__btn"><span>{{ $r }}</span></button>
	                        @endforeach
	                    </div><!-- /.product-details__size__box -->
	                </div><!-- /.product-details__size -->
	                @endif
	                <div class="product-details__buttons">
	                    <a href="cart.html" class="product-details__btn-cart floens-btn">
	                        <span>Add to Cart</span>
	                        <i class="icon-cart"></i>
	                    </a>
	                </div><!-- /.qty-btn -->
	            </div>
	        </div>
	    </div>
	    <!-- /.product-details -->
	</div>
	<div class="product-details__description-wrapper">
	    <div class="container">
	        <!-- /.product-description -->
	        <div class="product-details__description">
	            <h3 class="product-details__description__title">product Description</h3>
	            <div class="product-details__text__box wow fadeInUp" data-wow-delay="300ms">
	                {!! ($product_detail->description) !!}
	            </div><!-- /.product-details__text__box -->
	        </div>
	        <!-- /.product-description -->
	    </div><!-- /.container -->
	</div><!-- /.product-details__description__wrapper -->	
</section>
@endsection
@push('styles')
	<style>
		/* Rating */
		.rating_box {
		display: inline-flex;
		}

		.star-rating {
		font-size: 0;
		padding-left: 10px;
		padding-right: 10px;
		}

		.star-rating__wrap {
		display: inline-block;
		font-size: 1rem;
		}

		.star-rating__wrap:after {
		content: "";
		display: table;
		clear: both;
		}

		.star-rating__ico {
		float: right;
		padding-left: 2px;
		cursor: pointer;
		color: #F7941D;
		font-size: 16px;
		margin-top: 5px;
		}

		.star-rating__ico:last-child {
		padding-left: 0;
		}

		.star-rating__input {
		display: none;
		}

		.star-rating__ico:hover:before,
		.star-rating__ico:hover ~ .star-rating__ico:before,
		.star-rating__input:checked ~ .star-rating__ico:before {
		content: "\F005";
		}

	</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=$('#quantity').val();
            var pro_id=$(this).data('id');
            // alert(quantity);
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							document.location.href=document.location.href;
						});
                    }
                }
            })
        });
    </script> --}}

@endpush