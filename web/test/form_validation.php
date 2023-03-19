<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <h1>Form Handling</h1>

    <!-- 

    The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

    So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.

    The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and> with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

    -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Name: <input type="text" name="name" required><br>
        E-mail: <input type="text" name="email" required><br>
        Website: <input type="text" name="website" required><br>
        Comment: <textarea name="comment" rows="5" cols="40" required></textarea><br>
        Gender:
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="other" required>Other<br>

        <input type="submit">

    </form>


    <?php

    #Creating variables with empty values
    $name = $email = $gender = $comment = $website = "";


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }


    # Creating a function that make inputs and remove white space and backslashes.
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

    ?>

</body>

</html>