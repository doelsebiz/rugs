@extends('frontend.layouts.master')
@section('title')
<title>{{$post->title}}</title>
@endsection
@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">{{$post->title}}</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">{{$post->title}}</span></li>
        </ul>
    </div>
</section>
<section class="blog-page section-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="blog-card__image">
                            <img src="{{ url('public/images') }}/{{ $post->photo }}" alt="{{$post->title}}">
                            <div class="blog-card__date">
                                <span class="blog-card__date__day">{{$post->created_at->format('d')}}</span>
                                <span class="blog-card__date__month">{{$post->created_at->format('M')}}</span>
                            </div><!-- /.blog-card__date -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title">{{$post->title}}</h3>
                            <p class="blog-card__text blog-card__text--one">{!! ($post->description) !!}</p><!-- /.blog-card__text -->
                        </div><!-- /.blog-card-four__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.blog-details -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
