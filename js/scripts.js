(function ($, root, undefined) {

	$(function () {
		'use strict';

		var startheader = $(".startheader");

		startheader.hide();
    $(window).scroll(function() {
        if ($(document).scrollTop() > 400) {
            startheader.fadeIn('slow');
        }
        else {
            startheader.fadeOut('slow');
        }
    });


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


	$('#section4').on('inview', function(event, isInView) {
		if (isInView) {
			$('#topvid').fadeOut(1000);
		} else {
			// element has gone out of viewport
			$('#topvid').fadeIn(1000);
		}
	});



		$(document).on('click', '.activator', function () {

			var startheaderlogo = $(".startheader-logo");
			var activator = $(".activator");
			var nav = $("nav.nav");

			$(this).toggleClass('active');
			startheaderlogo.toggleClass('startheaderleft');
			activator.toggleClass('slideoffleft');
			nav.toggleClass('offleft navnormleft');
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