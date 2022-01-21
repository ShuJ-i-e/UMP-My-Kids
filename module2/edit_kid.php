<?php

require "conn.php";

$name= $_POST["name"];
$medicationHistory =  $_POST["medicationHistory"];
$yob=date("Y")-$_POST["age"];
$gender=$_POST["gender"];
$kidsID=$_POST['kidsID'];
$page=$_POST['page'];

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql="UPDATE kids SET `name`='$name', `medicationHistory`='$medicationHistory', `yearOfBirth`='$yob', `gender`='$gender' WHERE `kidsID`='$kidsID'";
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