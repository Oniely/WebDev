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
	
	let value = [];
	let items = localStorage.getItem('todo');

	if (items !== "" && items !== null) {
		let arrayItems = JSON.parse(items)

		for (i in arrayItems) {
			value.push(arrayItems[i])
		}
	}

	for (i in value) {
		document.querySelector('.todo').innerHTML += addList(value[i]);
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

		value.push(input)
		localStorage.setItem('todo', JSON.stringify(value))
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