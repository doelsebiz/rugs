@extends('frontend.layouts.master')
@section('title')
<title>CARGOZ: Discover Premium Rugs & Carpets Online for Elegant Home Decor</title>
<meta name="description" content="Explore the finest selection of rugs and carpets at CARGOZ, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home." />
<meta name="DC.Title" content="CARGOZ: Discover Premium Rugs & Carpets Online for Elegant Home Decor">
<meta name="rating" content="general">
<meta name="description" content="Explore the finest selection of rugs and carpets at CARGOZ, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home.">
<meta property="og:type" content="website">
@php
    $settings= DB::table('settings')->first();
@endphp 
<meta property="og:image" content="{{ url('public/images') }}/{{$settings->logo}}">
<meta property="og:title" content="CARGOZ: Discover Premium Rugs & Carpets Online for Elegant Home Decor">
<meta property="og:description" content="Explore the finest selection of rugs and carpets at CARGOZ, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home.">
<meta property="og:site_name" content="CARGOZ">
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
            @foreach($product_lists as $key=>$r)
                @include('frontend.showproduct')
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
@foreach(DB::table('categories')->where('homepage' , 1)->orderby('id' , 'desc')->get() as $c)
<section class="product-page section-space-bottom">
    <div class="container-fluid">
        <div class="sec-title text-left mb-4">
            <h3 class="sec-title__title">{{ $c->title }}</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row gutter-y-30">
                    @foreach(DB::table('products')->where('cat_id' , $c->id)->limit(4)->orderby('id' , 'desc')->where('status','active')->get() as $r)
                        @include('frontend.showproduct')
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endforeach
<!-- Start Shop Home List  -->
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