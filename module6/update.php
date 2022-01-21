<?php

    require "conn.php";
    $kidsID= $_POST["kidsID"];
    $staffID= $_POST["staffID"];
    $staffType= $_POST["staffType"];
    $startTimeTxt= $_POST["startTimeTxt"];
    $endTimeTxt= $_POST["endTimeTxt"];
    $statusRdb= $_POST["statusRdb"];
    $page = $_POST['page'];
    $activityID = $_POST['activityID'];

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        //find the parent ID
        $sql = "SELECT parentID FROM kids WHERE kidsID = '$kidsID';";
        $result = $conn->query($sql);
        $count = $result->num_rows;
        if ($count >0) {
            while ($row = mysqli_fetch_array($result)) {
                $parentID= $row['parentID'];
            }
        }

        $sql="UPDATE activity SET 
        `kidsID`='$kidsID', `staffID`='$staffID', 
        `parentID`='$parentID', `staffType`='$staffType', 
        `startTime`='$startTimeTxt', `endTime`='$endTimeTxt',
        `status`='$statusRdb'
        WHERE `activityID`='$activityID'";
        if ($conn->query($sql) === TRUE) 
        {
            if($page=="parents")
            {
                header("Location: parent_schedule_list.php?msg=Record updated successfully!"); 
            }
            else if($page=="owner")
            {
                header("Location: owner_schedule_list.php?msg=Record updated successfully!"); 
            }
            else
            {
                header("Location: staff_schedule_list.php?msg=Record updated successfully!"); 
            }
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>