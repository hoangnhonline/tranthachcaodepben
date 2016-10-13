<div id="productID" class="fancyProductDetail">
    <div class="col-sm-8" style="padding-left: 0;">
      <div class="product-thumb"><img src="{{ URL::asset('uploads') }}/{!! $detail->image_url !!}"  alt="{{ $detail->name }}"></div>
    </div>
    <div class="col-sm-4">
      <ul class="product-info" style="padding-right: 0;">
        <li><h2 class="name_product">{{ $detail->name }}</h2></li>
        <li><span class="lbl"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Mã sản phẩm : </span> <span class="code">{{ $detail->ma_sp }}</span></li>
        <li><span class="lbl"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Giá bán : </span> <span class="price">{{ $detail->price }}</span> </li>
      </ul>
    </div>
</div>