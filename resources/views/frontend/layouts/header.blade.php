<div style="background-color: red !important;" class="top-notice bg-primary text-white">
    <div class="container text-center">
        <h5 class="d-inline-block">Website is Under Construction <b>We'll be Live Very Soon</b></h5>
        <!-- <h5 class="d-inline-block">Launching Discount Get Up to <b>40% OFF</b></h5> -->
        <!-- <small>* Limited time only.</small> -->
    </div>
    <!-- End .container -->
</div>
<style type="text/css">
.top-notice {
    position: relative;
    padding: 5px;
    font-size: 17px;
    line-height: 2;
    letter-spacing: 0.025em;
}

.top-notice h5 {
    color: inherit;
    font-size: inherit;
    font-weight: 500
}

.top-notice small {
    font-size: 10px;
    letter-spacing: 0.025em;
    opacity: 0.5
}

.top-notice a {
    color: inherit;
    font-weight: 700
}

.top-notice .category {
    display: inline-block;
    padding: 0.3em 0.8em;
    background: #0075af;
    font-size: 1rem
}

.top-notice .mfp-close {
    top: 50%;
    transform: translateY(-50%) rotateZ(45deg) translateZ(0);
    color: inherit;
    opacity: 0.7;
    z-index: 10
}

.top-notice .mfp-close:hover {
    opacity: 1
}
.bg-primary {
    background-color: #231f1f !important;
}
</style>
<!-- <div style=" text-align: center; color: white; font-size: 40px; background-color: red; ">WEBSITE UNDER&nbsp;MAINTENANCE</div> -->
<header class="main-header main-header--one sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                @php
                    $settings= DB::table('settings')->first();
                @endphp                    
                <a href="{{route('home')}}"><img src="{{ url('public/images') }}/{{$settings->logo}}" width="200" alt="logo"></a>
            </div>
            <!-- /.main-header__logo -->

            <div class="main-header__right">
                <nav class="main-header__nav main-menu">
                    <ul class="main-menu__list">

                        <li>
                            <a href="{{ url('') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('about-us') }}">About</a>
                        </li>
                        <li>
                            <a href="{{route('product-cat','rugs')}}">Rugs</a>
                        </li>
                        <li>
                            <a href="{{ url('product-cat/carpets') }}">Carpets</a>
                        </li>
                        <li>
                            <a href="{{ url('project-work') }}">Project/Custom work </a>
                        </li>
                        <li>
                            <a href="{{ url('blogs') }}">Blogs</a>
                        </li>
                        <!-- <li class="dropdown">
                            <a href="javascript:void(0)">Colors</a>
                            <ul>
                                @foreach(DB::table('product_colors')->groupby('colors')->get() as $c)
                                <li><a href="{{ url('color') }}/{{ $c->colors }}">{{ $c->colors }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)">Size</a>
                            <ul>
                                @foreach(DB::table('product_colors')->groupby('sizes')->get() as $s)
                                <li><a href="{{ url('rug-by-size') }}/{{ $s->sizes }}">{{ $s->sizes }}</a></li>
                                @endforeach
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.main-header__nav -->
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- /.mobile-nav__toggler -->
                <a href="{{ url('cart') }}" class="main-header__cart">
                    <i class="icon-cart" aria-hidden="true"></i>
                    @if(count((array) session('cart')) > 0)
                    <span class="badge" style="color: white;position: absolute;top: -12px;left: 15px;background-color: #231f1f;border-radius: 10px;font-size: 10px;">{{ count((array) session('cart')) }}</span>
                    @endif
                    <span class="sr-only">Cart</span>
                </a>
                <!-- /.shopping card -->
                <a href="#" class="search-toggler main-header__search">
                    <i class="icon-search" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a>
                <!-- /.search-toggler -->
                <button class="main-header__sidebar-btn sidebar-btn__toggler">
                    <!-- <span class="icon-grid"></span> -->
                </button>
                @php
                    $settings=DB::table('settings')->get();
                @endphp
                <!-- /.main-header__sidebar-btn sidebar-btn__toggler -->
                <a href="tel:@foreach($settings as $data) {{$data->phone}} @endforeach" class="main-header__phone">@foreach($settings as $data) {{$data->phone}} @endforeach</a>
                <!-- /.main-header__phone -->
                <a href="{{ url('contact-us') }}" class="floens-btn main-header__btn">
                    <span>GET A QUOTE</span>
                </a>
                <!-- /.thm-btn main-header__btn -->
            </div>
            <!-- /.main-header__right -->
        </div>
        <!-- /.main-header__inner -->
    </div>
    <!-- /.container-fluid -->
</header>