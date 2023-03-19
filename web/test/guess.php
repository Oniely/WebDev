<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>

<body>

<center>
    <form action="#" method="post">

        <p>Guess number from 1 to 10.</p>
        <br>
        Enter your guess: <input type="text" name="guess">
        <br>
        <br>
        <input type="submit" name="submit">
        <br>

    </form>

    <?php

    if (isset($_POST["submit"])) {

        $random_number = rand(1, 10);
        
        $guess = $_POST["guess"];

        if ($guess != $random_number) {
            echo "WRONG!! it was $random_number";
        }
        else {
            echo "CORRECT!! it is $random_number";
        }

    }

    
    ?>

</center>

</body>

</html>