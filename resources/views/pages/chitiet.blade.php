@extends('master')
@section('content')
<div id="wrapper">

    <div class="container_wrapper">
      <!-- end container_left -->@include('blocks.sidebar')
      
      <div class="container_mid">

        <div class="product-detail">
        @foreach($chitietsp as $row)
          <div class="row">
            <div class="col-sm-5"> 
              <div class="product-thumb">
                <div class="thumb-big">
                  <img src="{{ URL::asset('uploads') }}/{!! $row->image_url !!}"" alt="" class="thumb">
                </div>
              </div>
            </div>
            <div class="col-sm-7">
              <ul class="product-info">
                <li><h2 class="name_product">{!! $row->name !!}</h2></li>
                <li><span class="lbl"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Mã sản phẩm : </span> <span class="code">{!! $row->ma_sp !!}</span></li>
                <li><span class="lbl"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Giá bán : </span> <span class="price">{{ $row->price }}</span></li>
              </ul>
              
                              
              <div class="desc-content">
                  {!! $row->description !!}
              </div>
              
              
            </div>
          </div> 
        
        </div><!-- product-detail -->
        <?php 
          $tenspcungloai = DB::table('category')->where('id', $row->cate_id)->get();
        ?>
        @foreach($tenspcungloai as $row1)
        <div class="box_content">
          <div class="tcat clearfix">
            <h3 class="icon"><a>{!! $row1->name !!}</a></h3>
          </div>
          <div class="content"> 
            <div class="show_prohome clearfix"> 
              <?php 
                $spcungloai = DB:: table('product')->where('cate_id', $row1->id)->where('id', '<>', $row->id)->get();
              ?>
              @foreach($spcungloai as $row2)
              <div class="item_product wow fadeInUp col-md-3 col-sm-4 col-xs-6" style="visibility: hidden; animation-name: none;"> 
                <div class="images"> 
                  <a href="{!! route('chitietsp', [$row2->slug, $row2->id]) !!}"><img src="{{ URL::asset('uploads') }}/{!! $row2->image_url !!}" onerror="this.src='images/noimage.gif';" alt="{!! $row2->image_url !!}"></a>
                  <h4 class="pro-tit"> <a href="{!! route('chitietsp', [$row2->slug, $row2->id]) !!}"> {!! $row2->name !!} </a> </h4>
                </div>
                <div class="caption">
                  <div class="price"><span class="txt">Giá </span><p class="number">{{ $row2->price }}</p></div>
                  <div class="contact"><span class="txt">Liên hệ </span><a href="tel:{{ $settingArr['hot_line'] }}" class="number"><i class="fa fa fa-phone"></i></a></div>
                </div>
              </div>
              @endforeach
              
            </div><!-- end /.product-list -->
            
            <!-- end pagination -->
            
          </div>
        </div>
        @endforeach
      </div><!-- end /.container_mid -->
      @endforeach
    </div>
    <div class="clear"></div>
  </div>
  @endsection