@extends('frontend.layouts.master')

@section('title')
<title>About US</title>
@endsection

@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">About us</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">About us</span></li>
        </ul>
    </div>
</section>
<section class="about-one section-space" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-12">
                <div class="about-one__content">
                    <div class="sec-title sec-title--border" style="display:block;">
                        <h4>Our Story</h4>
                        <h3 class="sec-title__title">Crafting Memories, Weaving Dreams.</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <p class="about-one__text">At CARGOZ, we're passionate about transforming spaces into beautiful havens with our exquisite collection of carpets and rugs. Founded with a vision to redefine home decor, we curate timeless pieces that blend craftsmanship, elegance, and comfort. With years of experience in the industry, we understand the transformative power of quality rugs, and our journey is driven by a commitment to bring exceptional designs to every home.</p><!-- /.about-one__text -->
                    </div><!-- /.about-one__content__text -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
<section class="about-one" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-12">
                <div class="about-one__content">
                    <div class="sec-title sec-title--border" style="display:block;">
                        <h3 class="sec-title__title">Craftsmanship and Quality</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <p class="about-one__text">Each rug in our collection is a testament to the artistry and dedication of skilled artisans. We source only the finest materials to ensure durability, softness, and timeless appeal. From hand-woven Persian rugs to modern, eco-friendly designs, every piece is crafted with meticulous attention to detail. Our commitment to quality extends beyond aesthetics, as we strive to provide rugs that withstand the test of time and become cherished heirlooms.</p><!-- /.about-one__text -->
                    </div><!-- /.about-one__content__text -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
<section class="about-one" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-12">
                <div class="about-one__content">
                    <div class="sec-title sec-title--border" style="display:block;">
                        <h3 class="sec-title__title">Customer-Centric Approach</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <p class="about-one__text">At CARGOZ, our customers are at the heart of everything we do. We prioritize exceptional service and strive to exceed expectations at every touchpoint. Whether you're seeking guidance on rug selection, customization options, or after-sales support, our knowledgeable team is here to assist you every step of the way. We take pride in fostering lasting relationships with our customers, ensuring that your experience with us is as seamless and rewarding as possible.</p><!-- /.about-one__text -->
                    </div><!-- /.about-one__content__text -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
@endsection
