<?php

require "conn.php";

$name= $_POST["name"];
$medicationHistory =  $_POST["medicationHistory"];
$yob=date("Y")-$_POST["age"];
$gender=$_POST["gender"];
$parentID=$_POST["parentID"];
$page=$_POST['page'];

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql="INSERT INTO kids ( `name`, medicationHistory, yearOfBirth, gender, parentID)
    VALUES ('$name', '$medicationHistory', '$yob','$gender', '$parentID')";
     if ($conn->query($sql) === TRUE) 
     {
        if($page=="parents")
        {
           header("Location: parent_index.php?msg=Record inserted successfully!"); 
        }
        else if($page=="owner")
        {
           header("Location: owner_index.php?msg=Record inserted successfully!"); 
        }
        else
       {header("Location: staff_index.php?msg=Record inserted successfully!"); }
       
    } 
     else 
     {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}