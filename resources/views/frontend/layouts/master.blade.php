<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('title')
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('public/assetstwo/images/favicons/appleicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/assetstwo/images/favicons/favicon32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/assetstwo/images/favicons/favicon16x16.png') }}" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,900;9..40,1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/floens-icons/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://maraviyainfotech.com/projects/carrot/carrot-v2/carrot-html/assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/swiper/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/vendors/slick/slick.css') }}" />
    <script src="{{ url('public/assetstwo/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <!-- template styles -->
    <link rel="stylesheet" href="{{ url('public/assetstwo/css/floens.css') }}" />
    <link rel="stylesheet" href="{{ url('public/assetstwo/css/custom.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url('{{ url('') }}'/public/assetstwo/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
		@yield('main-content')
	
	@include('frontend.layouts.footer')

    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            @php
                $settings = DB::table('settings')->first();
            @endphp  
            <div class="logo-box">
                <a href="{{ url('') }}" aria-label="logo image"><img src="{{ url('public/images') }}/{{$settings->logo}}" width="155" alt="logo-light" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                </li>
            </ul>
            <!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
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
            <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="{{ url('search') }}">
                <input type="text" id="search" name="name" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="floens-btn">
                    <span class="icon-search"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    @yield('sidebar')
    <style>
    /* Styles for the back-to-top button */
    #back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        width: 40px;
        height: 40px;
        background: #007bff;
        color: #fff;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 1000;
    }
</style>
    <!-- /.sidebar-one -->
    <div id="back-to-top"><i class="fa fa-arrow-up"></i></div>

    <!-- <a href="javascript:void(0)" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a> -->

    
    <script src="{{ url('public/assetstwo/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/wow/wow.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <script src="{{ url('public/assetstwo/vendors/slick/slick.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ url('public/assetstwo/js/floens.js') }}"></script>
    <script src="https://maraviyainfotech.com/projects/carrot/carrot-v2/carrot-html/assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="https://maraviyainfotech.com/projects/carrot/carrot-v2/carrot-html/assets/js/main.js"></script>
     @stack('scripts')
     <script>
$(document).ready(function(){
    // Show or hide the back-to-top button based on scroll position
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    // Smooth scroll to top when the button is clicked
    $('#back-to-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
</script>
</body>

</html>