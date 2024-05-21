<div class="col-xxl-4 col-xl-4 col-6 cr-product-box mb-24">
    <a href="{{route('product-detail',$r->slug)}}" class="cr-product-card">
        <div class="cr-product-image">
            <div class="cr-image-inner zoom-image-hover">
                @if(isset($color))
                @if(DB::table('product_variation_images')->where('color' , $color)->where('product_id' , $r->id)->first())
                <img src="{{ url('public/images') }}/{{ DB::table('product_variation_images')->where('product_id' , $r->id)->where('color' , $color)->first()->image }}" alt="{{$r->title}}">
                @else
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh_2e8C2K5k5slozTp96XOBMD6aYMlj2YQ223BxU-kQA&s">
                @endif
                @else
                @if(DB::table('product_images')->where('product_id' , $r->id)->orderby('orderby' , 'ASC')->first())
                <img src="{{ url('public/images') }}/{{ DB::table('product_images')->where('product_id' , $r->id)->first()->image }}" alt="{{$r->title}}">
                @else
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh_2e8C2K5k5slozTp96XOBMD6aYMlj2YQ223BxU-kQA&s">
                @endif
                @endif
            </div>
        </div>
        <div class="cr-product-details">
            <!-- <div class="cr-brand">
                <div class="cr-star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <p>(4.5)</p>
                </div>
            </div> -->
            <p class="title">{{ $r->title }}</p>
            @if($r->price != 0)
            @if(DB::table('product_colors')->where('product_id' , $r->id)->first())
            <p class="cr-price"><span class="new-price">Starting From ${{ DB::table('product_colors')->where('product_id' , $r->id)->first()->price }}</span></p>
            @endif
            @endif
            
        </div>
    </a>
</div>