<?php
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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM admin WHERE yearRegister= 2000");
    $row = $result->fetch_row();
    $three = $row[0];

   
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM admin WHERE yearRegister = 2008");
    $row = $result->fetch_row();
    $four = $row[0];

    
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM admin WHERE yearRegister = 2015");
    $row = $result->fetch_row();
    $five = $row[0];

    
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM admin WHERE yearRegister = 2021");
    $row = $result->fetch_row();
    $six = $row[0];


    $result = mysqli_query($conn, "SELECT COUNT(*) FROM admin WHERE yearRegister = 2022");
    $row = $result->fetch_row();
    $seven = $row[0];

    $data = [$three, $four, $five, $six, $seven];
    echo json_encode($data);
}
?>