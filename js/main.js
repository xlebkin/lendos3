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

$(document).ready(function(){
	$('.evento .slider').slick({
		arrows:true,
		dots:false,
		autoplay:false,
		speed:1000,
		autoplaySpeed:3500,
	});
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

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);
    
    async function formSend(e) {
        e.preventDefault();

        let formData = new FormData(form);
        let response = await fetch('sendemail.php', {
            method: "POST",
            body: formData
        });
    }
});

