<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$adminID = $_POST['adminID'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];
	$address = $_POST['address'];
	$yearRegister = $_POST['yearRegister'];
	$email = $_POST['email'];
	

$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
	
     $query = "insert into admin (username,password,phoneNumber,address,yearRegister,email)
     VALUES ('$username', '$password', '$phoneNumber', '$address','$yearRegister','$email')";

     if (mysqli_query($link, $query)) {
        echo "Data insert";
     } else {
        echo("Data failed");
     }
     mysqli_close($link);


?>