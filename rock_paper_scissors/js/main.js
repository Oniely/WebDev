const options = [
	{
		picture: "./images/rock.jpg",
		value: "Rock"
	},
	{
		picture: "./images/paper.jpg",
		value: "Paper"
	},
	{
		picture: "./images/scissors.jpg",
		value: "Scissors"
	},
]


const btns = document.querySelectorAll('[data-btn]');
const tryAgainBtn = document.querySelector('#try');

window.addEventListener("DOMContentLoaded", () => {

	btns.forEach(btn => {
		btn.addEventListener('click', () => {

			const selectedOption = btn.dataset.btn;
			const pic = document.querySelector('#pic');
			const aiPic = document.querySelector('#aiPic');
			pic.innerHTML = "";

			let random = Math.round(Math.random() * 2);
			const ai = options[random];
			
			aiPic.innerHTML = `<img src="${ai.picture}">`;

			let displayOption = options.map((item) => {
				if (selectedOption === item.value) {
					pic.innerHTML = `<img src="${item.picture}">`;
				}

			})

			const aiOption = ai.value;

			if (selectedOption === aiOption) {
				console.log("TIE");
			} 
			
			const ROCK = "Rock";
			const PAPER = "Paper";
			const SCISSORS = "Scissors";

			if (selectedOption !== aiOption) {
				if (selectedOption === ROCK && aiOption === SCISSORS) {
					console.log("You win1");
				} else if (selectedOption === PAPER && aiOption === ROCK) {
					console.log("You win!");
				} else if (selectedOption === SCISSORS && aiOption === PAPER) {
					console.log("You win!");
				} else {
					console.log("You Lose!");
				}
			}

		})
	})

})