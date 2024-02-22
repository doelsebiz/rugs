<div class="col-xl-3 col-lg-4 col-md-6 ">
    <div class="product__item wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
        <div class="product__item__image">
            @if(DB::table('product_images')->where('product_id' , $r->id)->first())
            <img src="{{ url('public/images') }}/{{ DB::table('product_images')->where('product_id' , $r->id)->first()->image }}" alt="{{$r->title}}">
            @else
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh_2e8C2K5k5slozTp96XOBMD6aYMlj2YQ223BxU-kQA&s">
            @endif
        </div>
        <div class="product__item__content">
            <h4 class="product__item__title"><a href="{{route('product-detail',$r->slug)}}">{{ $r->title }} {{ $r->color }} {{ $r->size }}</a></h4>
            @if($r->price != 0)
            <div class="product__item__price">Starting From ${{ $r->price }}</div>
            @endif
            @if($r->cat_id == 6)
            <a href="{{route('product-detail',$r->slug)}}" class="floens-btn product__item__link">
                <span>ENQUIRE Now</span>
                <i class="fa fa-question-circle"></i>
            </a>
            @else
            <a href="{{url('add-to-cart')}}/{{ $r->id }}" class="floens-btn product__item__link">
                <span>Add to Cart</span>
                <i class="fa fa-shopping-cart"></i>
            </a>
            @endif
        </div>
    </div>
</div>