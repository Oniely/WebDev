<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <title>PHP</title>
</head>

<body>

    <form action="register.php" method="post">

    Username: <input type="text" name="user">
    <br>
    Password: <input type="text" name="pass">
    <br>
    <input type="submit" value="REGISTER" name="submit">
    <a href="login.php">Sign In</a>
    </form>

    <?php


    # if statement to run code when the submit button is clicked
    if(isset($_POST["submit"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    # Connecting to database using 4 of the main parameters which consists of hosting, username,
    # password, and database name.
    $conn = new mysqli($servername, $username, $password, $database);

    # Checking the connection if successful or not
    if ($conn->connect_error) {
        die("Connection failed: $conn->connect_error");
    }
    echo "Connected Successfully!";
    echo "<br>";

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM account WHERE users='$user' AND pass='$pass'";
    $result = $conn->query($sql);

    # FETCHING USING SELECT
    if ($result->fetch_assoc()) {
        echo "Account Already Existed!";
    } else {
        echo "Account Added!";
        $add = "INSERT INTO account (users, pass) VALUES ('$user', '$pass')";
        $result = $conn->query($add);
        $conn->commit();
    }

}
    ?>

</body>

</html>