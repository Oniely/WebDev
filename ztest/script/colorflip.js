const btn = document.getElementById("btn");
const color = document.querySelector('.color');
const container = document.querySelector('.container');
const logo = document.querySelector('h4')

btn.addEventListener('click', function() {
	const randomHex = getRandomHex()
	
	document.body.style.backgroundColor = randomHex;
	color.style.color = randomHex;
	color.textContent = randomHex;
	btn.style.backgroundColor = randomHex;
	logo.style.color = randomHex;
})

function getRandomHex() {
	let n = (Math.random() * 0xFFFFFF * 1000000).toString(16)
	return `#${n.slice(0, 6)}`;
}