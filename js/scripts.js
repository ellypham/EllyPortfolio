$(function(){

	new WOW().init();
	
	$('a').smoothScroll();

	$('.portfolio').flickity();

	$('.fa-bars').on('click', function(){
		$('.nav').addClass('flexplicit');
	});
	$('.close').on('click', function(){
		$('.aboutContainer').addClass('.hide');
	});

	$('.nav a').on('click', function(){
		$('.nav').removeClass('flexplicit');
	});

});