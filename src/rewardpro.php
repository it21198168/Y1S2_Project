<?php
   require 'config.php';

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $nic = $_POST['nic'];
      $rid = $_POST['rid'];
      $instype = $_POST['instype'];
      $rtype = $_POST['rtype'];
      $msg = $_POST['msg'];

      $sql= "INSERT INTO reward(fname,lname,nic,rid,instype,rtype,msg)VALUES('$fname','$lname','$nic','$rid','$instype','$rtype','$msg')";


      if (mysqli_query($conn, $sql)) {
         echo "<script> alert('Successfully Requested') </script>";

         header("Location:Home.php");
     } else {
     
         echo "<script> alert('Error,Request Unsuccefull') </script>";
     }
     
     mysqli_close($conn);
     

     

?>