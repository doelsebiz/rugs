<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about">
                        <p class="footer-widget__about-text">Explore the finest selection of rugs and carpets at CARGOZ, your premier destination for luxurious home decor. Discover handcrafted rugs, elegant carpets, and exquisite tapestries in a variety of styles and materials to elevate your living spaces. Shop now to experience unparalleled quality and timeless elegance for your home.</p>
                        <!-- /.footer-widget__about-text -->
                        <!-- /.footer-widget__newsletter mc-form -->
                        <div class="mc-form__response"></div>
                        <!-- /.mc-form__response -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-xl-4 col-lg-6 -->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="footer-widget footer-widget--links footer-widget--links-one">
                        <div class="footer-widget__top">
                            <div class="footer-widget__title-box"></div>
                            <!-- /.footer-widget__title-box -->
                            <h2 class="footer-widget__title">Explore</h2>
                            <!-- /.footer-widget__title -->
                        </div>
                        <!-- /.footer-widget__top -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('blogs') }}">News & Blogs</a></li>
                            <li><a href="{{ url('all-products') }}">All Products</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact</a></li>
                            <li><a href="{{ url('user/login') }}">Retailer Login</a></li>
                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-xl-2 col-lg-3 col-md-3 col-sm-6 -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="footer-widget footer-widget--links footer-widget--links-two">
                        <div class="footer-widget__top">
                            <div class="footer-widget__title-box"></div>
                            <!-- /.footer-widget__title-box -->
                            <h2 class="footer-widget__title">Carpets</h2>
                            <!-- /.footer-widget__title -->
                        </div>
                        <!-- /.footer-widget__top -->
                        <ul class="list-unstyled footer-widget__links">
                            @foreach(DB::table('categories')->orderby('id' , 'desc')->limit(5)->where('parent_id' , 6)->get() as $r)
                            <li><a href="{{route('product-cat',$r->slug)}}">{{ $r->title }}</a></li>
                            @endforeach
                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                @php
                    $settings=DB::table('settings')->get();
                @endphp
                <!-- /.col-xl-3 col-lg-3 col-md-4 col-sm-6 -->
                <div class="col-xl-3 col-lg-6 col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                    <div class="footer-widget footer-widget--contact">
                        <div class="footer-widget__top">
                            <div class="footer-widget__title-box"></div>
                            <!-- /.footer-widget__title-box -->
                            <h2 class="footer-widget__title">Get inTouch</h2>
                            <!-- /.footer-widget__title -->
                        </div>
                        <!-- /.footer-widget__top -->
                        <ul class="list-unstyled footer-widget__info">
                            <li><a href="https://www.google.com/maps">@foreach($settings as $data) {{$data->address}} @endforeach</a></li>
                            <li><span class="icon-paper-plane"></span> <a href="mailto:@foreach($settings as $data) {{$data->email}} @endforeach">@foreach($settings as $data) {{$data->email}} @endforeach</a></li>
                            <li><span class="icon-phone-call"></span> <a href="tel:@foreach($settings as $data) {{$data->phone}} @endforeach">@foreach($settings as $data) {{$data->phone}} @endforeach</a></li>
                        </ul>
                        <!-- /.list-unstyled -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-xl-3 col-lg-6 col-md-5 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__top -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <div class="row gutter-y-30 align-items-center">
                    <div class="col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="main-footer__social floens-social">
                            <a href="https://facebook.com">
                                <i class="icon-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com">
                                <i class="icon-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com">
                                <i class="icon-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://youtube.com">
                                <i class="icon-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div>
                        <!-- /.main-footer__social -->
                    </div>
                    <!-- /.col-md-5 -->
                    <div class="col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="main-footer__bottom__copyright">
                            <p class="main-footer__copyright">
                                &copy; Copyright <span class="dynamic-year"></span> by CARGOZ.
                            </p>
                        </div>
                        <!-- /.main-footer__bottom__copyright -->
                    </div>
                    <!-- /.col-md-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.main-footer__inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__bottom -->
</footer>
<!-- /.main-footer -->