<div class="col-xl-3 col-lg-4 col-md-6 ">
    <div class="product__item wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
        <div class="product__item__image">
            @if(DB::table('product_images')->where('product_id' , $r->id)->first())
            <img src="{{ url('public/images') }}/{{ DB::table('product_images')->where('product_id' , $r->id)->first()->image }}" alt="{{$r->title}}">
            @else
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh_2e8C2K5k5slozTp96XOBMD6aYMlj2YQ223BxU-kQA&s">
            @endif
        </div><!-- /.product-image -->
        <div class="product__item__content">
            <!-- <div class="floens-ratings product__item__ratings">
                <span class="icon-star"></span>
                <span class="icon-star"></span>
                <span class="icon-star"></span>
                <span class="icon-star"></span>
                <span class="icon-star"></span>
            </div> -->
            <h4 class="product__item__title"><a href="{{route('product-detail',$r->slug)}}">{{ \Illuminate\Support\Str::limit($r->title, 30, $end='...') }}</a></h4>
            <!-- /.product-title -->
            <div class="product__item__price">Starting From ${{ $r->price }}</div>
            <!-- /.product-price -->
            <a href="{{url('add-to-cart')}}/{{ $r->id }}" class="floens-btn product__item__link">
                <span>Add to Cart</span>
                <i class="icon-cart"></i>
            </a>
        </div><!-- /.product-content -->
    </div><!-- /.product-item -->
</div><!-- /.col-md-6 col-lg-4 -->