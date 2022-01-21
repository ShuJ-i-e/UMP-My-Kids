<?php
require "conn.php";
$searchTxt = $_POST['searchTxt'];
// $user_id = $_SESSION['user_id'];
$user_id = 1;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT kidsID,name FROM `kids` JOIN parents ON kids.parentID=parents.parentID JOIN user ON parents.userID=user.userID WHERE kids.name LIKE '%{$searchTxt}%' AND  user.userID=$user_id";
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
