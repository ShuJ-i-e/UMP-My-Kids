<?php
// Start the session
session_start();

if (isset($_SESSION["username"]) && isset($_SESSION["user_id"])) {
    $loginUsername = $_SESSION["username"];
    $loginID = $_SESSION["user_id"];
} else {
    $_SESSION["username"] = "Owner";
    $_SESSION["user_id"] = 7;

    $loginUsername = $_SESSION["username"];
    $loginID = $_SESSION["user_id"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UMP MY KIDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                    <a href="../owner_main.php">Home</a>
                </li>
                <li class="active">
                    <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parents & Kids</a>
                    <ul class="collapse list-unstyled" id="parentsSubmenu">
                        <li class="active">
                            <a href="../module2/owner_index.php">List</a>
                        </li>
                        <li>
                            <a href="../module2/owner_report.php">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#manpowerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manpower</a>

                    <ul class="collapse list-unstyled" id="manpowerSubmenu">
                        <li>
                            <a href="../module3/owner_index.php">List</a>
                        </li>
                        <li>
                            <a href="../module3/owner_report.php">Report</a>
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
                            <a href="../module6/owner_schedule_list.php">List</a>
                        </li>
                        <li>
                            <a href="../module6/owner_schedule_report.php">Report</a>
                        </li>
                    </ul>
                </li>
            </ul>
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
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p>Learn About Us</p>
                            <h1 class="mb-4">Best School For Your Kids</h1>
                            <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed
                                eos,
                                ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea
                                ipsum est
                                dolor</p>
                            <div class="row pt-2 pb-4">
                                <div class="col-6 col-md-4">
                                    <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                                </div>
                                <div class="col-6 col-md-8">
                                    <ul class="list-inline m-0">
                                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet
                                            diam</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum
                                        </li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Diam
                                            dolor diam elitripsum vero.</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-5">
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pb-1">
                            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                                <div class="pl-4">
                                    <h4>Play Ground</h4>
                                    <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem
                                        amet elitr vero...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pb-1">
                            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                                <div class="pl-4">
                                    <h4>Music and Dance</h4>
                                    <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem
                                        amet elitr vero...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pb-1">
                            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                                <div class="pl-4">
                                    <h4>Arts and Crafts</h4>
                                    <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem
                                        amet elitr vero...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pb-1">
                            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                                <div class="pl-4">
                                    <h4>Safe Transportation</h4>
                                    <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem
                                        amet elitr vero...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pb-1">
                            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                                <div class="pl-4">
                                    <h4>Healthy food</h4>
                                    <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem
                                        amet elitr vero...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pb-1">
                            <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                                <div class="pl-4">
                                    <h4>Educational Tour</h4>
                                    <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem
                                        amet elitr vero...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Start -->
            <div class="container-fluid pt-5">
                <div class="container">
                    <div class="text-center pb-2">
                        <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
                        <h1 class="mb-4">Meet Our Teachers</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 text-center team mb-5">
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                                <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h4>Julia Smith</h4>
                            <i>Music Teacher</i>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center team mb-5">
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h4>Jhon Doe</h4>
                            <i>Language Teacher</i>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center team mb-5">
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h4>Mollie Ross</h4>
                            <i>Dance Teacher</i>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center team mb-5">
                            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                                <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h4>Donald John</h4>
                            <i>Art Teacher</i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->

            <!-- Content Start -->
            <div class="container-fluid py-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-center">
                            <h1 class="mb-4">Satisfaction survey </h1>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'module6/conn.php'; ?>
            <?php
            $infoLbl = "";

            //check if form was submitted
            if (isset($_POST['SubmitButton'])) {
                //input some is filled 
                if (!empty($_POST["linkTxt"])) {
                    $linkTxt = $_POST["linkTxt"];

                    if ($result = $conn->query("SHOW TABLES LIKE 'qr'")) {
                        if ($result->num_rows < 1) {

                            // sql to create table QR code
                            $sql = "CREATE TABLE qr (
                                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                link VARCHAR(100) NOT NULL)";

                            $conn->query($sql);
                        }
                    }

                    $sql = "INSERT INTO `qr` (`link`) 
                        VALUES ('$linkTxt');";
                    if ($conn->query($sql) === TRUE) {
                        $infoLbl = "Success Insert!!";
                    } else {
                        $infoLbl = "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            }
            ?>


            <form method="POST">
                <div class="container-fluid mb-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <label for="start">Insert satisfaction survey google form link</label>
                            </div>

                            <div class="col-lg-9">
                                <input name="linkTxt" id="linkTxt" type="text" class="form-control border-0 p-4" placeholder="Google Forms link here..." required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <label for="infoLbl"><?php echo $infoLbl ?> </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center">
                    <button type="submit" name="SubmitButton" class="btn btn-primary">Submit</button>
                </div>

            </form>


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
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
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
            window.location.href = "index.php";
        }
    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>