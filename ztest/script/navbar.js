const nav = document.querySelector('.nav-link');
const navToggle = document.querySelector('.nav-toggle');

navToggle.addEventListener('click', function() {

	if (!nav.classList.contains('show-link')) {
		nav.classList.add('show-link');
	} else {
		nav.classList.remove('show-link')
	}

})

window.addEventListener('resize', function(x) {

	var x = window.matchMedia('("max-width: 800px")')

	if (x) {
		nav.classList.remove('show-link')
	}
})