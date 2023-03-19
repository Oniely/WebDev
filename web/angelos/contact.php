<!DOCTYPE html>
<html lang="en">

<head>
    <title>Angelos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/design.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="header">
        <a class="logo-container" href="index.php"><img src="images/Angelos.png" alt="logo" class="logo"></a>

        <nav>
            <ul class="navbar">
                <li><a id="nav1" href="index.php">Home</a></li>
                <li><a id="nav2" href="men.php">Men</a></li>
                <li><a id="nav3" href="women.php">Women</a></li>
                <li><a id="nav4" class="active" href="#">Contact</a></li>
                <li><a id="nav5" href="account.php">Account</a></li>
                <li id="nav6" class="icon"><a href="#"><i class='bx bx-shopping-bag'></i></a></li>
            </ul>
        </nav>

    </header>

    <section class="contact-us" style="background-image: url(images/contact-bg.png);">
        <div class="con-text">
            <h1>Contact Us</h1>
            <p>If you have any questions or queries a member of <br>staff will always be happy to help. Feel free to <br>contact us by telephone or email and we will be sure <br>to get back to you as soon as possible.</p>
            <a href="#contact"><button style="background-image: url('images/bg-button\ \(1\).png')">Contact <i class='bx bxl-telegram plane'></i></button></a>
        </div>
    </section>

    <section class="contact-form" id="contact">

        <div class="form-text" style="background-image: url('images/form-design.png');">

            <div class="con-header">
                <h2>Contact Information</h2>
                <p>Fill up the form and our Team will get back to you within 24 hours.</p>
            </div>

            <div class="con-info">
                <p><i class="fa-solid fa-phone icon"></i>+09123456789</p>
                <p><i class="fa-solid fa-envelope icon"></i>nielangelo@gmail.com</p>
                <p><i class="fa-solid fa-location-dot icon"></i>Kabankalan City</p>
            </div>

            <div class="con-links">
                <a href="https://www.facebook.com/nielangelo.gencaya"><button><i class="fa-brands fa-facebook"></i>
                    </button></a>

                <a href="https://www.facebook.com/messages/t/100005161770123"><button><i class="fa-brands fa-facebook-messenger"></i>
                    </button></a>

                <a href="https://www.instagram.com/"><button><i class="fa-brands fa-instagram"></i>
                    </button></a>
            </div>

        </div>



        <div class="form-query">
            <form action="#" method="post">

                <div class="form-details">

                    <div class="input-box">
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Phone No." name="phone" required>
                    </div>

                </div>

                <div class="message">
                    <textarea placeholder="Your Message Here..." name="msg" required></textarea>
                </div>

                <div class="button">
                    <input type="submit" value="Send Message" name="submit">
                </div>

            </form>

            <?php
            
            ini_set("smtp_port", "587");
            ini_set("sendmail_from", "nielangelo.gencaya.s@southlandcollege.edu.ph");

            if (isset($_POST["submit"])) {

                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $msg = $_POST["msg"];

                $message = $msg . "\n\nFrom $fname $lname";

                mail($email, "Angelos Contact Us", $message);
            }
            ?>


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

</body>

</html>