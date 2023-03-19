<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/calcu.css" rel="stylesheet">
</head>

<body>

    <!-- SOURCE: https://www.youtube.com/watch?v=iHliKCaw750 -->

    <h1>Calculator</h1>

    <?php

    # Setting of variables

    $num = "";
    $op = "";
    $result = "";

    # Setting of variable to set for cookies

    # To store the first number that has been inputted by the user on the display
    $cookie_name1 = "num";
    $cookie_value1 = "";

    # To store the operator the user has click
    $cookie_name2 = "op";
    $cookie_value2 = "";

    # Concatenate the string of number button that has been click
    if (isset($_POST["numbers"])) {
        $num = $_POST["display"] . $_POST["numbers"];
    } else {
        $num = "";
    }
     
    # When an operator has been clicked...
    if (isset($_POST["op"])) {

        # Storing the first number value that was in display to a cookie name num
        $cookie_value1 = $_POST["display"];
        setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

        # Storing the operator value to a cookie name op
        $cookie_value2 = $_POST["op"];
        setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
        $num = "";
    }

    # Perform the operation when equals is pressed with switch case statement
    if (isset($_POST["equals"])) {
        $num = $_POST["display"];
        
        switch($_COOKIE['op']){
            case "+":
              $result = $_COOKIE['num'] + $num;
              break;
            case "/":
              $result = $_COOKIE['num'] / $num;
              break;
            case "-":
              $result = $_COOKIE['num'] - $num;
              break;
            case "x":
              $result = $_COOKIE['num'] * $num;
              break;
           }

        # displaying the result
        $num = $result; 
    }

    ?>



    <form action="#" method="post">

        <table border="1">
            <tr>
                <td colspan="4">
                    <!-- Displaying the result using $num = $result above -->
                    <input type="text" name="display" value=<?php echo $num; ?>>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="numbers" value="7"></td>
                <td><input type="submit" name="numbers" value="8"></td>
                <td><input type="submit" name="numbers" value="9"></td>
                <td><input type="submit" name="op" value="/"></td>
            </tr>

            <tr>
                <td><input type="submit" name="numbers" value="4"></td>
                <td><input type="submit" name="numbers" value="5"></td>
                <td><input type="submit" name="numbers" value="6"></td>
                <td><input type="submit" name="op" value="x"></td>
            </tr>

            <tr>
                <td><input type="submit" name="numbers" value="1"></td>
                <td><input type="submit" name="numbers" value="2"></td>
                <td><input type="submit" name="numbers" value="3"></td>
                <td><input type="submit" name="op" value="-"></td>
            </tr>

            <tr>
                <td><input type="submit" name="numbers" value="0"></td>
                <td><input type="submit" name="numbers" value="."></td>
                <td><input type="submit" name="equals" value="="></td>
                <td><input type="submit" name="op" value="+"></td>
            </tr>

        </table>

        <input type="submit" name="clear" value="Clear" id="clear">

    </form>

</body>

</html>