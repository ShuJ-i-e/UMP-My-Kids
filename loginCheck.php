<?php
$uname = $_POST['uname'];
$pass = $_POST['password'];
$type = $_POST['type'];



$conn = mysqli_connect('localhost', 'root', '', 'ump_mykids');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    if (isset($_POST['uname']) && isset($_POST['password'])) {

        function validate($data)
        {

            $data = trim($data);

            $data = stripslashes($data);

            $data = htmlspecialchars($data);

            return $data;
        }

        if ($type == 'admin') {
            $sql = "SELECT * FROM admin WHERE username ='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            $count = $result->num_rows;
            if ($count == 1) {
                header("Location: module1/admin.html"); 
            } else {

                header("Location: login.php?msg=Incorrect username and password!"); 
            }
        } else if ($type == 'staff') {
            $sql = "SELECT * FROM staff WHERE username ='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);
            if ($count == 1) {
                header("Location: staff_main.php"); 
            } else {

                header("Location: login.php?msg=Incorrect username and password!"); 
            }
        } else {
            $sql = "SELECT * FROM parents WHERE username ='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);
            if ($count == 1) {
                header("Location: user_main.php"); 
            } else {

                header("Location: login.php?msg=Incorrect username and password!"); 
            }
        }
    }
}
