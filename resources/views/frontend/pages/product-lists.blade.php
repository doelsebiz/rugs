@extends('frontend.layouts.master')

@section('title')
<title>{{ $categoryname->title }}</title>
@endsection

@section('main-content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">{{ $categoryname->title }}</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">{{ $categoryname->title }}</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
@if($categoryname->title != 'Carpets')
<section class="product-page product-page--left section-space-bottom">
    <div class="container-fluid">
        <div class="row gutter-y-60">
            <div class="col-xl-12 col-lg-12">
                <div class="row gutter-y-30">
                	@foreach($products as $r)
                		@include('frontend.showproduct')
                	@endforeach
                </div><!-- /.row -->
            </div><!-- /.col-lxl9  col-lg-8-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.product-page section-space-bottom -->
@else
<section class="section-space-bottom mt-5">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="section-header text-left mb-5">
              <h2 class="section-header__title h2">Carpets by Styles</h2>
            </div>
        </div>
        <div class="row gutter-y-30">
            @foreach(DB::table('categories')->where('parent_id' , 6)->get() as $r)
            <div class="col-lg-2 col-md-6">
                <div class="work-card">
                    <div class="work-card__image">
                        <img src="{{ url('public/images') }}/{{ $r->photo }}" alt="Modern Tiles fitting">
                    </div><!-- /.work-card__image -->
                    <div class="work-card__content-show">
                        <div class="work-card__content-inner">
                            <h3 class="work-card__title"><a href="{{route('product-cat',$r->slug)}}">{{ $r->title }}</a></h3><!-- /.work-card__title -->
                        </div><!-- /.work-card__content-inner -->
                    </div><!-- /.work-card__content-show -->
                    <div class="work-card__content-hover">
                        <div class="work-card__content-inner">
                            <h3 class="work-card__title"><a href="{{route('product-cat',$r->slug)}}">{{ $r->title }}</a></h3><!-- /.work-card__title -->
                        </div><!-- /.work-card__content-inner -->
                        <a href="{{route('product-cat',$r->slug)}}" class="work-card__link floens-btn"><span class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                    </div><!-- /.work-card__content-hover -->
                </div><!-- /.work-card -->
            </div><!-- /.col-lg-4 col-md-6 -->
            @endforeach
        </div><!-- /.row -->
        <div class="col-md-12">
            <div class="section-header text-left mt-5">
              <h2 class="section-header__title h2">Best Design in Carpets</h2>
            </div>
        </div>
    </div><!-- /.container -->
</section>
<section class="product-page--left section-space-bottom">
    <div class="container-fluid">
        <div class="row gutter-y-60">
            <div class="col-xl-12 col-lg-12">
                <div class="row gutter-y-30">
                    @foreach($products as $r)
                        @include('frontend.showproduct')
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.col-lxl9  col-lg-8-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.product-page section-space-bottom -->
@endif
@endsection