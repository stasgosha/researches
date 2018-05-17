$(document).ready(function(){

	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.sidebar-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
			}
		});
	});

	// Research card
	$(function(){
		$('.research-card').hover(function(){
			var card = $(this);
			var overlay = card.children('.card-overlay');
			var cardHeight = card.outerHeight();
			var hiddenContent = card.children('.card-hidden-content');
			var hiddenContentHeight = hiddenContent.outerHeight();

			hiddenContent.stop().show();
			overlay.css({"height": (cardHeight + hiddenContentHeight) + "px"}, 300);
		}, function(){
			var card = $(this);
			var overlay = card.children('.card-overlay');
			var cardHeight = card.outerHeight();
			var hiddenContent = card.children('.card-hidden-content');
			var hiddenContentHeight = hiddenContent.outerHeight();

			hiddenContent.stop().hide();
			overlay.css({"height": cardHeight + "px"}, 300);
		});
	});

	// Logic card
	$(function(){
		$('.logic-card .card-title, .logic-card .card-opener').click(function(){
			$(this).closest('.logic-card').toggleClass('opened');
			$(this).closest('.logic-card').children('.card-content').slideToggle(300);
		});

		$('.condition-card .condition-title, .condition-card .minimize').click(function(){
			$(this).closest('.condition-card').toggleClass('closed');
			$(this).closest('.condition-card').children('.condition-content').slideToggle(300);
		});
	});

	// Tabs nav
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).parent().addClass('current').siblings().removeClass('current');
	});

	$("*:first-child > [data-tab]").click();

});