$(document).ready(function () {
	var $Window = $(window), $Container = $('div.page-container');
	
	$(".sidebar-collapse-icon").click(function (event) {
		event.preventDefault();
		
		if ($Container.hasClass('sidebar-collapsed')) {
			// destroy scrollbars
			$('.sidebar-fixed').perfectScrollbar('destroy');
		} else {
			// calling trigger resize
			$Window.trigger('resize');
		}
	});
	
	$Window.resize(function resizeScroll() {
		var windowWidth = $Window.width();
		if (windowWidth < 951) {
			// destroy scrollbars
			$('.sidebar-fixed').perfectScrollbar('destroy');
		} else {
			$('.sidebar-fixed').perfectScrollbar();
		}
	}).trigger('resize');
});
