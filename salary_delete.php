<?php

require "conn.php";

if(isset($_POST['salary_delete_multiple_btn']))
{
     $all_id = $_POST['salary_delete_id'];
     $extract_id = implode(',' , $all_id);
     // echo $extract_id;


    $query = "DELETE FROM salary WHERE salaryID IN($extract_id) ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
    {
        header("Location: salary_deleteList.php");
    }
    else
    {
        header("Location: salary_deleteList.php");
    }
}
?>
