<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$parentID = $_POST['parentID'];
if(isset($_POST['parentID'])){
    $parentID = $_POST['parentID']; 
}else{
    $parentID = "parentID not set in GET Method";
}


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
   
$query = "DELETE FROM `parents` WHERE parentID = $parentID"	;

    

     if (mysqli_query($conn, $query)) {
        echo "Data Deleted";
     } else {
        echo("Erorr");
     }
     mysqli_close($conn);


?>