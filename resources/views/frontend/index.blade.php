@extends('frontend.layouts.master')
@section('title')
<title>Jagkrishome: Discover Premium Rugs & Carpets Online for Elegant Home Decor</title>
<meta name="description" content="Explore the finest selection of rugs and carpets at Jagkrishome, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home." />
<meta name="DC.Title" content="Jagkrishome: Discover Premium Rugs & Carpets Online for Elegant Home Decor">
<meta name="rating" content="general">
<meta name="description" content="Explore the finest selection of rugs and carpets at Jagkrishome, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home.">
<meta property="og:type" content="website">
@php
    $settings= DB::table('settings')->first();
@endphp 
<meta property="og:image" content="{{ url('public/images') }}/{{$settings->logo}}">
<meta property="og:title" content="Jagkrishome: Discover Premium Rugs & Carpets Online for Elegant Home Decor">
<meta property="og:description" content="Explore the finest selection of rugs and carpets at Jagkrishome, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home.">
<meta property="og:site_name" content="Jagkrishome">
<meta property="og:url" content="{{ URL::current() }}">
<link rel="canonical" href="{{ URL::current() }}">
<meta property="og:locale" content="it_IT">
<meta name="keywords" content="Rugs, Carpets, Area Rugs, Persian Rugs, Oriental Rugs, Handmade Rugs, Modern Rugs, Traditional Rugs, Wool Rugs, Silk Rugs, Vintage Rugs, Designer Carpets, Contemporary Rugs, Rug Store, Carpet Shop, Home Decor, Interior Design, Floor Coverings, Rug Patterns, Rug Sizes">
@endsection
@section('main-content')
<!-- Slider Area -->
@include('frontend.mainslider')
<!--/ End Slider Area -->
<!-- services start -->
<section class="section-space mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="cr-product-banner-image">
                    <img src="data:image/png;base64,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" alt="product-banner">
                    <div class="cr-product-banner-contain">
                        <h5>Healthy <br> Bakery Products</h5>
                        <p><span class="percent">30%</span> Off <span class="text">on first order</span>
                        </p>
                        <div class="cr-product-banner-buttons">
                            <a href="shop-left-sidebar.html" class="cr-button">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cr-product-banner-image">
                    <img src="data:image/png;base64,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" alt="product-banner">
                    <div class="cr-product-banner-contain">
                        <h5>Healthy <br> Bakery Products</h5>
                        <p><span class="percent">30%</span> Off <span class="text">on first order</span>
                        </p>
                        <div class="cr-product-banner-buttons">
                            <a href="shop-left-sidebar.html" class="cr-button">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cr-product-banner-image">
                    <img src="data:image/png;base64,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" alt="product-banner">
                    <div class="cr-product-banner-contain">
                        <h5>Healthy <br> Bakery Products</h5>
                        <p><span class="percent">30%</span> Off <span class="text">on first order</span>
                        </p>
                        <div class="cr-product-banner-buttons">
                            <a href="shop-left-sidebar.html" class="cr-button">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-two section-space mt-4">
    <!-- /.about-two__bg -->
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-6 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="about-two__image">
                    <div class="about-two__image__inner">
                        <img src="{{ url('public/images/aboutimageone.jpg') }}" alt="about" class="about-two__image__one">
                        <div class="about-two__image__inner__inner">
                            <img src="{{ url('public/images/aboutimagetwo.jpg') }}" alt="about" class="about-two__image__two">
                        </div><!-- /.about-two__image__inner__inner -->
                        <div class="experience about-two__experience">
                            <div class="experience__inner">
                                <h3 class="experience__year">25</h3>
                                <!-- /.experience__year -->
                                <p class="experience__text">years of <br> experience</p>
                                <!-- /.experience__text -->
                            </div><!-- /.experience__inner -->
                        </div><!-- /.experience -->
                    </div><!-- /.about-two__image__inner -->
                </div><!-- /.about-two__image-grid -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-two__content">
                    <div class="sec-title sec-title--border">

                        <h6 class="sec-title__tagline">about us</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Best Carpets &amp; <br> Rugs Company</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                    <div class="about-two__content__text wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="about-two__text-title">We’re providing the best quality Carpets &amp; Rugs in town.</h5>
                        <!-- /.about-two__text-title -->
                        <p class="about-two__text">Discover unparalleled quality in Carpets & Rugs with us. We pride ourselves on offering the finest selection in town, ensuring your space exudes warmth and elegance. Experience our commitment to excellence firsthand.</p><!-- /.about-two__text -->
                    </div><!-- /.about-two__content__text -->
                    <div class="about-two__list wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="about-two__list__left">
                            <div class="about-two__list__item">
                                <span class="icon-tick"></span>
                                High-quality range
                            </div>
                            <div class="about-two__list__item">
                                <span class="icon-tick"></span>
                                Exquisite designs
                            </div>
                        </div><!-- /.about-two__list__left -->
                        <div class="about-two__list__right">
                            <div class="about-two__list__item">
                                <span class="icon-tick"></span>
                                Personalized service
                            </div>
                            <div class="about-two__list__item">
                                <span class="icon-tick"></span>
                                Timeless elegance
                            </div>
                        </div><!-- /.about-two__list__right -->
                    </div><!-- /.about-two__list -->
                    <div class="about-two__button wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <a href="{{ url('about-us') }}" class="floens-btn">
                            <span>more about us</span>
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.floens-btn -->
                    </div><!-- /.about-two__button -->
                </div><!-- /.about-two__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<section class="product-home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30">
                    <div class="cr-banner">
                        <h2>Popular Products</h2>
                    </div>
                    <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-12 mb-24">
                        <div class="row mb-minus-24 sticky">
                            <div class="col-lg-12 col-sm-6 col-6 cr-product-box mb-24">
                                <div class="cr-product-tabs">
                                    <a href="{{ url('all-products') }}" class="active">All Products</a>
                                    <a href="{{ url('product-cat/rugs') }}" class="active">All Rugs</a>
                                    <a href="{{ url('product-cat/carpets    ') }}" class="active">All Carpets</a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 col-6 cr-product-box banner-480 mb-24">
                                <div class="cr-ice-cubes">
                                    <img src="{{ url('public/images/bannerimage.jpg') }}" alt="product banner">
                                    <div class="cr-ice-cubes-contain">
                                        <h4 class="title">HANDMADE </h4>
                                        <h5 class="sub-title">RUGS</h5>
                                        <span style="color:white;">Discover the artistry of our handcrafted rugs, meticulously woven by skilled artisans to bring warmth and character to your space. Each rug is a unique masterpiece, blending tradition with modern design to create timeless elegance. With a commitment to quality and attention to detail, our rugs promise durability and beauty, adding a touch of luxury to your home décor.</span>
                                        <a href="{{ url('product-cat/rugs') }}" class="cr-button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-12 mb-24">
                        <div class="row">
                            @if($product_lists)
                            @foreach($product_lists as $key=>$r)
                                @include('frontend.showproduct')
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Blog -->
<section class="section-blog padding-b-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cr-banner">
                        <h2>Latest News</h2>
                    </div>
                    <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
             @foreach($posts as $post)
            <div class="col-lg-4">
                <div class="cr-blog">
                    <div class="cr-blog-content">
                        <h5>{{$post->title}}</h5>
                        <a class="read" href="{{route('blog.detail',$post->slug)}}">Read More</a>
                    </div>
                    <div class="cr-blog-image">
                        <img src="{{ url('public/images') }}/{{ $post->photo }}" alt="blog-2">
                        <div class="cr-blog-date">
                            <span>
                                {{$post->created_at->format('d')}}
                                <code>{{$post->created_at->format('M')}}</code>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section style="margin-bottom: 40px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="cr-services">
                    <div class="cr-services-image">
                        <i class="fa fa-info"></i>
                    </div>
                    <div class="cr-services-contain">
                        <h4>24X7 Support</h4>
                        <p>Always available for your assistance, round the clock</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cr-services">
                    <div class="cr-services-image">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="cr-services-contain">
                        <h4>Delivery in 5 Days</h4>
                        <p>Fast delivery within 5 days, hassle-free service.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cr-services">
                    <div class="cr-services-image">
                        <i class="fa fa-money-bill"></i>
                    </div>
                    <div class="cr-services-contain">
                        <h4>Secure Payement</h4>
                        <p>Ensure secure transactions for peace of mind shopping.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cr-services">
                    <div class="cr-services-image">
                        <i class="fa fa-suitcase"></i>
                    </div>
                    <div class="cr-services-contain">
                        <h4>Product Packaging</h4>
                        <p>Carefully packaged products for safe delivery to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection