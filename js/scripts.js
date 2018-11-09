(function ($, root, undefined) {
	
	$(function () {
		'use strict';

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

	});
})(jQuery, this);