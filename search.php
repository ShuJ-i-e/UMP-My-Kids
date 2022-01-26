<?php
$link = mysqli_connect('localhost', 'root', '','ump_mykids');

if(isset($_POST['searchTxt'])){
    $searchTxt = $_POST['searchTxt']; 
}else{
    $searchTxt = "searchTxt not set in GET Method";
}
if(isset($_POST['option'])){
    $option = $_POST['option']; 
}else{
    $option = "<br>option not set in GET Method";
}

 //$searchTxt = $_POST['searchTxt'];
//$option = $_POST['option'];

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} else {
   // if($option=="Admin")
   // {
        $sql = "SELECT adminID, username FROM `admin` WHERE `username` LIKE '%{$searchTxt}%' ";
        $result = mysqli_query($link, $sql);
        $count = $result->num_rows;
        
        if ($count > 0) {
            echo "faisadl";
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                
                $myArray[] = $row;
            }
            echo json_encode($myArray);
        } else {
            //echo $sql;
            echo "fail";
        }
    //}
    //else
    //{
        /*
    $sql = "SELECT staffID,name FROM `staff` WHERE `username` LIKE '%{$searchTxt}%' ";
    $result = mysqli_query($link, $sql);
    if($result)
        if($count = $result->num_rows)
             echo "lllll";
    //$count = $result->num_rows;
    if ($count > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        echo "lover";
        echo json_encode($myArray);
    } else {
        echo "fail";
    }
    */
}
//}
?>