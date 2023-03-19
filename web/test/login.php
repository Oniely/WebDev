<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <title>PHP</title>
</head>

<body>

    <form action="login.php" method="post">

        Username: <input type="text" name="user">
        <br>
        Password: <input type="text" name="pass">
        <br>
        <input type="submit" value="LOGIN" name="submit">
        <a href="register.php">Sign Up</a>
    </form>

    <?php

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

    echo "Connected successfully";
    echo "<br>";
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    # THE QUERY
    $sql = "SELECT * FROM account WHERE users='$user' AND pass='$pass'";
    # THE FUNCTION TO USE QUERIES
    $result = $conn->query($sql);

    # FETCHING USING SELECT
    if ($result->fetch_assoc()) {
        echo "Account Logged In!";
    } else {
        echo "Account not Found";
    }

}

    ?>

</body>

</html>