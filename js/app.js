(function (w, d, undefined) {

	var el_html = d.documentElement,

		el_body = d.getElementsByTagName('body')[0],
		header = d.getElementById('header'),
		lastScroll = w.pageYOffset || el_body.scrollTop,
		menuIsStuck = function (triggerElement, wScrollTop, lastScroll) {
			var regexp = /(nav\-is\-stuck)/i,
				classFound = el_html.className.match(regexp),
				navHeight = header.offsetHeight,
				bodyRect = el_body.getBoundingClientRect(),
				scrollValue = triggerElement ? triggerElement.getBoundingClientRect().top - bodyRect.top - navHeight : 0;

			// la class nav-is-stuck n'existe pas encore sur HTML
			if (wScrollTop > scrollValue && !classFound && wScrollTop < lastScroll) {
				el_html.className = el_html.className + 'nav-is-stuck';
				el_body.style.paddingTop = navHeight + 'px';
			}

			// si le scroll à depassé 300 et que l'utilisateur souhaite remonter
			// la class nav-is-stuck existe
			// le header s'affiche
			if (classFound && wScrollTop > lastScroll) {
				el_html.className = el_html.className.replace(regexp, '');
				el_body.style.paddingTop = '0';
			}

		},
		onScrolling = function () {

			// je récupère la valeur du scroll maintenant
			var wScrollTop = w.pageYOffset || el_body.scrollTop;
			// j'ajoute deux arguments, valeurs de scrolls
			menuIsStuck(d.getElementById('header'), wScrollTop, lastScroll);
			// j'enregistre la dernière valeur de scroll
			lastScroll = wScrollTop;
		};


	// quand je scroll
	w.addEventListener('scroll', function () {
		// j'exécute la fonction onScrolling() uniquement si .toggler n'est pas actif
		if (document.querySelector('.toggler').checked == false)
			w.requestAnimationFrame(onScrolling);
	});

}(window, document));


function changeZIndexImg(checkboxElem) 
{
	if (checkboxElem.checked) 
	{
		overlayImage = document.querySelector('.overlay-image');
		overlayImage.style.zIndex = '-1';
		overlayImage.style.transitionDuration = '0s'
	}
	else 
	{
		overlayImage = document.querySelector('.overlay-image');
		overlayImage.style.zIndex = '0';
		overlayImage.style.transitionDuration = '1s'	
	}
}







