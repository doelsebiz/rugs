@extends('frontend.layouts.master')
@section('title')
<title>{{$product_detail->title}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='copyright' content=''>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
<meta name="description" content="{!! $product_detail->summary !!}">
<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{$product_detail->title}}">
<meta property="og:image" content="{{$product_detail->photo}}">
<meta property="og:description" content="{!! $product_detail->summary !!}">
@endsection
@section('main-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>{{ $product_detail->title }}</h2>
                        <span> <a href="{{ url('') }}">Home</a> - {{ $product_detail->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-details section-space" style="padding-top: 25px;">
	<div class="container-fluid">
		<div style="position: relative;background-color: #f7f7f8;border-radius: 10px;padding: 20px;">
			<div class="row gutter-y-50">
		        <div class="col-lg-6 col-xl-6 wow fadeInLeft" data-wow-delay="200ms">
		            <div class="product-details__img">
		                <div class="swiper product-details__gallery-top">
		                    <div class="swiper-wrapper">
		                    	@foreach(DB::table('product_images')->where('product_id' , $product_detail->id)->get() as $r)
		                        <a href="{{ url('public/images') }}/{{ $r->image }}" data-fancybox="gallery" data-title="{{ $product_detail->title }}" class="swiper-slide">
		                            <img src="{{ url('public/images') }}/{{ $r->image }}" alt="{{$product_detail->title}}" class="product-details__gallery-top__img">
		                        </a>
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
		                        <h3 class="product-details__name">{{ $product_detail->title }}</h3><!-- /.product-title -->
		                        @if($product_detail->price != 0)
		                        <h4 class="product-details__price">Starting From ${{ DB::table('product_colors')->where('product_id' , $product_detail->id)->first()->price }}</h4><!-- /.product-price -->
		                        @endif
		                    </div><!-- /.product-details__price -->
		                </div>
		                <div class="product-details__excerpt">
		                    <p class="product-details__excerpt__text1">
		                        {{$product_detail->summary}}
		                    </p>
		                </div><!-- /.excerp-text -->
		                @if(DB::table('product_colors')->where('product_id' , $product_detail->id)->count() > 0)
		                <div class="product-details__color">
		                    <h3 class="product-details__content__title">Color</h3>
		                    <div class="product-details__size__box">
		                    	@foreach(DB::table('product_colors')->where('product_id' , $product_detail->id)->groupby('colors')->get() as $r)
		                        <button onclick="selectcolor('{{ $r->colors }}')" type="button" class="product-details__size__btn allcolorbutton color{{ $r->colors }}">{{ $r->colors }}</button>
		                        @endforeach
		                    </div>
		                    @if($product_detail->cat_id != 6)
		                    <h3 class="product-details__content__title">Size</h3>
		                    <div class="product-details__size__box">
		                    	@foreach(DB::table('product_colors')->where('product_id' , $product_detail->id)->groupby('sizes')->get() as $r)
		                        <button onclick="selectsize('{{ $r->id }}' , '{{ $r->sizes }}')" type="button" class="product-details__size__btn allsizebutton size{{ $r->id }}">{{ $r->sizes }}</button>
		                        @endforeach
		                    </div>
		                    @endif
		                </div>
		                @endif
		                @if($product_detail->cat_id == 6)
		                <button type="button" class="floens-btn sidebar-btn__toggler">
                            <span>Get Enquiry</span>
                            <i class="icon-right-arrow"></i>
                        </button>
		                @else
		                <form method="POST" action="{{ url('add-to-cart') }}">
		                @csrf
		                <input type="hidden" name="price" id="priceforcart">
		                <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
		                <input type="hidden"  name="color" id="colorforcart">
		                <input type="hidden"  name="size" id="sizeforcart">
		                <div class="product-details__buttons">
		                    <button disabled class="product-details__btn-cart floens-btn">
		                        <span>Add to Cart</span>
		                        <i class="icon-cart"></i>
		                    </button>
		                </div><!-- /.qty-btn -->
		                </form>
		                @endif
		            </div>
		        </div>
		        <div class="col-md-12">
		        	<div class="cr-paking-delivery">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="true">Description</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                    aria-selected="false">Information</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                    type="button" role="tab" aria-controls="review"
                                    aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        {!! ($product_detail->description) !!}
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                                <div class="cr-tab-content">
                                    <div class="cr-description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                            sapiente
                                            doloribus debitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                            perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                            ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                            laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li><label>Brand <span>:</span></label>ESTA BETTERU CO</li>
                                            <li><label>Flavour <span>:</span></label>Super Saver Pack</li>
                                            <li><label>Diet Type <span>:</span></label>Vegetarian</li>
                                            <li><label>Weight <span>:</span></label>200 Grams</li>
                                            <li><label>Speciality <span>:</span></label>Gluten Free, Sugar Free</li>
                                            <li><label>Info <span>:</span></label>Egg Free, Allergen-Free</li>
                                            <li><label>Items <span>:</span></label>1</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="cr-tab-content-from">
                                	@foreach(DB::table('product_reviews')->where('product_id' , $product_detail->id)->get() as $r)
                                    <div class="post">
                                        <div class="content">
                                            <div class="details">
                                                <span class="date">{{ Cmf::date_format($r->created_at) }}</span>
                                                <span class="name">{{ $r->name }}</span>
                                            </div>
                                            <div class="cr-t-review-rating">
                                            	@if($r->rate == 1)
                                                <i class="fa fa-star activestar"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                @endif
                                                @if($r->rate == 2)
                                                <i class="fa fa-star activestar"></i>
                                                <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star"></i>
							                    <i class="fa fa-star"></i>
							                    <i class="fa fa-star"></i>
                                                @endif
                                                @if($r->rate == 3)
                                                <i class="fa fa-star activestar"></i>
                                                <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star"></i>
							                    <i class="fa fa-star"></i>
                                                @endif
                                                @if($r->rate == 4)
                                                <i class="fa fa-star activestar"></i>
                                                <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star"></i>
                                                @endif
                                                @if($r->rate == 5)
                                                <i class="fa fa-star activestar"></i>
                                                <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star activestar"></i>
							                    <i class="fa fa-star activestar"></i>
                                                @endif
							                    
                                            </div>
                                        </div>
                                        <p>{{$r->review}}</p>
                                    </div>
                                    @endforeach
                                    <h4 class="heading">Add a Review</h4>
                                    <form method="POST" action="{{ url('addproductreview') }}">
                                    	@csrf
                                    	<input type="hidden" value="{{ $product_detail->id }}" name="product_id">
                                        <div class="cr-ratting-star">
                                            <span>Your rating :</span>
                                            <div class="cr-t-review-rating">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                                <i class="ri-star-s-line"></i>
                                            </div>
                                            <div class="rating">
											  <input type="radio" id="star1" name="rating" value="1">
											  <label for="star1"><i class="fa fa-star"></i></label>
											  <input type="radio" id="star2" name="rating" value="2">
											  <label for="star2"><i class="fa fa-star"></i></label>
											  <input type="radio" id="star3" name="rating" value="3">
											  <label for="star3"><i class="fa fa-star"></i></label>
											  <input type="radio" id="star4" name="rating" value="4">
											  <label for="star4"><i class="fa fa-star"></i></label>
											  <input type="radio" id="star5" name="rating" value="5">
											  <label for="star5"><i class="fa fa-star"></i></label>
											</div>
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="name" placeholder="Name" type="text">
                                        </div>
                                        <div class="cr-ratting-input">
                                            <input name="email" placeholder="Email*" type="email" required="">
                                        </div>
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="commemt" placeholder="Enter Your Comment"></textarea>
                                            <button class="cr-button" type="submit" value="Submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>	
		        </div>
		    </div>


		</div>
	    <!-- /.product-details -->
	    
	    <!-- /.product-details -->
	</div>
	
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
@section('sidebar')
<aside class="sidebar-one">
    <div class="sidebar-one__overlay sidebar-btn__toggler"></div>
    <!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
        <!-- /.sidebar-one__logo -->
        <div class="sidebar-one__about sidebar-one__item">
            <div style="padding-right: 20px;padding-bottom: 20px;">
                <form class="contact-one__form contact-form-validated form-one wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="200ms" method="POST" action="{{ url('enquery') }}" novalidate="novalidate" style="margin-left: 0px;">
                    @csrf
                    <div style="color: green;" class="result"></div>
                    <input type="hidden" value="{{ $product_detail->id }}" name="product_id">
                    <div class="contact-one__form__top">
                        <h2 class="contact-one__form__title">Inquire Now</h2><!-- /.contact-one__form__title -->
                    </div><!-- /.contact-one__form__top -->
                    <div class="form-one__group form-one__group--grid">
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="name" placeholder="Your name">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--full">
                            <input type="email" name="email" placeholder="your email">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--full">
                            <input type="text" name="phonenumber" placeholder="your Contact Number">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--mesgae form-one__control--full">
                            <textarea name="message" placeholder="Write message"></textarea><!-- /# -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="floens-btn">
                                <span>Get Enquiry</span>
                                <i class="icon-right-arrow"></i>
                            </button>
                        </div><!-- /.form-one__control -->
                    </div><!-- /.form-one__group -->
                </form>
            </div>
        </div>
        <!-- /.sidebar-one__about -->
        <!-- /.sidebar-one__info -->
        <!-- /sidebar-one__social -->
        <!-- /.sidebar-one__form -->
    </div>
    <!-- /.sidebar__content -->
</aside>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
	@if(session('cartadded'))
	$( document ).ready(function() {
	    swal('success','Product Added in Cart','success').then(function(){
			// document.location.href=document.location.href;
		});
	});
	    
	@endif
	function getstock() {
		var product_id = '{{ $product_detail->id }}';
		var color = $('#colorforcart').val();
		var size = $('#sizeforcart').val();
		$.ajax({
            type: "POST",
            url: "{{ url('getstock') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                color:color,
                size:size,
                product_id:product_id
            },
            success: function(res) {
            	$('.product-details__price').html('Price : $'+res.price);
            	$('#priceforcart').val(res.price);
            	if(res.stock > 0)
            	{
            		$('.product-details__buttons').html('<button class="product-details__btn-cart floens-btn"> <span>Add to Cart</span> <i class="icon-cart"></i> </button>')
            	}else{
            		$('.product-details__buttons').html('<span style="color:red;">Not Available in Stock</span>');
            	}
            },
            error: function(error) {
                
            }
        });
	}
	function selectsize(id,size) {
		$('.allsizebutton').removeClass('activecolor');
		$('.size'+id).addClass('activecolor');
		$('#sizeforcart').val(size);
		getstock();
	}
	function selectcolor(id) {
		var product_id = '{{ $product_detail->id }}';
		$.ajax({
            type: "POST",
            url: "{{ url('selectcolor') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id:id,
                product_id:product_id
            },
            success: function(res) {
            	$('.product-details__img').html(res);
            	$('#colorforcart').val(id);
               $('.allcolorbutton').removeClass('activecolor');
			   $('.color'+id).addClass('activecolor');
            },
            error: function(error) {
                
            }
        });
	}
</script>
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