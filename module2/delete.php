<?php
require "conn.php";
$kidsID = $_GET['id'];
$page = $_GET['page'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $checkSQL = "SELECT * FROM kids WHERE kidsID=$kidsID";
    $result = mysqli_query($conn, $checkSQL);
    $count = $result->num_rows;
    if ($count > 0) {
        $sql = "DELETE FROM kids WHERE kidsID=$kidsID";
        mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            if ($page == "parents") {
                header("Location: parent_index.php?msg=You have deleted kids with Kid ID: $kidsID 's information successfully");
            } else if ($page == "owner") {
                header("Location: owner_index.php?msg=You have deleted kids with Kid ID: $kidsID 's information successfully");
            } else {
                header("Location: staff_index.php?msg=You have deleted kids with Kid ID: $kidsID 's information successfully");
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        if ($page == "parents") {
            header("Location: parent_index.php?msg=Database does not have any information of kid with Kid ID: $kidsID");
        } else if ($page == "owner") {
            header("Location: owner_index.php?msg=Database does not have any information of kid with Kid ID: $kidsID");
        } else {
            header("Location: staff_index.php?msg=Database does not have any information of kid with Kid ID: $kidsID");
        }
    }
}
