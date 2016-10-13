<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>@yield('title')</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="robots" content="index,follow"/>
      <meta http-equiv="content-language" content="en"/>
      <meta name="description" content="@yield('site_description')"/>
      <meta name="keywords" content="@yield('site_keywords')"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
      <link rel="shortcut icon" href="@yield('favicon')" type="image/x-icon"/>
      <link rel="canonical" href=""/>
      <meta property="og:type" content="website"/>
      <meta property="og:image:width" content="650"/>
      <meta property="og:image:height" content="350"/>
      <meta property="og:image:type" content="image/jpeg"/>
      <meta property="og:image" content="@yield('banner')"/>
      <meta property="article:publisher" content="@yield('google_fanpage')"/>
      <meta property="og:url" content=""/>
      <meta property="og:title" content="@yield('title')"/>
      <meta property="og:description" content="@yield('site_description')"/>
      <meta property="og:site_name" content="@yield('site_name')"/>
      <meta property="og:updated_time" content="1468757347"/>
      <meta property="fb:app_id" content="@yield('facebook_appid')"/>
      <script>
         var base_url = 'http://' + document.domain + '/';
      </script>
       <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css?v=5') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.cluetip.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.qtip.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css?v=1.1') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/slide.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/psbar.css') }}" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.lazyload.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.qtip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/md5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/123movies.min.js?v=2.2') }}"></script>
   <script src="https://apis.google.com/js/platform.js" async defer></script>


    <script src="{{ URL::asset('assets/js/detectmobilebrowser.js') }}"></script>
   </head>
   <body>
      <script>
         /*
             window.fbAsyncInit = function () {
                 FB.init({
                     appId: '727243164041505',
                     cookie: true,  // enable cookies to allow the server to access
                                    // the session
                     xfbml: true,  // parse social plugins on this page
                     version: 'v2.6' // use graph api version 2.6
                 });
             };
         
             (function (d, s, id) {
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) {
                     return;
                 }
                 js = d.createElement(s);
                 js.id = id;
                 js.src = "//connect.facebook.net/en_US/sdk.js";
                 fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));
         */
      </script>
      <!--header-->
      <header>
         <div class="container">
            @include('layout.home.header-menu')
            @include('layout.home.search')
            <div class="clearfix"></div>
         </div>
      </header>
      <script type="text/javascript">
         var hidden = true;
         $('.search-suggest').mouseover(function () {
             hidden = false;
         });
         
         $('.search-suggest').mouseout(function () {
             hidden = true;
         });
         
         $('input[name=keyword]').keyup(function () {
             var keyword = $(this).val();
             if (keyword.trim().length > 2) {
                 $.ajax({
                     url: base_url + 'ajax/suggest_search',
                     type: 'POST',
                     dataType: 'json',
                     data: {keyword: keyword},
                     success: function (data) {
                         $('.search-suggest').html(data.content);
                         if (data.content.trim() !== '') {
                             $('.search-suggest').show();
                         } else {
                             $('.search-suggest').hide();
                         }
                     }
                 })
             } else {
                 $('.search-suggest').hide();
             }
         });
         $('input[name=keyword]').blur(function () {
             if (hidden) {
                 $('.search-suggest').hide();
             }
         });
         $('input[name=keyword]').focus(function () {
             if ($('.search-suggest').html() !== '') {
                 $('.search-suggest').show();
             }
         });
         
         $('input[name=keyword]').keypress(function (event) {
             if (event.which == 13) {
                 searchMovie();
             }
         });
         
         function searchMovie() {
             var keyword = $('input[name=keyword]').val();
             if (keyword.trim() !== '') {
                 keyword = keyword.replace(/(<([^>]+)>)/ig, "").replace(/[`~!@#$%^&*()_|\=?;:'",.<>\{\}\[\]\\\/]/gi, "");
                 keyword = keyword.split(" ").join("+");
                 window.location.href = base_url + 'movie/search/' + keyword;
             }
         }
      </script>
      <!--/header-->
      <div class="header-pad"></div>
      <!-- main -->
      <div id="main" class="{{ $page_name }}">
         <div class="container">
            @if( $page_name == "")
            <div class="top-content">
               <!-- slider -->
                @yield('slider')
               <!--/slider -->
               <!--top news-->
               @yield('top-news')
               <!--/top news-->
               <div class="clearfix"></div>
            </div>
            <!--social home-->
            <div class="social-home">
               <div class="sh-like">
                  <div class="fb-like" data-href="http://facebook.com/phim1p.com" data-layout="button_count"
                     data-action="like" data-show-faces="true" data-share="false"></div>
               </div>
               <div class="addthis_native_toolbox"></div>
               <span class="sh-text">Like and Share our website to support us.</span>
               <div class="clearfix"></div>
            </div>
            @else
            <div class="pad"></div>
            @endif
            <!--/social home-->
            <!--        <div class="subs-block" id="subs-block-home" style="display: none;">-->
            <!--            <div class="subs-content">-->
            <!--                <div class="subs-icon"></div>-->
            <!--                <div class="sbk-left">-->
            <!--                    <p class="desc">We're going to switch to a brand new domain. Subscribe for up-to-date information on-->
            <!--                        how to keep getting the movies and TV shows you love streamed to your device.</p>-->
            <!--                </div>-->
            <!--                <div class="sbk-right">-->
            <!--                    <div class="form-subs row">-->
            <!--                        <div class="col-sm-9 subc-input">-->
            <!--                            <i class="subc-email"></i>-->
            <!--                            <input type="email" placeholder="Enter your email" id="Email" name="email-home"-->
            <!--                                   class="form-control">-->
            <!---->
            <!--                        </div>-->
            <!--                        <div class="col-sm-3">-->
            <!--                            <button id="subscribe-submit-home" class="btn btn-block btn-success btn-approve"-->
            <!--                                    type="button" onclick="subscribe_home()">Subscribe-->
            <!--                            </button>-->
            <!--                        </div>-->
            <!--                        <div class="clearfix"></div>-->
            <!--                    </div>-->
            <!--                    <div id="error-email-subs" class="alert alert-danger error-block"></div>-->
            <!--                    <div id="success-subs" class="alert alert-success error-block"></div>-->
            <!--                </div>-->
            <!--                <div class="clearfix"></div>-->
            <!--            </div>-->
            <!--        </div>-->            
            <div class="main-content {{ $layout_name }}">
            	@yield('content')               
            </div><!--end main-content-->            
         </div>
      </div>
      <!--/main -->      
      @include('home.index.footer')
      <!-- Modal -->
      <div class="modal fade modal-cuz" id="pop-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                     class="fa fa-close"></i>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">MEMBER LOGIN AREA</h4>
               </div>
               <div class="modal-body">
                  <p class="desc">Watch HD Movies Online For Free and Download the latest movies. For everybody,
                     everywhere, everydevice, and everything ;)
                  </p>
                  <form id="login-form" method="POST" action="ajax/user_login">
                     <div class="block">
                        <input required type="text" class="form-control" name="username" id="username"
                           placeholder="Username or Email">
                     </div>
                     <div class="block mt10">
                        <input required type="password" class="form-control" name="password" id="password"
                           placeholder="Password">
                     </div>
                     <div style="display: none;" id="error-message" class="alert alert-danger"></div>
                     <div class="block mt10 small">
                        <label><input type="checkbox" style="vertical-align: sub; margin-right: 3px;"> Remember
                        me</label>
                        <div class="pull-right">
                           <a id="open-forgot" data-dismiss="modal" data-target="#pop-forgot"
                              data-toggle="modal" title="Forgot password?">Forgot password?</a>
                        </div>
                     </div>
                     <button id="login-submit" type="submit" class="btn btn-block btn-success btn-approve mt10">
                     Login
                     </button>
                     <!--                        <button type="button" class="btn btn-block btn-facebook mt10"><i-->
                     <!--                                class="fa fa-facebook mr10"></i>Login-->
                     <!--                            via facebook-->
                     <!--                        </button>-->
                     <div style="display: none;" id="login-loading" class="cssload-center">
                        <div class="cssload"><span></span></div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer text-center">
                  Not a member yet? <a id="open-register" data-dismiss="modal" data-target="#pop-register"
                     data-toggle="modal" title="">Join now!</a>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-cuz" id="pop-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                     class="fa fa-close"></i>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">You are welcome</h4>
               </div>
               <div class="modal-body">
                  <p class="desc">When becoming members of the site, you could use the full range of functions and
                     enjoy
                     the most exciting films.
                  </p>
                  <form id="register-form" method="POST" action="ajax/user_register">
                     <div class="block">
                        <input required type="text" class="form-control" name="full_name" id="full_name"
                           placeholder="Full name">
                     </div>
                     <div id="error-full_name" class="alert alert-danger error-block"></div>
                     <div class="block mt10">
                        <input required type="text" class="form-control" name="username" id="username"
                           placeholder="Username">
                     </div>
                     <div id="error-username" class="alert alert-danger error-block"></div>
                     <div class="block mt10">
                        <input required type="email" class="form-control" name="email" id="email"
                           placeholder="Email">
                     </div>
                     <div id="error-email" class="alert alert-danger error-block"></div>
                     <div class="block mt10">
                        <input required type="password" class="form-control" name="password" id="password"
                           placeholder="Password">
                     </div>
                     <div id="error-password" class="alert alert-danger error-block"></div>
                     <div class="block mt10">
                        <input required type="password" class="form-control" name="confirm_password"
                           id="confirm_password"
                           placeholder="Confirm Password">
                     </div>
                     <div id="error-confirm_password" class="alert alert-danger error-block"></div>
                     <button id="register-submit" type="submit" class="btn btn-block btn-success btn-approve mt20">
                     Register
                     </button>
                     <!--                        <button type="button" class="btn btn-block btn-facebook mt10"><i-->
                     <!--                                class="fa fa-facebook mr10"></i>Register-->
                     <!--                            via facebook-->
                     <!--                        </button>-->
                     <div style="display: none;" id="register-loading" class="cssload-center">
                        <div class="cssload"><span></span></div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer text-center">
                  <a id="open-register" style="color: #888" data-dismiss="modal" data-target="#pop-login"
                     data-toggle="modal" title=""><i class="fa fa-chevron-left mr10"></i> Back to login</a>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade modal-cuz" id="pop-forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                     class="fa fa-close"></i>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
               </div>
               <div class="modal-body">
                  <p class="desc">We will send a new password to your email. Please fill your email to form
                     below.
                  </p>
                  <form id="forgot-form">
                     <div class="block mt10">
                        <input type="email" class="form-control" name="email" id="email"
                           placeholder="Your email"
                           required>
                     </div>
                     <div style="display: none;" id="forgot-success-message" class="alert alert-success"></div>
                     <div style="display: none;" id="forgot-error-message" class="alert alert-danger"></div>
                     <button id="forgot-submit" type="submit" class="btn btn-block btn-success btn-approve mt20">
                     Submit
                     </button>
                     <div style="display: none;" id="forgot-loading" class="cssload-center">
                        <div class="cssload"><span></span></div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer text-center">
                  <a id="open-register" style="color: #888" data-dismiss="modal" data-target="#pop-login"
                     data-toggle="modal" title=""><i class="fa fa-chevron-left mr10"></i> Back to login</a>
               </div>
            </div>
         </div>
      </div>
      
      <div id="alert-cookie" role="alert" class="alert alert-warning alert-cookie" style="display: none;">
         <button type="button" class="close ml10" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
         </button>
         <i class="fa fa-warning mr5" style="color:#C30;"></i> You need to enable browser's cookie to stream. <a
            href="how-to-enable-browser-cookie" title="">Click here for instruction.</a>
      </div>
     
      <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js?v=0.1') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap-select.js?v=0.1') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/slide.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/psbar.jquery.min.js') }}"></script>
    @yield('javascript_page')
    <script>
      $("img.lazy").lazyload({
          effect: "fadeIn"
      });
        var swiper = new Swiper('#slider', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true,
            autoplay: 4000
        });

        $(function () {
            $('.tn-news, .tn-notice').perfectScrollbar();
        });
    </script>

<script type="text/javascript">
    $(document).ready(function () {
        if (window.top !== window.self) {
            document.head.innerHTML = '';
            document.body.innerHTML = '';
        }
        if (!$.cookie('domain-alert')) {
            $.cookie('domain-alert', 1, {expires: 1, path: '/'});
            $('.alert-bottom').css('display', 'block');
            setInterval(function () {
                $(".alert-bottom").remove();
            }, 15000);
        }
        $('#alert-bottom-close').click(function () {
            $(".alert-bottom").remove();
        });
    });
</script>

   </body>
</html>