var news = document.querySelectorAll(".newsDesc");
for (var e of news)
{
	e.addEventListener("click", function(e) {
		var parent = e.currentTarget.parentNode;
		if (parent.style.height == "500px") {
			parent.style.height = "315px";
			e.currentTarget.style.overflow = "hidden";
		}
		else {
			parent.style.height = "500px";
			e.currentTarget.style.overflow = "visible";
		}
	});
}