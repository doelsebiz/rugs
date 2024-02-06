@extends('frontend.layouts.master')

@section('title')
<title>Blogs</title>
@endsection

@section('main-content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div><!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">News & Blogs</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">News & Blogs</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="blog-page section-space">
    <div class="container">
        <div class="row gutter-y-30">
            @foreach($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="blog-card__image">
                        <img src="{{ url('public/images') }}/{{ $post->photo }}" alt="{{$post->title}}">
                        <a href="{{route('blog.detail',$post->slug)}}" class="blog-card__image__link"><span class="sr-only">Talk About the Three Major Types of Floor Tiles</span>
                            <!-- /.sr-only --></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__date">
                        <span class="blog-card__date__day">{{$post->created_at->format('d')}}</span>
                        <span class="blog-card__date__month">{{$post->created_at->format('M')}}</span>
                    </div><!-- /.blog-card__date -->
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h3><!-- /.blog-card__title -->
                        <p class="blog-card__text">Tiles company, also known as a tile manufacturer or distributor, specializes in the production.</p><!-- /.blog-card__text -->
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection