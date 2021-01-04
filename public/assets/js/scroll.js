(function scroll(w, d) 
{
	var el_html = d.documentElement,

		el_body = d.getElementsByTagName('body')[0],
		header = d.getElementById('header'),
		lastScroll = w.pageYOffset || el_body.scrollTop,
		menuIsStuck = function (triggerElement, wScrollTop, lastScroll) 
		{
				regexp = /(nav\-is\-stuck)/i,
				classFound = el_html.className.match(regexp),
				navHeight = header.offsetHeight,
				bodyRect = el_body.getBoundingClientRect(),
				scrollValue = triggerElement ? triggerElement.getBoundingClientRect().top - bodyRect.top - navHeight : 0;

			if (wScrollTop > scrollValue && !classFound && wScrollTop < lastScroll) 
			{
				el_html.className = el_html.className + 'nav-is-stuck';
				el_body.style.paddingTop = navHeight + 'px';
			}

			if (classFound && wScrollTop > lastScroll) 
			{
				el_html.className = el_html.className.replace(regexp, '');
				el_body.style.paddingTop = '0';
			}

		},
		onScrolling = function () 
		{
			var wScrollTop = w.pageYOffset || el_body.scrollTop;
			menuIsStuck(d.getElementById('header'), wScrollTop, lastScroll);
			lastScroll = wScrollTop;
		};

	w.addEventListener('scroll', function () 
	{
		if (document.querySelector('.toggler').checked == false)
			w.requestAnimationFrame(onScrolling);
	});

}(window, document));


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



