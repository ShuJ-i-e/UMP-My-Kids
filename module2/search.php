<?php
require "conn.php";
$searchTxt = $_POST['searchTxt'];
$option = $_POST['option'];

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
    $sql = "SELECT kidsID,name FROM `kids` WHERE `name` LIKE '%{$searchTxt}%' ";
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