var i = 1;
var imgElt = document.getElementById("carousel_image");

imgElt.addEventListener("click", function (e) {
	i++;
	if (i>4)
		i=1;
    e.target.src ="../images/hotel_"+i+".jpg";
});

document.getElementById("left").addEventListener("click", function (e) {
	i--;
	if (i==0)
		i=4;
    imgElt.src ="../images/hotel_"+i+".jpg";
});

document.getElementById("right").addEventListener("click", function (e) {
	i++;
	if (i>4)
		i=1;
    imgElt.src ="../images/hotel_"+i+".jpg";
});