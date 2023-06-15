const tabBtnContainer = document.querySelector('.tab-button');
const tabContentContainer = document.querySelector('.tab-content');

const tabBtn = tabBtnContainer.querySelectorAll('button')
const tabContent = tabContentContainer.querySelectorAll('div');

tabBtnContainer.addEventListener('click', function(e) {
	const id = e.target.id
	
	tabBtn.forEach((btn) => {
		btn.classList.remove('show-text')
		e.target.classList.add('show-text')
	})

	tabContent.forEach((tab) => {
		tab.classList.remove('show-content')
	})

	const currentTab = document.querySelector(`#${id}-content`);
	currentTab.classList.add('show-content')

})

/* 
const tabBtnContainer = document.querySelector('.tab-button');
const tabContentContainer = document.querySelector('.tab-content');

const tabBtn = tabBtnContainer.querySelectorAll('button')
const tabContent = tabContentContainer.querySelectorAll('div');

function removeBtnClass() {
	tabBtn.forEach((btn) => {
		btn.classList.remove('show-text')
	})
}

function removeContentClass() {
	tabContent.forEach((tab) => {
		tab.classList.remove('show-content')	
	})
}

tabBtn.forEach((btn) => {
	btn.addEventListener('click', () => {

		let className = btn.id

		removeBtnClass()
		removeContentClass()

		btn.classList.add('show-text')
		
		const currentTab = document.querySelector(`#${className}-content`)
		currentTab.classList.add('show-content')
		
	})
})


*/