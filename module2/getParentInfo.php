<?php
require "conn.php";
$id = $_POST['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT phoneNumber, address, yearRegister FROM parents WHERE parentID=$id";
    $result = mysqli_query($conn, $sql);
    $count = $result->num_rows;
    if ($count > 0) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        echo json_encode($myArray);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
