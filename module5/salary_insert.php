<?php

require "conn.php";

$payDay= date('Y-m-d', strtotime($_POST["paymentDay"]));
$payStatus= $_POST["payStatus"];
$staffID= $_POST['staffID'];

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql="INSERT INTO salary (payDay, payStatus, staffID)
    VALUES ('$payDay', '$payStatus', '$staffID')";
    
     if ($conn->query($sql) === TRUE) 
     {
       {header("Location: salarylist.php?msg=Record inserted successfully!"); }
       
    } 
     else 
     {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}