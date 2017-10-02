$(document).ready(function() {
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
	$('.navbar-nav').find('li').click(function(){
		$('.collapse').toggleClass('in');
		$('#nav-icon3').toggleClass('open');
	})
	resizeContent();
    $(window).resize(function() {
        resizeContent();
    });
});

var $win = $(window);
$win.scroll(function() {
	if ($win.scrollTop() == 0) {
		$("nav").removeClass("navbarcolor");
	} else {
		$("nav").addClass("navbarcolor");
	}
});

$('#inicio .owl-carousel').owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	autoplayTimeout : 5000
});

$("#asociados .owl-carousel").owlCarousel({
	lazyLoad : true,
	responsive : {
		0 : {
			items : 1
		},
		420 : {
			items : 2
		},
		768 : {
			items : 3,
			autoplay: false
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	autoplayTimeout : 4000
});

$('a.link[href^="#"]').click(function(e) {
	var target = $(this).attr('href');
	var strip = target.slice(1);
	var anchor = $("section[id='" + strip + "']");
	e.preventDefault();
	y = (anchor.offset() || {
		"top" : NaN
	}).top;
	$('html, body').animate({
		scrollTop : (y - 10)
	}, 'slow');
});

function resizeContent() {
    var top = $( window ).height();
	$("#inicio").css('height', top);
}

function MenuScrollPintado() {
	if ($("nav").hasClass("pintado")) {
		$("nav").removeClass("pintado");
		if ($win.scrollTop() == 0) {
			$("nav").addClass("navbarcolor");
		}
	} else {
		if ($win.scrollTop() == 0) {
			$("nav").removeClass("navbarcolor");
		}
		$("nav").addClass("pintado");
	}
}