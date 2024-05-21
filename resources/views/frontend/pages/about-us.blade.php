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
                    <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <p class="about-one__text">Welcome to our world of exquisite hand-woven rugs and carpets! At Jagkris Home Australia, we take pride in bringing you a diverse selection of handcrafted rugs and broadloom carpets, meticulously sourced from responsible manufacturers. Each piece in our collection is &quot;GoodWeave&quot; certified, ensuring ethical production and supporting fair labor practices.</p>
                        <p class="about-one__text mt-5">We connect with one of the oldest manufacturing establishments in India, where our team
carefully researches and designs each rug using contemporary weaving techniques such as
hand-tufted, hand loom, punja, and pit loom. Whether you&#39;re seeking to enhance your
home with the timeless beauty of a hand-woven rug or the elegance of a broadloom carpet,
our extensive stock caters to every style and need. Explore our range and discover the
perfect addition to your space.</p>
                        <p class="about-one__text mt-5">At the heart of our company are the core values of providing authentic products and
maintaining honest trade practices. Our mission is to bridge the gap between the hand-
woven industry and our valued customers by offering genuine insights into the intricate
making process. We are dedicated to educating our customers and providing a vast variety
of rugs to choose from, ensuring you find the perfect piece for your home.</p>
<p class="about-one__text mt-5">To cater to your unique design needs, we offer bespoke custom design services. Whether
you have a specific vision in mind or need assistance in creating a design that complements
your home decor, our expert team is here to help. From selecting the perfect materials to
finalizing the intricate details, we work closely with you to bring your vision to life, resulting
in a one-of-a-kind rug that is truly yours</p>
<p class="about-one__text mt-5">We provide the most authentic information on rug manufacturing processes, offering you
honest and detailed insights to guide your rug selection journey. Our expertise ensures you
make informed decisions, choosing the perfect rug that fits your style and needs.</p>
                    </div><!-- /.about-one__content__text -->
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
@endsection
