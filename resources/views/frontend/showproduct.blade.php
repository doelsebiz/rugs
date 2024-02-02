<div class="col-xl-3 col-lg-4 col-md-6 ">
    <div class="product__item wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
        <div class="product__item__image">
            <img src="{{ url('public/images') }}/{{ $r->photo }}" alt="Natural Stone Tiles">
        </div><!-- /.product-image -->
        <div class="product__item__content">
            <div class="floens-ratings product__item__ratings">
                <span class="icon-star"></span>
                <span class="icon-star"></span>
                <span class="icon-star"></span>
                <span class="icon-star"></span>
                <span class="icon-star"></span>
            </div><!-- /.product-ratings -->
            <h4 class="product__item__title"><a href="{{route('product-detail',$r->slug)}}">{{$r->title}}</a></h4>
            <!-- /.product-title -->
            <div class="product__item__price">Starting From ${{ $r->price }}</div>
            <!-- /.product-price -->
            <a href="{{route('add-to-cart',$r->slug)}}" class="floens-btn product__item__link">
                <span>Add to Cart</span>
                <i class="icon-cart"></i>
            </a>
        </div><!-- /.product-content -->
    </div><!-- /.product-item -->
</div><!-- /.col-md-6 col-lg-4 -->