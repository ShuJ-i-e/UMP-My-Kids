<?php

require "conn.php";

$name= $_POST["ParentName"];
$phoneNumber =  $_POST["phoneNumber"];
$address=$_POST["address"];
$parentID=$_POST['parentID'];
$page=$_POST['page'];

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql="UPDATE parents SET `phoneNumber`='$phoneNumber', `address`='$address'WHERE `parentID`='$parentID'";
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