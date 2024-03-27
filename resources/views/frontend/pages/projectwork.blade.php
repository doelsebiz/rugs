@extends('frontend.layouts.master')
@section('title')
<title>Project Work</title>
@endsection

@section('main-content')
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>Project Work</h2>
                        <span> <a href="{{ url('') }}">Home</a> - Project Work</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-one section-space">
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-lg-6">
                <div class="contact-one__content">
                    <div class="sec-title sec-title--border">


                        <h3 class="sec-title__title">Project Work <br> with Us</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                    <p class="contact-one__text">Welcome to our "Project Work with Us" page, where we invite you to explore exciting opportunities for collaboration and partnership. At Jagkrishome, we specialize in the creation of bespoke rugs and carpets, crafted with precision and passion. Whether you're an interior designer, architect, or project manager, we offer tailored solutions to meet your unique project requirements. From residential developments to commercial spaces, we strive to transform your vision into reality, delivering exceptional quality and craftsmanship every step of the way.</p>
                    <p class="contact-one__text">Collaborating with us means gaining access to a dedicated team of experts who are committed to excellence and customer satisfaction. With our extensive experience and versatile range of designs, materials, and customization options, we ensure that each project receives the attention it deserves. Partner with us to elevate your projects with luxurious, handcrafted rugs and carpets that add a touch of sophistication and style to any space. Let's embark on this creative journey together and create something extraordinary.</p>
                    <!-- /.contact-one__text -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-xl-6 -->
            <div class="col-lg-6">
                <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms" action="inc/sendemail.php">
                    <div class="contact-one__form__bg" style="background-image: url('assets/images/shapes/contact-info-form-bg.png');"></div><!-- /.contact-one__form__bg -->
                    <div class="contact-one__form__top">
                        <h2 class="contact-one__form__title">Get Inquiry for project with us</h2><!-- /.contact-one__form__title -->
                    </div><!-- /.contact-one__form__top -->
                    <div class="form-one__group form-one__group--grid">
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <label>Select Category</label>
                            <select class="form-control">
                                <option value="">Select Category</option>
                                <option value="Rugs">Rugs</option>
                                <option value="Carpets">Carpets</option>
                            </select>
                        </div>
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="area" placeholder="Enter Area">
                        </div>
                        <div class="form-one__control form-one__control--input form-one__control--full">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--full">
                            <input type="email" name="email" placeholder="your email">
                        </div><!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--full">
                            <input type="email" name="text" placeholder="your Contact Number">
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <input type="text" name="location" placeholder="Enter Your Location">
                        </div>
                        <!-- /.form-one__control form-one__control--full -->
                        <div class="form-one__control form-one__control--mesgae form-one__control--full">
                            <textarea name="message" placeholder="Write message"></textarea><!-- /# -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="floens-btn">
                                <span>Get Inquiry</span>
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
