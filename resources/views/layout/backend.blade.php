<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>An Hưng Thịnh | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ URL::asset('be/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('be/dist/css/AdminLTE.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('be/dist/css/skins/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('be/plugins/iCheck/flat/blue.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('be/dist/css/sweetalert2.min.css') }}">  
  <link rel="stylesheet" href="{{ URL::asset('be/dist/css/select2.min.css') }}">  
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layout.backend.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layout.backend.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2016 .All rights
    reserved.
  </footer> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<input type="hidden" id="route_update_order" value="{{ route('update-order') }}">
<input type="hidden" id="route_get_slug" value="{{ route('get-slug') }}">
  <div class="control-sidebar-bg"></div>
</div>
<input type="hidden" id="upload_url" value="{{ config('anhungthinh.upload_url') }}">

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ URL::asset('be/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('be/dist/js/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('be/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ URL::asset('be/dist/js/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('be/dist/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('be/dist/js/es6-promise.min.js') }}"></script>
<script src="{{ URL::asset('be/dist/js/finally.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('be/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('be/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('be/dist/js/demo.js') }}"></script>
<script type="text/javascript" type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
});
  
</script>

@yield('javascript_page')
</body>
</html>