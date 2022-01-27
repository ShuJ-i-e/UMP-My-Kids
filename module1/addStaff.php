<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];
	$address = $_POST['address'];
    $email = $_POST['email'];
	$yearRegister = $_POST['yearRegister'];
    $status = $_POST['status'];
	
$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
	
     $query = "insert into staff (username,password,phoneNumber,address,email,yearRegister,status)
     VALUES ('$username', '$password', '$phoneNumber', '$address','$email','$yearRegister','$status')";

     if (mysqli_query($link, $query)) {
        echo "Data insert";
     } else {
        echo("Data failed");
     }
     mysqli_close($link);


?>