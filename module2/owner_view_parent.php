<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder - Kindergarten Website Template</title>
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
</head>
<?php
// Start the session
session_start();
$_SESSION["username"] = "owner";
?>
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
                    <a href="#">Home</a>
                </li>
                <li class="active">
                    <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parents & Kids</a>
                    <ul class="collapse list-unstyled" id="parentsSubmenu">
                        <li class="active">
                        <a href="owner_index.php">List</a>
                        </li>
                        <li>
                        <a href="owner_report.php">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#manpowerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manpower</a>

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
                    <a href="#paymentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Payment</a>
                    <ul class="collapse list-unstyled" id="paymentSubmenu">
                        <li>
                            <a href="#">List</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#activitySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Activity</a>
                    <ul class="collapse list-unstyled" id="activitySubmenu">
                        <li>
                            <a href="#">List</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
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
                            <i class="fas fa-lock"></i><?php $_SESSION["username"] ?></a>
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
            <div class="col-lg-12 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <div class="card-header bg-secondary text-center p-4">
                    <button class="btn btn-light px-4 mx-auto float-left" onclick="location.href='owner_index.php'" ><i class='fa fa-chevron-left'></i> Back</button>
                        <h1 class="text-white m-0">Registered Kid</h1>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">Parent's Information</h4>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Parent's Name</strong></div>
                            <?php
                            $parentID = $_GET['id'];
                            require "conn.php";
                            if (isset($parentID)) {
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } else {

                                    $parents_sql = "SELECT * from parents where parentID=$parentID";
                                    $result = $conn->query($parents_sql);
                                    $count = $result->num_rows;
                                    $i = 0;
                                    $parent_row = mysqli_fetch_assoc($result);
                                    if ($count > 0) {
                                        echo "<div class='col-6 py-1'>" . $parent_row['username'] . "</div></div>";
                                        echo "<div class='row border-bottom'>";
                                        echo "<div class='col-6 py-1 text-right border-right'><strong>Phone Number</strong></div>";
                                        echo "<div class='col-6 py-1'>" . $parent_row['phoneNumber'] . "</div>";
                                        echo "</div>";
                                        echo "<div class='row border-bottom'>";
                                        echo "<div class='col-6 py-1 text-right border-right'><strong>Address</strong></div>";
                                        echo "<div class='col-6 py-1'>" . $parent_row['address'] . "</div>";
                                        echo "</div>";
                                        echo "<div class='row'>";
                                        echo "<div class='col-6 py-1 text-right border-right'><strong>Year Register</strong></div>";
                                        echo "<div class='col-6 py-1'>" . $parent_row['yearRegister'] . "</div></div></div><hr>";
                                        echo "<div class='card-body text-center'>";
                                        echo "<h4 class='card-title'>Kid's Information</h4></div>";
                                        echo "<div class='card-footer bg-transparent py-4 px-5'>";
                                        $kids_sql = "SELECT * from parents join kids on parents.parentID=kids.parentID where parents.parentID=$parentID";
                                        $result = $conn->query($kids_sql);
                                        $count = $result->num_rows;
                                        $i = 0;
                                        if ($count > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $a[$i] = $row["name"];
                                            $b[$i] = $row["yearOfBirth"];
                                            $c[$i] = $row["gender"];
                                            $d[$i] = $row["medicationHistory"];
                                            $i++;
                                        }
                                        for ($i = 0; $i < $count; $i++) {
                                            $age[$i] = date("Y") - $b[$i];
                                            $k=$i+1;
                                            echo "<h5 class='card-title' style=text-align:center;'>Kid".$k."</h5>";
                                            echo "<div class='row border-bottom'>";
                                            echo "<div class='col-6 py-1 text-right border-right'><strong>Kid's Name</strong></div>";
                                            echo "<div class='col-6 py-1'>" . $a[$i] . "</div></div>";
                                            echo "<div class='row border-bottom'>";
                                            echo "<div class='col-6 py-1 text-right border-right'><strong>Age</strong></div>";
                                            echo "<div class='col-6 py-1'>" . $age[$i] . "</div></div>";
                                            echo "<div class='row border-bottom'>";
                                            echo "<div class='col-6 py-1 text-right border-right'><strong>Gender</strong></div>";
                                            echo "<div class='col-6 py-1'>" . $c[$i] . "</div></div>";
                                            echo "<div class='row border-bottom'>";
                                            echo "<div class='col-6 py-1 text-right border-right'><strong>Medication History</strong></div>";
                                            echo " <div class='col-6 py-1'>" . $d[$i] . "</div></div><br>";
                                        }
                                    }
                                    }
                                }
                            } else {
                                echo "error!";
                            }

                            ?>
                        
                    </div>
                </div>
            </div>
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
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>