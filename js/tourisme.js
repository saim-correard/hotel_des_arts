$(function(){
	var selectedElt;


	function showFullArticle(elt) {	
		hideFullArticle(selectedElt);
		if (selectedElt != elt)
		{
			selectedElt = elt;
		  	$(elt).css('height', '400px');
		  	$(elt).find('a').attr('hidden',true);
		  	var p = $(elt).find('p');
		  	p.css('height', '300px');
		  	p.css('overflow', 'visible');
		}
	}

	function hideFullArticle(elt) {		
	  	$(elt).css('height', '300px');
	  	$(elt).find('a').attr('hidden',false);
	  	var p = $(elt).find('p');
	  	p.css('height', '125px');
	  	p.css('overflow', 'hidden');
	}

	$( '.article' ).click(function(event) {
		event.preventDefault();
		showFullArticle(this);
	});
});