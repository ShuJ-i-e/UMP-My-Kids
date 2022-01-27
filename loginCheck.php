<?php
$uname = $_POST['uname'];
$pass = $_POST['password'];
$type = $_POST['type'];

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
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
               $i=0;
                session_start();
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['user_id'] = $row["adminID"];
                    $_SESSION['username'] = $row["username"];
                    $i++;
                }
                header("Location: module1/admin.php");
            } else {

                header("Location: index.php?msg=Incorrect username and password!");
            }
        } else if ($type == 'staff') {
            $sql = "SELECT * FROM staff WHERE username ='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            $count = $result->num_rows;
            if ($count == 1) {
                $i=0;
                session_start();
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['user_id'] = $row["staffID"];
                    $_SESSION['username'] = $row["username"];
                    $i++;
                }
                if($uname=="owner" && $pass=="owner" )
                {
                    header("Location: owner_main.php");
                }
                else
                {
                    header("Location: staff_main.php");
                }
            } else {
                header("Location: index.php?msg=Incorrect username and password!");
            }
        } else {
            $sql = "SELECT * FROM parents WHERE username ='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            $count = $result->num_rows;
            if ($count == 1) {
                $i=0;
                session_start();
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['user_id'] = $row["parentID"];
                    $_SESSION['username'] = $row["username"];
                    $i++;
                }
                header("Location: user_main.php");
            } else {

                header("Location: index.php?msg=Incorrect username and password!");
            }
        }
    }
}
