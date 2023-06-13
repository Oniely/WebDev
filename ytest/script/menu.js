const menuItem = [
	{
		id: 1,
		title: "Chocolate Pancake",
		categories: "Meal",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 2,
		title: "Chocolate Pancake",
		categories: "Breakfast",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 3,
		title: "Chocolate Pancake",
		categories: "Meal",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 4,
		title: "Chocolate Pancake",
		categories: "Meal",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 5,
		title: "Chocolate Pancake",
		categories: "Shakes",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 6,
		title: "Chocolate Pancake",
		categories: "Shakes",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 7,
		title: "Chocolate Pancake",
		categories: "Breakfast",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
	{
		id: 8,
		title: "Chocolate Pancake",
		categories: "Shakes",
		price: 8.99,
		img: "./images/menu-item.jpeg",
		desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit ab exercitationem sapiente voluptatibus, laboriosam consequatur ipsum vel at autem."
	},
]

const sectionCenter = document.querySelector('.section-center');
const btnContainer = document.querySelector('.btn-container')

window.addEventListener('DOMContentLoaded', () => {

	let displayItem = menuItem.map((item) => {

		return `<article class="menu-item">
			<img src=${item.img} alt=${item.title} class="photo" />
			<div class="item-info">
			  <header>
				<h4>${item.title}</h4>
				<h4>${item.categories}</h4>
				<h4 class="price">$${item.price}</h4>
			  </header>
			  <p class="item-text">
				${item.desc}
				
			  </p>
			</div>
		  </article>`;

	})
	displayItem = displayItem.join(" ")
	sectionCenter.innerHTML = displayItem

	let uniqueBtn = [...new Map(menuItem.map(item => [item.categories, item])).values()]

	let displayBtn = uniqueBtn.map((btn) => {

		return `
		<button type="button" class="filter-btn">
          ${btn.categories}
        </button>
		`
	})
	displayBtn = displayBtn.join('')
	btnContainer.innerHTML += displayBtn
	
	const filterBtn = document.querySelectorAll('.filter-btn');

	filterBtn.forEach((btn) => {

		btn.addEventListener('click', () => {
			let displayItem = menuItem.map((item) => {
				if (item.categories == btn.innerText) {
					return `<article class="menu-item">
					<img src=${item.img} alt=${item.title} class="photo" />
					<div class="item-info">
					<header>
						<h4>${item.title}</h4>
						<h4>${item.categories}</h4>
						<h4 class="price">$${item.price}</h4>
					</header>
					<p class="item-text">
						${item.desc}
						
					</p>
					</div>
				</article>`;
				} 
				if(btn.innerText == "All") {
					return `<article class="menu-item">
					<img src=${item.img} alt=${item.title} class="photo" />
					<div class="item-info">
					<header>
						<h4>${item.title}</h4>
						<h4>${item.categories}</h4>
						<h4 class="price">$${item.price}</h4>
					</header>
					<p class="item-text">
						${item.desc}
						
					</p>
					</div>
				</article>`;
				}
				 
			})
			
			displayItem = displayItem.join(" ")		
			sectionCenter.innerHTML = displayItem
		})
	})

})

