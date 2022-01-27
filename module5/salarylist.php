<?php
    // Start the session
    session_start();
    
    if(isset($_SESSION["username"]) && isset($_SESSION["user_id"]) ){
        $loginUsername= $_SESSION["username"];
        $loginID= $_SESSION["user_id"];
    }
    //direct user back to main when no session
    else{
        header("Location: ../login.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salary- UMP MY KIDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
            width: 150px;
        }

        tr:hover {
            background-color: #dddddd;
        }
    /* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>

<body>
    <div class="wrapper">
               <!-- Sidebar  -->
               <nav id="sidebar">
            <div class="sidebar-header">
                <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">UMP MY-KIDS</span>
                </a>
            </div>
            <ul class="list-unstyled components">
                <li>
                <a href="../staff_main.php">Home</a>
                </li>
                <li>
                    <a href="../module2/staff_index.php">Parents & Kids</a>
                </li>
                <li>
                    <a href="#activitySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Activity</a>
                    <ul class="collapse list-unstyled" id="activitySubmenu">
                        <li>
                            <a href="../module6/staff_schedule_list.php">List</a>
                        </li>
                        <li>
                            <a href="../module6/staff_schedule_report.php">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                <li>
                    <a href="#manpowerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manpower</a>
                    <ul class="collapse list-unstyled" id="manpowerSubmenu">
                        <li>
                            <a href="../module3/staff_view.php">List</a>
                        </li>
                        <li>
                            <a href="../module3/staff_index.php">Index</a>
                        </li>
                        <li>
                            <a href="../module3/staff_report.php">Report</a>
                        </li>
                    </ul>
                </li>
                <li  class="active">
                    <a href="#salarySubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Salary</a>
                    <ul class="collapse list-unstyled" id="salarySubmenu">
                        <li>
                            <a href="../module5/salarylist.php">List</a>
                        </li>
                        <li>
                            <a href="../module5/report_test.php">Report</a>
                        </li>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid bg-primary mb-5">
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <nav class="d-flex navbar navbar-expand-lg" style=" float:left; margin-top: 50px">
                            <button type="button" id="sidebarCollapse" class="btn btn-info">
                                <i class="fas fa-align-left"></i>
                            </button>
                        </nav>
                    </div>
                    <div class="p-2">
                        <div class="d-flex flex-column align-items-center justify-content-center"
                            style="min-height: 150px;min-width:max-content">
                            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                                <i class="flaticon-043-teddy-bear"></i>
                                <span class="text-white">UMP MY-KIDS</span>
                            </a>
                        </div>
                    </div>
                    <div class="p-2">
                        <nav class="d-flex justify-content-end navbar navbar-expand-lg"
                            style="float:right; margin-top: 50px">
                            <button type="button" id="logoutBtn" class="btn btn-info">
                                <i class="fas fa-lock"></i> <?php echo $loginUsername; ?></a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal" id="myModal">
            <div class="modal-content">
                <div class="modal-header">
                  <span class="close">&times;</span>
                  <h2>UMP MY-KIDS</h2>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" style="margin: 10px;float:left" onclick="clearSession()">Yes</button>
                  <button class="btn btn-light" style="margin: 10px;float:right">No</button>
                </div>
              </div>
            </div>
            <!-- End Modal -->


 <!-- Content Start-->
 <table>
 <div class="col-lg-12 mb-5">
    <div class="card border-0 bg-light shadow-sm pb-2">
        <div class="card-header bg-secondary text-center p-4">
            <h1 class="text-white m-0">Salary</h1>
        </div>
        <div class="card-body text-center">
            <h3 class="card-title">Salary List</h3>
            <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='salary_deleteList.php'"><i class='fa fa-plus'></i> Delete Staff</button>
            <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='salary_updateList.php'"><i class='fa fa-plus'></i> Update Staff</button>
            <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='salary_insertDetail.php'"><i class='fa fa-plus'></i> Insert Salary Detail</button>
            <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='salarylist_search.php'"><i class='fa fa-plus'></i> Search Staff</button>
        </div>
    </div>
</div>

            <tr>
                <th>Name</th>
                <th>Staff Type</th>
                <th>Pay Status</th>
                <th>Salary Details</th>
            </tr>
            <?php
            require "conn.php";
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }else {
                    $sql = "SELECT staff.staffID, staff.username, staff.amount, staff.staffType, salary.payStatus FROM staff
                    INNER JOIN salary ON staff.staffID=salary.staffID" ;
                    $result = $conn->query($sql);

                    if (!$result) {
                        trigger_error('Invalid query: ' . $conn->error);
                    }

                    $count = $result->num_rows;
                    $i = 0;
                    if ($count > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $a[$i] = $row["username"];
                            $b[$i] = $row["staffType"];
                            $c[$i] = $row["payStatus"];
                            $d[$i] = $row["staffID"];
                            $i++;
                        }
                        for ($i = 0; $i < $count; $i++) {
                            echo "<tr>";
                            echo "<td>" . $a[$i] . "</td>";
                            echo "<td>" . $b[$i] . "</td>";
                            echo "<td>" . $c[$i] . "</td>";

                            $view_url = "salary_detail.php?id=" . $d[$i];
                            echo "<td><a class='btn btn-info btn-sm action-btn' href=" . $view_url . " data-toggle='tooltip' id='View'><i class='fa fa-eye'></i></a></td>";
                        }
                    }
                }
                ?>
    </table>
<!-- Content End-->

<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">

    <div class="container-fluid pt-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-primary font-weight-bold" href="#">Copyright © 2021 UMP-myKids</a>
        </p>
    </div>
</div>
<!-- Footer End -->

</div>
</div>
<!-- Back to Top -->
<a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/isotope/isotope.pkgd.min.js"></script>
<script src="../lib/lightbox/js/lightbox.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#sidebarCollapse').on('click', function() {
    $('#sidebar').toggleClass('active');
});
});


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("logoutBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
function clearSession() {
            <?php
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
            ?>
            window.location.href = "login.php";
        }
</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>