<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];
	$address = $_POST['address'];
	$yearRegister = $_POST['yearRegister'];
	$email = $_POST['email'];
    $status = $_POST['status'];
	$userID = $_POST['userID'];

$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
	
     $query = "insert into parents (username,password,phoneNumber,address,email,yearRegister,status,userID)
     VALUES ('$username', '$password', '$phoneNumber', '$address','$email','$yearRegister','$status','$userID')";

     if (mysqli_query($link, $query)) {
        echo "Data insert";
     } else {
        echo("Data failed");
     }
     mysqli_close($link);


?>