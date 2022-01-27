<?php
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