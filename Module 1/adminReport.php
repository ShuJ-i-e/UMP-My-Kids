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
                <a href="Owner.html">Home</a>
            </li>
            <li>
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">Users</a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li>
                        <a href="staff.html">Staff</a>
                    </li>
                    <li>
                        <a href="parent.html">Parent</a>
                    </li>
                    <li>
                        <a href="Owner.html">Owner</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="adminReport.php">Report</a>
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
                  
                </div>
              </div>
            </div>

            <div class="container-fluid py-5">
                
            <div class="container">
                   
                </div>

                <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='addAdmin.html'"><i class='fa fa-plus'></i> addAdmin</button>
            <div id="adminInfoDiv">

                <h3 class=" mb-4" style="text-align: center">Report</h3>

                <table id="adminsInformation" class="table">
                    <tr>
                        <th>Admin ID</th>
                        <th>User Name</th>
                        <th>phone Number</th>
                        <th>Address</th>
                        <th>Year Register</th>
                    </tr>
                    <?php
                    $link = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($link->connect_error) {
                        die("Connection failed: " . $link->connect_error);
                    } else {
                        $sql = "SELECT `adminID`, `username`, `phoneNumber`, `address`, `yearRegister` from admin";
                        $result = $link->query($sql);
                        $count = $result->num_rows;
                        $i = 0;
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $a[$i] = $row["adminID"];
                                $b[$i] = $row["username"];
                                $c[$i] = $row["phoneNumber"];
                                $d[$i] = $row["address"];
                                $e[$i] = $row["yearRegister"];
                                $i++;
                            }
                            for ($i = 0; $i < $count; $i++) { 
                                echo "<tr>";
                                echo "<td>" . $a[$i] . "</td>";
                                echo "<td>" . $b[$i] . "</td>";
                                echo "<td>" . $c[$i] . "</td>";
                                echo "<td>" . $d[$i] . "</td>";
                                echo "<td>" . $e[$i] . "</td>";
                            }
                        }
                    }
                    ?>
                </table>
                <br>
                <div class="text-center">
                    <h4>Summary</h4>
                    
                </div>
                
                <table class="table">
                <tr>
                    <th>Total number of Admin</th>
                    <?php
                     $conn = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(adminID) FROM admin");
                        $row = $result->fetch_row();
                        echo "<td>" . $row[0] . "</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number of Staff</th>
                    <?php
                     $conn = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(userID) FROM staff");
                        $row = $result->fetch_row();
                        echo "<td>" . $row[0] . "</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <th>Total number of Parents</th>
                    <?php
                     $conn = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        $result = mysqli_query($conn, "SELECT COUNT(userID) FROM parents");
                        $row = $result->fetch_row();
                        echo "<td>" . $row[0] . "</td>";
                    }
                    ?>
                </tr>
                
                <tr>
                    <th>Most year Register</th>
                    <?php
                      $conn = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        $i = 0;
                        $result = mysqli_query($conn, "SELECT yearRegister FROM admin");
                        while ($row = mysqli_fetch_assoc($result)) {
                            $yearRegister[$i] = date("Y") - $row["yearRegister"];
                            $i++;
                        }
                       $totalYear = 0;

                        for ($i = 0; $i < $count; $i++) {
                            $totalYear = $totalYear + (int)$yearRegister[$i];
                        }
                        $avgYear = $totalYear / $i;
                        $avg_pretty = number_format($avgYear, 2, '.', '');
                        $row = $result->fetch_row();
                        echo "<td>" . 2021 . "</td>";
                    }
                    ?>
                </tr>
            </table>
            </div>
            </div>
            <br>
            <br>
            <div>
                  
            </div>
            <div style="width: 500px; height: 500px;  margin:40px 0px 0px 250px">
                <canvas id="chart" ></canvas>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
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
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        $.get('data.php', function(response, status) {
            console.log(response);
            const list = JSON.parse(response);
            console.log(response);
            const labels = [
                '2000',
                '2008',
                '2015',
                '2021',
                '2022',
            ];

            const data = {
                labels: labels,
                datasets: [{
                    label: 'Most year Registered',
                    backgroundColor: 'gray',
                    borderColor: 'gray',
                    data: list,
                }]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true
                }
            };

            const chart = new Chart(document.getElementById('chart'), config);
        });
   
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>

