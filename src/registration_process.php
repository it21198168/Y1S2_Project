<?php
//Linking the configuration file
require 'config.php';

$fullname = $_POST["fullname"];
$dob = $_POST["day"];
$phone = $_POST["mobile"];
$mail = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];

$sql= "INSERT INTO member(fullname,dob,phone,email,address,password)VALUES('$fullname','$dob','$phone','$mail','$address','$password')";

if (mysqli_query($conn, $sql)) {

    echo "<script> alert('Successfully Registered') </script>";
    header("Location:login.php");
} else {

    echo "<script> alert('Error, Register Unsuccefull') </script>";
}

mysqli_close($conn);

?>