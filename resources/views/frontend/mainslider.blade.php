<!-- main slider start -->
<style type="text/css">
    .homecontainer{
        margin-left: 40px;
        margin-right: 40px;
    }
    .hero-slider{
/*        margin-top: 80px;*/
/*        border-radius: 20px;*/
    }
</style>
<section class="main-slider hero-slider">
    <div class="main-slider__bg" style="background-image: url('{{ url('') }}/public/images/sliderone.jpg');"></div>
    <!-- /.main-slider__bg -->
    <!-- /.hero-slider__social -->
    <!-- /.main-slider__scroll-btn -->
    <div class="main-slider__carousel floens-slick__carousel--with-counter" data-slick-options='{
"slidesToShow": 1,
"slidesToScroll": 1,
"asNavFor": ".main-slider__carousel-thumbs",
"autoplay": true,
"fade": true,
"autoplaySpeed": 4000,
"speed": 2000,
"infinite": true,
"arrows": true,
"dots": false,
"prevArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--prev\"><i class=\"icon-left-arrow\"></i> Prev</button>",
"nextArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--next\">Next <i class=\"icon-right-arrow\"></i></button>"

}'>
        <div class="main-slider__item">
            <div class="main-slider__wrapper container-fluid">
                <div class="main-slider__left">
                    <div class="main-slider__content">
                        <div class="sec-title sec-title--center">
                            <h3 class="sec-title__title">Elevating Homes with  <br> Quality Rugs</h3>
                            <!-- /.sec-title__title -->
                        </div>
                        <!-- /.sec-title -->
                        <p class="main-slider__text">Experience the luxury of CARGOZ rugs and carpets. Elevate your home decor with timeless designs and superior craftsmanship. Transform your living spaces into havens of comfort and style.</p>
                        <!-- /.main-slider__text -->
                        <a href="{{ url('all-products') }}" class="main-slider__btn floens-btn">
                            <span>Explore Our Collection</span>
                            <i class="icon-right-arrow"></i>
                        </a>
                        <!-- /.main-slider__btn floens-btn -->
                    </div>
                    <!-- /.main-slider__content -->
                </div>
                <!-- /.main-slider__left -->
                <div class="main-slider__right">
                    <div class="main-slider__image">
                        <div class="main-slider__image__inner">
                            <img src="{{ url('') }}/public/images/slidersecond.jpg" alt="slider" class="main-slider__image__one">
                        </div>
                    </div>
                    <!-- /.main-slider__image -->
                </div>
                <!-- /.main-slider__right -->
            </div>
            <!-- /.main-slider__wrapper .container-fluid -->
        </div>
        <!-- /.main-slider__item -->
        <!-- /.main-slider__item -->
        <!-- /.main-slider__item -->
        <!-- /.main-slider__item -->
        <!-- /.main-slider__item -->
        <!-- /.main-slider__item -->
    </div>
    <!-- /.main-slider__carousel -->
    <!--/.main-slider__carousel-thumbs -->
</section>
<!-- /.main-slider -->