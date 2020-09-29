(function ($, root, undefined) {

	$(function () {
		'use strict';


		$('.owl-carousel').owlCarousel({
			items:1,
			loop:false,
			center:true,
			margin:0,
			URLhashListener:true,
			autoplayHoverPause:true,
			dots:true,
			navigation: true,
	});

	$('.bouncetop').one('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('bounce-in-top');
			$(this).removeClass('bouncetop');
		} else {
			// element has gone out of viewport
			$(this).removeClass('bouncetop');
		}
	});

	$('.hiddentop').one('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('slide-in-top');
			$(this).removeClass('hiddenleft');
		} else {
			// element has gone out of viewport
			$(this).removeClass('hiddenleft');
		}
	});
	$('.hiddenbottom').one('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('slide-in-bottom');
			$(this).removeClass('hiddenleft');
		} else {
			// element has gone out of viewport
			$(this).removeClass('hiddenleft');
		}
	});
	$('.hiddenleft').one('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('slide-in-left');
			$(this).removeClass('hiddenleft');
		} else {
			// element has gone out of viewport
			$(this).removeClass('hiddenleft');
		}
	});
	$('.hiddenright').one('inview', function(event, isInView) {
		if (isInView) {
			$(this).addClass('slide-in-right');
			$(this).removeClass('hiddenright');
		} else {
			// element has gone out of viewport
			$(this).removeClass('hiddenright');
		}
	});
	$('.photoshop').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-ps-null').addClass('dash-ps');
			$(this).removeClass('dash-ps-null');
		} else {
			// element has gone out of viewport
			$('.dash-ps-null').removeClass('dash-ps-null');
		}
	});
	$('.illustrator').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-il-null').addClass('dash-il');
			$(this).removeClass('dash-il-null');
		} else {
			// element has gone out of viewport
			$('.dash-il-null').removeClass('dash-il-null');
		}
	});
	$('.indesign').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-id-null').addClass('dash-id');
			$(this).removeClass('dash-id-null');
		} else {
			// element has gone out of viewport
			$('.dash-id-null').removeClass('dash-id-null');
		}
	});
	$('.experience').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-xd-null').addClass('dash-xd');
			$(this).removeClass('dash-xd-null');
		} else {
			// element has gone out of viewport
			$('.dash-xd-null').removeClass('dash-xd-null');
		}
	});
	$('.aftereffects').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-ae-null').addClass('dash-ae');
			$(this).removeClass('dash-ae-null');
		} else {
			// element has gone out of viewport
			$('.dash-ae-null').removeClass('dash-ae-null');
		}
	});
	$('.html').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-html-null').addClass('dash-html');
			$(this).removeClass('dash-html-null');
		} else {
			// element has gone out of viewport
			$('.dash-html-null').removeClass('dash-html-null');
		}
	});
	$('.css').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-css-null').addClass('dash-css');
			$(this).removeClass('dash-css-null');
		} else {
			// element has gone out of viewport
			$('.dash-css-null').removeClass('dash-css-null');
		}
	});
	$('.js').one('inview', function(event, isInView) {
		if (isInView) {
			$('.dash-js-null').addClass('dash-js');
			$(this).removeClass('dash-js-null');
		} else {
			// element has gone out of viewport
			$('.dash-js-null').removeClass('dash-js-null');
		}
	});

		$(document).on('click', '.burger, .menu-item', function () {
			$('.burger').toggleClass('open');
			$('.overlay').fadeToggle("fast");
			$('.nav').toggleClass('navactive navhidden');
		});

		$(document).on('click', '.back', function () {
			$(location).attr('href', 'https://www.chadmdanford.com/#work');
		});


		// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
	location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	&& 
	location.hostname == this.hostname
  ) {
	// Figure out element to scroll to
	var target = $(this.hash);
	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	// Does a scroll target exist?
	if (target.length) {
	  // Only prevent default if animation is actually gonna happen
	  event.preventDefault();
	  $('html, body').animate({
		scrollTop: target.offset().top
	  }, 1000, function() {
		// Callback after animation
		// Must change focus!
		var $target = $(target);
		$target.focus();
		if ($target.is(":focus")) { // Checking if the target was focused
		  return false;
		} else {
		  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		  $target.focus(); // Set focus again
		};
	  });
	}
	}
	
});

$(document).on('click', '.expandtrigger', function () {
	var txt = $('.expand').is(':visible') ? 'read more' : 'hide';
	$('.expandtrigger').text(txt);
	$('.expand').slideToggle(250);
});

	});

})(jQuery, this);