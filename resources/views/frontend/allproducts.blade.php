@extends('frontend.layouts.master')

@section('title')
<title>All Products</title>
@endsection

@section('main-content')
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>All Products</h2>
                        <span> <a href="{{ url('') }}">Home</a> - All Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-page product-page--left section-space-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.pages.filter')
            </div>
            <div class="col-md-9" id="showproductsection">
                <section class="product-page product-page--left section-space-bottom">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cr-shop-bredekamp">
                                    <div class="cr-toggle">
                                        <a href="javascript:void(0)" class="gridCol active-grid">
                                            <i class="ri-grid-line"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="gridRow">
                                            <i class="ri-list-check-2"></i>
                                        </a>
                                    </div>
                                    <div class="center-content">
                                        <span>We found {{ $data->count() }} items for you!</span>
                                    </div>
                                    <div class="cr-select">
                                        <label>Sort By :</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="1">Newest</option>
                                            <option value="1">Low To Heigh</option>
                                            <option value="2">Height T Low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutter-y-60">
                            <div class="col-xl-12 col-lg-12">
                                <div class="row gutter-y-30">
                                    @foreach($data as $r)
                                        @include('frontend.showproduct')
                                    @endforeach
                                </div><!-- /.row -->
                            </div><!-- /.col-lxl9  col-lg-8-->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.product-page section-space-bottom -->
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.product-page section-space-bottom -->
@endsection