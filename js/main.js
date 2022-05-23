"use strict";
	
$(document).ready(function(){
	$('.slider').slick({
		arrows:false,
		dots:false,
		autoplay:true,
		speed:1000,
		autoplaySpeed:3500,
	});
});

// Contact form validation

var form = $('.contact-form');
form.submit(function () {
	$this = ($(this));
	$.post($(this).attr('action'), function(data) {
		$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
	},'json');
	return false;
});

$('a[href^="#"').on('click', function() {

let href = $(this).attr('href');

$('html, body').animate({
	scrollTop: $(href).offset().top
}, {
	duration: 500,
	easing: "linear"
});

return false;
});

$(window).scroll(function(){
	if ($(this).scrollTop() > 400) {
		$(".scroll-up").css("display", "block");
	} else {
		$(".scroll-up").css("display", "none");
	}
});



