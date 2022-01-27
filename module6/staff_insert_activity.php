<?php
    // Start the session
    session_start();
    
    if(isset($_SESSION["username"]) && isset($_SESSION["user_id"]) ){
        $loginUsername= $_SESSION["username"];
        $loginID= $_SESSION["user_id"];
    }
    //direct staff back to main when no session
    else{
        header("Location: ../login.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UMP MY KIDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

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
                <li  class="active">
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
                <li>
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
                        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px;min-width:max-content">
                            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                                <i class="flaticon-043-teddy-bear"></i>
                                <span class="text-white">UMP MY-KIDS</span>
                            </a>
                        </div>
                    </div>
                    <div class="p-2">
                        <nav class="d-flex justify-content-end navbar navbar-expand-lg" style="float:right; margin-top: 50px">
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

            <!-- Content Start -->
            <form id="insertForm" name="insertForm" method="POST" action="insert.php">
                <div class="center">
                    <div class="col-lg-10-m2">

                        <div class="card border-0">
                            <div class="card-header bg-secondary text-center p-4">
                                <h1 class="text-white m-0">Add Activity Details</h1>
                            </div>

                            <div class="card-body rounded-bottom bg-primary p-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h5 class=" mb-4">Kid's name</h5>
                                    </div>
                                
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <select name="kidsID" id="kidsID" class="custom-select border-0 px-4">
                                                <option selected disabled="disabled">-- Select --</option> 
                                                <?php
                                                require "conn.php";
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                } else {
                                                    $sql = "SELECT kidsID, name  FROM kids ";
                                                    $result = $conn->query($sql);
                                                    $count = $result->num_rows;
                                                    if ($count >0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $menu = "<option value=" . $row['kidsID'] . ">" . $row['name'] . "</option>";
                                                            echo $menu;
                                                        }
                                                    } else {
                                                        $menu = "<option disabled='disabled'> No parents registered yet </option>";
                                                        echo $menu;
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <p class="text-danger" id="errorLblKids"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h5 class=" mb-4">Staff name</h5>
                                    </div>

                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input name="staffName" id="staffName" type="text" class="form-control border-0 p-4" value="<?php echo $loginUsername ?>" readonly/>

                                            <?php
                                                //get the staff id from username
                                                $staffSql = "SELECT staffID, staffType FROM staff WHERE username = '$loginUsername';";
                                                $result = $conn->query($staffSql);
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                        $staffID=$row["staffID"];
                                                        $staffType= $row["staffType"];
                                                    }
                                                }
                                            ?>

                                            <!-- Pass staff id to insert.php -->
                                            <input type="hidden" id="staffID" name="staffID" value="<?php echo $staffID?>">

                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h5 class=" mb-4">Staff type</h5>
                                    </div>
                                        
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input name="staffType" id="staffType" type="text" class="form-control border-0 p-4" value="<?php echo $staffType?>" readonly/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h5 class=" mb-4">Start Time</h5>
                                    </div>
                                        
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input type="datetime-local" id="startTimeTxt" name="startTimeTxt" class="form-control">
                                            <p class="text-danger" id="errorLblStart"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h5 class=" mb-4">End Time</h5>
                                    </div>
                                        
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input type="datetime-local" id="endTimeTxt" name="endTimeTxt" class="form-control">
                                            <p class="text-danger" id="errorLblEnd"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <h5 class=" mb-4">Status</h5>
                                    </div>
                                        
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <h5 class=" mb-4">
                                                <input type="radio" id="activeRdb" name="statusRdb" value="Active" >
                                                <label for="activeRdb">Active</label>
                                                <input type="radio" id="notActiveRdb" name="statusRdb" value="Not Active" style="margin-left: 20px" >
                                                <label for="notActiveRdb">Not Active</label>
                                                <p class="text-danger" id="errorLblCmb"></p>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <!-- pass staff type to insert.php -->
                                <input type='hidden' id='page' name='page' value='staff'/>
                                <div>
                                    <button type="button" class="btn btn-secondary border-0 px-4 mx-auto mb-4 float-right" onclick="validate()">Submit</button>
                                    <a class="btn btn-light border-0 px-4 mx-auto mb-4" type="button" href="staff_schedule_list.php">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Content End -->
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

        function validate(){
            var kidsIDCmb = document.getElementById("kidsID");

            var kidsValue=kidsIDCmb.options[kidsIDCmb.selectedIndex].text;

            var DEFAULT_VALUE="-- Select --" ;

            document.getElementById("errorLblKids").innerHTML = " ";
            document.getElementById("errorLblStart").innerHTML = " ";
            document.getElementById("errorLblEnd").innerHTML = " ";
            document.getElementById("errorLblCmb").innerHTML = " ";
            
            var errorStat= false;

            if(kidsValue ==  DEFAULT_VALUE){
                document.getElementById("errorLblKids").innerHTML = "Please select kids name";
                errorStat= true;
            }

            var startTimeTxt = document.getElementById("startTimeTxt").value;
            var endTimeTxt = document.getElementById("endTimeTxt").value;
            var activeRdb = document.getElementById("activeRdb");
            var notActiveRdb = document.getElementById("notActiveRdb");
            
            if(startTimeTxt.trim() == ""){
                document.getElementById("errorLblStart").innerHTML = "Please select start time";
                errorStat= true;
            }

            if(endTimeTxt.trim() == ""){
                document.getElementById("errorLblEnd").innerHTML = "Please select end time";
                errorStat= true;
            }
            
            if(activeRdb.checked == false && notActiveRdb.checked == false){
                document.getElementById("errorLblCmb").innerHTML = "Please select end time";
                errorStat= true;
            }

            if(!errorStat){
                document.getElementById("insertForm").submit();
            }
        }
        function clearSession() {
            window.location.href = "../login.php";
        }
    </script>
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>