const colors = ['green', 'red', 'rgba(133,122,200)', '#f15025'];

const btn = document.getElementById("btn");
const color = document.querySelector('.color');
const container = document.querySelector('.container');

btn.addEventListener('click', function() {
	const randomNumber = getRandomNumber()
	const randomHex = getRandomHex()
	
	document.body.style.backgroundColor = randomHex;
	color.style.color = randomHex;
	color.textContent = randomHex;
	btn.style.backgroundColor = randomHex;
})

function getRandomNumber() {
	return Math.floor(Math.random() * colors.length)
}

function getRandomHex() {
	let n = (Math.random() * 0xFFFFFF * 1000000).toString(16)
	return `#${n.slice(0, 6)}`;
}