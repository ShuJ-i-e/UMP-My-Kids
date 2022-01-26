<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $userID = $_POST['userID'];
	$user_type = $_POST['user_type'];
	

$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
	
     $query = "update user set user_type= '$user_type' WHERE userID = $userID";

     

     if (mysqli_query($link, $query)) {
         echo ("Data Updated");
     } else {
        echo("Update failed");
     }
     mysqli_close($link);


?>