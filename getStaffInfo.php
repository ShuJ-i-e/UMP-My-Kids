<?php
require "conn.php";
$id = $_POST['id'];

$payDay=date("Y")-$_POST["payDay"];
$payStatus =  $_POST["payStatus"];
$salary= $_POST["salary"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT payDay, payStatus, salary FROM salary WHERE salaryID=$id";
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