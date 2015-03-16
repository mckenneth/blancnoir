$(document).ready(function(){

	$('.gallery').bxSlider({
		adaptiveHeight: true,
		infiniteLoop: true,
		slideMargin: 0,
		pager: false
	});

	var $container = $('.content--isotope').isotope({
		// main isotope options
		itemSelector: '.post'
	});

	// filter items on button click
	$('.filter').on( 'click', 'a', function() {
		var filterValue = $(this).attr('data-filter');
		$container.isotope({ filter: filterValue });
	});

	
});