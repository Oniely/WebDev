<!DOCTYPE html>
<html lang="en">

<head>
	<title>Angelos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/design.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body id="ov">
	<header class=".resize-animation-stopper">
		<a href="index.php"><img src="images/Angelos.png" alt="logo" class="logo"></a>

		<button class="mobile-toggle" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
			<svg width="100" height="100" viewBox="0 0 100 100">
				<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
				<path class="line line2" d="M 20,50 H 80" />
				<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
			</svg>
		</button>

		<nav>
			<ul class="navbar" id="navbar" data-visible="false">
				<li><a id="nav1" href="index.php">Home</a></li>
				<li><a id="nav2" class="active" href="men.php">Men</a></li>
				<li><a id="nav3" href="women.php">Women</a></li>
				<li><a id="nav4" href="contact.php">Contact</a></li>
				<li><a id="nav5" href="account.php">Account</a></li>
				<li id="nav6" class="icon"><a href="#"><i class='bx bx-shopping-bag'></i></a></li>
			</ul>

		</nav>

	</header>

	<section>
		<div class="na-header">
			<h1>Men </h1>
			<p>"Impossible is Nothing."</p>
		</div>
	</section>

	<section id="body">
		<div class="preview">
			<div class="slider">
				<div class="slide">
					<input type="radio" name="radio-btn" id="radio1">
					<input type="radio" name="radio-btn" id="radio2">
					<input type="radio" name="radio-btn" id="radio3">
					<input type="radio" name="radio-btn" id="radio4">

					<div class="st first">
						<img src="images/koujiaofangliao on Twitter.jfif" alt="drip">
					</div>
					<div class="st">
						<img src="images/nikes2.png" alt="drip">
					</div>
					<div class="st">
						<img src="images/nike3.jpg" alt="drip">
					</div>
					<div class="st">
						<img src="images/nikes3.jpg" alt="drip">
					</div>

					<div class="nav-auto">
						<div class="a-b1"></div>
						<div class="a-b2"></div>
						<div class="a-b3"></div>
						<div class="a-b4"></div>
					</div>

				</div>
				<div class="nav-m">
					<label for="radio1" class="m-btn"></label>
					<label for="radio2" class="m-btn"></label>
					<label for="radio3" class="m-btn"></label>
					<label for="radio4" class="m-btn"></label>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		var counter = 1;
		setInterval(function() {
			document.getElementById('radio' + counter).checked = true;
			counter++;
			if (counter > 4) {
				counter = 1;
			}
		}, 3000)
	</script>

	<section class="banner-container">
		<div class="banner">
			<h2>12.12 Sale</h2>
			<p>Enjoy Discounted Products Till 12 Dec. - Use code <u>12Sale</u>.</p>
			<a href="#products"><img src="images/nikebg.jpg" alt="sale"></a>
		</div>
	</section>

	<section class="new-arrivals">

		<div class="sales">
			<div class="product-container">

				<div class="products" id="products">
					<img src="images/men1.jpg" alt="Shoes">
					<div class="desc">
						<span>Nike</span>
						<h5>Nike Air Force 1 Low Retro</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$140</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/men2.jpg" alt="Shoes">
					<div class="desc">
						<span>Nike</span>
						<h5>Nike Air Force 1'07 LV8</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$110</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/men3.jpg" alt="Shoes">
					<div class="desc">
						<span>Nike</span>
						<h5>Nike Air Max 90 G</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$115</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/men4.jpg" alt="Shoes">
					<div class="desc">
						<span>Adidas</span>
						<h5>NMD_R1 Primeblue Shoes - Black</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$165</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/men5.jpg" alt="Shoes">
					<div class="desc">
						<span>Adidas</span>
						<h5>NMD_R1 Primeblue Shoes - White</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$165</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/men6.jpg" alt="Shoes">
					<div class="desc">
						<span>Adidas</span>
						<h5>Forum Low Shoes - White</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$125</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/newbalshoes1.jpg" alt="Shoes">
					<div class="desc">
						<span>New Balance</span>
						<h5>Fresh Foam X 880v12</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$105</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/newbalshoes2.jpg" alt="Shoes">
					<div class="desc">
						<span>New Balance</span>
						<h5>Fresh Foam X 860v13</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$140</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

				<div class="products">
					<img src="images/newbalshoes3.jpg" alt="Shoes">
					<div class="desc">
						<span>New Balance</span>
						<h5>928v3</h5>
						<div class="stars">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
						</div>
						<h4>$145</h4>
					</div>
					<a href="#"><i class='bx bx-cart-alt cart'></i></a>
				</div>

			</div>
		</div>

	</section>

	<section class="footer">

		<div class="f-container">

			<div class="f1">
				<h4>Site Links</h4>
				<a href="#"><span>Contact Us</span></a>
				<a href="#"><span>About us</span></a>
				<a href="#"><span>Direction</span></a>
				<a href="#"><span>Blog</span></a>
			</div>

			<div class="f2">
				<h4>Information</h4>
				<a href="#"><span>Promotion</span>
					<a href="#"><span>Partners</span></a>
					<a href="#"><span>Careers</span></a>
					<a href="#"><span>FAQs</span></a>
			</div>

			<div class="f3">
				<a href="https://www.facebook.com/nielangelo.gencaya"><i class='bx bxl-facebook-circle'></i></a>
				<a href="https://www.facebook.com/messages/t/100005161770123"><i class='bx bxl-messenger'></i></a>
				<a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
			</div>

		</div>

		<div class="hline">
			<hr>
		</div>

		<div class="sponsors">

			<div class="spons">
				<img src="images/sponsor-removebg-preview.png" alt="Nike">
			</div>

			<div class="spons adidas">
				<img src="images/adidasw.png" alt="Nike">
			</div>

			<div class="spons">
				<img src="images/newbalance.png" alt="Nike">
			</div>


		</div>

	</section>
	<script src="./script/nav.js"></script>
</body>

</html>