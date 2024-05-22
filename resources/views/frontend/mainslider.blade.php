<section class="section-hero next">
    <div class="cr-slider swiper-container">
        <div class="swiper-wrapper">
            @foreach(DB::table('banners')->where('type' , 'hero')->get() as $r)
            <div class="swiper-slide">
                <div class="cr-hero-banner" style="background-image:url('{{ url('') }}/public/images/{{ $r->photo }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cr-left-side-contain slider-animation">
                                    <h1>{{ $r->title }}</h1>
                                    <p>{{ $r->description }}</p>
                                    <div class="cr-last-buttons">
                                        <a href="{{ url('') }}/{{ $r->slug }}" class="cr-button">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>