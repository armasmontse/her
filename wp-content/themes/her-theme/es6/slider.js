$(document).ready(function() {

    const slider = $('.glow__slider');
    const thumbs = $('.gallery-thumbs');
    const top = $('.gallery-top');

    thumbs.slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.gallery-top',
		focusOnSelect: false,
		dots: false,
		autoplaySpeed: 5000,
		useCSS: false,
		responsive: [
			{
 			    breakpoint: 1200,
 			    settings: {
 				    slidesToShow: 4,
 				    slidesToScroll: 1,
 			    }
 		    },
 		    {
 			    breakpoint: 950,
 			    settings: {
 				    slidesToShow: 3,
 				    slidesToScroll: 1,
 			    }
 		    },
 		    {
 			    breakpoint: 650,
 			    settings: {
 				    slidesToShow: 1,
 				    slidesToScroll: 1,
 				    arrows: false,
 			    }
 		    },
		],
	});

	top.slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.gallery-thumbs',
		dots: true,
		focusOnSelect: false,
		arrows: true,
		dots: false,
		autoplaySpeed: 5000,
		useCSS: false,
		responsive: [
			{
 			    breakpoint: 1200,
 			    settings: {
 				    slidesToShow: 4,
 				    slidesToScroll: 1,
 			    }
 		    },
 		    {
 			    breakpoint: 950,
 			    settings: {
 				    slidesToShow: 3,
 				    slidesToScroll: 1,
 			    }
 		    },
 		    {
 			    breakpoint: 650,
 			    settings: {
 				    slidesToShow: 1,
 				    slidesToScroll: 1,
 				    arrows: true,
 			    }
 		    },
 		  
  		],
	});

    slider.slick({
        slidesToShow: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
	 })

    var interval;

    var next = function() {

        slider.slick('slickNext');
        thumbs.slick('slickNext');
        top.slick('slickNext');

    }

    var prev = function() {

        slider.slick('slickPrev');
        thumbs.slick('slickPrev');
        top.slick('slickPrev');

    }

    $('.slick-next').hover(function() {
        interval = setInterval(next, 2000);
    }, function() {
        clearInterval(interval);
    })

    $('.slick-prev').hover(function() {
        interval = setInterval(prev, 2000);
    }, function() {
        clearInterval(interval);
    })
})
