<header class="main-header main-header--one sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                @php
                    $settings= DB::table('settings')->first();
                @endphp                    
                <a href="{{route('home')}}"><img src="{{ url('public/images') }}/{{$settings->logo}}" width="125" alt="logo"></a>
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
                        <li class="dropdown">
                            <a href="{{ url('rugs') }}">Rugs</a>
                            <ul>
                                @foreach(Helper::getAllCategory() as $cat)
                                @if($cat->title != 'Carpets')
                                    <li><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('product-cat/carpets') }}">Carpets</a>
                        </li>
                        <li>
                            <a href="{{ url('all-products') }}">All Products</a>
                        </li>
                        <li>
                            <a href="{{ url('contact-us') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
                <!-- /.main-header__nav -->
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- /.mobile-nav__toggler -->
                <a href="cart.html" class="main-header__cart">
                    <i class="icon-cart" aria-hidden="true"></i>
                    <span class="sr-only">Cart</span>
                </a>
                <!-- /.shopping card -->
                <a href="#" class="search-toggler main-header__search">
                    <i class="icon-search" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a>
                <!-- /.search-toggler -->
                <button class="main-header__sidebar-btn sidebar-btn__toggler">
                    <span class="icon-grid"></span>
                </button>
                <!-- /.main-header__sidebar-btn sidebar-btn__toggler -->
                <a href="tel:(502)203-7840" class="main-header__phone">(502) 203-7840</a>
                <!-- /.main-header__phone -->
                <a href="contact.html" class="floens-btn main-header__btn">
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