<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Download Package Details</title>

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
<h1>Download Package Details</h1>
</div>

<div>
	<table border="1" style="margin-left: auto; margin-right: auto">
		<thead>
			<th><h1>File Location</h1></th>
			<th><h1>Action</h1></th>
		</thead>
		<tbody><h1>
		<?php
			include('config.php');
 
			$query=mysqli_query($conn,"select * from file");
			while($row=mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $row['file_location']; ?></td>
						<td><a href="download.php?file=<?php echo urlencode($row['file_location']); ?>"><h1>Download</h1></a></td>
					</tr>
				<?php
			}
		?>
		</tbody>
	</table>
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