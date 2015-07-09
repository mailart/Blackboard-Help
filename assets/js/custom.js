$(document).ready(function(){

	$(".grid-tile").each(function(){
		$(this).hover(function(){
			$(this).animate({top:-5}, 100);
		}, function(){
			$(this).animate({top:0}, 100);
		});
	});

	
	$('.side-nav-links li a, .home-button h6 a, .off-canvas-list li a').each(function() {
	    if (this.href == document.URL) {
	        $(this).addClass('current-page');
	    }
	});

	$(".btn-close").click(function(){
		$(this).closest(".reveal-modal").foundation('reveal', 'close');
	});

	$("#humber_global_header, #humber_global_footer").addClass("row");
	
	function verticalAlignGrid(){
		$(".grid-tile a").each(function(){
			var aHeight = $(this).height();
			var containerHeight = $(this).parent('.grid-link-container').height();

			var dynamicPadding = ((containerHeight - aHeight)/2) + "px";
			$(this).css('padding-top', dynamicPadding);
		});
	}
	verticalAlignGrid();
	$(window).resize(verticalAlignGrid);
	



});
