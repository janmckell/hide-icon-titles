		$('#hide-icon-titles a').addClass('icon_hide_title');

		$(".icon_hide_title").hover(function(){
		
				// Get the current title
				var title = $(this).attr("title");
		
				// Store it in a temporary attribute
				$(this).attr("tmp_title", title);
		
				// Set the title to nothing so we don't see the tooltips
				$(this).attr("title","");
				

			});