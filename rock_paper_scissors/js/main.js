const options = [
    {
        picture: "./images/rock.png",
        value: "Rock"
    },
    {
        picture: "./images/paper.png",
        value: "Paper"
    },
    {
        picture: "./images/scissors.png",
        value: "Scissors"
    },
];

const btns = document.querySelectorAll('[data-btn]');
const tryAgainBtn = document.querySelector('#try');

function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

document.addEventListener("DOMContentLoaded", () => {
    const playerCountElem = document.getElementById('playerScore');
    const computerCountElem = document.getElementById('computerScore');
    const playerPicElem = document.getElementById('pic');
    const aiPicElem = document.getElementById('aiPic');
    let tieCounter = 0;

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            const selectedButton = btn.dataset.btn;

            playerPicElem.innerHTML = "<img src='./images/rock.png'/>";
            aiPicElem.innerHTML = "<img src='./images/rock.png'/>";

            aiPicElem.addEventListener('animationend', function () {
                this.style.animation = "";
                document.getElementById('message').style.animation = "";
            });
            playerPicElem.addEventListener('animationend', function () {
                this.style.animation = "";
                document.getElementById('message').style.animation = "";
            });

            const randomIndex = randomInt(0, options.length - 1);
            const ai = options[randomIndex];
            const aiOption = ai.value;

            document.getElementById('message').textContent = "...";
            document.getElementById('message').style.animation = "resultAnimation 2s ease";
            playerPicElem.style.animation = "playerShake 2s ease";
            aiPicElem.style.animation = "computerShake 2s ease";

            setTimeout(() => {
                aiPicElem.innerHTML = `<img src="${ai.picture}">`;

                const playerOption = options.find(item => item.value === selectedButton);
                if (playerOption) {
                    playerPicElem.innerHTML = `<img src="${playerOption.picture}">`;
                }

                if (selectedButton === aiOption) {
                    if (tieCounter > 0 && tieCounter < 2) {
                        document.getElementById('message').textContent = "What are the odds! A tie again!";
                    } else if (tieCounter >= 2) {
                        document.getElementById('message').textContent = "Tie! Again? Really? Pick Better.";
                    } else {
                        document.getElementById('message').textContent = "It's A Tie!";
                    }
                    tieCounter++;
                } else {
                    const playerWins = (selectedButton === "Rock" && aiOption === "Scissors") ||
                        (selectedButton === "Paper" && aiOption === "Rock") ||
                        (selectedButton === "Scissors" && aiOption === "Paper");

                    if (playerWins) {
                        playerCountElem.textContent = parseInt(playerCountElem.textContent) + 1;
                        document.getElementById('message').textContent = "Player Win!";
                    } else {
                        computerCountElem.textContent = parseInt(computerCountElem.textContent) + 1;
                        document.getElementById('message').textContent = "Computer Win!";
                    }
                    tieCounter = 0;
                }

                document.getElementById('playerScore').textContent = playerCountElem.textContent;
                document.getElementById('computerScore').textContent = computerCountElem.textContent;

                if (playerCountElem.textContent == 5) {
                    document.getElementById('message').textContent = "Player have won the game!";
                    if (playerCountElem.textContent == 5 || computerCountElem.textContent == 5) {
                        let playAgain = confirm("Do you want to play again?");
                        if (playAgain) {
                            location.reload();
                        } else {
                            document.getElementById('message').textContent = "Thanks for playing!!";
                        }
                    }

                } else if (computerCountElem.textContent == 5) {
                    document.getElementById('message').textContent = "Computer have won the game!";
                    if (playerCountElem.textContent == 5 || computerCountElem.textContent == 5) {
                        let playAgain = confirm("Do you want to play again?");
                        if (playAgain) {
                            location.reload();
                        } else {
                            document.getElementById('message').textContent = "Thanks for playing!!";
                        }
                    }
                }
            }, 2000);
        });
    });
});
