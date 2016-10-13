@extends('master')
@section('content')
<div id="wrapper">

  <div class="container_wrapper">
    @include('blocks.sidebar')<!-- end container_left -->
    
    <div class="container_mid">

      <div class="about-content">
        <h3 class="page-title">{{ $cateDetail->name }}</h3>
        <div class="about-content-main">
           @if( $articlesArr )
                @foreach( $articlesArr as $articles )
                
                  <article class="entry articles">
                      <div class="row">
                          <div class="col-sm-3">
                              <div class="entry-thumb image-hover2">
                                  <a href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}">
                                      <img class="img-thumbnail" src="{{ Helper::showImage($articles->image_url) }}" alt="{{ $articles->title }}">
                                  </a>
                              </div>
                          </div>
                          <div class="col-sm-9">
                              <div class="entry-ci">
                                  <h4 class="entry-title" ><a style="color:#444" href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}">{{ $articles->title }}</a></h4>
                                  <div class="entry-meta-data">
                                      <!--<span class="author">
                                      <i class="fa fa-user"></i> 
                                      by: <a href="#">Admin</a></span>
                                      <span class="cat">
                                          <i class="fa fa-folder-o"></i>
                                          <a href="#">News, </a>
                                          <a href="#">Promotions</a>
                                      </span>                                           -->
                                      <span class="date"><i class="fa fa-calendar"></i> {{ date('d-m-Y', strtotime($articles->created_at)) }}</span>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="entry-excerpt">
                                      {{ $articles->description }}
                                  </div>
                                  <div class="entry-more">
                                      <a href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}">Chi tiết</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </article>
                  
              @endforeach
              @endif     
              <div class="col-sm-12">
                <nav>
                  {{ $articlesArr->links() }}
                </nav>
              </div>     
        </div><!-- about-detail -->
      </div>
      
    </div><!-- end /.container_mid -->
    
  </div>
  <div class="clear"></div>
</div>
<style type="text/css">
  .articles{
    padding-bottom: 10px;
    padding-top: 10px;
    border-bottom: 1px solid #ccc;
  }
  h4.entry-title{
    margin-bottom: 7px
  }

</style>
@endsection