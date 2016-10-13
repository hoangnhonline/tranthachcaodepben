<div id="header">
    <div class="banner"> <img src="{{ URL::asset('images/an-hung-thinh-banner.png') }}" style="width:100%;" alt="banner dagranit.vn" />
      <div class="logo_header"> <a href="{{ route('home') }}"> <img class="lazy" data-original="{{ Helper::showImage($settingArr['logo']) }}" height="100"> </a> </div>
      <div class="hotline" >{{ $settingArr['hot_line'] }}</div>
      <div class="box_icon">
        <div class="title">Follow us: </div>
        <div class="icon"> <a href="https://www.facebook.com/" target="_blank"> <img data-original="{{ URL::asset('images/ico-face.png') }}" alt="Facebook" class="lazy" /> </a> </div>
        <div class="icon"> <a href="https://twitter.com/" target="_blank"> <img data-original="{{ URL::asset('images/ico-tw.png') }}" alt="Twitter" class="lazy"/> </a> </div>
        <div class="icon"> <a href="https://www.google.com/" target="_blank"> <img data-original="{{ URL::asset('images/ico-google.png') }}" alt="Google" class="lazy"/> </a> </div>
        <div class="icon"> <a href="https://www.youtube.com/?gl=VN" target="_blank"> <img data-original="{{ URL::asset('images/ico-youtube.png') }}" alt="Youtube" class="lazy"/> </a> </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div id="menutop">
    <div class="menu clearfix" id="cssmenu">
      <ul>
        <li><a href="{{ route('home') }}" class="font_custom active">Trang chủ</a></li>
        <li class="line">&nbsp;</li>
        <li><a href="{{ route('gioithieu') }}" class="font_custom ">Giới thiệu</a></li>
        <li class="line">&nbsp;</li>
        <li><a href="javascript:void(0)" class="font_custom ">Trần Thạch Cao</a>
          <ul>
            <?php 
            $loaisp = DB::table('category')->get();
            ?>
            @foreach($loaisp as $row)
		@if($row->id < 4)
            <li><a href="{!! route('loaisp', [$row->slug, $row->id]) !!}">{!! $row->name !!}</a> </li>
@endif
            @endforeach
          </ul>
        </li><li class="line">&nbsp;</li>
        <li><a href="{!! route('loaisp', ['vach-ngan-thach-cao', 4]) !!}" class="font_custom ">Vách ngăn</a></li>
        <li class="line">&nbsp;</li>
        <li><a href="http://anhungthinh.com.vn/category/tu-van-thiet-ke-kien-truc/" target="_blank" class="font_custom ">Tư vấn – Thiết kế kiến trúc</a></li>
        
         <li class="line">&nbsp;</li>
         <li><a href="http://anhungthinh.com.vn/category/thi-cong-xay-dung/" target="_blank">Thi công xây dựng</a></li>              
        <li class="line">&nbsp;</li>
        <li><a href="{{ route('lienhe') }}" class="font_custom ">Liên hệ</a></li>
        
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  
  <div class="header-mobi">
  
      <div class="logo"> <a href="{{ route('home') }}" data-role="none" title="Trang chủ"> <img class="lazy" alt="banner dagranit.vn" data-original="{{ URL::asset('images/banner-mobi.jpg') }}"> </a> </div>
      
      <script>
        $(document).ready(function(){
          $('#header_fix .search_open').click(function(){
              $('#header_fix .search_box_hide').slideToggle();
          });  
          
          $('#header_fix .menu-mobi').hide();
          $('#header_fix .navmenu_link').click(function(){
              $('#header_fix .menu-mobi').slideToggle(500);
          });  
          
          $('.menu-mobi li').each(function() {
              if( $( this ).children('ul').length > 0 ) {
                  $( this ).addClass('parent');     
              }
          });
          
          $('.menu-mobi li.parent > a').click( function() {
              $(this).parent().toggleClass('active');
              $(this).parent().children('ul').slideToggle('fast');
          });
          
        });

      </script>
      
      <div id="header_fix" class="clearfix">
        <div class="header_fix_box clearfix"> 
          <a class="navmenu_link" href="javascript:;"><i class="fa fa-bars"></i></a> 
          <a class="search_open"><i class="fa fa-search"></i></a> 
        </div>
        <div class="menu-mobi">
          <ul>
            <li><a href="{{ route('home') }}">Trang chủ</a></li>
            <li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
            <li><a href="javascript:;">Sản phẩm</a>
              <ul>
                <?php 
              $loaisp = DB::table('category')->get();
              ?>
              @foreach($loaisp as $row)
              <li><a href="{!! route('loaisp', [$row->slug, $row->id]) !!}">{!! $row->name !!}</a> </li>
              @endforeach
              </ul>
            </li>            
            <li><a href="http://anhungthinh.com.vn/category/tu-van-thiet-ke-kien-truc/" target="_blank" class="font_custom ">Tư vấn – Thiết kế kiến trúc</a></li>  
            <li><a href="http://anhungthinh.com.vn/category/thi-cong-xay-dung/" target="_blank" class="font_custom ">Thi công xây dựng</a></li>
            <li><a href="javascript:;">Thi công đá</a>
              <ul>
                <li><a href="{{ route('news-list', 'thi-cong-bep') }}">Thi công bếp</a> </li>
                <li><a href="{{ route('news-list', 'thi-cong-cau-thang') }}">Thi công cầu thang</a> </li>
                <li><a href="{{ route('news-list', 'thi-cong-mat-tien') }}">Thi công mặt tiền</a> </li>
              </ul>
            </li>       
            
            <li><a href="{{ route('bang-gia') }}" class="font_custom ">Bảng giá</a></li>
            <li><a href="{{ route('lienhe') }}" class="font_custom ">Liên hệ</a></li>
          </ul>
        </div>       
      </div>

  </div>
