@extends('frontend.layouts.master')

@section('title')
<title>Retailer Dashboard</title>
@endsection

@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Retailer Dashboard</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Retailer Dashboard</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-one section-space" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-md-3">
                <a href="" class="card">
                    <div class="card-body">
                        Rugs Stock
                    </div>
                </a>
                <a href="{{ url('user/logout') }}" class="card mt-3">
                    <div class="card-body">
                        Logout
                    </div>
                </a>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Rugs Stock
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="product-dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                                <th>Photo</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Price</th>
                              
                              <th>Stock</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                                <th>Photo</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Price</th>
                              
                              <th>Action</th>
                            </tr>
                          </tfoot>
                          <tbody>

                            @foreach($products as $product)
                              @php
                              $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
                              // dd($sub_cat_info);
                              $brands=DB::table('brands')->select('title')->where('id',$product->brand_id)->get();
                              @endphp
                                <tr>
                                    <td>
                                        @if(DB::table('product_images')->where('product_id' , $product->id)->first())
                                        <img src="{{ url('public/images') }}/{{ DB::table('product_images')->where('product_id' , $product->id)->first()->image }}" alt="{{$product->title}}" class="zoom" style="max-width:80px">
                                        @else
                                        <img class="zoom" style="max-width:80px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh_2e8C2K5k5slozTp96XOBMD6aYMlj2YQ223BxU-kQA&s">
                                        @endif
                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->cat_info['title']}}
                                      <sub>
                                          {{$product->sub_cat_info->title ?? ''}}
                                      </sub>
                                    </td>
                                    <td>${{$product->price}} /-</td>
                                    
                                    <td>
                                      {{$product->stock}}
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div style="margin-top:10px;" class="row">
                            {!! $products->links('frontend.pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
@endsection