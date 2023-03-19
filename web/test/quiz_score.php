<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            font-size: 18px;
        }   

        form {
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            letter-spacing: 1.5px;
        }
        
        #quiz {
            font-size: 16px;
            width: 150px;
            height: 50px;
            margin: 10px 0 0 0;
            padding: 5px;
        }

        #btn {
            font-size: 16px;
            width: 100px;
            height: 35px;
            margin: 10px;
            border-radius: 5px;
        }

        h4 {
            border: 1px solid;
            margin: 30px;
            padding: 10px 15px;
            border-radius: 10px;
            font-size: 18px;
            letter-spacing: 1px;
        }

    </style>

</head>

<body>
    
    <form action="#" method="post">
        <h1>Quiz Score (out of 10)</h1>
        <input type="text" name="score" placeholder="Enter Quiz Score" id="quiz" autofocus>
        <br>
        <input type="submit" name="submit" value="Enter" id="btn">
    </form>

    <?php


    if (isset($_POST["submit"]) && $_POST["score"] != "") {

        $score = $_POST["score"];

        if ($score < 5) {
            echo "<h4> <i class='fa-solid fa-circle-exclamation'></i> Sorry, you failed the quiz! </h4>";
        } 
        elseif ($score >= 5 && $score <= 8) {
            echo "<h4><i class='fa-solid fa-check'></i> Congratulations, you passed the quiz!</h4>";
        }
        elseif ($score > 8 && $score <= 10) {
            echo "<h4><i class='fa-solid fa-check'></i> Congratulations, you aced the quiz! </h4>";
        }
        else {
            echo "<h4> <i class='fa-solid fa-circle-exclamation'></i> The quiz is only out of 10, Please enter a score not greater than 10.</h4>";
        }
    }
    else {
        echo "<h4> <i class='fa-solid fa-circle-exclamation'></i> Please enter your score. </h4>.";  
    }

    ?>

</body>

</html>     