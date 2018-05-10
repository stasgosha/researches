$(document).ready(function(){

	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.sidebar-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			console.log(link);

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
			}
		});
	});

});