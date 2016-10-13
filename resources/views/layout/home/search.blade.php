<div id="search">
   <div class="search-content">
   	  <form action="/tim-kiem.html" method="GET" id="searchForm">
	      <input autocomplete="off" name="k" id="k" type="text" class="form-control search-input"
	         placeholder="Nhập từ khóa tìm kiếm..." value="{{ $tu_khoa or "" }}"/>
	      <a onclick="return search();" class="search-submit" href="javascript:void(0)" title="Tìm kiếm"><i
	         class="fa fa-search"></i></a>
      </form>
   </div>
</div>