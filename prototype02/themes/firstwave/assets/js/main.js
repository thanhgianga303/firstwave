jQuery(function($) {'use strict';

	var $nav = $("#navbar"),
		$toggler = $('#navbar-toggler');

	var navHeight = 98;

	/* -------------------------------------
	JQUERY PRE LOADER
	-------------------------------------- */
	$(window).on("load", function(){
		$('.preloader').fadeOut(500);
	});	

	/* -------------------------------------
	COUNTER
	-------------------------------------- */
	$('.counter-stat').counterUp({
		delay: 10,
		time: 1000
  	});

	// WOW JS
	new WOW().init();
    
	/* -------------------------------------
     NAV ON SCROLL
    -------------------------------------- */
	$(window).on("scroll", function(){
		if(!$toggler.hasClass('active')){
			if( $(this).scrollTop() > navHeight){
				$nav.addClass('scrolled');
			}else{
				$nav.removeClass('scrolled');
			}
		}
    });


	$('.navbar-nav>li>a').on('click', function(){

		if(!$toggler.hasClass('active')){
				$toggler.addClass('active');
		}else{
			if( $(this).scrollTop() < navHeight){
				$toggler.removeClass('active');
			}
		}

		$('.navbar-collapse').collapse('hide');
	});

	/* -------------------------------------
     ACTIVE TOGGLE ON CLICK
    -------------------------------------- */
    $toggler.on("click" ,function(){

		$(this).toggleClass("active");

		if($(window).scrollTop() < navHeight && !$nav.hasClass('scrolled')){
			$nav.toggleClass('scrolled');
		}else if(navHeight > $(window).scrollTop() && $nav.hasClass('scrolled')){
			$nav.toggleClass('scrolled');
		}

	});

	/* -------------------------------------
     PARTNERS CAROUSEL
    -------------------------------------- */
	$('.partners-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		autoplay: true,
  		autoplaySpeed: 2000,
		dots: true,
		prevArrow: false,
		nextArrow: false,
		responsive: [
			{
			  breakpoint: 991.98,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			  },
			},
			{
				breakpoint: 575.98,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1,
				},
			  }
		  ]
	});

	/* -------------------------------------
     WORK CAROUSEL
    -------------------------------------- */
	$('.works-slider.slick-slider').slick({
			dots: false,
			infinite: true,
			speed: 300,
			autoplay: false,
			prevArrow: false,
			variableWidth: true,
	  });

	/* -------------------------------------
     LIGHT BOX
    -------------------------------------- */	  
	  $('#work-gallery').slickLightbox({
		caption: 'caption',
		prevArrow: 'true',
		captionPosition: 'dynamic',
		useHistoryApi: 'true',
		layouts: {
			closeButton: '<span class="slick-slider-close-btn">Close <span>×</span> </span>'
		}
	});

	/* -------------------------------------
     GALLERY
    -------------------------------------- */
	  $('.work-gallery').slick({
		centerPadding: '60px',
		slidesToShow: 3,
		arrows: false,
		responsive: [
		  {
			breakpoint: 767.98,
			settings: {
			  centerPadding: '40px',
			  slidesToShow: 2
			}
		  },
		  {
			breakpoint: 575.98,
			settings: {
			  arrows: true,
			  centerPadding: '40px',
			  slidesToShow: 1
			}
		  }
		]
	  });

});