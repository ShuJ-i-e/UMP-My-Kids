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
            <?php
                if (isset($_REQUEST["msg"]) and !empty($_REQUEST["msg"])) {
                    echo "<div id='message'>" . $_REQUEST["msg"] . "</div>";
                }
            ?>
            
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
            ?>

            <?php 
                function findKidsName($dbConn, $passName)
                {
                    //get the kids name form ID
                    $kidsSql = "SELECT name FROM kids WHERE kidsID = '$passName';";
                    $kidsResult = $dbConn->query($kidsSql);
                    if ($kidsResult->num_rows > 0) {
                        // output data of each row
                        while($row = $kidsResult->fetch_assoc()) {
                            $NewKidsName=$row["name"];
                            return $NewKidsName;
                        }
                    }
                }
            ?>

            <?php
                //check if form was submitted
                if(isset($_POST['SubmitButton'])){
                    
                    $errorLbl="";
                    $noResultLbl= "";
                    
                    //all empty
                    if(empty($_POST["startTimeTxt"]) && empty($_POST["endTimeTxt"]) && empty($_POST["searchTxt"])){
                        $errorLbl= "Please at least fill in one text box!";  
                    }
                }
            ?>

            <!--Content here -->
            <div class="container-fluid py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h1 class="mb-4 text-center">Activity</h1>
                            <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='staff_insert_activity.php'"><i class='fa fa-plus'></i> Add Activity</button>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="start">Start</label>
                                    <input type="datetime-local" id="startTimeTxt" name="startTimeTxt" class="form-control" >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="end">End</label>
                                    <input type="datetime-local" id="endTimeTxt" name="endTimeTxt" class="form-control" >
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="search">Search (Name)</label>
                                    <input type="text" class="form-control" id="searchTxt" name="searchTxt" placeholder="Eg: Ali">
                                    <p class="text-danger"><?php echo $errorLbl ?></p>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <button type="submit" name="SubmitButton" class="btn btn-primary float-right">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

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
                //check if form was submitted
                if(isset($_POST['SubmitButton'])){
                    
                    //input some is filled 
                    if(!empty($_POST["startTimeTxt"]) || !empty($_POST["endTimeTxt"]) || !empty($_POST["searchTxt"])){
                        
                        if(!empty($_POST["startTimeTxt"])){
                            $startTimeTxt = $_POST["startTimeTxt"];
                        }
                        if(!empty($_POST["endTimeTxt"])){
                            $endTimeTxt = $_POST["endTimeTxt"];
                        }

                        if(!empty($_POST["searchTxt"])){
                            $searchTxt = $_POST["searchTxt"];

                            //get the kids name like search text
                            $kidsSql = "SELECT kidsID,name FROM `kids` WHERE `name` LIKE '%{$searchTxt}%' ";
                            $result = $conn->query($kidsSql);
                            $i = 0;
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $kidsID[$i]=$row["kidsID"];
                                    $kidsName[$i]=$row["name"];
                                    $i++;
                                }
                            }
                        }

                        //get the activity
                        $count = 0;
                        $found= false;

                        //if got alike name & got time
                        if(isset($kidsName) && (!empty($startTimeTxt) || !empty($endTimeTxt))){

                            //set the start date to lowest date  
                            if(empty($startTimeTxt)){
                                $startTimeTxt=  "2000-01-01";
                            }

                            //set the start date to highest date  
                            if(empty($endTimeTxt)){
                                $endTimeTxt=  "9000-01-01";
                            }

                            //if no kids name list
                            if(!isset($kidsName)){
                                $tempKids= 0;
                            }
                            else{
                                $tempKids=sizeof($kidsName);
                            }

                            for ($i=0 ; $i <$tempKids ; $i++){
                                if(isset($kidsName)){

                                    $sql = "SELECT *
                                        FROM activity
                                        WHERE (startTime >= '$startTimeTxt') 
                                        AND ( endTime <= '$endTimeTxt') 
                                        AND (kidsID = '$kidsID[$i]'
                                        AND staffID= '$staffID') ;"; 

                                    $result = $conn->query($sql);
                                                                                
                                    if ($result->num_rows > 0) {
                                        $found= true;
                                        
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $NewsActivityID[$count]=$row["activityID"];
                                            
                                            if(isset($kidsID)){
                                                if($row["kidsID"] == $kidsID[$i]){
                                                    $NewKidsName[$count]=$kidsName[$i];
                                                }
                                                else{
                                                    $NewKidsID[$count]=$row["kidsID"];
                                                    $NewKidsName[$count]= findKidsName($conn, $NewKidsID[$count]);
                                                }
                                            }
                                            else{
                                                $NewKidsID[$count]=$row["kidsID"];
                                                $NewKidsName[$count]= findKidsName($conn, $NewKidsID[$count]);
                                            }

                                            $NewStaffID[$count]=$staffID;
                                            $NewStaffName[$count]= $loginUsername;

                                            $NewStaffType[$count]=$row["staffType"];
                                            $NewStartTime[$count]=$row["startTime"];
                                            $NewEndTime[$count]=$row["endTime"];
                                            $NewStatus[$count]=$row["status"];
                                            $count++;
                                        }
                                    }
                                }
                            }
                        }

                        //if no name & got time
                        if(empty($searchTxt) && (!empty($startTimeTxt) || !empty($endTimeTxt))){

                            //set the start date to lowest date  
                            if(empty($startTimeTxt)){
                                $startTimeTxt=  "2000-01-01";
                            }

                            //set the start date to highest date  
                            if(empty($endTimeTxt)){
                                $endTimeTxt=  "9000-01-01";
                            }

                            $sql = "SELECT *
                                FROM activity
                                WHERE startTime >= '$startTimeTxt' 
                                AND endTime <= '$endTimeTxt'
                                AND staffID= '$staffID' "; 

                            $result = $conn->query($sql);
                                                                            
                            if ($result->num_rows > 0) {
                                $found= true;
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $NewsActivityID[$count]=$row["activityID"];

                                    $NewKidsID[$count]=$row["kidsID"];
                                    $NewKidsName[$count]= findKidsName($conn, $NewKidsID[$count]);

                                    $NewStaffID[$count]=$staffID;
                                    $NewStaffName[$count]= $loginUsername;

                                    $NewStaffType[$count]=$row["staffType"];
                                    $NewStartTime[$count]=$row["startTime"];
                                    $NewEndTime[$count]=$row["endTime"];
                                    $NewStatus[$count]=$row["status"];
                                    $count++;
                                }
                            }
                        }

                        //if got alike name & no time
                        if((isset($kidsName) || isset($staffName)) && (empty($startTimeTxt) && empty($endTimeTxt))){

                            //if no kids name list
                            if(!isset($kidsName)){
                                $tempKids= 0;
                            }
                            else{
                                $tempKids=sizeof($kidsName);
                            }

                            for ($i=0 ; $i <$tempKids; $i++){
                                if(isset($kidsName)){
                                    
                                    $sql = "SELECT *
                                        FROM activity
                                        WHERE kidsID = '$kidsID[$i]'
                                        AND staffID= '$staffID'  ;"; 

                                    $result = $conn->query($sql);
                                            
                                    if ($result->num_rows > 0) {
                                        $found= true;
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $NewsActivityID[$count]=$row["activityID"];

                                            if(isset($kidsID)){
                                                if($row["kidsID"] == $kidsID[$i]){
                                                    $NewKidsName[$count]=$kidsName[$i];
                                                }
                                                else{
                                                    $NewKidsID[$count]=$row["kidsID"];
                                                    $NewKidsName[$count]= findKidsName($conn, $NewKidsID[$count]);
                                                }
                                            }
                                            else{
                                                $NewKidsID[$count]=$row["kidsID"];
                                                $NewKidsName[$count]= findKidsName($conn, $NewKidsID[$count]);
                                            }
                                            
                                            $NewStaffID[$count]=$staffID;
                                            $NewStaffName[$count]= $loginUsername;

                                            $NewStaffType[$count]=$row["staffType"];
                                            $NewStartTime[$count]=$row["startTime"];
                                            $NewEndTime[$count]=$row["endTime"];
                                            $NewStatus[$count]=$row["status"];
                                            $count++;
                                        }
                                    }
                                }
                            }
                        }

                        //if no result searched same
                        if(!$found){
                            $noResultLbl= "No Matches found, try insert again" ;
                        }
                        //display activity in table
                        else{
                            //order the activity by start date
                            
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
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo '</thead>';

                            for ($i = 0; $i < $count; $i++) {
                                $view_url = "staff_view_activity.php?id=" . $NewsActivityID[$i];
                                $edit_url = "staff_edit_activity.php?id=" . $NewsActivityID[$i];
                                echo "<tr>";
                                echo "<td>" . $i+1 . "</td>";
                                echo "<td>" . $NewKidsName[$i] . "</td>";
                                echo "<td>" . $NewStaffName[$i] . "</td>";
                                echo "<td>" . $NewStaffType[$i] . "</td>";
                                echo "<td>" . $NewStartTime[$i] . "<br /> to <br />" .$NewEndTime[$i]."</td>";
                                echo "<td>" . $NewStatus[$i] . "</td>";
                                echo "<td><a class='btn btn-info btn-sm action-btn' href=" . $view_url . " data-toggle='tooltip' id='View'><i class='fa fa-eye'></i></a>";
                                echo "<a class='btn btn-warning btn-sm action-btn' href=" . $edit_url . " data-toggle='tooltip' id='Edit'><i class='fa fa-edit'></i></a>";
                                echo "<a class='btn btn-danger btn-sm action-btn' data-toggle='tooltip' onclick='deleteFunc($NewsActivityID[$i],$i+1)'><i class='fa fa-times'></i></a></td></tr>";
                            }

                            echo "</table>";
                        }
                    }

                    $conn->close();
                }
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

        setTimeout(function() {
            jQuery('#message').fadeOut('slow');
        }, 1500);

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