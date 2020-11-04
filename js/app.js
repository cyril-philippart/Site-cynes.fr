(function() {
	var lastTime = 0;
	var vendors = ['ms', 'moz', 'webkit', 'o'];
	for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
		window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
		window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
	}

	if ( ! window.requestAnimationFrame ) {
		window.requestAnimationFrame = function(callback, element) {
			var currTime = new Date().getTime();
			var timeToCall = Math.max(0, 16 - (currTime - lastTime));
			var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
			timeToCall);
			lastTime = currTime + timeToCall;
			return id;
		};
	}

	if ( ! window.cancelAnimationFrame ) {
		window.cancelAnimationFrame = function(id) {
			clearTimeout(id);
		};
	}
}());

(function(w,d,undefined){
 
	var el_html = d.documentElement,
		el_body = d.getElementsByTagName('body')[0],
        header = d.getElementById('header'),
        lastScroll = w.pageYOffset || el_body.scrollTop,
		menuIsStuck = function(triggerElement, wScrollTop, lastScroll) {
			var regexp		= /(nav\-is\-stuck)/i,
				classFound	= el_html.className.match( regexp ),
				navHeight	= header.offsetHeight,
				bodyRect	= el_body.getBoundingClientRect(),
				scrollValue	= triggerElement ? triggerElement.getBoundingClientRect().top - bodyRect.top - navHeight  : 300;
 
			// si le scroll est d'au moins 300 et
			// la class nav-is-stuck n'existe pas sur HTML
			if ( wScrollTop > scrollValue && !classFound && wScrollTop < lastScroll) {
				el_html.className = el_html.className + ' nav-is-stuck';
				el_body.style.paddingTop = navHeight + 'px';
			}
 
			// si le scroll à depassé 300 et que l'utilisateur souhaite remonter
            // la class nav-is-stuck existe
            // le header s'affiche
			if ( classFound && wScrollTop > lastScroll) {
				el_html.className = el_html.className.replace( regexp, '' );
				el_body.style.paddingTop = '0';
			}

		},
		onScrolling = function() {
        // on récupère la valeur du scroll maintenant
        var wScrollTop = w.pageYOffset || el_body.scrollTop;  
        // on ajoute deux arguments, valeurs de scrolls
        menuIsStuck( d.getElementById('main-image'), wScrollTop, lastScroll );     
        // on enregistre notre dernière valeur de scroll
        lastScroll = wScrollTop;       
        };
 
	// quand on scroll
	w.addEventListener('scroll', function(){
		// on exécute la fonction onScrolling()
		w.requestAnimationFrame( onScrolling );
	});
 
}(window, document));


