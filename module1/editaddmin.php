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

   
	
     $query = "update admin set username= '$username',password= '$password',phoneNumber= '$phoneNumber',
     address='$address',yearRegister='$yearRegister',email='$email' WHERE adminID = $adminID";

     

     if (mysqli_query($link, $query)) {
         echo ("Data Updated");
     } else {
        echo("Update failed");
     }
     mysqli_close($link);


?>