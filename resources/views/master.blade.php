<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thạch cao Hưng Thịnh - Một sản phẩm của An Hưng Thịnh</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/favicon.png') }}">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow" />
<meta name="author" content="" />
<meta name="copyright" content="dagranit.vn" />
<meta itemprop="name" content="dagranit.vn">
<meta itemprop="description" content="dagranit.vn">
<meta name="DC.title" content="dagranit.vn" />
<meta name="DC.language" scheme="utf-8" content="vi" />
<meta name="DC.identifier" content="index.html" />
<meta name="robots" content="index,follow" />
<meta name='revisit-after' content='1 days' />
<meta http-equiv="content-language" content="vi" />
<meta property="og:site_name" content="dagranit.vn" />
<meta property="og:type" content="Website" />
<meta property="og:title" content="dagranit.vn" />
<meta property="og:description" content="dagranit.vn" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap-3.2.0/css/bootstrap.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fancybox/jquery.fancybox.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/menu/menumaker.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/mycss.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/Font-Awesome-master4.5/css/font-awesome.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/owl.carousel2.4/owl.carousel.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('assets/simplyscroll/jquery.simplyscroll.css') }}" media="all" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('assets/animate/animate.css') }}" media="all" type="text/css">


<link href="{{ URL::asset('css/common.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="(min-width: 980px)">
<link href="{{ URL::asset('css/style_mobile.css') }}" rel="stylesheet" type="text/css">

<link href="{{ URL::asset('assets/slick/slick.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('assets/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">

<script type="text/javascript" src="{{ URL::asset('js/jquery.min.1.10.js') }}"></script>
</head>


<body >
<div id="bg_page">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=567408173358902";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  @include('blocks.header')
  
  @yield('content')
  
  @include('blocks.footer')

<div class="scroll-top"> <img src="{{ URL::asset('images/icon-scroll-top.png') }}" alt="Lên đầu trang" /> </div>
<!--scroll-top-->
<div id='ads-left' class="hidden-xs hidden-sm">
  <div style='margin:0 0 5px 0; padding:0;position:fixed; left:0; top:175px;z-index: 999'>
    <a href='http://anhungthinh.com.vn/bang-gia/nha-pho/' target='_blank'><img border='0' src="{{ URL::asset('images/banner-AHT-l.png') }}" width='100'/></a>
  </div>
</div>
<div id='ads-right' class="hidden-xs hidden-sm">
  <div style='margin:0 0 5px 0; padding:0; position:fixed; right:0; top:175px;;z-index: 999'>
    <a href='http://anhungthinh.com.vn/bang-gia/nha-pho/' target='_blank'><img border='0' src="{{ URL::asset('images/banner-AHT-r.png') }}" width='100' /></a>
  </div>
</div>
<style type="text/css">
     
      #doitac img {
        border: 1px solid #ddd !important;
      }
      #doitac .item-cus{
          padding-right: 12px;
          text-align: center !important;
          display: inline-block !important;
          float: none !important;
          vertical-align: middle !important;
      }
       #doitac button.slick-prev,  #doitac button.slick-prev:hover,  #doitac button.slick-prev:focus {
          background: url({{ URL::asset('assets/images/arrow-left.png') }}) 0 0 no-repeat !important;
          background-size: 15px 26px !important;
      }
       #doitac button.slick-next,  #doitac button.slick-next:hover,  #doitac button.slick-next:focus {
          background: url({{ URL::asset('assets/images/arrow-right.png') }}) 0 0 no-repeat !important;
          background-size: 15px 26px !important;
      }
      #doitac button.slick-arrow {
          background-color: transparent!important;
          width: 15px;
          height: 26px;
          position: absolute;
          z-index: 999;
          border: 0px !important;
          padding: 0 !important;
          margin: 0px !important;
          border-radius: 0px !important;
      }
      .slick-dotted.slick-slider{
        margin-bottom: 0px !important;
      }
      .comment-content{
        padding: 10px;
        font-size: 14px;
        font-weight: bold;
        text-align: justify;
      }
      .contact-face {
        position: fixed;
        right: 0;
        bottom: -300px;
        z-index: 10000;
        width: 320px;
        -webkit-transition: width .5s;
        transition: width .5s;
        line-height: 25px;
    }
  </style>
<script type="text/javascript" src="{{ URL::asset('assets/bootstrap-3.2.0/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/bootstrap-3.2.0/js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/menu/menumaker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/lazy.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/myscript.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/owl.carousel2.4/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/simplyscroll/jquery.simplyscroll.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('assets/script_scroll/plugins-scroll.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/slick/slick.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('a.load-box').on('click', function(){
        var id = $(this).attr('data-value');
        $.fancybox({        
            autoSize: true,
            href: "{{ route('load-box')}}?id=" + id,
            type: 'ajax'
        });
    });
    $('.customers').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,      
      infinite: true,
      centerMode: true,
      variableWidth: true,
      autoplay: true,
      autoplaySpeed: 3000,
    });
    $('.about-slide').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots : true,    
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $('#customer-comment').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1, 
      autoplay: true,
      autoplaySpeed: 2000,
    });
  });
function closeface() {
    jQuery('.xclose').css('display', 'none');
    jQuery('.xopen').css('display', 'block');
    jQuery('.contact-face').css('bottom', '-300px');
}
function openface() {
    jQuery('.xclose').css('display', 'block');
    jQuery('.xopen').css('display', 'none');
    jQuery('.contact-face').css('bottom', '0');
}

</script>
<div class="contact-face" style="">
        <div class="title_quancaog" style="background: #1f7c14;color: #fff;padding: 3px 10px;cursor:pointer;">
        <p class="xclose" style="display: none;margin: 0;" onclick="closeface();"><i class="fa fa-minus" aria-hidden="true" style="margin-right: 10px;"></i>Hỗ trợ trực tuyến</p>
        <p class="xopen" style="margin: 0;" onclick="openface();"><i class="fa fa-envelope-o" style="margin-right: 10px;" aria-hidden="true"></i>Để lại lời nhắn</p>
    </div>
    <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/anhungthinhcompany/" data-width="320px" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/anhungthinhcompany/">
                <a href="https://www.facebook.com/anhungthinhcompany/">An Hung Thinh</a>
            </blockquote>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">      
      <div class="modal-body" style="height:150px;text-align:center;vertical-align:middle;margin-top:20px" >
        <h2>{{ $settingArr['hot_line'] }}</h2>

        <p style="margin-top:20px;font-size:18px">Đang gọi...</p>

      </div>
      <div class="modal-footer" style="text-align:center">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color:#950025">Kết thúc</button>
      </div>
    </div>

  </div>
</div>
<style type="text/css">
  .modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}  
</style>
</body>
</html>
