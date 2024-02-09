@extends('frontend.layouts.master')

@section('title')
<title>Retailer Login</title>
@endsection

@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Retailer Login</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Retailer Login</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-one section-space" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-6 offset-3">
                @if(session()->has('errormessage'))
                <div class="alert alert-danger alert-dismissible">
                    <strong>Alert!</strong> {{ session()->get('errormessage') }}
                  </div>
                @endif 
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="post" action="{{route('login.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input class="form-control" type="email" name="email" placeholder="" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Password<span>*</span></label>
                                        <input class="form-control" type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6  mt-2">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6  mt-2 text-right">
                                    <div class="form-group text-right" style=" text-align: right; ">
                                        <a class="lost-pass text-right" href="{{ route('password.reset') }}">
                                            Lost your password?
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button  type="submit" class="floens-btn form-control floens-btn--border">
                                        <span>Login</span>
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </div>
                                <div class="col-12 mt-3">
                                    <h1 style="text-align: center;">OR</h1>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <a href="{{route('register.form')}}" class="btn">Register as a Retailer</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
@endsection