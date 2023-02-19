/* ===== Row Java Script ===== */

function myfocus(x){
    x.style.background="rgba(233, 239, 223, 0.81)";
}

/* ===== jQuery Start ===== */

$(document).ready(function(){
	/*-- main-manu ul li active Start --*/
	$('#main-manu').on('click','li',function(){
		$('#main-manu li.active').removeClass('active');
		$(this).addClass('active');
	});

	/*-- main-manu navbar Start --*/
	$('#mobile-icon').click(function(){
		$('#main-manu ul').slideToggle(1000);
	});
	
	$(window).resize(function(){
		if($(window).width() > 576){
			$('#main-manu ul').show();
		}else{
			$('#main-manu ul').hide();
		}
	});
	/*-- Upper Button Scroll Start --*/
	$(window).scroll(function(){
		var x = $(window).scrollTop();
		if(x > 600)
		{
			$('#upper').fadeIn(1000);
		}else{
			$('#upper').fadeOut(1000);
		}
	});
	$('#upper').click(function(){
		$('html').animate({scrollTop:0},2000);
	});	
});