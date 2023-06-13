const btns = document.querySelectorAll('.question-btn');

btns.forEach((btn) => {
	btn.addEventListener('click', () => {
		const question = btn.parentNode.parentNode;

		const questions = document.querySelectorAll('.question');
		
		questions.forEach((qq) => {
			if (true) {
				qq.classList.remove('show-text')
			}
		})

		question.classList.toggle('show-text')
	})
})