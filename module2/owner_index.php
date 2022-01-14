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
                                <i class="fas fa-lock"></i> Owner</a>
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
                        <button class="btn btn-light" id="closeLogoutBtn" style="margin: 10px;float:right">No</button>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <!-- Delete Modal -->
            <div class="modal" id="deleteBox">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>UMP MY-KIDS</h2>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete <span id="deleteSpan"><strong></strong></span>?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" id="deleteBtn" style="margin: 10px;float:left">Yes</button>
                        <button class="btn btn-light" id="closeDeleteBtn" style="margin: 10px;float:right">No</button>
                    </div>
                </div>
            </div>
            <!-- Delete Modal -->
            <?php
            if (isset($_REQUEST["msg"]) and !empty($_REQUEST["msg"])) {
                echo "<div id='message'>" . $_REQUEST["msg"] . "</div>";
            }
            ?>
            <!-- Content Start-->
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="search">Search (Name)</label>
                                <input type="text" class="form-control" id="searchTxt" name="searchTxt" placeholder="Eg: Ali">
                                <p class="text-danger"></p>
                                <select class="form-control" id="option">
                                    <option value="parents">Parents</option>
                                    <option value="kids">Kids</option>
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
            </div>
            <button class="btn btn-secondary px-4 mx-auto float-right" onclick="location.href='owner_insert.php'"><i class='fa fa-plus'></i> Insert Kid</button>
            <div id="kidsInfoDiv">

                <h3 class=" mb-4" style="text-align: center">Kid's Information</h3>

                <table id="kidsInformation">
                    <tr>
                        <th>Kid's Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    require "conn.php";
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        $sql = "SELECT `kidsID`, `name` from kids";
                        $result = $conn->query($sql);
                        $count = $result->num_rows;
                        $i = 0;
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $a[$i] = $row["name"];
                                $b[$i] = $row["kidsID"];
                                $i++;
                            }
                            for ($i = 0; $i < $count; $i++) {
                                $view_url = "owner_view_kid.php?id=" . $b[$i];
                                $edit_url = "owner_edit_kid.php?id=" . $b[$i];
                                echo "<tr>";
                                echo "<td>" . $a[$i] . "</td>";
                                echo "<td><a class='btn btn-info btn-sm action-btn' href=" . $view_url . " data-toggle='tooltip' id='View'><i class='fa fa-eye'></i></a>";
                                echo "<a class='btn btn-warning btn-sm action-btn' href=" . $edit_url . " data-toggle='tooltip' id='Edit'><i class='fa fa-edit'></i></a>";
                                echo "<a class='btn btn-danger btn-sm action-btn' data-toggle='tooltip' onclick='deleteFunc(&#39;" . $a[$i] . "&#39;," . $b[$i] . ")'><i class='fa fa-times'></i></a></td></tr>";
                            }
                        }
                    }
                    ?>
                </table>
                <table id="kidsInformationDynamic" style="display:none">
                    <thead>
                        <tr>
                            <th>Kid's Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <div class="container-fluid py-5" style="display:none;" id="kidsErrorTxt">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h2 class="mb-4 text-left text-danger text-center">No Result Matches.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="parentsInfoDiv">
                <h3 class=" mb-4" style="text-align: center">Parent's Information</h3>
                <table id="parentsInformationDynamic" style="display:none">
                    <thead>
                        <tr>
                            <th>Parent's Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <table id="parentsInformation">
                    <tr>
                        <th>Parent's Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    require "conn.php";
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } else {
                        $sql = "SELECT parentID, username from parents";
                        $result = $conn->query($sql);
                        $count = $result->num_rows;
                        $i = 0;
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $a[$i] = $row["username"];
                                $b[$i] = $row["parentID"];
                                $i++;
                            }
                            for ($i = 0; $i < $count; $i++) {
                                $view_url = "owner_view_parent.php?id=" . $b[$i];
                                $edit_url = "owner_edit_parent.php?id=" . $b[$i];
                                echo "<tr>";
                                echo "<td>" . $a[$i] . "</td>";
                                echo "<td><a class='btn btn-info btn-sm action-btn' href=" . $view_url . " data-toggle='tooltip' id='View'><i class='fa fa-eye'></i></a>";
                                echo "<a class='btn btn-warning btn-sm action-btn' href=" . $edit_url . " data-toggle='tooltip' id='Edit'><i class='fa fa-edit'></i></a>";
                            }
                        }
                    }
                    ?>
                </table>
                <div class="container-fluid py-5" style="display:none;" id="parentsErrorTxt">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h2 class="mb-4 text-left text-danger text-center">No Result Matches.</h2>
                            </div>
                        </div>
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

        setTimeout(function() {
            jQuery('#message').fadeOut('slow');
        }, 1500);

        var deleteDialog = document.getElementById("deleteBox");

        function deleteFunc(name, id) {
            deleteDialog.style.display = "block";
            $('#deleteSpan').html("<strong>" + name + "</strong> with kids ID " + id);
            $("#deleteBtn").click(function() {

                window.location.href = "delete.php?id=" + id + "&page=owner";
            });
        }
        var closeDeleteBtn = document.getElementById("closeDeleteBtn");
        closeDeleteBtn.onclick = function() {
            deleteDialog.style.display = "none";
        }

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("logoutBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        var closeBtn = document.getElementById("closeLogoutBtn");

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

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
        function search() {
            var searchTxt = document.getElementById("searchTxt").value;
            var select = document.getElementById("option").value;
            $.ajax({
                type: "POST",
                url: "search.php",
                data: {
                    searchTxt: searchTxt,
                    option: select
                },
                success: function(result) {
                    console.log(select);
                    if (select == "parents") {
                        if (result == "fail") {
                            $('#parentsErrorTxt').show();
                            $('#parentsInformation').hide();
                            $('#parentsInformationDynamic').hide();
                            $('#clearSearchBtn').show();
                            $('#parentsInfoDiv').show();
                            $('#kidsInfoDiv').hide();
                        } else {
                            $('#parentsInfoDiv').show();
                            $('#kidsInfoDiv').hide();
                            $('#parentsErrorTxt').hide();
                            $('#parentsInformation').hide();
                            $('#clearSearchBtn').show();
                            $('#parentsInformationDynamic').show();
                            console.log(result);
                            parent_info = JSON.parse(result);
                            var view_url = "owner_view.php?id=" + parent_info[0].kidsID;
                            var edit_url = "owner_edit.php?id=" + parent_info[0].kidsID;

                            var row = '<tr><td>' + parent_info[0].username + '</td>' +
                                '<td><a class="btn btn-info btn-sm action-btn" href="' + view_url + '" data-toggle="tooltip" id="View"><i class="fa fa-eye"></i></a>' +
                                '<a class="btn btn-warning btn-sm action-btn" href="' + edit_url + '" data-toggle="tooltip" id="Edit"><i class="fa fa-edit"></i></a>' +
                                '</td>';
                            $('#parentsInformationDynamic').append(row);
                        }
                    } else {
                        if (result == "fail") {
                            $('#kidsErrorTxt').show();
                            $('#kidsInformation').hide();
                            $('#kidsInformationDynamic').hide();
                            $('#clearSearchBtn').show();
                            $('#parentsInfoDiv').hide();
                            $('#kidsInfoDiv').show();
                        } else {
                            $('#parentsInfoDiv').hide();
                            $('#kidsInfoDiv').show();
                            $('#kidsErrorTxt').hide();
                            $('#kidsInformation').hide();
                            $('#clearSearchBtn').show();
                            $('#kidsInformationDynamic').show();
                            console.log(result);
                            kids_info = JSON.parse(result);
                            var view_url = "owner_view.php?id=" + kids_info[0].kidsID;
                            var edit_url = "owner_edit.php?id=" + kids_info[0].kidsID;

                            var row = '<tr><td>' + kids_info[0].name + '</td>' +
                                '<td><a class="btn btn-info btn-sm action-btn" href="' + view_url + '" data-toggle="tooltip" id="View"><i class="fa fa-eye"></i></a>' +
                                '<a class="btn btn-warning btn-sm action-btn" href="' + edit_url + '" data-toggle="tooltip" id="Edit"><i class="fa fa-edit"></i></a>' +
                                '<a class="btn btn-danger btn-sm action-btn" onclick="deleteFunc(&#39;' + kids_info[0].kidsID + '"&#39;,"' + kids_info[0].name + '") data-toggle="tooltip" id="View"><i class="fa fa-times"></i></a>' +
                                '</td>';
                            $('#kidsInformationDynamic').append(row);
                        }

                    }

                },
                fail: function(xhr, textStatus, errorThrown) {
                    console.log('request failed');
                }
            });
        }

        function clearSearch() {
            $('#kidsInfoDiv').show();
            $('#parentsInfoDiv').show();
            $('#ParentsErrorTxt').hide();
            $('#KidsErrorTxt').hide();
            $('#kidsInformation').show();
            $('#clearSearchBtn').hide();
            $('#kidsInformationDynamic').hide();
            $('#searchTxt').val("");
            $('#parentsInformation').show();
            $('#parentsInformationDynamic').hide();
        }
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>