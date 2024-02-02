@extends('frontend.layouts.master')
@section('title')
<title>CARGOZ</title>
@endsection
@section('main-content')
<!-- Slider Area -->
@include('frontend.mainslider')
<!--/ End Slider Area -->
<!-- services start -->
<section class="services-two section-space-two">
    <div class="container-fluid">
        <div class="services-two__top">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-title @@extraClassName">

                        <!-- <h6 class="sec-title__tagline">Categories</h6> -->

                        <h3 class="sec-title__title">Our Trending Categories</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.services-two__top -->
    </div><!-- /.container -->
    <div class="container-fluid">
        <div class="services-two__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 0,
    "loop": true,
    "smartSpeed": 700,
    "nav": true,
    "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
    "dots": false,
    "autoplay": 600,
    "responsive":{
        "0":{
            "items": 1,
            "margin": 15
        },
        "576":{
            "items": 1,
            "margin": 15
        },
        "768":{
            "items": 2,
            "margin": 30
        },
        "992":{
            "items": 2,
            "margin": 30
        },
        "1200":{
            "items": 3,
            "margin": 30
        },
        "1400":{
            "items": 3,
            "margin": 30
        },
        "1600":{
            "items": 4,
            "margin": 30
        }
    }
}'>
        @php
        $category_lists=DB::table('categories')->where('status','active')->limit(3)->get();
        @endphp
        @if($category_lists)
            @foreach($category_lists as $cat)
                @if($cat->is_parent==1)
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('{{ url("") }}/public/assetstwo/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="{{ url('') }}/public/images/{{ $cat->photo  }}" alt="Tiling & concrete">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href="{{route('product-cat',$cat->slug)}}" class="service-card-two__link floens-btn">
                                <span>View Category</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-tile"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
            @endif
                <!-- /End Single Banner  -->
            @endforeach
        @endif
        </div><!-- /.services-two__carousel -->
    </div><!-- /.container-fluid -->
</section><!-- /.services-two section-space-two -->
<!-- services end -->
<!-- Start Small Banner  -->
<!-- End Small Banner -->
<section class="product-home">
    <div class="product-home__bg" style="background-image: url(assets/images/backgrounds/shop-bg-1.png);"></div>
    <!-- /.product-home__bg -->
    <div class="container-fluid">
        <div class="sec-title sec-title--center">
            <h3 class="sec-title__title">Trending Designs</h3>
        </div>
        <!-- /.sec-title -->


        <div class="row gutter-y-30">
            @if($product_lists)
            @foreach($product_lists as $key=>$product)
            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="product__item__image">
                        <img src="{{ url('public/images') }}/{{ $product->photo }}" alt="Natural Stone Tiles">
                    </div>
                    <!-- /.product-image -->
                    <div class="product__item__content">
                        <div class="floens-ratings product__item__ratings">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <!-- /.product-ratings -->
                        <h4 class="product__item__title"><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h4>
                        <!-- /.product-title -->
                        <div class="product__item__price">Starting From ${{ $product->price }}</div>
                        <!-- /.product-price -->
                        <a href="{{route('add-to-cart',$product->slug)}}" class="floens-btn product__item__link">
                            <span>Add to Cart</span>
                            <i class="icon-cart"></i>
                        </a>
                    </div>
                    <!-- /.product-content -->
                </div>
                <!-- /.product-item -->
            </div>
            @endforeach
             <!--/ End Single Tab -->
            @endif
            <!-- /.col-md-6 col-lg-4 -->

            <!-- /.col-md-6 col-lg-4 -->
            <!-- /.col-md-6 col-lg-4 -->
            <!-- /.col-md-6 col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- Start Product Area -->
<!-- End Product Area -->
{{-- @php
    $featured=DB::table('products')->where('is_featured',1)->where('status','active')->orderBy('id','DESC')->limit(1)->get();
@endphp --}}
<!-- Start Midium Banner  -->
<section class="midium-banner">
    <div class="container">
        <div class="row">
            @if($featured)
                @foreach($featured as $data)
                    <!-- Single Banner  -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-banner">
                            @php
                                $photo=explode(',',$data->photo);
                            @endphp
                            <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                            <div class="content">
                                <p>{{$data->cat_info['title']}}</p>
                                <h3>{{$data->title}} <br>Up to<span> {{$data->discount}}%</span></h3>
                                <a href="{{route('product-detail',$data->slug)}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- /End Single Banner  -->
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Hot Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    @foreach($product_lists as $product)
                        @if($product->condition=='hot')
                            <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$product->slug)}}">
                                    @php
                                        $photo=explode(',',$product->photo);
                                    // dd($photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    {{-- <span class="out-of-stock">Hot</span> --}}
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                <div class="product-price">
                                    <span class="old">${{number_format($product->price,2)}}</span>
                                    @php
                                    $after_discount=($product->price-($product->price*$product->discount)/100)
                                    @endphp
                                    <span>${{number_format($after_discount,2)}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Shop Home List  -->
<section class="shop-home-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-section-title">
                            <h1>Latest Items</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(6)->get();
                    @endphp
                    @foreach($product_lists as $product)
                        <div class="col-md-4">
                            <!-- Start Single List  -->
                            <div class="single-list">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        @php
                                            $photo=explode(',',$product->photo);
                                            // dd($photo);
                                        @endphp
                                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <a href="{{route('add-to-cart',$product->slug)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{$product->title}}</a></h4>
                                        <p class="price with-discount">${{number_format($product->discount,2)}}</p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Single List  -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Home List  -->
<section class="blog-one section-space-two">
    <div class="blog-one__bg" style="background-image: url(assets/images/backgrounds/blog-bg-1.jpg);"></div>
    <!-- /.blog-one__bg -->
    <div class="container">
        <div class="blog-one__top">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-lg-8">
                    <div class="sec-title @@extraClassName">

                        <h6 class="sec-title__tagline">news room</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">See Latest News <br> from the Blog Posts</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="blog-one__top__button">
                        <a href="blog-grid-right.html" class="floens-btn floens-btn--border">
                            <span>view all</span>
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.floens-btn floens-btn--border -->
                    </div><!-- /.blog-one__top__button -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.blog-one__top -->
        <div class="row gutter-y-30">
            @if($posts)
                @foreach($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="{{ url('public/images') }}/{{ $post->photo }}" alt="{{$post->title}}">
                        <a href="{{route('blog.detail',$post->slug)}}" class="blog-card__image__link"><span class="sr-only">{{$post->title}}</span>
                            <!-- /.sr-only --></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__date">
                        <span class="blog-card__date__day">{{$post->created_at->format('d')}}</span>
                        <span class="blog-card__date__month">{{$post->created_at->format('M')}}</span>
                    </div><!-- /.blog-card__date -->
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__text">Tiles company, also known as a tile manufacturer or distributor, specializes in the production.</p><!-- /.blog-card__text -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            @endforeach
        @endif
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one section-space-two -->
<!-- blog end -->
<!-- Start Shop Blog  -->
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<!-- End Shop Services Area -->


@endsection

@push('styles')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
        background: #000000;
        color:black;
        }

        #Gslider .carousel-inner{
        height: 550px;
        }
        #Gslider .carousel-inner img{
            width: 100% !important;
            opacity: .8;
        }

        #Gslider .carousel-inner .carousel-caption {
        bottom: 60%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 50px;
        font-weight: bold;
        line-height: 100%;
        color: #F7941D;
        }

        #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: black;
        margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
        bottom: 70px;
        }
    </style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>

        /*==================================================================
        [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function () {
            $filter.on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({filter: filterValue});
            });

        });

        // init Isotope
        $(window).on('load', function () {
            var $grid = $topeContainer.each(function () {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine : 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function(){
            $(this).on('click', function(){
                for(var i=0; i<isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
         function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>

@endpush
