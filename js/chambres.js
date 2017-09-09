// On récupère toutes les images de la page et on leur ajoute un événement
// au clic pour pouvoir afficher la suivante

var imgElt = document.getElementsByTagName("IMG");

for (var index = 0; index < imgElt.length; index++ ) {	
	imgElt[index].addEventListener("click", function (e) {	
		var src = e.target.src;

		// On récupère l'id de l'image
		var i = parseInt(src.substring(src.length - 5, src.length - 4));
		i++;
		if (i>2)
			i=1;

		// On récupère le path de l'image (sans l'id et l'extension)
		src = src.substring(0, src.length - 5);

		// On met à jour le src
	    e.target.src =src+i+".jpg";
		
	});
}