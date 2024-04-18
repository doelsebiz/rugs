<form id="filterproduct" class="cr-shop-sideview" method="POST" action="{{ url('filterproducts') }}">
    @csrf
    <div class="cr-shop-categories">
        <h4 class="cr-shop-sub-title">Category</h4>
        <div class="cr-checkbox">
            <div class="checkbox-group">
                <input onchange="submitfilter()" type="checkbox" name="category[]" value="13" id="drinks">
                <label for="drinks">Rugs</label>
                <span>{{ DB::table('products')->where('cat_id' , 13)->count() }}</span>
            </div>
            <div class="checkbox-group">
                <input name="category[]" value="6" type="checkbox" id="drinks1">
                <label for="drinks1">Carpets</label>
                <span>{{ DB::table('products')->where('cat_id' , 6)->count() }}</span>
            </div>
        </div>
    </div>
    <div class="cr-shop-color">
        <h4 class="cr-shop-sub-title">Yarn</h4>
        <div class="cr-checkbox" style="@if(DB::table('products')->wherenotnull('yarn')->groupby('yarn')->count() > 8) height: 300px; @endif overflow: auto;margin-bottom: 10px;">
            @foreach(DB::table('products')->wherenotnull('yarn')->groupby('yarn')->get() as $y)
            <div class="checkbox-group">
                <input name="yarn[]" value="{{ $y->yarn }}" type="checkbox" id="yarn{{ $y->id+1 }}">
                <label for="yarn{{ $y->id+1 }}">{{ $y->yarn }}</label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="cr-shop-color">
        <h4 class="cr-shop-sub-title">Colors</h4>
        <div class="cr-checkbox" style="height: 300px;overflow: auto;margin-bottom: 10px;">
            @foreach(DB::table('product_colors')->groupby('colors')->get() as  $filtercolor => $c)
            <div class="checkbox-group">
                <input name="colors[]" value="{{ $c->colors }}" type="checkbox" id="color{{ $filtercolor+1 }}">
                <label for="color{{ $filtercolor+1 }}">{{ DB::table('sizeandcolors')->where('colors' , $c->colors)->first()->tone }}</label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="cr-shop-weight">
        <h4 class="cr-shop-sub-title">Size</h4>
        <div class="cr-checkbox" style="height: 300px;overflow: auto;margin-bottom: 10px;">
            @foreach(DB::table('product_colors')->groupby('sizes')->get() as  $filtersize => $s)
            <div class="checkbox-group">
                <input name="size[]" value="{{ $s->sizes }}" type="checkbox" id="size{{ $filtersize+1 }}">
                <label for="size{{ $filtersize+1 }}">{{ $s->sizes }}</label>
            </div>
            @endforeach
        </div>
    </div>
</form>
<script type="text/javascript">
    $('#filterproduct').on('submit',(function(e) {
        $('.cr-product-card').addClass('addblurr');
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success: function(data){
                $('#showproductsection').html(data);
            }
        });
    }));
</script>
<script>
$(document).ready(function(){
    $('input[type="checkbox"]').addClass('myCheckbox');

    $('.myCheckbox').change(function(){
        if($(this).is(':checked')){
           $('#filterproduct').submit();
        } else {
            $('#filterproduct').submit();
        }
    });
});
</script>