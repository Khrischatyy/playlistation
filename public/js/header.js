$(document).ready(function() {

	$('.header_burger').click(function(event){
		$('.header_mobile_menu').toggleClass('active');
		$('.header_burger').toggleClass('active');
		$('body').toggleClass('lock');
	});
	$('.login').click(function() {
		$('.header-menu-link').slideToggle();
	});
	$('.search-image').click(function (event) {
        $('.search-content').animate({width:'toggle'},350);
    });

	
});