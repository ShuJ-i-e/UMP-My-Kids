<?php
    // Start the session
    session_start();
    
    if(isset($_SESSION["username"]) && isset($_SESSION["user_id"]) ){
        $loginUsername= $_SESSION["username"];
        $loginID= $_SESSION["user_id"];
    }
    //direct user back to main when no session
    else{
        header("Location: ../owner_main.php"); 
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
                    <a href="../owner_main.php">Home</a>
                </li>
                <li>
                    <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Parents & Kids</a>
                    <ul class="collapse list-unstyled" id="parentsSubmenu">
                        <li>
                            <a href="#">List</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#manpowerSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Manpower</a>

                    <ul class="collapse list-unstyled" id="manpowerSubmenu">
                        <li>
                            <a href="#">List</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#paymentSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Payment</a>
                    <ul class="collapse list-unstyled" id="paymentSubmenu">
                        <li>
                            <a href="#">List</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#activitySubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Activity</a>
                    <ul class="collapse list-unstyled" id="activitySubmenu">
                        <li>
                            <a href="owner_schedule_list.php">List</a>
                        </li>
                        <li  class="active">
                            <a href="owner_schedule_report.php">Report</a>
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

            <table>
                <tr>
                    <th>Total number activity of infant caretakers</th>
                    <?php
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity 
                        WHERE staffType='Infrant'
                        AND
                        MONTH(endTime) = MONTH(CURRENT_DATE())
                        AND 
                        YEAR(endTime) = YEAR(CURRENT_DATE())");
                        $row = $result->fetch_row();
                        $numInfrantMonth= $row[0];
                        echo "<td>".$row[0]."</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number activity of workers</th>
                    <?php
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity 
                        WHERE staffType='Worker'
                        AND
                        MONTH(endTime) = MONTH(CURRENT_DATE())
                        AND 
                        YEAR(endTime) = YEAR(CURRENT_DATE())");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $numWorkerMonth= $row[0];
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number activity of teachers</th>
                    <?php
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity 
                        WHERE staffType='Teacher'
                        AND
                        MONTH(endTime) = MONTH(CURRENT_DATE())
                        AND 
                        YEAR(endTime) = YEAR(CURRENT_DATE())");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $numTeacherMonth= $row[0];
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number activity on this month</th>
                    <?php
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity 
                        WHERE 
                        MONTH(endTime) = MONTH(CURRENT_DATE())
                        AND 
                        YEAR(endTime) = YEAR(CURRENT_DATE())");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $TotalMonth= $row[0];
                    }
                    ?>
                </tr>
            </table>
            <br/>
            <div id="piechartMonth" style="width: 900px; height: 500px; margin-left:auto; margin-right:auto;" ></div>
            <br/>

            <div class="container-fluid py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h1 class="mb-4 text-center">Summary</h1>
                        </div>
                    </div>
                </div>
            </div>

            <table>
                <tr>
                    <th>Total number activity of infant caretakers</th>
                    <?php
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity WHERE staffType='Infrant'");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $numInfrant= $row[0];
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number activity of workers</th>
                    <?php
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity WHERE staffType='Worker'");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $numWorker= $row[0];
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number activity of teachers</th>
                    <?php
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity WHERE staffType='Teacher'");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $numTeacher= $row[0];
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number activities </th>
                    <?php
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    else {
                        $result = mysqli_query($conn, "SELECT COUNT(activityID) FROM activity");
                        $row = $result->fetch_row();
                        echo "<td>".$row[0]."</td>";
                        $Total= $row[0];
                    }
                    ?>
                </tr>
            </table>
            <br/>
            <div id="piechartAll" style="width: 900px; height: 500px; margin-left:auto; margin-right:auto;" ></div>
            <br/>
            
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

        setTimeout(function() {
            jQuery('#message').fadeOut('slow');
        }, 1500);

        var deleteDialog = document.getElementById("deleteBox");

        function deleteFunc(activityID, id) {
            deleteDialog.style.display = "block";
            //add id to deleteSpan
            $('#deleteSpan').html(id);
            $("#deleteBtn").click(function() {
                window.location.href = "delete.php?id=" + activityID + "&page=owner";
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
    </script>

    <!-- google pie chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        
        // Draw the monthly chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawMonthlyChart);

        // Draw the overall chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawAllChart);

        function drawMonthlyChart() {

            var dataMonth = google.visualization.arrayToDataTable([
            ['Staff TYpe', 'Number'],
            ['Infrant',     <?php echo $numInfrantMonth;?>],
            ['Worker',      <?php echo $numWorkerMonth;?>],
            ['Teacher',  <?php echo $numTeacherMonth;?>],
            ]);

            var optionsMonth,chartMonth;

            optionsMonth = {
                title: 'Monthly Graph'
            };

            chartMonth = new google.visualization.PieChart(document.getElementById('piechartMonth'));

            chartMonth.draw(dataMonth, optionsMonth);
        }

        function drawAllChart() {

            var dataYear = google.visualization.arrayToDataTable([
            ['Staff TYpe', 'Number'],
            ['Infrant',      <?php echo $numInfrant;?>],
            ['Worker',  <?php echo $numWorker;?>],
            ['Teacher', <?php echo $numTeacher;?>],
            ]);

            var optionsAll,chartAll;
            optionsAll = {
                title: 'Overall Graph'
            };

            chartAll = new google.visualization.PieChart(document.getElementById('piechartAll'));

            chartAll.draw(dataYear, optionsAll);
        }
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>