<?php
    // Start the session
    session_start();
    
    if(isset($_SESSION["username"]) && isset($_SESSION["user_id"]) ){
        $loginUsername= $_SESSION["username"];
        $loginID= $_SESSION["user_id"];
    }
    //direct user back to main when no session
    else{
        header("Location: ../staff_main.php"); 
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

    #outputArea{
        display:none;
    }

</style>

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
                <li class="active">
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
                  <button class="btn btn-secondary" style="margin: 10px;float:left">Yes</button>
                  <button class="btn btn-light" style="margin: 10px;float:right">No</button>
                </div>
              </div>
            </div>
            <!-- End Modal -->
            <!-- Delete Modal -->
            <div class="modal" id="deleteBox">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="closeLogoDeleteBtn">&times;</span>
                        <h2>UMP MY-KIDS</h2>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete Activity with No.<span id="deleteSpan"><strong></strong></span>?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" id="deleteBtn" style="margin: 10px;float:left">Yes</button>
                        <button class="btn btn-light" id="closeDeleteBtn" style="margin: 10px;float:right">No</button>
                    </div>
                </div>
            </div>
            <!--End Delete Modal -->
            
            <?php include 'conn.php';?>
            <?php
                $errorLbl="";
                $noResultLbl= "";

                
                //get the staff id from username
                $staffSql = "SELECT staffID FROM staff WHERE username = '$loginUsername';";
                $result = $conn->query($staffSql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $staffID=$row["staffID"];
                    }
                }

                $sql = "SELECT * from kids join activity on kids.kidsID=activity.kidsID
                WHERE activity.staffID=$staffID";
                $result = $conn->query($sql);
                $count = $result->num_rows;
                $x= 0;
                if ($count >0) {
                    while ($row = mysqli_fetch_array($result)) {
                        $kidsName [$x]= $row['name'];
                        $staffType [$x]= $row['staffType'];
                        $startTimeTxt [$x]= $row['startTime'];
                        $endTimeTxt [$x]= $row['endTime'];
                        $statusRdb [$x]= $row['status'];
                        $x++;
                    }
                }
            ?>

            <?php 
                //get current month in integer
                $monthNum = date('m');
                $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                //convert to string
                $monthName = $dateObj->format('F');
            ?>
            
            <!--Content here -->
            <div class="container-fluid py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <?php echo' <h1 class="mb-4 text-center">Monthly Report - ' . $monthName. '</h1>'?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-3 ">
                                <label for="start">Staff name:</label>
                        </div>

                        <div class="col-lg-6">
                            <strong><label for="start"><?php echo $loginUsername?></label></strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-3 ">
                                <label for="start">Total activities:</label>
                        </div>

                        <div class="col-lg-6">
                            <strong><label for="start"><?php echo $x ?></label></strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h1 class="mb-4 text-center">Summary</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid py-3" id="outputArea">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="mb-4 text-left">Output</h2>
                        </div>
                        <div class="col-lg-4">
                            <p class="mb-4 text-right" id="showingLbl">Showing 2 of </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                
                if($x > 0){
                    //display in table
                    echo '<table id="data">';
                    echo '<thead>';
                        echo "<tr>";
                            echo "<th>No</th>";
                            echo "<th>Kid name</th>";
                            echo "<th>Staff name</th>";
                            echo "<th>Staff type</th>";
                            echo "<th>Time</th>";
                            echo "<th>Status</th>";
                        echo "</tr>";
                    echo '</thead>';

                    for ($i = 0; $i < $x; $i++) {
                        echo "<tr>";
                            echo "<td>" . $i+1 . "</td>";
                            echo "<td>" . $kidsName [$i] . "</td>";
                            echo "<td>" . $loginUsername . "</td>";
                            echo "<td>" . $staffType [$i] . "</td>";
                            echo "<td>" . $startTimeTxt [$i] . "<br /> to <br />" .$endTimeTxt [$i]."</td>";
                            echo "<td>" . $statusRdb [$i] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                }
                else{
                    $noResultLbl= "No activities yet in this month!" ;
                }
                
                $conn->close();
            ?>

            <!-- Display when no database result found -->
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h2 class="mb-4 text-left text-danger text-center"><?php echo $noResultLbl ?></h2>
                        </div>
                    </div>
                </div>
            </div>

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

        var deleteDialog = document.getElementById("deleteBox");

        function deleteFunc(activityID, id) {
            deleteDialog.style.display = "block";
            //add id to deleteSpan
            $('#deleteSpan').html(id);
            $("#deleteBtn").click(function() {
                window.location.href = "delete.php?id=" + activityID + "&page=staff";
            });
        }
        var closeDeleteBtn = document.getElementById("closeDeleteBtn");
        closeDeleteBtn.onclick = function() {
            deleteDialog.style.display = "none";
        }

        var closeLogoDeleteBtn = document.getElementById("closeLogoDeleteBtn");
        closeLogoDeleteBtn.onclick = function() {
            deleteDialog.style.display = "none";
        }

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

        //pagination JS
        $(document).ready(function(){
            $('#data').after('<nav id="navHead"></nav>');
            $('#navHead').append('<ul id="nav" class="pagination justify-content-end" style="margin: 20px">');
            var rowsShown = 5;
            var rowsTotal = $('#data tbody tr').length;
            var numPages = rowsTotal/rowsShown;
            for(i = 0;i < numPages;i++) {
                var pageNum = i + 1;
                $('#nav').append('<li class="page-item"><a class="page-link" href="#" rel="'+i+'">'+pageNum+'</a></li>');
            }

            //hide data 
            $('#data tbody tr').hide();
            //only show 4
            $('#data tbody tr').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            
            $('#nav a').bind('click', function(){

                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                css('display','table-row').animate({opacity:1}, 300);
            });

            
            if(rowsTotal > 0){

                if(rowsTotal < 5){
                    //change showing word
                    document.getElementById("showingLbl").innerHTML = "Showing " +rowsTotal +  " of " +rowsTotal ;
                }
                else{
                    //change showing word
                    document.getElementById("showingLbl").innerHTML = "Showing 5 of " +rowsTotal;
                }

                //display output area
                document.getElementById("outputArea").style.display = "block";
            }
            
        });
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>