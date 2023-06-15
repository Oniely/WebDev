const nav = document.querySelector('.nav-link');
const navToggle = document.querySelector('.nav-toggle');

navToggle.addEventListener('click', function() {

	
	// toggle only works if your css has a visibility property
	// for example if you click the burger (navToggle) it will
	// be visibility: visible in the css by the show-link
	nav.classList.toggle('show-link')

})

window.addEventListener('resize', function() {

	var x = window.matchMedia('(min-width: 800px)')
	// if window width is 800px above (min-width) then it will remove show-link
	if (x.matches) {
		nav.classList.remove('show-link')
	}
})