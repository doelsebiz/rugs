<section class="product-page product-page--left section-space-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="cr-shop-bredekamp">
                    <div class="cr-toggle">
                        <a href="javascript:void(0)" class="gridCol active-grid">
                            <i class="ri-grid-line"></i>
                        </a>
                        <a href="javascript:void(0)" class="gridRow">
                            <i class="ri-list-check-2"></i>
                        </a>
                    </div>
                    <div class="center-content">
                        <span>We found {{ $data->count() }} items for you!</span>
                    </div>
                    <div class="cr-select">
                        <label>Sort By :</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Newest</option>
                            <option value="1">Low To Heigh</option>
                            <option value="2">Height T Low</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gutter-y-60">
            <div class="col-xl-12 col-lg-12">
                <div class="row gutter-y-30">
                    @if(isset($colors))
                        @foreach($data as $r)
                            @php
                                $count = DB::table('product_colors')->where('product_id', $r->id)->whereIn('colors', $colors)->whereIn('sizes', $sizes)->count();
                            @endphp
                            @if($count > 0)
                            @include('frontend.showproduct')
                            @endif
                        @endforeach
                    @else
                        @foreach($data as $r)
                            @include('frontend.showproduct')
                        @endforeach
                    @endif
                </div><!-- /.row -->
            </div><!-- /.col-lxl9  col-lg-8-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.product-page section-space-bottom -->