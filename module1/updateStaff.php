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
	

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
   
	
     $query = "update staff set username= '$username',password= '$password',phoneNumber= '$phoneNumber',
     address='$address',email='$email',yearRegister='$yearRegister',status='$status'  WHERE staffID = $staffID";

     

     if (mysqli_query($conn, $query)) {
         echo ("Data Updated");
     } else {
        echo("Update failed");
     }
     mysqli_close($conn);


?>