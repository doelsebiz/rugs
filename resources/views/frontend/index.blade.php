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
<div  class="container-fluid">
    <div class="slide slide-1 slide-show-banner-1" data-endtime="">
  <a href="{{ url('product-cat/rugs') }}">
  
    
    <div class="slide-image-desktop slide-image-desktop-1"></div>
      <style>
        .slide{
            position: relative;
        }
        @media (min-width: 768px) {
          .slide-image-desktop-1 {
            background-image: url("//missamara.com.au/cdn/shop/files/Webslider_Easter-AU_1.png?v=1711347741");
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 450px;
          }
        }
      </style>
      
        <div class="slide-image-mobile slide-image-mobile-1"></div>
        <style>
          @media (max-width: 767px) {
            .slide-image-mobile-1 {
              background-image: url("//missamara.com.au/cdn/shop/files/Webslider_Easter-AU_1.png?v=1711347741");
              background-position: center;
              background-size: 100%;
              background-repeat: no-repeat;
              height: 140px;
            }
          }
        </style>
          
    
  
  
  </a>
</div>
</div>

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
                                    <img src="{{ url('public/images/PHOTO-2024-05-17-01-28-15.jpg') }}" alt="product banner">
                                    <div class="cr-ice-cubes-contain">
                                        <h4 class="title" style="color:black;">HANDMADE </h4>
                                        <h5 class="sub-title">RUGS</h5>
                                        <span style="color:black;font-weight: bold;">Explore the finest selection of handmade rugs and carpets at Jagkris Home, your premier destination for luxurious floor covering. Discover meticulously handcrafted rugs, elegant carpets available in an array of styles and materials to enhance your living spaces.</span>
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
                        <h4>Responsible Customer Service</h4>
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
                        <h4>Dispatch in 2-3 Working Days</h4>
                        <p>Free Delivery With In 7-12 Working Days*</p>
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