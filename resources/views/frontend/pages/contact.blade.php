@extends('frontend.layouts.master')

@section('title')
<title>Contact US</title>
@endsection

@section('main-content')
@php
	$settings=DB::table('settings')->get();
@endphp
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Contact us</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Contact us</span></li>
        </ul>
    </div>
</section>
<section class="contact-one section-space">
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-lg-6">
                <div class="contact-one__content">
                    <div class="sec-title sec-title--border">

                        <h6 class="sec-title__tagline">contact</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Get in Touch <br> with Us</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                    <p class="contact-one__text">Reach out to us for any inquiries, assistance, or custom requests regarding our premium selection of carpets and rugs. Our dedicated team is here to help you find the perfect addition to your home decor and answer any questions you may have. Contact us today for personalized service and expert advice.</p><!-- /.contact-one__text -->
                    <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="contact-one__info__content">
                            <div class="contact-one__info__item">
                                <div class="contact-one__info__item__inner">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-phone-call"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <p class="contact-one__info__text"><a href="tel:@foreach($settings as $data) {{$data->phone}} @endforeach">@foreach($settings as $data) {{$data->phone}} @endforeach</a></p><!-- /.contact-one__info__text -->
                                </div><!-- /.contact-one__info__item__inner -->
                            </div><!-- /.contact-one__info__item -->
                            <div class="contact-one__info__item">
                                <div class="contact-one__info__item__inner">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-paper-plane"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <p class="contact-one__info__text"><a href="mailto:@foreach($settings as $data) {{$data->email}} @endforeach">@foreach($settings as $data) {{$data->email}} @endforeach</a></p><!-- /.contact-one__info__text -->
                                </div><!-- /.contact-one__info__item__inner -->
                            </div><!-- /.contact-one__info__item -->
                            <div class="contact-one__info__item">
                                <div class="contact-one__info__item__inner">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-location"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <address class="contact-one__info__text"><a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu">@foreach($settings as $data) {{$data->address}} @endforeach</a></address><!-- /.contact-one__info__text -->
                                </div><!-- /.contact-one__info__item__inner -->
                            </div><!-- /.contact-one__info__item -->
                        </div><!-- /.contact-one__info__content -->
                    </div><!-- /.contact-one__info -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-xl-6 -->
            <div class="col-lg-6">
                <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" action="inc/sendemail.php">
                    <div class="contact-one__form__bg" style="background-image: url('assets/images/shapes/contact-info-form-bg.png');"></div><!-- /.contact-one__form__bg -->
                    <div class="contact-one__form__top">
                        <h2 class="contact-one__form__title">Get in Touch with Us</h2><!-- /.contact-one__form__title -->
                    </div><!-- /.contact-one__form__top -->
                    <div class="form-one__group form-one__group--grid">
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="name" placeholder="Your name">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--full">
                            <input type="email" name="email" placeholder="your email">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--full">
                            <input type="email" name="text" placeholder="your Contact Number">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--mesgae form-one__control--full">
                            <textarea name="message" placeholder="Write message"></textarea><!-- /# -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="floens-btn">
                                <span>send message</span>
                                <i class="icon-right-arrow"></i>
                            </button>
                        </div><!-- /.form-one__control -->
                    </div><!-- /.form-one__group -->
                </form>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one section-space -->
@endsection