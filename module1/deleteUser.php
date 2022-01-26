<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$userID = $_POST['userID'];


$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
$query = "DELETE FROM `user` WHERE userID = $userID";

    

     if (mysqli_query($link, $query)) {
        echo "Data Deleted";
     } else {
        echo("Erorr");
     }
     mysqli_close($link);


?>