@extends('frontend.layouts.master')
@section('title')
<title>E-SHOP || HOME PAGE</title>
@endsection
@section('main-content')
<!-- Slider Area -->
@include('frontend.mainslider')
<!--/ End Slider Area -->
<!-- services start -->
<section class="services-two section-space-two">
    <div class="container">
        <div class="services-two__top">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sec-title @@extraClassName">

                        <h6 class="sec-title__tagline">services</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">We Provides Best florring Services for you</h3><!-- /.sec-title__title -->
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
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="assets/images/services/service-2-1.jpg" alt="Tiling & concrete">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href='service-d-tiling-concrete.html'>Tiling & concrete</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href='service-d-tiling-concrete.html' class="service-card-two__link floens-btn">
                                <span>service details</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-tile"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="assets/images/services/service-2-2.jpg" alt="Industrial Flooring">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href='service-d-industrial-flooring.html'>Industrial Flooring</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href='service-d-industrial-flooring.html' class="service-card-two__link floens-btn">
                                <span>service details</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-parquet"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="assets/images/services/service-2-3.jpg" alt="Vinyl Plank">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href='service-d-vinyl-plank.html'>Vinyl Plank</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href='service-d-vinyl-plank.html' class="service-card-two__link floens-btn">
                                <span>service details</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-tiles"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="assets/images/services/service-2-4.jpg" alt="Carpets & rugs">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href='service-d-carpets-rugs.html'>Carpets & rugs</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href='service-d-carpets-rugs.html' class="service-card-two__link floens-btn">
                                <span>service details</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-carpet"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="assets/images/services/service-2-5.jpg" alt="Oak Flooring">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href='service-d-oak-flooring.html'>Oak Flooring</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href='service-d-oak-flooring.html' class="service-card-two__link floens-btn">
                                <span>service details</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-wood-board"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
            <div class="item">
                <div class="service-card-two">
                    <div class="service-card-two__bg" style="background-image: url('assets/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="assets/images/services/service-2-6.jpg" alt="Vein Patterns">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href='service-d-vein-patterns.html'>Vein Patterns</a></h3><!-- /.service-card-two__title -->
                        <div class="service-card-two__bottom">
                            <a href='service-d-vein-patterns.html' class="service-card-two__link floens-btn">
                                <span>service details</span>
                                <i class="icon-right-arrow"></i>
                            </a>
                            <span class="service-card-two__icon icon-stones"></span>
                        </div><!-- /.service-card-two__bottom -->
                    </div><!-- /.service-card-two__content -->
                </div><!-- /.service-card-two -->
            </div><!-- /.item -->
        </div><!-- /.services-two__carousel -->
    </div><!-- /.container-fluid -->
</section><!-- /.services-two section-space-two -->
<!-- services end -->
<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            @php
            $category_lists=DB::table('categories')->where('status','active')->limit(3)->get();
            @endphp
            @if($category_lists)
                @foreach($category_lists as $cat)
                    @if($cat->is_parent==1)
                        <!-- Single Banner  -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-banner">
                                @if($cat->photo)
                                    <img src="{{$cat->photo}}" alt="{{$cat->photo}}">
                                @else
                                    <img src="https://via.placeholder.com/600x370" alt="#">
                                @endif
                                <div class="content">
                                    <h3>{{$cat->title}}</h3>
                                        <a href="{{route('product-cat',$cat->slug)}}">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- /End Single Banner  -->
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Small Banner -->
<section class="product-home">
    <div class="product-home__bg" style="background-image: url(assets/images/backgrounds/shop-bg-1.png);"></div>
    <!-- /.product-home__bg -->
    <div class="container">
        <div class="sec-title sec-title--center">

            <h6 class="sec-title__tagline">our shop</h6>
            <!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Let’s Explore Latest <br> Product in Shop</h3>
            <!-- /.sec-title__title -->
        </div>
        <!-- /.sec-title -->


        <div class="row gutter-y-30">
            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="product__item__image">
                        <img src="assets/images/products/product-1-1.jpg" alt="Natural Stone Tiles">
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
                        <h4 class="product__item__title"><a href="shop-details.html">Natural Stone Tiles</a></h4>
                        <!-- /.product-title -->
                        <div class="product__item__price">$82.00</div>
                        <!-- /.product-price -->
                        <a href="cart.html" class="floens-btn product__item__link">
                            <span>Add to Cart</span>
                            <i class="icon-cart"></i>
                        </a>
                    </div>
                    <!-- /.product-content -->
                </div>
                <!-- /.product-item -->
            </div>
            <!-- /.col-md-6 col-lg-4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="product__item__image">
                        <img src="assets/images/products/product-1-2.jpg" alt="Mosaic Tiles">
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
                        <h4 class="product__item__title"><a href="shop-details.html">Mosaic Tiles</a></h4>
                        <!-- /.product-title -->
                        <div class="product__item__price">$78.00</div>
                        <!-- /.product-price -->
                        <a href="cart.html" class="floens-btn product__item__link">
                            <span>Add to Cart</span>
                            <i class="icon-cart"></i>
                        </a>
                    </div>
                    <!-- /.product-content -->
                </div>
                <!-- /.product-item -->
            </div>
            <!-- /.col-md-6 col-lg-4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                    <div class="product__item__image">
                        <img src="assets/images/products/product-1-3.jpg" alt="Terracotta Tiles">
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
                        <h4 class="product__item__title"><a href="shop-details.html">Terracotta Tiles</a></h4>
                        <!-- /.product-title -->
                        <div class="product__item__price">$22.00</div>
                        <!-- /.product-price -->
                        <a href="cart.html" class="floens-btn product__item__link">
                            <span>Add to Cart</span>
                            <i class="icon-cart"></i>
                        </a>
                    </div>
                    <!-- /.product-content -->
                </div>
                <!-- /.product-item -->
            </div>
            <!-- /.col-md-6 col-lg-4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 ">
                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="product__item__image">
                        <img src="assets/images/products/product-1-9.jpg" alt="Encaustic Tiless">
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
                        <h4 class="product__item__title"><a href="shop-details.html">Encaustic Tiless</a></h4>
                        <!-- /.product-title -->
                        <div class="product__item__price">$49.00</div>
                        <!-- /.product-price -->
                        <a href="cart.html" class="floens-btn product__item__link">
                            <span>Add to Cart</span>
                            <i class="icon-cart"></i>
                        </a>
                    </div>
                    <!-- /.product-content -->
                </div>
                <!-- /.product-item -->
            </div>
            <!-- /.col-md-6 col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- Start Product Area -->
<div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs filter-tope-group" id="myTab" role="tablist">
                                @php
                                    $categories=DB::table('categories')->where('status','active')->where('is_parent',1)->get();
                                    // dd($categories);
                                @endphp
                                @if($categories)
                                <button class="btn" style="background:black"data-filter="*">
                                    All Products
                                </button>
                                    @foreach($categories as $key=>$cat)

                                    <button class="btn" style="background:none;color:black;"data-filter=".{{$cat->id}}">
                                        {{$cat->title}}
                                    </button>
                                    @endforeach
                                @endif
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content isotope-grid" id="myTabContent">
                             <!-- Start Single Tab -->
                            @if($product_lists)
                                @foreach($product_lists as $key=>$product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="{{route('product-detail',$product->slug)}}">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                @if($product->stock<=0)
                                                    <span class="out-of-stock">Sale out</span>
                                                @elseif($product->condition=='new')
                                                    <span class="new">New</span
                                                @elseif($product->condition=='hot')
                                                    <span class="hot">Hot</span>
                                                @else
                                                    <span class="price-dec">{{$product->discount}}% Off</span>
                                                @endif


                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                            <div class="product-price">
                                                @php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                @endphp
                                                <span>${{number_format($after_discount,2)}}</span>
                                                <del style="padding-left:4%;">${{number_format($product->price,2)}}</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                             <!--/ End Single Tab -->
                            @endif

                        <!--/ End Single Tab -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
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

<!-- Start Shop Blog  -->
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if($posts)
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Blog  -->
                        <div class="shop-single-blog">
                            <img src="{{$post->photo}}" alt="{{$post->photo}}">
                            <div class="content">
                                <p class="date">{{$post->created_at->format('d M , Y. D')}}</p>
                                <a href="{{route('blog.detail',$post->slug)}}" class="title">{{$post->title}}</a>
                                <a href="{{route('blog.detail',$post->slug)}}" class="more-btn">Continue Reading</a>
                            </div>
                        </div>
                        <!-- End Single Blog  -->
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->

@include('frontend.layouts.newsletter')

<!-- Modal -->
@if($product_lists)
    @foreach($product_lists as $key=>$product)
        <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Product Slider -->
                                        <div class="product-gallery">
                                            <div class="quickview-slider-active">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                @foreach($photo as $data)
                                                    <div class="single-slider">
                                                        <img src="{{$data}}" alt="{{$data}}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    <!-- End Product slider -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2>{{$product->title}}</h2>
                                        <div class="quickview-ratting-review">
                                            <div class="quickview-ratting-wrap">
                                                <div class="quickview-ratting">
                                                    {{-- <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="yellow fa fa-star"></i>
                                                    <i class="fa fa-star"></i> --}}
                                                    @php
                                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                    @endphp
                                                    @for($i=1; $i<=5; $i++)
                                                        @if($rate>=$i)
                                                            <i class="yellow fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <a href="#"> ({{$rate_count}} customer review)</a>
                                            </div>
                                            <div class="quickview-stock">
                                                @if($product->stock >0)
                                                <span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
                                                @else
                                                <span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
                                                @endif
                                            </div>
                                        </div>
                                        @php
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        @endphp
                                        <h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>    ${{number_format($after_discount,2)}}  </h3>
                                        <div class="quickview-peragraph">
                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                        </div>
                                        @if($product->size)
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title">Size</h5>
                                                        <select>
                                                            @php
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                            @endphp
                                                            @foreach($sizes as $size)
                                                                <option>{{$size}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{route('single-add-to-cart')}}" method="POST" class="mt-4">
                                            @csrf
                                            <div class="quantity">
                                                <!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
													<input type="hidden" name="slug" value="{{$product->slug}}">
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </div>
                                            <div class="add-to-cart">
                                                <button type="submit" class="btn">Add to cart</button>
                                                <a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
                                            </div>
                                        </form>
                                        <div class="default-social">
                                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endif
<!-- Modal end -->
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
