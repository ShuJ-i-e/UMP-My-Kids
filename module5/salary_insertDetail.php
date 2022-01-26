<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salary List - UMP MYKIDS</title>
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
                            <a href="../module3/parent_view.php">List</a>
                        </li>
                        <li>
                            <a href="../module3/parent_index.php">Index</a>
                        </li>
                        <li>
                            <a href="../module3/parent_report.php">Report</a>
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
                                <i class="fas fa-lock"></i> Username</a>
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
                  <button class="btn btn-secondary" style="margin: 10px;float:left">Yes</button>
                  <button class="btn btn-light" style="margin: 10px;float:right">No</button>
                </div>
              </div>
            </div>

 <!-- Content Start-->

 <form name="form1" method="POST" action="salary_insert.php">
                <div class="center">
                    <div class="col-lg-10-m2">

                        <div class="card border-0">
                            <div class="card-header bg-secondary text-center p-4">
                                <h1 class="text-white m-0">Insert Salary Detail</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-primary p-5">
                                <h3 class=" mb-4">Staff's Detail</h3>
                                <div class="form-group">
                                    <select name="staffID" id="staffID" class="custom-select border-0 px-4" onchange="displayStaffInfo()">
                                        <option selected>Staff's Name</option>
                                        <?php
                                        require "conn.php";
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } else {
                                            $sql = "SELECT staffID, username FROM staff ";
                                            $result = $conn->query($sql);
                                            $count = $result->num_rows;
                                            if ($count >= 1) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $menu[$i] = "<option value=" . $row['staffID'] . ">" . $row['username'] . "</option>";
                                                    echo $menu[$i];
                                                    $i++;
                                                }
                                            } else {
                                                $menu = "<option disabled='disabled'> No staff registered yet </option>";
                                                echo $menu;
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div id="staffInfo" style="display: none">
                                    <div class="form-group">
                                        <input type="text" id="phoneNumber" class="form-control border-0 p-4" placeholder="Phone Number" disabled />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="address" class="form-control border-0 p-4" placeholder="Address" disabled />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" id="yearRegister" class="form-control border-0 p-4" placeholder="Year Registered" disabled />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" id="amount" class="form-control border-0 p-4" placeholder="Amount" disabled />
                                    </div>
                                </div>
                                <hr>

                                <h3 class=" mb-4">Salary Detail</h3>
                                <div class="form-group">
                                    <select name="payStatus" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select Payment Status</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Overdue">Overdue</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="paymentDay" class="form-control border-0 p-4" placeholder="Payment Date">
                                </div>
                                <div>
                                    <button class="btn btn-secondary border-0 px-4 mx-auto mb-4 float-right" type="submit">Submit</button>
                                    <a class="btn btn-light border-0 px-4 mx-auto mb-4" type="button" href="salarylist.php">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
  
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

function displayStaffInfo() {
            var div = document.getElementById("staffInfo");
            div.style.display = 'block';
            var StaffID = document.getElementById("staffID");
            var selectedStaffID = StaffID.value;
                $.ajax({
                    type: "POST",
                    url: "getStaffInfo.php",
                    data: "id=" + selectedStaffID,
                    success: function(result) {
                        console.log(result);
                        staff_info = JSON.parse(result);
                        $('#phoneNumber').val(staff_info[0].phoneNumber);
                        $('#address').val(staff_info[0].address);
                        $('#yearRegister').val(staff_info[0].yearRegister);
                        $('#amount').val(staff_info[0].amount);
                    },
                    fail: function(xhr, textStatus, errorThrown) {
                        console.log('request failed');
                    }
                });
            
        }
</script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>