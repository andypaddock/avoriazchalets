//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.min.js
//@prepros-prepend readmore.js
jQuery(document).ready(function($) {
	$('html')
		.delay(300)
		.queue(function(next) {
			$(this).addClass('loaded');
			next();
		});

	/* CLASS AND FOCUS ON CLICK */

	$('.course-item .read-more').click(function(e) {
		e.preventDefault();
		$(this).slideUp();
		$(this)
			.closest('.course-item')
			.children('.description')
			.slideDown();
		$(this)
			.closest('.course-item')
			.children('.description')
			.children('.read-less')
			.slideDown();
	});
	$('.description .read-less').click(function(e) {
		e.preventDefault();
		$(this).slideUp();
		$(this)
			.closest('.description')
			.slideUp();
		$(this)
			.closest('.description')
			.siblings('.summary')
			.children('.read-more')
			.slideDown();
	});
	new Readmore('article');

  


  // ========== Add class if in viewport on page load

  $.fn.isOnScreen = function () {
    var win = $(window);

    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return !(
      viewport.right < bounds.left ||
      viewport.left > bounds.right ||
      viewport.bottom < bounds.top ||
      viewport.top > bounds.bottom
    );
  };

  $(".slide-up, .slide-down, .slide-right, .slow-fade").each(function () {
    if ($(this).isOnScreen()) {
      $(this).addClass("active");
    }
  });

  // ========== Add class on entering viewport

  $.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on("resize scroll", function () {
    $(".slide-up, .slide-down, .slide-right, .slow-fade").each(function () {
      if ($(this).isInViewport()) {
        $(this).addClass("active");
      }
    });
  });

  $('.jq-tab-menu').each(function(){
    $(this).find('.jq-tab-title').first().addClass('active');
});

$('.jq-tab-content-wrapper').each(function(){
  $(this).find('.jq-tab-content').first().addClass('active');
});


 // ========== Owl Carousel

//  var owlItinerary = $('.owl-carousel.itinerary-carousel');
//  owlItinerary.owlCarousel({
//    loop: true,
//    margin: 0,
//    nav: false,
//    lazyLoad: true,
//    dots: false,
//    responsive: {
// 	 0: {
// 	   items: 1
// 	 },
// 	 600: {
// 	   items: 1
// 	 },
// 	 800: {
// 	   items: 1
// 	 },
// 	 1200: {
// 	   items: 1
// 	 }
//    },
//  });

//  $(".owl-next").click(function () {
//    owlItinerary.trigger('next.owl.carousel');
//  });
//  $('.owl-prev').click(function () {
//    owlItinerary.trigger('prev.owl.carousel');
//  });

//  var owlRooms = $('.owl-carousel.rooms-carousel');
//  owlRooms.owlCarousel({
//    loop: true,
//    nav: false,
//    lazyLoad: true,
//    dots: false,
//    responsive: {
// 	 0: {
// 	   items: 1
// 	 },
// 	 600: {
// 	   items: 1
// 	 },
// 	 800: {
// 	   items: 1
// 	 },
// 	 1200: {
// 	   items: 1
// 	 }
//    },
//  });
$('.news-gallery').owlCarousel({
  margin: 10,
  nav: true,
  navText: ["<div class='arrow-left icon'></div>", "<div class='arrow-right icon'></div>"],
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});


$('.ligtbox-gallery').owlCarousel({
  margin: 10,
  nav: true,
  navClass: ['owl-prev', 'owl-next'],
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});


var owlRooms = $(".owl-carousel.rooms-carousel").each(function(){
  $(this).owlCarousel({
    loop:true,
      nav:false,
      lazyLoad: true,
   dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });
});

 // Custom Navigation Events
 $(".owl-next").click(function(){$(this).closest('.room-gallery').find('.owl-carousel').trigger('next.owl.carousel');})
 $(".owl-prev").click(function(){$(this).closest('.room-gallery').find('.owl-carousel').trigger('prev.owl.carousel');})

//  $(".owl-next").click(function () {
//   owlRooms.trigger('next.owl.carousel');
//  });
//  $('.owl-prev').click(function () {
//   owlRooms.trigger('prev.owl.carousel');
//  });


 var owlTestimonials = $('.owl-carousel.testimonial-carousel');
 owlTestimonials.owlCarousel({
   loop: true,
   nav: true,
   navText: ["<div class='arrow-left icon'></div>", "<div class='arrow-right icon'></div>"],
   lazyLoad: true,
   dots: false,
   autoplay: false,
   responsive: {
	 0: {
	   items: 1
	 }
   },
 });

 $(".owl-next").click(function () {
   owlTestimonials.trigger('nextPartner.owl.carousel');
 });
 $('.owl-prev').click(function () {
   owlTestimonials.trigger('prevPartner.owl.carousel');
 });

 $(document).ready(function () {

    $('.gallery').magnificPopup({
      delegate: 'a.lightbox-gallery',
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  });

  $(document).ready(function () {

    $('.parent').magnificPopup({
      delegate: 'a.lightbox-gallery',
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  });



  $('.image-popup').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
  });
  



  $(".expanding-section__trigger").click(function (e) {
    e.preventDefault();
    $(this).closest('.expanding-section').addClass('open');
    $(this).fadeOut('slow');
    // $('.expanding-section__head .heading').fadeOut('slow');
    var currentSection = $(this).closest('.expanding-section');

    function scrollToTop() {
      $('html, body').animate({
        scrollTop: $(currentSection).offset().top - 100
      }, 'slow');
    }
    setTimeout(scrollToTop, 400);
  });

  $(".expanding-section__close").click(function (e) {
    $(this).closest('.expanding-section').removeClass('open');
    // $('.expanding-section__head .heading').fadeIn('slow');
    $('.expanding-section__trigger').fadeIn('slow');
  });
/* Form Control */

$(".wpcf7-form-control").on("input", function () {
  if ($(this).val()) {
    $(this).parents(".form-field").addClass("contains-content");
  } else {
    $(this).parents(".form-field").removeClass("contains-content");
  }
});

$("#checker").change(function () {
  if ($(this).is(":checked")) {
    $(".checkbox").addClass("checked");
  } else {
    $(".checkbox").removeClass("checked");
  }
});

	/* TOGGLE COLLAPSE ON ITINERARY PAGE */

	$(".item-timeline h3").click(function () {
		var self = this;
		$(this).closest("tr").siblings().find(".collapsible").slideUp(500);
		$(this).parent().find(".collapsible").slideToggle(500, function () {
			$('html,body').animate({
				scrollTop: $(self).offset().top - 30
			}, 500);
		});
	});


	/* TRIGGER TIMELINE AFTER CLICK ON CIRCLE */

	$(".circle").click(function () {
		$(this).parents("tr").find(".item-timeline h3").trigger("click");
	});


/*! 
 * jQuery Tabs - jQuery plugin to create simple vertical and horizontal tabs
 * Copyright 2017 - Anantajit JG
 * https://github.com/anantajitjg/jquery-tabs
 */
!function(a){"use strict";a.fn.jqTabs=function(t){var s=a.extend({direction:"vertical",duration:400,mainWrapperClass:"jq-tab-wrapper",tabClass:"jq-tab-title",tabContentClass:"jq-tab-content",tabClicked:a.noop,tabContentLoaded:a.noop},t);return this.each(function(){var t=a(this);t.hasClass(s.mainWrapperClass)||t.addClass(s.mainWrapperClass),"horizontal"===s.direction&&t.addClass("horizontal-tab"),t.find("."+s.tabClass).click(function(n){n.preventDefault(),s.tabClicked.call();var e=a(this);if(!e.hasClass("active")){t.find("."+s.tabClass).removeClass("active");var i=e.data("tab");e.addClass("active"),t.find("."+s.tabContentClass).removeClass("active").css("display","none"),t.find("."+s.tabContentClass+'[data-tab="'+i+'"]').fadeIn(s.duration,function(){s.tabContentLoaded.call(),a(this).addClass("active")})}})})}}(jQuery);



  $(function () {
    $('#horizontalTab').jqTabs({direction: 'horizontal', duration: 200});
});

$('.camp-map .marker').click(function() {
  //$(this).next().slideToggle();
  $(this)
    .siblings()
    .children('.camp-map__card')
    .removeClass('open');
  $(this)
    .children('.camp-map__card')
    .toggleClass('open');
  $(this).addClass('live');
  $(this)
    .siblings('.marker')
    .removeClass('live');
});

	/* CLOSE POPUP */

	$(".popup .close-popup").click(function () {

		$(".popup").removeClass("open");

  });
  
  $(".camp-map .marker").click(function(){
    var id = $(this).attr('id');
    $(".prop-map__card").removeClass("visible");
    $('.' + id).toggleClass("visible")
  });

  $('#menu-toggle').click(function(){
    $(this).toggleClass('open');
    $('.overlay').toggleClass('open');
  })

  /* Form Control */

  $(".wpcf7-form-control").on('input', function () {
    if ($(this).val()) {
      $(this).parents(".form-field").addClass("contains-content");
    } else {
      $(this).parents(".form-field").removeClass("contains-content");
    }
  });

  $('#checker').change(function () {
    if ($(this).is(":checked")) {
      $('.checkbox').addClass('checked');
    } else {
      $('.checkbox').removeClass('checked');
    }
  });



  $('.selector').click(function(){
    $(this).siblings('.rental-table') .toggleClass('open');
    $(this).parent('.rental-main') .toggleClass('open');
  })

  $('.schoolselect').click(function(){
    $(this).parent('.school-rows') .toggleClass('open');
  })


  $('input[type="radio"]').click(function(){
    var inputValue = $(this).attr("value");
    var targetBox = $("." + inputValue);
    $(".rental-block").not(targetBox).addClass('no-mob');
    $(targetBox).toggleClass('no-mob');
});


}); //Don't remove ---- end of jQuery wrapper
