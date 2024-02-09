@extends('frontend.layouts.master')

@section('title')
<title>Retailer Register</title>
@endsection

@section('main-content')
<section class="page-header">
    <div class="container">
        <h2 class="page-header__title">Retailer Register</h2>
        <ul class="floens-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="{{ url('') }}">Home</a></li>
            <li><span style="color: white;">Retailer Register</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="about-one section-space" id="about">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-6 offset-3">
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible">
                    <strong>Success!</strong> {{ session()->get('message') }}
                  </div>
                @endif 
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="post" action="{{route('register.submit')}}">
                            @csrf
                            <input type="hidden" value="inactive" name="status">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Name<span>*</span></label>
                                        <input class="form-control" type="text" name="name" placeholder="" required="required" value="{{old('name')}}">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
                                        <input class="form-control" type="text" name="email" placeholder="" required="required" value="{{old('email')}}">
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Confirm Password<span>*</span></label>
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="" required="required" value="{{old('password_confirmation')}}">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group login-btn">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2" style="text-align:center;">
                                    <a href="{{route('login.form')}}" style="text-align:center;">Already Meber? Login</a>
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