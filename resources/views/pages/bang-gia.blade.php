@extends('master')
@section('content')
<div id="wrapper">

    <div class="container_wrapper">
      @include('blocks.sidebar')<!-- end container_left -->
      
      <div class="container_mid">

        <div class="about-content">
          <h3 class="page-title">Bảng giá {{ mb_strtolower($detail->title, 'UTF-8') }}</h3>
          <div class="about-content-main">
            <?php echo $detail->content; ?>
          </div><!-- about-detail -->
          <div class="clearfix" style="margin-bottom:20px"></div>
        </div>
        
      </div><!-- end /.container_mid -->
      
    </div>
    <div class="clear"></div>
  </div>
  @endsection