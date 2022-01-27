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
                <li class="active">
                    <a href="#">Home</a>
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
                                <i class="fas fa-lock"></i>Register</a>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Content Start -->
                <div class="center">
                    <div class="col-lg-10-m2">

                        <div class="card border-0">
                            <div class="card-header bg-secondary text-center p-4">
                                <h1 class="text-white m-0">Login</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-primary p-5">
                                <form action="loginCheck.php" method="post" name="form" class="form">
                            
                                    <?php
                                    if (isset($_REQUEST["msg"]) and !empty($_REQUEST["msg"])) {
                                        echo "<div id='message' style='color: red'>" . $_REQUEST["msg"] . "</div>";
                                    }
                                    ?>

                                    <div class="form-group">
                                        <input type="text" id="uname" name="uname" class="form-control border-0 p-4" placeholder="Username"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" type="password" name="password" id="password" class="form-control border-0 p-4" placeholder="Password" />
                                    </div>
                                   
                                    <select name="type" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="parent">Parent</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    <br>
                                    <br>
                                    <div class="form-group text-center">
                                        <button type="submit" name="SubmitButton" class="btn btn-light">Submit</button>
                                    </div>
                                    <!-- <button class="btn btn-light border-0 px-4 mx-auto mb-4" name="button" type="submit">Login</button> -->
                                 </form>

                            </div>
                        </div>
                    </div>
            <!-- Content End -->
            <div class="container-fluid py-5" style="margin-left: 300px;">
                
                <div class="container">
                    
                    <div class="row align-items-center">
                        
                        <div style="margin-left: 150px;" class="col-lg-7">
                           
                             
                            <div class="row pt-2 pb-4">
                                <div class="col-6 col-md-8">
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        
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
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>