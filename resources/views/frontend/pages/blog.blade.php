@extends('frontend.layouts.master')

@section('title')
<title>Blogs</title>
@endsection

@section('main-content')
<section class="page-header">
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
            <div class="col-lg-4">
                <div class="cr-blog">
                    <div class="cr-blog-content">
                        <h5>{{$post->title}}</h5>
                        <a class="read" href="{{route('blog.detail',$post->slug)}}">Read More</a>
                    </div>
                    <div class="cr-blog-image">
                        <img src="{{ url('public/images') }}/{{ $post->photo }}" alt="blog-2">
                        <div class="cr-blog-date">
                            <span>
                                {{$post->created_at->format('d')}}
                                <code>{{$post->created_at->format('M')}}</code>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection