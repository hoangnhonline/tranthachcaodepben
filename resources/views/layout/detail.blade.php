

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

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css?v=5') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.cluetip.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/jquery.qtip.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css?v=1.1') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/psbar.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('assets/css/star-rating.css') }}" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.lazyload.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.qtip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/md5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/123movies.min.js?v=2.2') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/psbar.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/star-rating.js') }}"></script>

    <link href="http://vjs.zencdn.net/5.10.8/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <script src="https://apis.google.com/js/platform.js" async defer></script>


    <script src="{{ URL::asset('assets/js/detectmobilebrowser.js') }}"></script>
    <script>
    /*
        if (!jQuery.browser.mobile) {
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                    d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set._.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?30GMg3whoKPZ7SHisuQCa7Y09ZkvdYCm";
                z.t = +new Date;
                $.type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        }*/
    </script>
</head>
<body>

<script>
   /* window.fbAsyncInit = function () {
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
        @include('layout.home.header-menu')  @include('layout.home.search') 
        <div class="clearfix"></div>
    </div>
</header>
<!--/header-->

<div class="header-pad"></div>
<div id="main" class="page-detail">
    <div class="container">
        <div class="pad"></div>
        <div class="main-content main-detail">

            @include('home.detail.bread')

            @yield('content')

            <!-- keywords -->
            @if( !empty( $tagSelected ) )
            <div id="mv-keywords">
                <strong class="mr10">Xem thêm:</strong>                    
                @foreach( $tagSelected as $tag )
                <a target="_blank" href="tags/{{ $tag->slug }}" title="{{ $tag->name }}">
                   <h5>{{ $tag->name }}</h5>
                </a>                    
                @endforeach           
            </div>
            @endif
            @if( $detail->content )

            <div class="content-kus" style="background: #fff;">
                <?php echo $detail->content ?>
            </div>
            @endif
            <!--<div id="commentfb">
                <div class="fb-comments" data-href="film/zombie-massacre-14452/watching.html" data-width="100%" data-numposts="5"></div>
            </div>-->
            <div class="pad"></div>
            <!--related-->
            @include('home.detail.related')
            <!--/related-->               

            
            <!--/related-->
        </div>

<!--        <div class="content-kus" style="text-align: center; margin: 20px 0; padding: 15px;">-->


            <!-- Begin js tags for 123movies.to_300x250_mobile - Do not Modify -->
<!--            <div id="bidadx_tag_6328"></div>-->
<!--            <script type="text/javascript">-->
<!---->
<!--                if (jQuery.browser.mobile) {-->
<!--                    var s = document.createElement('script');-->
<!--                    s.src = "//cdn.bidadx.com/bid/async.js";-->
<!--                    document.write(s.outerHTML);-->
<!--                    var bidadx_tags = window.bidadx_tags || [];-->
<!--                    bidadx_tags.push({-->
<!--                        tag_id: 6328,-->
<!--                        width: 300,-->
<!--                        height: 250-->
<!--                    });-->
<!--                }-->
<!--            </script>-->
            <!-- End Tags -->

<!--        </div>-->

    </div>
</div>
</div>
<div class="modal fade modal-cuz modal-trailer" id="pop-trailer" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                        class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Trailer: The Whole Truth</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body-trailer">
                    <iframe id="iframe-trailer" width="798" height="315" src=""
                            frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#pop-trailer').on('shown.bs.modal', function () {
        $('#iframe-trailer').attr('src', "https://www.youtube.com/embed/udNhyff-FIU");
    });
    $('#pop-trailer').on('hide.bs.modal', function () {
        $('#iframe-trailer').attr('src', '');
    });
    /*
    setTimeout(function () {
        updateMovieView(15476)
    }, 5000);
    */
</script>


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
                        everywhere, everydevice, and everything ;)</p>

                    <form id="login-form" method="POST" action="http://123movies.to/ajax/user_login">
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
                        the most exciting films.</p>

                    <form id="register-form" method="POST" action="http://123movies.to/ajax/user_register">
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
                        below.</p>

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
    <!--/ modal -->

<div class="alert-bottom" style="display: none;">
    <div class="container">
        <div class="alert-bottom-content">
            <p class="desc">You can access our site through <strong>http://123movies.cz</strong> domain if the main
                domain is blocked by your ISP.</p>
        </div>
        <div class="ab-btn">
            <a href="http://123movies.to" class="btn btn-domain" target="_blank">123movies.to</a>
            <div class="ab-or">OR</div>
            <a href="http://123movies.cz" class="btn btn-domain" target="_blank">123movies.cz</a>
        </div>
        <div title="Close" class="alert-bottom-close" id="alert-bottom-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div id="alert-cookie" role="alert" class="alert alert-warning alert-cookie" style="display: none;">
    <button type="button" class="close ml10" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <i class="fa fa-warning mr5" style="color:#C30;"></i> You need to enable browser's cookie to stream. <a
        href="http://123movies.to/how-to-enable-browser-cookie" title="">Click here for instruction.</a>
</div>

<script>
    if (!isCookieEnabled()) {
        $('#alert-cookie').css('display', 'block');
        $('body').addClass('off-cookie');
    }
</script>
<script src="http://vjs.zencdn.net/5.10.8/video.js"></script>

<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js?v=0.1') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap-select.js?v=0.1') }}"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5181dc394703fed7"
        async="async"></script>-->

<script type="text/javascript">
    /*
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
    */
</script>
<script type="text/javascript">
$(document).ready(function(){
    if (!jQuery.browser.mobile) {
        $('.jt').qtip({
            content: {
                text: function (event, api) {
                    $.ajax({
                        url: api.elements.target.attr('data-url'),
                        type: 'GET',
                        success: function (data, status) {
                            // Process the data

                            // Set the content manually (required!)
                            api.set('content.text', data);
                        }
                    });
                }, // The text to use whilst the AJAX request is loading
                title: function (event, api) {
                    return $(this).attr('title');
                }
            },
            position: {
                my: 'top left',  // Position my top left...
                at: 'top right', // at the bottom right of...
                viewport: $(window),
                effect: false,
                target: 'mouse',
                adjust: {
                    mouse: false  // Can be omitted (e.g. default behaviour),
                },
                show: {
                    effect: false
                }
            },
            hide: {
                fixed: true
            },
            style: {
                classes: 'qtip-light qtip-bootstrap',
                width: 320
            }
        });
    }
});

</script>
</body>
</html>

