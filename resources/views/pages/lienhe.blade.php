@extends('master')
@section('content')
<div id="wrapper">
   <div class="box_slider"></div>
   <div class="container_wrapper">
      @include('blocks.sidebar')
      <div class="container_mid">
         
         <div class="box_content">
            <div class="tcat">
               <div class="icon"><a>Liên hệ</a></div>
               <div class="clear"></div>
            </div>
            <div class="content">
               <div class="clear" style="border-bottom:2px solid #E2D9CF; margin-bottom:20px;">&nbsp;</div>                             
               <div style="clear:both"></div>
               <div class="box_map"> 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9549098157554!2d106.77124455078736!3d10.814762661403408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317526f6fe0a46af%3A0xca2910cd849b9219!2zMTMxIMSQxrDhu51uZyA5LCBQaMaw4bubYyBCw6xuaCwgUXXhuq1uIDksIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1475062669437" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <!-- end .box-new-->
               <div class="clear" style="border-bottom:2px solid #E2D9CF; margin-bottom:20px;">&nbsp;</div>
               <p><span style="font-size:16px"><span style="color:#B22222"><strong>CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG THƯƠNG MẠI AN HƯNG THỊNH</strong></span></span></p>
               <p><span style="color:rgb(0, 0, 0); font-family:arial; font-size:12px"><strong>Địa chỉ:</strong>&nbsp; 131 đường 9, phường Phước Bình, Quận 9, Hồ Chí Minh</span></p>
               <p><span style="color:rgb(0, 0, 0); font-family:arial; font-size:12px"><strong>Điện thoại:</strong>&nbsp; <em><strong>093 857 8439 - 0982 414 939</strong></em></span></p>
               <p><span style="color:rgb(0, 0, 0); font-family:arial; font-size:12px"><strong>Email:</strong>&nbsp;  anhungthinh.gov@gmail.com</span></p>
               <div class="clear" style="border-bottom:2px solid #E2D9CF; margin-bottom:20px;">&nbsp;</div>
               <form method="post" name="frm" class="forms" action="#">
                  <div class="tbl-contacts">
                     <div class="pad-contact">
                        <input type="text" class="form-control" name="ten" id="ten" placeholder="Họ tên" required="" oninvalid="this.setCustomValidity('Bạn chưa điền họ tên.')" oninput="setCustomValidity('')">
                     </div>
                     <div class="pad-contact">
                        <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Địa chỉ" required="" oninvalid="this.setCustomValidity('Bạn chưa điền địa chỉ.')" oninput="setCustomValidity('')">
                     </div>
                     <div class="pad-contact">
                        <input class="form-control" name="dienthoai" id="dienthoai" placeholder="Điện thoại" type="tel" required="" oninvalid="this.setCustomValidity('Bạn chưa điền điện thoại.')" oninput="setCustomValidity('')">
                     </div>
                     <div class="pad-contact">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="" oninvalid="this.setCustomValidity('Bạn chưa điền email.')" oninput="setCustomValidity('')">
                     </div>
                     <div class="pad-contact">
                        <input type="text" class="form-control" name="tieude1" id="tieude1" placeholder="Chủ đề" required="" oninvalid="this.setCustomValidity('Chủ đề')" oninput="setCustomValidity('')">
                     </div>
                     <div class="pad-contact">
                        <textarea name="noidung" id="noidung" class="form-control" rows="3" required="" oninvalid="this.setCustomValidity('Nội dung')" oninput="setCustomValidity('')"></textarea>
                     </div>
                     <div class="pad-contact">
                        <input style="width:78%; float:left;" name="captcha" type="text" id="captcha" class="form-control" placeholder="Mã xác nhận">
                        <img src="{{ captcha_src() }}" style="float:left;margin-left:10px;height: 34px; border-radius: 5px;">
                     </div>
                     <div class="clear"></div>
                     <div class="pad-contact" style="text-align: center;">
                        <button type="button" class="button" onclick="js_submit()">Gửi</button>
                        <input class="button" type="button" value="Nhập lại" onclick="document.frm.reset();">
                     </div>
                  </div>
               </form>
               <div class="clear"></div>
            </div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
   <div class="clear"></div>
</div>

<script type="text/javascript">
    function js_submit(){
      
       if(isEmpty(document.getElementById('ten'), "Bạn chưa điền họ tên.")){
        document.getElementById('ten').focus();
        return false;
      }
    
      if(isEmpty(document.getElementById('diachi'), "Bạn chưa điền địa chỉ.")){
        document.getElementById('diachi').focus();
        return false;
      }
      
      
      if(isEmpty(document.getElementById('dienthoai'), "Bạn chưa điền điện thoại.")){
        document.getElementById('dienthoai').focus();
        return false;
      }
      
      if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ.")){
        document.getElementById('dienthoai').focus();
        return false;
      }
    
      if(!check_email(document.frm.email.value)){
        alert("Vui lòng nhập đúng địa chỉ email.");
        document.frm.email.focus();
        return false;
      }
      
      if(isEmpty(document.getElementById('tieude1'), "Xin nhập chủ đề")){
        document.getElementById('tieude1').focus();
        return false;
      }
      
      if(isEmpty(document.getElementById('noidung'), "Xin nhập nội dung")){
        document.getElementById('noidung').focus();
        return false;
      }
      
      document.frm.submit();
    }
 </script>
@endsection