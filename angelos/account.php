<!DOCTYPE html>

<?php

session_start();

?>

<html lang="en">

<head>
	<title>Angelos</title>
	<link rel="icon" href="images/Angelos.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/design.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
				<li><a id="nav1"  href="index.php">Home</a></li>
				<li><a id="nav2" href="men.php">Men</a></li>
				<li><a id="nav3" href="women.php">Women</a></li>
				<li><a id="nav4" href="contact.php">Contact</a></li>
				<li><a id="nav5" class="active" href="account.php">Account</a></li>
				<li id="nav6" class="icon"><a href="#"><i class='bx bx-shopping-bag'></i></a></li>
			</ul>

		</nav>

	</header>



	<section class="account">
		<div class="background">
			<div class="header">
				<span>Angelos</span>
				<h2>MY ACCOUNT</h2>
				<i class='bx bxs-check-shield'></i>
			</div>

			<div class="account-info">

				<div class="options">

					<div class="profile">
						<div class="p-img">
							<img src="images/profile.png" alt="profile">
						</div>
						<div class="greeting">
							<span>Hi,</span>
							<h6 id="fullName">Welcome</h6>
						</div>
					</div>

					<div class="opt">
						<a href="#">
							<button><i class="fa-regular fa-user"></i>Account Overview</button>
						</a>

						<a href="#" id="o1">
							<button><i class="fa fab-light fa-box"></i>My Orders</button>
						</a>
						<a href="#">
							<button><i class="fa-solid fa-crown"></i>Premier Delivery</button>
						</a>

						<a href="#" id="o2" class="active">
							<button><i class='bx bxs-user-detail'></i>My Details</button>
						</a>
						<a href="#" id="o2">
							<button><i class='bx bx-home-alt-2'></i>Address Book</button>
						</a>
						<a href="#" id="oSoc">
							<button><i class="fa fab-duotone fa-users"></i>Social Accounts</button>
						</a>

						<a href="#" id="ohelp">
							<button><i class="fa fab-regular fa-circle-info"></i>Need Help?</button>
						</a>
						<a href="#" id="ofaq">
							<button><i class="fa-regular fa-circle-question"></i>FAQs</button>
						</a>

						<a href="login.php" id="sign-out">
							<button><i class='bx bx-door-open'></i>Sign Out</button>
						</a>


					</div>

				</div>

				<div class="my-details">
					<div class="d-header">
						<i class='bx bxs-user-detail'></i>
						<h3>My Details</h3>
					</div>
					<form action="#" method="post">

						<div class="form-details">

							<div class="input-box">
								<label>First Name</label>
								<input id="fname" name="fname" type="text" value="" placeholder="" required>
							</div>
							<div class="input-box">
								<label>Last Name</label>
								<input id="lname" name="lname" type="text" value="" placeholder="" required>
							</div>
							<div class="input-box">
								<label>Email Address</label>
								<input id="email" name="email" type="text" value="" placeholder="" required>
							</div>
							<div class="input-box">
								<label>Phone Number</label>
								<input id="phone" name="phone" type="text" value="" placeholder="" required>
							</div>
							<div class="input-box">
								<label>Country</label>
								<select id="country" value="" name="country" required>

									<option id="cntry" value="" disabled selected hidden>...</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Åland Islands">Åland Islands</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory
									</option>
									<option value="Brunei Darussalam">Brunei Darussalam</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
										of The</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'ivoire">Cote D'ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-bissau">Guinea-bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
									</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's
										Republic of</option>
									<option value="Korea, Republic of">Korea, Republic of</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic
									</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
										Yugoslav Republic of</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia, Federated States of">Micronesia, Federated States of
									</option>
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Netherlands Antilles">Netherlands Antilles</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
									</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Helena">Saint Helena</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
									</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia and The South Sandwich Islands">South Georgia and The
										South Sandwich Islands</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-leste">Timor-leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States">United States</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying
										Islands</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands, British">Virgin Islands, British</option>
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>

								</select>
							</div>
							<div class="input-box">
								<label>Province</label>
								<input id="province" name="province" type="text" value="" placeholder="" required>
							</div>
							<div class="input-box">
								<label>Home Address w/ City</label>
								<input id="address" name="address" type="text" value="" placeholder="" required>
							</div>
							<div class="input-box">
								<label>Postal Code</label>
								<input id="pcode" name="pcode" type="text" value="" placeholder="" required>
							</div>

						</div>

						<div class="save-btn">
							<input id="saveBtn" type="submit" value="Save Changes" name="saveBtn">
						</div>

					</form>

					<?php

					$servername = "localhost";
					$username = "root";
					$password = "";
					$database = "angelos_db";

					$conn = new mysqli($servername, $username, $password, $database);

					if ($conn->connect_error) {
						die("Connection failed: $conn->connect_error");
					}

					if (!empty($_SESSION["logUser"]) && !empty($_SESSION["logPass"])) {
						$user = $_SESSION["logUser"];
						$pass = $_SESSION["logPass"];

						$sql = "SELECT * FROM account_tbl WHERE user='$user' AND pass='$pass'";
						$result = $conn->query($sql);

						if ($result) {

							while ($data = $result->fetch_assoc()) {
	
								$details = array(
									$data["fname"],
									$data["lname"],
									$data["email"],	
									$data["phone"],
									$data["country"],
									$data["province"],
									$data["address"],
									$data["pcode"]
								);
	
								$id = $data["id"];
	
								echo "
							<script>
	
							document.getElementById('fullName').innerHTML = '$details[0] $details[1]'
							document.getElementById('fname').placeholder = '$details[0]';
							document.getElementById('lname').placeholder = '$details[1]';
							document.getElementById('email').placeholder = '$details[2]';
							document.getElementById('phone').placeholder = '$details[3]';
							document.getElementById('cntry').innerHTML = '$details[4]';
							document.getElementById('province').placeholder = '$details[5]';
							document.getElementById('address').placeholder = '$details[6]';
							document.getElementById('pcode').placeholder = '$details[7]';
							</script>
							";
							}
						}
					}

					if (isset($_POST["saveBtn"])) {

						$fname = $_POST["fname"];
						$lname = $_POST["lname"];
						$email = $_POST["email"];
						$phone = $_POST["phone"];
						$country = $_POST["country"];
						$province = $_POST["province"];
						$address = $_POST["address"];
						$pcode = $_POST["pcode"];

						$update = "UPDATE account_tbl SET fname='$fname', lname='$lname', email='$email', phone='$phone', country='$country', province='$province', address='$address', pcode='$pcode' WHERE id=$id";

						if (mysqli_query($conn, $update)) {
							echo "";
						} else {
							echo "Failed" . mysqli_error($conn);
						}

						$sql = "SELECT * FROM account_tbl WHERE user='$user' AND pass='$pass'";
						$result = $conn->query($sql);

						if ($result) {

							while ($data = $result->fetch_assoc()) {

								$details = array(
									$data["fname"],
									$data["lname"],
									$data["email"],
									$data["phone"],
									$data["country"],
									$data["province"],
									$data["address"],
									$data["pcode"]
								);

								$id = $data["id"];

								echo "
							<script>

							document.getElementById('fullName').innerHTML = '$details[0] $details[1]'
							document.getElementById('fname').placeholder = '$details[0]';
							document.getElementById('lname').placeholder = '$details[1]';
							document.getElementById('email').placeholder = '$details[2]';
							document.getElementById('phone').placeholder = '$details[3]';
							document.getElementById('cntry').innerHTML = '$details[4]';
							document.getElementById('province').placeholder = '$details[5]';
							document.getElementById('address').placeholder = '$details[6]';
							document.getElementById('pcode').placeholder = '$details[7]';
							</script>
							";
							
							mysqli_close($conn);

							}

							}
						}
					
					?>



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