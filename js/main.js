
// Hey! :D
console.log("Hello there! (^o^)/");


/* --------------------------------

	Carousel Code

-------------------------------- */

// Carousels only on home page...
if(document.querySelector('body').classList.contains("home")){

	// Luna's Section Carousel
	var carousel1 = {
		slides: document.querySelectorAll('#luna .carousel__slide'),
		currentSlide: 0,
		container: document.querySelector('#luna .carousel'),
		next: null, // null until selected below
		prev: null
	};
	carousel1.next = carousel1.container.querySelector('.button--next');
	carousel1.prev = carousel1.container.querySelector('.button--prev');

	// Ash's Section Carousel
	var carousel2 = {
		slides: document.querySelectorAll('#ash .carousel__slide'),
		currentSlide: 0,
		container: document.querySelector('#ash .carousel'),
		next: null,
		prev: null
	};
	carousel2.next = carousel2.container.querySelector('.button--next');
	carousel2.prev = carousel2.container.querySelector('.button--prev');

	carousel1.next.addEventListener('click', function(e) {
		nextSlide(carousel1);
	});
	carousel1.prev.addEventListener('click', function(e) {
		previousSlide(carousel1);
	});
	carousel2.next.addEventListener('click', function(e) {
		nextSlide(carousel2);
	});
	carousel2.prev.addEventListener('click', function(e) {
		previousSlide(carousel2);
	});

	function nextSlide(carousel) {
		carousel.slides[carousel.currentSlide].className = 'carousel__slide center-vertically';
		carousel.currentSlide = (carousel.currentSlide+1) % carousel.slides.length;
		carousel.slides[carousel.currentSlide].className = 'carousel__slide center-vertically active';
	}
	function previousSlide(carousel) {
		carousel.slides[carousel.currentSlide].className = 'carousel__slide center-vertically';

		if(carousel.currentSlide === 0)
			carousel.currentSlide = carousel.slides.length - 1;
		else
			carousel.currentSlide--;

		carousel.slides[carousel.currentSlide].className = 'carousel__slide center-vertically active';
	}
}

/* --------------------------------

Debounce Function by David Walsh

-------------------------------- */

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

/* --------------------------------

Revealing Nav at certain scroll point

(NOTE: must use debounce function above
in order to listen to a scroll event) 

-------------------------------- */

nav = document.querySelector('nav');

var revealNav = debounce(function() {
	if (window.scrollY > 200)
    	nav.classList.remove('nav--fade');
	else if ((window).scrollY < 300 && nav.classList.contains("nav--fade"))
		return;
	else
	nav.classList.add('nav--fade');
}, 100);

window.addEventListener('scroll', revealNav);

