<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />

	<link rel="stylesheet" href="form.css">

</head>
<body>
	
	<?php include "connection.php" ?>

	<section class="view-sect">

		<h1>Student Information</h1>

		<a class="goto" href="index.php">Add New Student</a>

		<?php

		$sql = "SELECT * FROM student_tbl";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table>";
			echo "
			<thead>
				<tr>
					<th>ID</th>
					<th>Fullname</th>
					<th>Gender</th>
					<th>City</th>
					<th>Edit</th>
				</tr>
			</thead>";
			echo "<tbody>";
			while ($row = $result->fetch_assoc()) {
				
				echo "<tr>";
				echo "<td>".$row['stu_id']."</td>";
				echo "<td>" . $row['stu_lname'] . ", " . $row['stu_fname'] . " " . $row['stu_mname'] . "</td>";
				echo "<td>".$row['stu_gender']."</td>";
				echo "<td>".$row['stu_city']."</td>";
				echo "<td id='t-link'>
					<a href='delete.php?id=".$row["stu_id"]." '>Delete</a>
				</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		} else {
			echo "No data found.";
		}

		

		?>

	</section>

</body>
</html>