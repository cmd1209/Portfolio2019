(function ($, root, undefined) {

	$(function () {
		'use strict';

		$('#section1').on('inview', function(event, isInView) {
			if (isInView) {
			  $('header.startheader').addClass('hidden');
			  $('header.startheader').removeClass('slide-in-top');
			} else {
				// element has gone out of viewport
				$('header.startheader').addClass('slide-in-top');
				$('header.startheader').removeClass('hidden');
			}
		});


		$('#section2').one('inview', function(event, isInView) {
			if (isInView) {
			  $('#section2intro').addClass('bounce-in-left');
			  $('#section2intro').removeClass('hidden');
			} else {
				// element has gone out of viewport
				$('#section2intro').removeClass('hidden');
			}
		});
		$('#section3').on('inview', function(event, isInView) {
			if (isInView) {
				$('#projectintro').addClass('bounce-in-right');
			  	$('#projectintro').removeClass('hidden');
			} else {
				// element has gone out of viewport
				$('#projectintro').removeClass('hidden');
			}
		});

		$('#section3').on('inview', function(event, isInView) {
			if (isInView) {
				$('#topvid').fadeOut(3000);
			} else {
				// element has gone out of viewport
				$('#topvid').fadeIn(3000);
			}
		});

		
		$('#projectgrid').on('inview', function(event, isInView) {
			if (isInView) {
				$('.project').addClass('slide-in-fwd-center ');
			  	$('.project').removeClass('hidden');
			} else {
				// element has gone out of viewport
				$('.project').removeClass('hidden');
			}
		});

		$(document).on('click', '.activator', function () {
			$(this).toggleClass('active');
			$(".startheader-logo").toggleClass('startheaderleft');
			$(".activator").toggleClass('slideoffleft');
			$("nav.nav").toggleClass('offleft navnormleft');
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







	});

})(jQuery, this);