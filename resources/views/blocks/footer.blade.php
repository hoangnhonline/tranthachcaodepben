<div id="doitac" style="background-color:#F5F5F5;padding:10px">

  <div class="container_wrapper">
      <h4 style="color:#0000DD;margin-bottom:10px" >KHÁCH HÀNG – ĐỐI TÁC</h4>
      <div class="clearfix"></div>
        <div class="customers">
          <?php 
            $tmpArr = DB::table('images')->where('album_id', 5)->get();                  
            ?>
            @foreach( $tmpArr as $img )
          <div class="item-cus"><img src="{{ Helper::showImage( $img->image_url ) }}"  width="250" height="125" alt="doi tac An Hung Thinh"></div>
          @endforeach
        </div>
      </div>
    </div>
</div>
<div id="footer">
    <div class="box_footer container">
      <div class="footer_left">
        <h3 class="footer-box-tit">CÔNG TY TNHH ĐẦU TƯ XDTM AN HƯNG THỊNH</h3>
        <p><span style="color:#FFFFFF">Địa chỉ: 131 đường 9, phường Phước Bình, Quận 9, Hồ Chí Minh</span></p>        
        <p><span style="color:#FFFFFF">Email: anhungthinh.gov@gmail.com</span></p>
        <p><span style="color:#FFFFFF">Hotline: 093 857 8439 -0982 414 939</span></p>
        <div class="clear"></div>
      </div>
      <div class="footer-news-list">
        <h3 class="footer-box-tit">Thông tin</h3>
        <ul>          
          <li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
          <li><a href="{{ route('news-list', 'tin-tuc') }}">Tin tức</a></li>
          <li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
        </ul>
      </div>
      <div class="footer_mid">
        <h3 class="footer-box-tit">Fanpage facebook</h3>
        <div class="khungtktc">
          <div class="fb-page" data-href="https://www.facebook.com/anhungthinhcompany" data-tabs="timeline" data-width="350" data-height="150" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/anhungthinhcompany" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/anhungthinhcompany">AN HƯNG THỊNH</a></blockquote></div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">Copyright © An Hưng Thịnh, Inc. All Rights Reserved.</div>
  </div>
  <div id="footer-mobi">
    <table class="table-style" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><a class="link_title blink_me ui-link" href="tel:{{ $settingArr['hot_line'] }}"><img class="lazy" data-original="{{ URL::asset('images/goidien.png') }}"> Gọi điện</a></td>
          <td height="50"><a class="link_title ui-link" target="_blank" href="sms:{{ $settingArr['hot_line'] }}"><img class="lazy" data-original="{{ URL::asset('images/tuvan.png') }}"> SMS</a></td>
          <td><a class="link_title ui-link" href="{{ route('lienhe') }}"><img class="lazy" data-original="{{ URL::asset('images/chiduong.png') }}">Chỉ Đường</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>