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
                <li>
                    <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Users</a>
                    <ul class="collapse list-unstyled" id="userSubmenu">
                        <li>
                            <a href="#">Staff</a>
                        </li>
                        <li>
                            <a href="#">Parent</a>
                        </li>
                        <li>
                            <a href="#">Owner</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Report</a>
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
                    <div class="row align-items-center">

                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="search">Search (Name)</label>
                                <input type="text" class="form-control" class="searchTxt" id="searchTxt" name="searchTxt" placeholder="Eg: muhammed">
                                <p class="text-danger"></p>
                                <select class="form-control" id="option">
                                    <option value="Admin">Admin</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <button name="SubmitButton" class="btn btn-primary float-right" onclick="search()"><i class="fas fa-search"></i> Search</button>
                            </div>
                        </div>
                        <div class="col-lg-2" style="display:none" id="clearSearchBtn">
                            <div class="form-group">
                                <button name="SubmitButton" class="btn btn-secondary float-right" onclick="clearSearch()">Clear Search</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='addAdmin.php'"><i class='fa fa-plus'></i> addAdmin</button>
            <div id="adminInfoDiv">

                <h3 class=" mb-4" style="text-align: center">Admin's Information</h3>

                <table id="adminsInformation" class="table">
                    <tr>
                        <th>Admin's Name</th>
                        <th>Admin ID</th>
                    </tr>
                    <?php
                    $link = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($link->connect_error) {
                        die("Connection failed: " . $link->connect_error);
                    } else {
                        $sql = "SELECT `adminID`, `username` from admin";
                        $result = $link->query($sql);
                        $count = $result->num_rows;
                        $i = 0;
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $a[$i] = $row["username"];
                                $b[$i] = $row["adminID"];
                                $i++;
                            }
                            for ($i = 0; $i < $count; $i++) {
                                $view_url = "admin.php?id=" . $b[$i];
                                
                                echo "<tr>";
                                echo "<td>" . $a[$i] . "</td>";
                                echo "<td>" . $b[$i] . "</td>";
                                echo "<tr>";
                            }
                        }
                    }
                    ?>
                </table>
                <table id="adminsInformationDynamic" class="table" style="display:none">
                    <thead>
                        <tr>
                            <th>Kid's Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <div class="container-fluid py-5" style="display:none;" id="adminsErrorTxt">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h2 class="mb-4 text-left text-danger text-center">No Result Matches.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <br>
            <div id="adminsInfoDiv">
                <h3 class=" mb-4" style="text-align: center">Admin's Information</h3>
                <table id="adminsInformationDynamic" style="display:none">
                    <thead>
                        <tr>
                            <th>Admin's Name</th>
                            <th>Admin's ID</th>
                        </tr>
                    </thead>
                </table>
                <table id="AdminsInformation" class="table">
                    <tr>
                        <th>Admin's Name</th>
                        <th>Admin ID</th>
                    </tr>
                    <?php
                    $link = mysqli_connect('localhost', 'root', '','ump_mykids');
                    if ($link->connect_error) {
                        die("Connection failed: " . $link->connect_error);
                    } else {
                        $sql = "SELECT adminID, username from admin";
                        $result = $link->query($sql);
                        $count = $result->num_rows;
                        $i = 0;
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $a[$i] = $row["adminID"];
                                $b[$i] = $row["username"];
                                $i++;
                            }
                            for ($i = 0; $i < $count; $i++) {
                                $view_url = "admin.php?id=" . $b[$i];
                                echo "<tr>";
                                echo "<td>" . $a[$i] . "</td>";
                                echo "<td>" . $b[$i] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </table>
                <div class="container-fluid py-5" style="display:none;" id="adminsErrorTxt">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h2 class="mb-4 text-left text-danger text-center">No Result Matches.</h2>
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
        function search() {
           
            var $searchTxt = document.getElementById("searchTxt").value;
            var $select = document.getElementById("option").value;
           
            $.ajax({
               
                type: "POST",
                url: "/UMP-My-Kids-main/search.php",
                data: {
                    searchTxt: searchTxt,
                    option: select
                },
                success: function(result) {
                    console.log(select);
                    
                    if (select == "Admin") {
                        
                        if (result == "fail") {
                            $('#adminsErrorTxt').show();
                            $('#adminsInformation').hide();
                            $('#adminsInformationDynamic').hide();
                            $('#clearSearchBtn').show();
                            $('#adminsInfoDiv').show();
                            $('#adminsInfoDiv').hide();
                        } else {
                            $('#adminsInfoDiv').show();
                            $('#adminsInfoDiv').hide();
                            $('#adminsErrorTxt').hide();
                            $('#adminsInformation').hide();
                            $('#clearSearchBtn').show();
                            $('#adminsInformationDynamic').show();
                            console.log(result);
                            parent_info = JSON.parse(result);
                            var view_url = "admin.php?id=" + admin_info[0].adminID;
                            var edit_url = "admin.php?id=" + admin_info[0].adminID;

                            var row = '<tr><td>' + admin_info[0].username + '</td>' +
                                '<td><a class="btn btn-info btn-sm action-btn" href="' + view_url + '" data-toggle="tooltip" id="View"><i class="fa fa-eye"></i></a>' +
                                '<a class="btn btn-warning btn-sm action-btn" href="' + edit_url + '" data-toggle="tooltip" id="Edit"><i class="fa fa-edit"></i></a>' +
                                '</td>';
                            $('#adminsInformationDynamic').append(row);
                        }
                    } else {
                        if (result == "fail") {
                            $('#adminsErrorTxt').show();
                            $('#adminsInformation').hide();
                            $('#adminsInformationDynamic').hide();
                            $('#clearSearchBtn').show();
                            $('#adminsInfoDiv').hide();
                            $('#adminsInfoDiv').show();
                        } else {
                            $('#adminsInfoDiv').hide();
                            $('#adminsInfoDiv').show();
                            $('#adminsErrorTxt').hide();
                            $('#adminsInformation').hide();
                            $('#clearSearchBtn').show();
                            $('#adminsInformationDynamic').show();
                            console.log(result);
                            kids_info = JSON.parse(result);
                            var view_url = "admin.php?id=" + admin_info[0].adminID;
                         //   var edit_url = "owner_edit.php?id=" + kids_info[0].kidsID;

                            var row = '<tr><td>' + admin_info[0].name + '</td>' +
                                '<td><a class="btn btn-info btn-sm action-btn" href="' + view_url + '" data-toggle="tooltip" id="View"><i class="fa fa-eye"></i></a>' +
                                '<a class="btn btn-warning btn-sm action-btn" href="' + edit_url + '" data-toggle="tooltip" id="Edit"><i class="fa fa-edit"></i></a>' +
                                '<a class="btn btn-danger btn-sm action-btn" onclick="deleteFunc(&#39;' + kids_info[0].kidsID + '"&#39;,"' + kids_info[0].name + '") data-toggle="tooltip" id="View"><i class="fa fa-times"></i></a>' +
                                '</td>';
                            $('#adminsInformationDynamic').append(row);
                        }

                    }

                },
                fail: function(xhr, textStatus, errorThrown) {
                    console.log('request failed');
                }
            });
        }

        function clearSearch() {
            $('#adminsInfoDiv').show();
            $('#adminsInfoDiv').show();
            $('#adminsErrorTxt').hide();
            $('#adminsErrorTxt').hide();
            $('#adminsInformation').show();
            $('#clearSearchBtn').hide();
            $('#adminsInformationDynamic').hide();
            $('#searchTxt').val("");
            $('#adminsInformation').show();
            $('#adminsInformationDynamic').hide();
        }
   
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>



