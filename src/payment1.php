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
        <title>pay primium</title>

        <!--Swiper Css Link-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!--CSS File Link-->
        <link rel="stylesheet" href="css/payment.css">
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

    <div class="heading" style= "background:url(images/header-img-1.jpg) no-repeat" height="100">
        <h1 style="font-size:30px; padding-bottom:2px"
        >pay premium</h1>
    </div>

    <div class="container">
<!--<form action="connect.php" method="post"> -->
 <form action="chamod2.php" method="post"> 

      <div class="row">
        <div class="col">

                <h3 class="title">Customer Details</h3>

                <div class="inputBox">
                    <span>Full Name :</span>
                  <input type="text" name="FullName" placeholder="Enter your full name">
                </div>
                <div class="inputBox">
                    <span>National ID Number :</span>
                  <input type="text" name="NationalIDNumber" placeholder="Enter your national identity number">
                </div>
                <div class="inputBox">
                    <span>Phone Number :</span>
                  <input type="text" name="PhoneNumber" placeholder="Enter a valid phone number">
                </div>
              <div class="inputBox">
                    <span>Email address :</span>
                <input type="text" name="EmailAddress"  placeholder="example@example.com">
              </div>
				        <div class="inputBox">
                  <span>policy Number :</span>
                  <input type="text"name="policyNumber"  placeholder="Enter your insurance card number">
                </div>
              <span>Insurance package type :</span>
              <div class="dropdown">
              <select id="package" name="package">
              <option value="" selected="selected">select your package</option>
              <option name="package" value="1">Term life insurance</option>
              <option name="package" value="2">Whole life insurance</option>
              <option name="package" value="3">Universal life insurance</option>
              <option name="package" value="4">Indexed universal life insurance</option>
              <option name="package" value="5">Group life insurance</option>
              <option name="package" value="6">Variable life insurance</option>
              <option name="package" value="7">Simplified issue life insurance</option>
              <option name="package" value="8">Gotabaya life insurance</option>
              <option name="package" value="9">Premium life insurance</option>
              <option name="package" value="10 "></option>
              </select>
				     </div>
		  		   <div class="inputBox"> <span>Amount :</span>
                    <input type="text" name="Amount"placeholder="LKR 100000.00">
               </div>
               <div class="col">
              <div class="flex">
                  
				    </div>

          </div>
        </div>
       <!--proceed to0 checkout-->
        <input type="submit" value=" confirm your details" class="submit-btn">
		  </div>
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