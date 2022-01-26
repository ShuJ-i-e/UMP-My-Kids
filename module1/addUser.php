<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $userID = $_POST['userID'];
	$user_type = $_POST['user_type'];
	

$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
	
     $query = "insert into user (userID,user_type)
     VALUES ('$userID', '$user_type')";

     if (mysqli_query($link, $query)) {
        echo "Data insert";
     } else {
        echo("Data failed");
     }
     mysqli_close($link);


?>