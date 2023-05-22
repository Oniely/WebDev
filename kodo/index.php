<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />

	<link rel="stylesheet" href="form.css">

</head>
<body>

	<?php include "connection.php" ?>
	
	<section class="form-sect">

		<h1>Student Form</h1>

		<form action="#" method="post">

			<div class="input-div">

				<div class="inputs">
					<label>First Name</label>
					<input type="text" name="fname" required autofocus>
				</div>

				<div class="inputs">
					<label>Middle Name</label>
					<input type="text" name="mname" required>
				</div>

				<div class="inputs">
					<label>Last Name</label>
					<input type="text" name="lname" required>
				</div>
				
				<div class="inputs">
					<label>Age</label>
					<input type="number" name="age" required>
				</div>

				<div class="inputs">
					<label>Gender</label>
					<select name="gender" required>
						<option value="" disabled selected></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Others">Others</option>
					</select>
				</div>

				<div class="inputs">
					<label>Barangay</label>
					<input type="text" name="brgy" required>
				</div>

				<div class="inputs">
					<label>City</label>
					<input type="text" name="city" required>
				</div>

				<div class="inputs">
					<label>Province</label>
					<input type="text" name="province" required>
				</div>

			</div>

			<div class="input-btn">
				<input type="submit" name="submit">
			</div>
			
		</form>

		<a class="goto" href="view.php">Goto View</a>

		<?php

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			if (isset($_POST["submit"])) {

				$data = array(
					$_POST["lname"],
					$_POST["fname"],
					$_POST["mname"],
					$_POST["age"],
					$_POST["gender"],
					$_POST["brgy"],
					$_POST["city"],
					$_POST["province"]
				);
				
				$sql = "INSERT INTO student_tbl
				VALUES (DEFAULT, 
				'$data[0]', '$data[1]', '$data[2]', '$data[3]', 
				'$data[4]', '$data[5]', '$data[6]', '$data[7]')	";

				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			}

		}
		?>

	</section>

	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>

</body>
</html>