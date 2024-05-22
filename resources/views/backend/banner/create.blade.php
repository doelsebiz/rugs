@extends('backend.layouts.master')

@section('title','E-SHOP || Banner Create')

@section('main-content')
<div class="container">
  <div class="card">
    <h5 class="card-header">Add Homepage Banner</h5>
    <div class="card-body">
      <form enctype="multipart/form-data" method="post" action="{{route('banner.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-form-label">Target URL <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="slug" placeholder="Enter Target URL"  class="form-control">
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
          <input id="inputTitle" type="file" name="photo" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="type" class="col-form-label">Type <span class="text-danger">*</span></label>
          <select name="type" class="form-control">
              <option value="hero">Hero Banner</option>
              @if(DB::table('banners')->where('type' , 'bellowhero')->count() == 0)
              <option value="bellowhero">Second Section</option>
              @endif
              @if(DB::table('banners')->where('type' , 'about-us-section-horizontal')->count() == 0)
              <option value="about-us-section-horizontal">About Us Section One (Horizontal Image)</option>
              @endif
              @if(DB::table('banners')->where('type' , 'about-us-section-vertical')->count() == 0)
              <option value="about-us-section-vertical">About Us Section One (Vertical Image)</option>
              @endif
              @if(DB::table('banners')->where('type' , 'vertical-poster')->count() == 0)
              <option value="vertical-poster">Vertical Poster</option>
              @endif
          </select>
          @error('type')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush