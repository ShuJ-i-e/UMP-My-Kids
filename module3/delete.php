<?php
require "connect.php";

$username= $_POST["username"]
$staffID = $_GET['staffID'];
$page = $_GET['page'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $checkSQL = "SELECT * FROM kids WHERE staffID=$staffID";
    $result = mysqli_query($conn, $checkSQL);
    $count = $result->num_rows;
    if ($count > 0) {
        $sql = "DELETE FROM staff WHERE staffID=$staffID";
        mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            if ($page == "parents") {
                header("Location: parent_index.php?msg=You have deleted kids with Kid ID: $staffID 's information successfully");
            } else if ($page == "owner") {
                header("Location: owner_index.php?msg=You have deleted kids with Kid ID: $staffID 's information successfully");
            } else {
                header("Location: staff_index.php?msg=You have deleted kids with Kid ID: $staffID 's information successfully");
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        if ($page == "parents") {
            header("Location: parent_index.php?msg=Database does not have any information of kid with Kid ID: $staffID");
        } else if ($page == "owner") {
            header("Location: owner_index.php?msg=Database does not have any information of kid with Kid ID: $staffID");
        } else {
            header("Location: staff_index.php?msg=Database does not have any information of kid with Kid ID: $staffID");
        }
    }
}