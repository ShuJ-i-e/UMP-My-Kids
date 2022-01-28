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

if(isset($_POST['searchTxt'])){
    $searchTxt = $_POST['searchTxt']; 
}else{
    $searchTxt = "Name not set in POST Method";
}

if(isset($_POST['option'])){
    $option = $_POST['option']; 
}else{
    $option = "option not set in POST Method";
}
//$searchTxt = $_POST['searchTxt'];
//$option = $_POST['option'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if($option=="parents")
    {
        $sql = "SELECT parentID, username FROM `parents` WHERE `username` LIKE '%{$searchTxt}%' ";
        $result = mysqli_query($conn, $sql);
        $count = $result->num_rows;
        
        if ($count > 0) {
          
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                echo "failnnnn";
                $myArray[] = $row;
            }
            echo json_encode($myArray);
        } else {
            //echo $sql;
            echo "fail";
        }
    }
    else
    {
    $sql = "SELECT staffID,username FROM `staff` WHERE `username` LIKE '%{$searchTxt}%' ";
    $result = mysqli_query($conn, $sql);
    $count = $result->num_rows;
    if ($count > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        echo json_encode($myArray);
    } else {
        echo "fail";
    }
}
}
?>