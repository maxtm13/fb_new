jshover = function()
{
	let menuDiv = document.getElementById("mobile-menu")
	if (!menuDiv)
		return;
	let sfEls = menuDiv.getElementsByTagName("li");
	for (let i=0; i<sfEls.length; i++)
	{
		sfEls[i].onclick=function()
		{
			this.classList.toggle('jshover');
			console.log(this)
		}

	}
}
 if (window.addEventListener)
	window.addEventListener("load", jshover);
