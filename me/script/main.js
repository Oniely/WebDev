const navbar = document.querySelector('.navbar');
const burger = document.querySelector('.burger');
const header = document.querySelector('header')

window.addEventListener('scroll', () => {
  if (window.scrollY > header.offsetHeight) {
    burger.style.display = 'flex';
	navbar.classList.add('navbar')
	
} else {
    burger.style.display = 'none';
	navbar.classList.remove('navbar')
  }
});