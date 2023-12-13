<?php
session_start();

if(isset($_SESSION["email"]))
{
    header("Location: logout.php");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

        <!--Swiper Css Link-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!--CSS File Link-->
        <link rel="stylesheet" href="css/style.css">

        <!--CSS file used on the form-->
        <link rel="stylesheet" href="css/registerform.css">

        <!--linking the script file created for form validation-->
        <script src="js/reg_login_form.js"></script>
        
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

    
        <!--Registration form created-->

        <form class="signup" style= "background:url(images/blackBg_Santhush.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative" action="registration_process.php" method="post" onsubmit="return checkPassword()">

        <br><br><br><br>
        <div class="container">
            <div class="formtitle">
            Registration Form
            </div>
            <div class="formsubtitle" style="font-weight:200"> Please fill out the following details </div>
            <div class="formf">
                <div class="forminputs">
                    <label>Full Name:</label><br>
                    <input type="text" style="width: 100%" class="inputbox" name="fullname" placeholder="Enter Your Name" required>
                </div>
                <div class="forminputs">
                    <label>Date of Birth:</label><br>
                    <input type="date" class="inputbox" name="day" required>
                    <br/>
                </div>
                <div class="forminputs">
                    <label>Mobile Number:</label><br>
                    <input type="phone" class="inputbox" name="mobile" pattern="[0-9]{10}" placeholder="0113456789" required><br/>
                </div>
                <div class="forminputs">
                    <label>E-mail:<b/label><br>
                    <input type="email" class="inputbox" name="email" style="text-transform: lowercase; width: 100%" placeholder="abc@gmail.com" pattern="[a-z0-9.]+@[a-z0-9]+\.[a-z]{2,3}]"required><br/>
                </div>
                <div class="forminputs">
                    <label>Address:</label><br><br>
                    <textarea  name="address" rows="8" cols="50" class="inputbox" placeholder="Enter Your Address" required></textarea><br/>
                </div>
                <div class="forminputs">	
                    <label>Create Password:</label><br>
                    <label style="font-weight: lighter; font-size: 13px">(Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters)</label>
                    <input type="password" name="password" class="inputbox" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required><br/>
                </div>
                <div class="forminputs">
                    <label>Re-Enter Password:</label><br>
                    <input type="password" class="inputbox" id="cnfrmpwd" onchange='check_pass();' required>
                </div>
                <br>
                
                
            <center>
            <div class="button">
            <input class="btn" type="submit" id="submitBtn" value="Submit"disabled>
            <br><br><br>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size:15px; color: aliceblue; font-weight: lighter;">Already Have an account?</p><br>
            <a href="login.php" style="font-family: Arial, Helvetica, sans-serif; font-size:15px; color: blue; font-weight: lighter; text-decoration: underline;">Log In</a>
            <br><br><br>
            </center>
            </div>
            </div>
            </div>
        </div>
        </form>
        <br><br><br>


    <!--footer section starts-->

    <section class="footer">
    <div class="box-container">

    <div class="box">
         <h3>Quick Links</h3>
            <a href="Home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="pages/About.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="pages/Contact Us.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
            <a href="pages/Register"> <i class="fas fa-angle-right"></i> Register</a>
            <a href="pages/Login"> <i class="fas fa-angle-right"></i> Login</a>
      </div>

      <div class="box">
        <h3>Overview</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> Who We Are</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Company History</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Our Leadership</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Our Management</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Awards & Recognitions</a>
    </div>

    <div class="box">
    <h3>Contact Us</h3>
        <a><i class="fas fa-phone"></i> +94 11 241 3901</a>
        <a><i class="fas fa-phone"></i> +94 112 12 12 12</a>
        <a><i class="fas fa-envelope"></i> betterlife@gmail.com</a>
        <a><i class="fas fa-map"></i> BetterLife, Kandy Rd, Malabe</a>
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