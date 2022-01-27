<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$adminID = $_POST['adminID'];


$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
$query = "DELETE FROM `admin` WHERE adminID = $adminID"	;

    

     if (mysqli_query($link, $query)) {
        echo "Data Deleted";
     } else {
        echo("Erorr");
     }
     mysqli_close($link);


?>