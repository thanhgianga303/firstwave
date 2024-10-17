jQuery(function($) {'use strict';

	var $nav = $("#navbar"),
		$toggler = $('#navbar-toggler');
    
	/* -------------------------------------
     NAV ON SCROLL
    -------------------------------------- */
	$(window).on("scroll load", function(){
		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });

	/* -------------------------------------
     ACTIVE TOGGLE ON CLICK
    -------------------------------------- */
    $toggler.on("click" ,function(){

		$(this).toggleClass("active");

		if($(window).scrollTop() < $nav.height() && !$nav.hasClass('scrolled')){
			$nav.toggleClass('scrolled');
		}
	});

});