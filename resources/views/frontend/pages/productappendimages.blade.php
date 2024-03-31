<div class="swiper product-details__gallery-top">
    <div class="swiper-wrapper">
    	@foreach($data as $r)
        <div class="swiper-slide">
            <img src="{{ url('public/images') }}/{{ $r->image }}" class="product-details__gallery-top__img">
        </div>
        @endforeach
    </div>
</div>
<div class="swiper product-details__gallery-thumb">
    <div class="swiper-wrapper">
    	@foreach($data as $r)
        <div class="product-details__gallery-thumb-slide swiper-slide">
            <img src="{{ url('public/images') }}/{{ $r->image }}" class="product-details__gallery-thumb__img">
        </div>
        @endforeach
    </div>
</div>
<script type="text/javascript">
	var galleryThumbs = new Swiper(".product-details__gallery-thumb", {
        slidesPerView: {{ $data->count() }},
        spaceBetween: 30,
        speed: 1400,
        watchSlidesVisibility: false,
        watchSlidesProgress: false,
        loop: false,
        autoplay: false,
        watchSlidesProgress: false,
        breakpoints: {
            0: {
                spaceBetween: 15
            }
        }
    });
	var galleryTop = new Swiper(".product-details__gallery-top", {
        observer: true,
        observeParents: true,
        loop: true,
        speed: 1400,
        mousewheel: true,
        slidesPerView: 1,
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: "",
            prevEl: ""
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
</script>