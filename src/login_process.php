<?php 
	
	require "config.php";

	session_start(); 

	if (isset($_POST['email']) && isset($_POST['password'])) {

		$email = $_POST["email"];

		$password = $_POST["password"];
		
		

		if (empty($email)) {

			header("Location: login.php?error=Email is required");

			exit();

		}else if(empty($password)){

			header("Location: login.php?error=Password is required");
			
			exit();

		}else{

			$sql = "SELECT * FROM member WHERE email='$email' AND password='$password'";

			$result = mysqli_query($conn, $sql);
			

			if (mysqli_num_rows($result) === 1) {

				$row = mysqli_fetch_assoc($result);
				
				echo $email;
				echo $password;
				echo $row['email'];
				echo $row['password'];
				
				if ($row['email'] === $email && $row['password'] === $password) {

					echo '<script type="text/javascript">alert("Logged In!")</script>';
					
					$_SESSION['fullname'] = $row['fullname'];

                    $_SESSION['email'] = $row['email'];
					
					$_SESSION['id'] = $row['id'];

					header("Location: home.php");
					
					exit();

				}else{

					header("Location: login.php?error=Incorect Email or password");
					echo '<script type="text/javascript">alert("Incorect Email or password")</script>';
					exit();

				}

			}else{

				header("Location: login.php?error=Incorect Email or password");
				echo '<script type="text/javascript">alert("Incorect Email or password")</script>';
				exit();

			}

		}

	}else{
        
        echo '<script type="text/javascript">alert("Incorect Email or password")</script>';
		header("Location: login.php");
		
		exit();

	}
		
	
?>