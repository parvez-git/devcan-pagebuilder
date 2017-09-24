
jQuery(window).scroll(function () {

	if (jQuery(window).scrollTop() > 70) {
		jQuery('.header-area').addClass('header-sticky');
	}
	if (jQuery(window).scrollTop() < 71) {
		jQuery('.header-area').removeClass('header-sticky');
	}

});
