<?php
require "conn.php";
$activityID = $_GET['id'];
$page = $_GET['page'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $checkSQL = "SELECT * FROM activity WHERE activityID=$activityID";
    $result = mysqli_query($conn, $checkSQL);
    $count = $result->num_rows;
    if ($count > 0) {
        $sql = "DELETE FROM activity WHERE activityID=$activityID";
        mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            if ($page == "parents") {
                header("Location: parent_schedule_list.php?msg=You have deleted activity with Activity ID: $activityID 's information successfully");
            } else if ($page == "owner") {
                header("Location: owner_schedule_list.php?msg=You have deleted activity with Activity ID: $activityID 's information successfully");
            } else {
                header("Location: staff_schedule_list.php?msg=You have deleted activity with Activity ID: $activityID 's information successfully");
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        if ($page == "parents") {
            header("Location: parent_schedule_list.php?msg=Database does not have any information of activity with Activity ID: $activityID");
        } else if ($page == "owner") {
            header("Location: owner_schedule_list.php?msg=Database does not have any information of activity with Activity ID: $activityID");
        } else {
            header("Location: staff_schedule_list.php?msg=Database does not have any information of activity with Activity ID: $activityID");
        }
    }
}
