<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$parentID = $_POST['parentID'];
if(isset($_POST['parentID'])){
    $parentID = $_POST['parentID']; 
}else{
    $parentID = "parentID not set in GET Method";
}


$link = mysqli_connect('localhost', 'root', '','ump_mykids');

   
$query = "DELETE FROM `parents` WHERE parentID = $parentID"	;

    

     if (mysqli_query($link, $query)) {
        echo "Data Deleted";
     } else {
        echo("Erorr");
     }
     mysqli_close($link);


?>