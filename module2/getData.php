
<?php
require "conn.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //age 3
    $yob = date("Y") - 3;
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM kids WHERE yearOfBirth= $yob");
    $row = $result->fetch_row();
    $three = $row[0];

    //age 4
    $yob = date("Y") - 4;
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM kids WHERE yearOfBirth = $yob");
    $row = $result->fetch_row();
    $four = $row[0];

    //age 5
    $yob = date("Y") - 5;
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM kids WHERE yearOfBirth = $yob");
    $row = $result->fetch_row();
    $five = $row[0];

    //age 6
    $yob = date("Y") - 6;
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM kids WHERE yearOfBirth = $yob");
    $row = $result->fetch_row();
    $six = $row[0];

    $data = [$three, $four, $five, $six];
    echo json_encode($data);
}
?>