<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Claim</title>

        <!--Swiper Css Link-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!--CSS File Link-->
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>

        <!--header section start-->

        <section class="header">

        <a href="Home.php" class="logo"><img src="images/final.png" width="250" height="100" alt=""/></a>

            <nav class="navbar">
                <a href="Home.php">Home</a>
                <a href="About.php">About</a>
                <a href="Contact Us.php">Contact Us</a>
                <a href="Register.php">Register</a>
                <a href="Login.php">Login</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>

        <!--header section end-->

    <div class="heading" style= "background:url(images/header-img-1.jpg) no-repeat">
        <h1>Claim</h1>
    </div>


    <div class="container">
        <form form style=" width: 70vw; margin-left : 25vw"; action="action_page.php";>
            
            <label for="pnum"><h2>Policy Number</h2></label>
                <input name="polnum"type="text" id="pnum" name="pnum" placeholder="PN12345...">

            <label for="mid"><h2>Member ID</h2></label>
                <input name="mid"type="text" id="mid" name="mid" placeholder="MI12345">

            <label for="flname"><h2>Full Name</h2></label>
                <input name="fullname"type="text" id="nic" name="flname" placeholder="Enter Full Name...">

            <label for="nic"><h2>NIC Number</h2></label>
                <input name="nic"type="text" id="nic" name="nic" placeholder="Enter NIC Number">

                <label for="insurancetype"><h2>Insurance Type</h2></label>
                <select id="instype" name="instype">
                    <option name="claim"value="Term life insurance">Term life insurance</option>
                    <option name="claim"value="Whole life insurance">Whole life insurance</option>
                    <option name="claim"value="Universal life insurance">Universal life insurance</option>
                    <option name="claim"value="Guaranteed issue life insurance">Guaranteed issue life insurance</option>
                    <option name="claim"value="Indexed universal life insurance">Indexed universal life insurance</option>
                    <option name="claim"value="Simplified issue life insurance">Simplified issue life insurance</option>
                    <option name="claim"value="Group life insurance">Group life insurance</option>
                    <option name="claim"value="Variable life insurance">Variable life insurance</option>
                    <option name="claim"value="Premium life insurance">Premium life insurance</option>
                </select>

            <label for="mtype"><h2>Membership Type</h2></label>
                <select id="reward" name="reward">
                    <option name="memtype"value="bronze">bronze</option>
                    <option name="memtype"value="silver">silver</option>
                    <option name="memtype"value="gold">gold</option>
                    <option name="memtype"value="platinum">platinum</option>
                </select>
            
            <label for="msg"><h2>Message</h2></label>
                <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>

                <br>
                <input name=""type="submit" value="Submit">

        </form>
    </div>


<!--footer section starts-->

<section class="footer">
    <div class="box-container">

    <div class="box">
         <h3>Quick Links</h3>
            <a href="Home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="About.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="Contact Us.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
            <a href="Register.php"> <i class="fas fa-angle-right"></i> Register</a>
            <a href="Login.php"> <i class="fas fa-angle-right"></i> Login</a>
      </div>

    <div class="box">
        <h3>Overview</h3>
        <a href="About.php"> <i class="fas fa-angle-right"></i> Who We Are</a>
        <a href="About.php"> <i class="fas fa-angle-right"></i> Company History</a>
        <a href="About.php"> <i class="fas fa-angle-right"></i> Our Leadership</a>
        <a href="About.php"> <i class="fas fa-angle-right"></i> Our Management</a>
        <a href="About.php"> <i class="fas fa-angle-right"></i> Awards & Recognitions</a>
    </div>

    <div class="box">
        <h3>Contact Us</h3>
        <a> <i class="fas fa-phone"></i> +94 11 241 3901</a>
        <a> <i class="fas fa-phone"></i> +94 112 12 12 12</a>
        <a> <i class="fas fa-envelope"></i> BetterLife@Gmail.com</a>
        <a> <i class="fas fa-map"></i> BetterLife, Kandy Rd, Malabe</a>
    </div>

    <div class="box">
        <h3>Better Life Insurance</h3>
        <a> <i class="fab fa-facebook-f"></i> facebook</a>
        <a> <i class="fab fa-twitter"></i> twitter</a>
        <a> <i class="fab fa-instagram"></i> instagram</a>
        <a> <i class="fab fa-linkedin"></i> Linkedin</a>
    </div>

    </div>

        <div class="credit"> Better Life Insurance Limited Copyright © 2022 all rights reserved! <br> <span>Designed By MLB_10.2_11 Group</span> </div>
    </section>

    <!--footer section ends-->


    <!--swiper js link-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!--js file link-->
    <script src="js/script.js"></script>
    </body>
</html>