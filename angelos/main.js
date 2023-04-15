const navbar = document.querySelector(".navbar");
const navToggle = document.querySelector(".mobile-toggle")

navToggle.addEventListener('click', () => {
	const visibility = navbar.getAttribute('data-visible');

	if (visibility == "false") {
		navbar.setAttribute('data-visible', true);
	} else {
		navbar.setAttribute('data-visible', false)
	}
})

let resizeTimer;
window.addEventListener("resize", () => {
  document.body.classList.add("resize-animation-stopper");
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    document.body.classList.remove("resize-animation-stopper");
  }, 400);
});



var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");

var next = document.getElementById("nextBtn");
var back = document.getElementById("backBtn");
var reg = document.getElementById("regBtn");
var log = document.getElementById("logBtn");

next.onclick = function() {
	form1.style.left = "-600px";
	form2.style.left= "0";
}

back.onclick = function() {
    form1.style.left = "138px";
    form2.style.left = "600px";
	console.log(regUser);
}

reg.onclick = function () {
	var regUser = document.getElementById("regUser").value;
	var regPass = document.getElementById("regPass").value;

	if (regUser == "" || regPass == "") {
		form1.style.left = "138px";
		form2.style.left = "600px";
	}
}