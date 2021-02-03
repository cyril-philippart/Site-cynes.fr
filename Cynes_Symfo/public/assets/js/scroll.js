let header = document.querySelector("#header");
let lastScrollValue = 0;

document.addEventListener('scroll',() => {
	let top  = document.documentElement.scrollTop;
	if (document.querySelector('.toggler').checked == false)
	{
		if (top	> 120)
		{
			if(lastScrollValue < top) {
				header.classList.add("hidden");
			} else {
				header.classList.remove("hidden");
			}
		}	
	}
    lastScrollValue = top;
});

function changeColorToggle(checkboxElem) 
{
	if (checkboxElem.checked) 
	{
		changeColor = document.querySelector('.menu-wrap .hamburger >div')
		changeColor.style.backgroundColor = 'white';
	}
	else 
	{
		changeColor = document.querySelector('.menu-wrap .hamburger >div')
		changeColor.style.backgroundColor = 'black';
	}
}





