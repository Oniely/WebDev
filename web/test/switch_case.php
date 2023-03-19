<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Case</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <h1>Web Calculator</h1>

    <form action="index.php" method="post">
        Enter Number: <input type="text" name="num1">
        <br>
        <br>
        Operator: <input type="text" name="op">
        <br>
        <br>
        Enter Number: <input type="text" name="num2">
        <br>
        <br>
        <input type="submit">
    </form>
    <hr>

    <?php

    $num1 = $_POST["num1"];
    $op = $_POST["op"];
    $num2 = $_POST["num2"];

    switch($op){
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;

        default:
            echo "Invalid Operator, Please Try Again.";
    }


    ?>

</body>

</html>