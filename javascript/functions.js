$(document).ready(function()
{
	$("ul#main_menu li").mouseover(function()
	{
		$(this).find("h2").stop().animate({color:"#fff"}, 500);
		$(this).stop().animate({backgroundColor:"#000"}, 500);
	}).mouseout(function()
	{
		$(this).find("h2").stop().animate({color:"#000"}, 500);
		$(this).stop().animate({backgroundColor:"#fff"}, 500);
	});
	
	$("ul#main_menu li:last").css("border-bottom" , "0");
	
	$('.main_menu a[href^="#"]').on('click', function(event) {
		var target = $( $(this).attr('href') );
		if( target.length ) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
	$('.menu a[href^="#"]').on('click', function(event) {
		var target = $( $(this).attr('href') );
		if( target.length ) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
});


