<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $staffID = $_POST['staffID'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];
	$address = $_POST['address'];
    $email = $_POST['email'];
	$yearRegister = $_POST['yearRegister'];
	$status = $_POST['status'];
	$userID = $_POST['userID'];

$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
	
     $query = "update staff set username= '$username',password= '$password',phoneNumber= '$phoneNumber',
     address='$address',email='$email',yearRegister='$yearRegister',status='$status',userID='$userID'  WHERE staffID = $staffID";

     

     if (mysqli_query($link, $query)) {
         echo ("Data Updated");
     } else {
        echo("Update failed");
     }
     mysqli_close($link);


?>