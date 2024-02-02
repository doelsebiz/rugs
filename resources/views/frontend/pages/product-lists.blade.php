@extends('frontend.layouts.master')

@section('title')
<title>{{ $categoryname->title }}</title>
@endsection

@section('main-content')
<style type="text/css">
	.main-header--one{
		background-color: white;
	}
</style>
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
@endsection