//Scrollbar
    // (function($){
    //     $(window).load(function(){       
    //         $.mCustomScrollbar.defaults.scrollButtons.enable=true; //enable scrolling buttons by default
    //         $.mCustomScrollbar.defaults.axis="yx"; //enable 2 axis scrollbars by default               
    //         $("class muốn scroll").mCustomScrollbar({theme:"minimal-dark"});  
    //     });
    // })(jQuery);


//  Js tìm kiếm 
	function textboxChange(tb, f, sb) 
	{
	    if (!f) 
	    {
	        if (tb.value == "") 
	        {
	            tb.value = sb;
	        }
	    }
	    else 
	    {
	        if (tb.value == sb)
	        {
	            tb.value = "";
	        }
	    }
	}
	function doEnter(evt){
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
			onSearch(evt);
		}
	}
	function onSearch(evt) {			

			var keyword = document.getElementById("keyword").value;
			if(keyword=='' || keyword=='Nhập từ khoá tìm kiếm...')
				alert('Bạn chưa nhập từ khóa tìm kiếm!');
			else{
			location.href = "tim-kiem.html/keyword="+keyword;
			loadPage(document.location);			
			}
	}
/*---------------------*/

 //Script fancybox and wow
	$(document).ready(function() {
		$("a.fancybox").fancybox();
		//new WOW().init();	
	})
/*---------------------*/

//Cố định thanh menu top khi scroll chuột xuống
    $(window).scroll(function() {
    var height = $("#header").height();
    if($(window).scrollTop()>= height) 
    {
        $("div#menutop").css({position:"fixed",top:'0px'});
    }else{
        $("div#menutop").css({position:"relative"});
    }
    });






$(document).ready(function(){
  $("#cssmenu").menumaker({
	title: "Menu",
	format: "multitoggle"
  });

  $(".small-screen").find("ul li").each(function(){
	  if($(this).hasClass("line")){
		  $(this).remove();
	  }
	  if($(this).find('a transitionAll').hasClass("icon_menu")){
		  $(this).remove();
	  }
  });
})
$(document).ready(function(e) {
    $('.click').click(function(){
		if($('.left').hasClass("abc")){
				$('.left').removeClass("abc");
				$('.left').delay('300').animate({left:20, height:'400px'});
			}
			else {
				$('.left').addClass("abc");
				$('.left').delay('300').animate({left:-300});
			}
			
	})
	// thanh scroll left
		
});
$(document).ready(function(e) {
	$('img.lazy').lazyload();
	$('.item .img-thumb').click(function(){
		var id=$(this).attr('data-id');
		
		$('.item .img-thumb').removeClass('active');
		$(this).addClass('active');
		$('.big-img a .img').each(function(index, element) {
			var id1= $(this).attr('data-id');
			if(id1==id){
				$('.big-img a .img').removeClass('active');
				$(this).css("opacity",0);
				$(this).addClass('active');	
				$(this).animate({"opacity":1},1000);
			}
		});
	});

});
 $(window).scroll(function(){
    if($(window).scrollTop()>50){
        $('.scroll-top').show(500);
    }else{
        $('.scroll-top').hide(500);
    }
});
$(document).ready(function(e) {
    $('.scroll-top img').click(function(){
        $('html, body').stop().animate({
            scrollTop: 0
            }, 500, function() {
            $('#goTop').stop().animate({
            top: '-100px'
            }, 500);
        });
    })
});
function smoothScrolling() { /*-------------------------------------------------*/
/* =  smooth scroll in chrome
/*-------------------------------------------------*/
try {
	$.browserSelector();
    // Adds window smooth scroll on chrome.
    if ($("html").hasClass("chrome")) {
    	$.smoothScroll();
    }
} catch (err) {

}

}
$(function(){
	smoothScrolling();

});