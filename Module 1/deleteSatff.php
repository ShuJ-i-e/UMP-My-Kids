<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
if(isset($_POST['staffID'])){
    $staffID = $_POST['staffID']; 
}else{
    $staffID = "staffID not set in GET Method";
}


$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
$query = "DELETE FROM `staff` WHERE staffID = $staffID"	;

    

     if (mysqli_query($link, $query)) {
        echo "Data Deleted";
     } else {
        echo("Erorr");
     }
     mysqli_close($link);


?>