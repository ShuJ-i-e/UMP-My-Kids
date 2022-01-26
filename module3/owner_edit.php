<?php

require "connect.php";

$username= $_POST["username"];
$staffID= $_POST["staffID"];
$staffName= $_POST["staffName"];
$phoneNumber=$_POST["phoneNumber"];
$address=$_POST["address"];
$yearRegister=date("Y")-$_POST["yearRegister"];
$status=$_POST["status"];
$staffType=$_POST["staffType"];
$medicationHistory =  $_POST["medicationHistory"];
$page=$_POST['page'];

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql="UPDATE staff SET `phoneNumber`='$phoneNumber', `address`='$address' WHERE `medicationHistory`='$medicationHistory'";
     if ($conn->query($sql)=== TRUE) 
     {
         if($page=="parents")
         {
            header("Location: parent_index.php?msg=Record updated successfully!"); 
         }
         else if($page=="owner")
         {
            header("Location: owner_index.php?msg=Record updated successfully!"); 
         }
         else
        {header("Location: staff_index.php?msg=Record updated successfully!"); }
        
     } 
     else 
     {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}
?>