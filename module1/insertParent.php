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


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


$query = "insert into parents (username,password,phoneNumber,address,email,yearRegister,status)
     VALUES ('$username', '$password', '$phoneNumber', '$address','$email','$yearRegister','$status')";

if (mysqli_query($conn, $query)) {
   echo "Data insert";
} else {
   echo ("Data failed");
}
mysqli_close($conn);
