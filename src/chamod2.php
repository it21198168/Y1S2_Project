<?php
	$FullName = $_POST['FullName'];
	$NationalIDNumber = $_POST['NationalIDNumber'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$EmailAddress = $_POST['EmailAddress'];
	$policyNumber = $_POST['policyNumber'];
	$package = $_POST['package'];
    $Amount=$_POST['Amount'];

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
		$stmt = $conn->prepare("insert into customer(FullName,NationalIDNumber,PhoneNumber,EmailAddress,policyNumber,package,Amount) value(?,?,?,?,?,?,?)");
		$stmt->bind_param("ssisssi",$FullName,$NationalIDNumber,$PhoneNumber,$EmailAddress,$policyNumber,$package,$Amount);

		$execval = $stmt->execute();
		echo $execval;
		header("location:payconfirm.php");
		//echo "Customer details entered successfully...";
		$stmt->close();
		$conn->close();
	}
?>