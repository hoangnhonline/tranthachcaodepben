<div class="box_slider">
      <link rel="stylesheet" type="text/css" href="assets/wowslider/style.css"/>
      <div class="content-slider">
        <div id="wowslider-container1">
          <div class="ws_images">
            <ul><?php 
                  $tmpArr = DB::table('images')->where('album_id', 1)->get();                  
                  ?>
                  @foreach( $tmpArr as $img )
                <li>
                  
                    <a href="#" target="_blank">
                      <img src="{{ Helper::showImage($img->image_url) }}" alt="dagranit.vn">
                    </a>                              
                  
                  
                </li>
                @endforeach
            </ul>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <script type="text/javascript" src="{{ URL::asset('assets/wowslider/wowslider.js') }}"></script> 
      <script type="text/javascript" src="{{ URL::asset('assets/wowslider/script.js') }}"></script> 
    </div>
    <div class="fullboxaboutnb">
      <div class="container_wrapper">
        <div class="boxab_l">
          <div class="about-slide" style="width:330px; float:left">
          <?php 
            $tmpArr = DB::table('images')->where('album_id', 4)->get();                  
            ?>
            @foreach( $tmpArr as $img )
            <div class="picaboutnb">
              <img src="{{ Helper::showImage( $img->image_url ) }}" alt="da hoa cuong An Hung Thinh">
            </div>            
             @endforeach
          </div>
          <div class="boxcontentabout">
            <div class="nameaboutnb"><a href="{{ route('gioithieu') }}">Trần thạch cao đẹp - bền</a></div>
            <div class="contentnb">{{ $about->description }}</div>
            <span><a href="{{ route('gioithieu') }}"> Chi tiết >> </a></span> </div>
        </div>
        <div class="boxab_r">
          <div class="boxkhoxuong">
            <ul id="owl_khoxuong">
                <?php 
                $tmpArr = DB::table('images')->where('album_id', 2)->get();                  
                ?>
                @foreach( $tmpArr as $img )
                <li class="item">
                  <div class="boxpickx"> 
                        
                      <img src="{{ Helper::showImage($img->image_url) }}" alt="dagranit.vn" height="197">
                   
                  </div>
                  <!--<div class="namekx"> <a class="fancy_khoxuong" rel="grp_khoxuong2" href="upload/news/05408920.jpg"> dahoacuong.co </a> </div>-->
                </li>                      
                @endforeach             
              
            </ul>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
