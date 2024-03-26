@extends('frontend.layouts.master')

@section('title')
<title>{{ $categoryname->title }}</title>
@endsection

@section('main-content')
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>{{ $categoryname->title }}</h2>
                        <span> <a href="{{ url('') }}">Home</a> - {{ $categoryname->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if($categoryname->title != 'Carpets')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="cr-shop-sideview">
                <div class="cr-shop-categories">
                    <h4 class="cr-shop-sub-title">Category</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks">
                            <label for="drinks">Rugs</label>
                            <span>{{ DB::table('products')->where('cat_id' , 13)->count() }}</span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks1">
                            <label for="drinks1">Carpets</label>
                            <span>{{ DB::table('products')->where('cat_id' , 6)->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-color">
                    <h4 class="cr-shop-sub-title">Colors</h4>
                    <div class="cr-checkbox" style="height: 300px;overflow: auto;margin-bottom: 10px;">
                        @foreach(DB::table('product_colors')->groupby('colors')->get() as  $filtercolor => $c)
                        <div class="checkbox-group">
                            <input type="checkbox" id="color{{ $filtercolor+1 }}">
                            <label for="color{{ $filtercolor+1 }}">{{ $c->colors }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="cr-shop-weight">
                    <h4 class="cr-shop-sub-title">Size</h4>
                    <div class="cr-checkbox" style="height: 300px;overflow: auto;margin-bottom: 10px;">
                        @foreach(DB::table('product_colors')->groupby('sizes')->get() as  $filtersize => $s)
                        <div class="checkbox-group">
                            <input type="checkbox" id="size{{ $filtersize+1 }}">
                            <label for="size{{ $filtersize+1 }}">{{ $s->sizes }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
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
                                    <span>We found {{ $products->count() }} items for you!</span>
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
                                @foreach($products as $r)
                                    @include('frontend.showproduct')
                                @endforeach
                            </div><!-- /.row -->
                        </div><!-- /.col-lxl9  col-lg-8-->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.product-page section-space-bottom -->
        </div>
    </div>
</div>

@else
<div class="row">
    <div class="col-md-3">
        <div class="cr-shop-sideview">
            <div class="cr-shop-categories">
                <h4 class="cr-shop-sub-title">Category</h4>
                <div class="cr-checkbox">
                    <div class="checkbox-group">
                        <input type="checkbox" id="drinks">
                        <label for="drinks">Rugs</label>
                        <span>{{ DB::table('products')->where('cat_id' , 13)->count() }}</span>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="drinks1">
                        <label for="drinks1">Carpets</label>
                        <span>{{ DB::table('products')->where('cat_id' , 6)->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="cr-shop-color">
                <h4 class="cr-shop-sub-title">Colors</h4>
                <div class="cr-checkbox" style="height: 300px;overflow: auto;margin-bottom: 10px;">
                    @foreach(DB::table('product_colors')->groupby('colors')->get() as  $filtercolor => $c)
                    <div class="checkbox-group">
                        <input type="checkbox" id="color{{ $filtercolor+1 }}">
                        <label for="color{{ $filtercolor+1 }}">{{ $c->colors }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="cr-shop-weight">
                <h4 class="cr-shop-sub-title">Size</h4>
                <div class="cr-checkbox" style="height: 300px;overflow: auto;margin-bottom: 10px;">
                    @foreach(DB::table('product_colors')->groupby('sizes')->get() as  $filtersize => $s)
                    <div class="checkbox-group">
                        <input type="checkbox" id="size{{ $filtersize+1 }}">
                        <label for="size{{ $filtersize+1 }}">{{ $s->sizes }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
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
                                <span>We found {{ $products->count() }} items for you!</span>
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
                            @foreach($products as $r)
                                @include('frontend.showproduct')
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.col-lxl9  col-lg-8-->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.product-page section-space-bottom -->
    </div>
</div>

@endif
@endsection