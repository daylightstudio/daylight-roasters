$(function(){
	svgeezy.init(false, 'png');

	// $('select').select2({
	// 	minimumResultsForSearch: Infinity
	// });

	var closeMenu = function(){
		$('.mainnav-container').removeClass('open')
		$('.mainnav-container').off('touchstart click', closeMenu);
		$('body').removeClass('pinned');
	}

	$('#menu-toggle').on('touchstart click', function(event){
		event.preventDefault();
		$('.mainnav-container').addClass('open');
		$('body').addClass('pinned');
		$('.mainnav-container').on('touchstart click', closeMenu);
	});

	$('.mainnav').on('touchstart click', function(event){
		event.stopPropagation();
	});

});
