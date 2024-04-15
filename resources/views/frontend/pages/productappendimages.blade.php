<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    @foreach($data as $keyslide => $r)
     <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $keyslide }}" class="@if($keyslide == 0) active @endif"> 
        <img src="{{ url('public/images') }}/{{ $r->image }}" alt="img"> </button>
    @endforeach
  </div>
  <div class="carousel-inner">
    @foreach($data as $keyslidetwo => $r)
     <a href="{{ url('public/images') }}/{{ $r->image }}" data-fancybox="gallery" class="carousel-item @if($keyslidetwo == 0) active @endif">
        <img src="{{ url('public/images') }}/{{ $r->image }}" alt="img">
     </a>
    @endforeach
  </div>
</div>