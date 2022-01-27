<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ump_mykids";
$conn = new mysqli($servername, $username, $password, $dbname);

$uname = $_POST['uname'];
$pass = $_POST['password'];
$type = $_POST['type'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$email = $_POST['email'];
$yearRegister = date("Y");

if($type == "staff")
{
    $staffType = $_POST['staffType'];
    $medicationHistory = $_POST['medicationHistory'];
    $query = "insert into staff (username,password,phoneNumber,address,yearRegister,email, staffType, status, medicationHistory)
    VALUES ('$uname', '$pass', '$phoneNumber', '$address','$yearRegister','$email', '$staffType', 'active', '$medicationHistory')";

    if (mysqli_query($conn, $query)) {
      header("Location: index.php?msg=Registered Successfully!"); 
   } else {
       echo "Data failed";
    }
    mysqli_close($conn);
}
else if($type == "admin")
{
    $query = "insert into admin (username,password,phoneNumber,address,yearRegister,email)
    VALUES ('$uname', '$pass', '$phoneNumber', '$address','$yearRegister','$email')";

    if (mysqli_query($conn, $query)) {
      header("Location: index.php?msg=Registered Successfully!"); 
    } else {
       echo "Data failed" ;
    }
    mysqli_close($conn);
}
else if($type == "parent")
{
    $query = "insert into parents (username,password,phoneNumber,address,yearRegister,email, status)
    VALUES ('$uname', '$pass', '$phoneNumber', '$address','$yearRegister','$email', '$status')";

    if (mysqli_query($conn, $query)) {
      header("Location: index.php?msg=Registered Successfully!"); 
    } else {
       echo "Data failed" ;
    }
    mysqli_close($conn);
}
else
{
   echo "Data failed" ;
}

?>