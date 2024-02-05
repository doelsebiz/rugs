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
        $category_lists=DB::table('categories')->where('status','active')->orderby('id' , 'desc')->limit(6)->get();
        @endphp
        @if($category_lists)
            @foreach($category_lists as $cat)
                @if($cat->is_parent==1)
            <div class="item">
                <div class="service-card-two">
                    <a href="{{route('product-cat',$cat->slug)}}">
                    <div class="service-card-two__bg" style="background-image: url('{{ url("") }}/public/assetstwo/images/services/service-bg-2-1.png');"></div><!-- /.service-card-two__bg -->
                    <div class="service-card-two__image">
                        <img src="{{ url('') }}/public/images/{{ $cat->photo  }}" alt="Tiling & concrete">
                    </div><!-- /.service-card-two__image -->
                    <div class="service-card-two__content">
                        <h3 class="service-card-two__title"><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></h3><!-- /.service-card-two__title -->
                    </div><!-- /.service-card-two__content -->
                    </a>
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