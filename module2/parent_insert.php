<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder - Kindergarten Website Template</title>
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
<?php
// Start the session
session_start();
$_SESSION["username"] = "parent";
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
                    <a href="../user_main.php">Home</a>
                </li>
                <li class="active">
                    <a href="../module2/parent_index.php">Parents & Kids</a>
                </li>
                <li>
                    <a href="../module6/user_schedule_list.php">Kid's Activity</a>
                </li>
                <li>
                    <a href="#">Payment</a>
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
                        <>
                            <a href="../module3/parent_report.php">Report</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <form name="form1" method="POST" action="insert.php">
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
                                    <i class="fas fa-lock"></i><?php echo $_SESSION["username"] ?></a></a>
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

                <!-- Content Start -->
                <div class="center">
                    <div class="col-lg-10-m2">

                        <div class="card border-0">
                            <div class="card-header bg-secondary text-center p-4">
                                <h1 class="text-white m-0">Kid Registration</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-primary p-5">
                                <h3 class=" mb-4">Kid's Information</h3>
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control border-0 p-4" placeholder="Kid's Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <select name="age" class="custom-select border-0 px-4" name="age" style="height: 47px;">
                                        <option selected>Select Age</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="custom-select border-0 px-4" name="gender" style="height: 47px;">
                                        <option selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <textarea name="medicationHistory" class="form-control border-0 p-4" rows="6" placeholder="Medication History" required="required"></textarea>
                                </div>
                                <br>
                                <input type='hidden' id='page' name='page' value='parent' />
                                <div>
                                    <button class="btn btn-secondary border-0 px-4 mx-auto mb-4 float-right" type="submit">Submit</button>
                                    <a class="btn btn-light border-0 px-4 mx-auto mb-4" type="button" href="parent_index.php">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
        </form>
    </div>
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