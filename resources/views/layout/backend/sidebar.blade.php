<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset('be/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->full_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>Quản lý sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
          <li><a href="{{ route('product.index') }}"><i class="fa fa-circle-o"></i> Sản phẩm</a></li>          
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>Quản lý bài viết</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ route('articles.index') }}"><i class="fa fa-circle-o"></i> Bài viết</a></li>
          <li><a href="{{ route('articles-cate.index') }}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>Quản lý hình ảnh</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{ route('album.index') }}"><i class="fa fa-circle-o"></i> Album</a></li>
          <li><a href="{{ route('images.index') }}"><i class="fa fa-circle-o"></i> Hình</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ route('video.index') }}">
          <i class="fa fa-th"></i> <span>Video</span>         
        </a>        
      </li>
      <li class="treeview">
        <a href="{{ route('ykien.index') }}">
          <i class="fa fa-th"></i> <span>Ý kiến khách hàng</span>         
        </a>        
      </li>
      <li class="treeview">
        <a href="{{ route('pages.index') }}">
          <i class="fa fa-th"></i> <span>Trang</span>         
        </a>        
      </li>       
      <li class="treeview">
        <a href="{{ route('settings.index') }}">
          <i class="fa fa-th"></i> <span>Cài đặt</span>         
        </a>        
      </li>      
      <!--<li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>