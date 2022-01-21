<?php

    require "conn.php";
    $kidsID= $_POST["kidsID"];
    $staffID= $_POST["staffID"];
    $staffType= $_POST["staffType"];
    $startTimeTxt= $_POST["startTimeTxt"];
    $endTimeTxt= $_POST["endTimeTxt"];
    $statusRdb= $_POST["statusRdb"];
    $page = $_POST['page'];

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

        $sql= "INSERT INTO `activity` (`kidsID`, `staffID`, `parentID`, `staffType`, `startTime`, `endTime`, `status`) 
        VALUES ('$kidsID', '$staffID', '$parentID','$staffType', '$startTimeTxt', '$endTimeTxt', '$statusRdb');";
        if ($conn->query($sql) === TRUE) 
        {
            if($page=="parents")
            {
                header("Location: parent_schedule_list.php?msg=Record inserted successfully!"); 
            }
            else if($page=="owner")
            {
                header("Location: owner_schedule_list.php?msg=Record inserted successfully!"); 
            }
            else
            {
                header("Location: staff_schedule_list.php?msg=Record inserted successfully!"); 
            }
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>