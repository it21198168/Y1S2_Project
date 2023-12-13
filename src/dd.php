<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$province = $_POST['province'];
	$message = $_POST['message'];
	
	// Database connection
	$server_name ="localhost";
    $user_name ="root";
    $password ="";
    $database ="betterlife";

    $conn = new mysqli($server_name , $user_name , $password , $database);

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name,email,phonenumber,province,message) value(?,?,?,?,?)");
		$stmt->bind_param("ssiss",$name,$email,$phonenumber,$province,$message,);

		$execval = $stmt->execute();
		echo $execval;
		header("location:Home.php");
            
		$stmt->close();
		$conn->close();
	}
?>