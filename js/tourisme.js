$(function(){
	var selectedElt;

	// Affiche le texte complet de l'article
	function showFullArticle(elt) {	
		// On teste si l'article est en taille réduite
		// Si oui, on l'ouvre
		if ($(elt).css('height') == '300px')
		{
		  	$(elt).css('height', '400px');
		  	$(elt).find('a').attr('hidden',true);
		  	var p = $(elt).find('p');
		  	p.css('height', '300px');
		  	p.css('overflow', 'visible');
		} else // Sinon on réduit l'article
			hideFullArticle(elt);

		// Si on a sélectionné un autre article, on réduit le précédent
		if (selectedElt != elt)
			hideFullArticle(selectedElt);

		selectedElt = elt;
	}

	// Réduit la taille d'un article à sa taille initiale
	function hideFullArticle(elt) {		
	  	$(elt).css('height', '300px');
	  	$(elt).find('a').attr('hidden',false);
	  	var p = $(elt).find('p');
	  	p.css('height', '125px');
	  	p.css('overflow', 'hidden');
	}

	// Au clic sur un article, on affiche son texte complet (ou on le réduit, s'il est ouvert)
	$( '.article' ).click(function(event) {
		event.preventDefault();
		showFullArticle(this);
	});
});