<?php

require "conn.php";

$payDay= date('Y-m-d', strtotime($_POST["paymentDay"]));
$payStatus= $_POST["payStatus"];
$staffID= $_POST['staffID'];
$salaryID= $_POST['salaryID'];

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql="UPDATE salary SET `staffID`='$staffID', `payStatus`='$payStatus', `payDay`='$payDay'  WHERE `staffID`='$staffID'";
     if ($conn->query($sql)=== TRUE) 
     {

        {header("Location: salarylist.php?msg=Record updated successfully!"); }
        
     } 
     else 
     {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}

