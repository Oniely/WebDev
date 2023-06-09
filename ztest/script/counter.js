const count = document.querySelector('.count');
const button = document.querySelectorAll('.btn');
let c = Number(count.textContent);

button.forEach(btn => {
	btn.addEventListener('click', function () {
		if (btn.textContent == 'Decrease') {
			count.textContent = c -= 1;
		}
		if (btn.textContent == 'Reset') {
			count.textContent = c = 0;
		}
		if (btn.textContent == 'Increase') {
			count.textContent = c += 1;
		}
		if (count.textContent > 0) {
			count.style.color = "green";
		}
		if (count.textContent == 0) {
			count.style.color = "black";
		}
		if (count.textContent < 0) {
			count.style.color = "red";
		}
	})
})