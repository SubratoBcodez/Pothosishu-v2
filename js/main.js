(function($) {

	"use strict";

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});

	$('.slider_item').owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    nav: false,
    autoplayTimeout: 5000,
  });

	$('.latest_item').owlCarousel({
    loop:true,
    autoplay:true,
    dots:false,
    items:3,
    margin: 30,
    nav: true,
    autoplayTimeout: 5000,
  });

})(jQuery);
