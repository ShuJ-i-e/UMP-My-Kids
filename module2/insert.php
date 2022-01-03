<?php

require "conn.php";

$name= $_POST["name"];
$medicationHistory =  $_POST["medicationHistory"];
$yob=date("Y")-$_POST["age"];
$gender=$_POST["gender"];
$parentID=$_POST["parentID"];


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
        echo"NICEEE";
     } 
     else 
     {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
}