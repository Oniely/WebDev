document.addEventListener("DOMContentLoaded", () => {
	const form = document.querySelector('form');

	const addList = (item) => {
		return `
		<li>
			<p>${item}</p>
			<button>X</button>
		<li>
		`
	}

	form.onsubmit = () => {
		const input = document.querySelector('#input').value;
		const todoList = document.querySelector('.todo');

		todoList.innerHTML += addList(input);

		document.querySelector("#input").value = "";

		const closeBtn = document.querySelectorAll('button');

	closeBtn.forEach(btn => {
		btn.addEventListener('click', () => {
			const currentBtn = btn.parentElement;

			currentBtn.style.display = "none";
		})
	})

	const listItem = document.querySelectorAll('p');

	listItem.forEach(item => {
		item.addEventListener('click', () => {
			if (!item.classList.contains('done')) {
				item.classList.add('done')
			} else {
				item.classList.remove('done')
			}
		})
	})

		return false;
	}

	const closeBtn = document.querySelectorAll('button');

	closeBtn.forEach(btn => {
		btn.addEventListener('click', () => {
			const currentBtn = btn.parentElement;

			currentBtn.style.display = "none";
		})
	})

	const listItem = document.querySelectorAll('p');

	listItem.forEach(item => {
		item.addEventListener('click', () => {
			if (!item.classList.contains('done')) {
				item.classList.add('done')
			} else {
				item.classList.remove('done')
			}
		})
	})

})