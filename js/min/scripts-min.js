!function(n,e,t){n(function(){"use strict";n("#section1").on("inview",function(e,t){t?(n("header.startheader").addClass("hidden"),n("header.startheader").removeClass("slide-in-top")):(n("header.startheader").addClass("slide-in-top"),n("header.startheader").removeClass("hidden"))}),n("#section2").one("inview",function(e,t){t&&n("#section2intro").addClass("bounce-in-left"),n("#section2intro").removeClass("hidden")}),n("#section3").on("inview",function(e,t){t&&n("#projectintro").addClass("bounce-in-right"),n("#projectintro").removeClass("hidden")}),n("#section3").on("inview",function(e,t){t?n("#topvid").fadeOut(3e3):n("#topvid").fadeIn(3e3)}),n("#projectgrid").on("inview",function(e,t){t&&n(".project").addClass("slide-in-fwd-center "),n(".project").removeClass("hidden")}),n(document).on("click",".activator",function(){n(this).toggleClass("active"),n(".startheader-logo").toggleClass("startheaderleft"),n(".activator").toggleClass("slideoffleft"),n("nav.nav").toggleClass("offleft navnormleft")}),n('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(e){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=n(this.hash);(t=t.length?t:n("[name="+this.hash.slice(1)+"]")).length&&(e.preventDefault(),n("html, body").animate({scrollTop:t.offset().top},1e3,function(){var e=n(t);if(e.focus(),e.is(":focus"))return!1;e.attr("tabindex","-1"),e.focus()}))}})})}(jQuery);