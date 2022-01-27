<?php
$uname = $_POST['uname'];
$pass = $_POST['password'];
$type = $_POST['type'];



$conn = mysqli_connect('localhost', 'root', '','ump_mykids');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {








if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    if( $type == 'admin')
    {
        $sql = "SELECT * FROM admin WHERE username ='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

               

            }else{

                echo "Can't Login";

            }

        }else{

            echo "wrong";
        }

    }else if($type == 'staff'){
        $sql = "SELECT * FROM staff WHERE username ='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

               

            }else{

                echo "Can't Login";

            }

        }else{

            echo "wrong password OR username";
        }}else{
            $sql = "SELECT * FROM parents WHERE username ='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
    
                $row = mysqli_fetch_assoc($result);
    
                if ($row['username'] === $uname && $row['password'] === $pass) {
    
                    echo "Logged in!";
    
                   
    
                }else{
    
                    echo "Can't Login";
    
                }
    
            }else{
    
                echo "wrong password OR username";
            }}

        


    }

}
