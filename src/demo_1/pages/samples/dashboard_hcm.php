
<?php
    session_start();
    if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemist"){}
    else{
        header("login.php");
    }
    include "employee.php";

$emp1 = new employee();

if(isset($_POST["e_name"])) {

    $emp1->e_name=$_POST["e_name"];
    $emp1->e_nid=$_POST["e_nid"];
    $emp1->e_user_name=$_POST["e_user_name"];
    $emp1->e_dob=$_POST["e_dob"];
    $emp1->e_gender=$_POST["e_gender"];
    $emp1->e_type=$_POST["e_type"];
    $emp1->e_phone_no=$_POST["e_phone_no"];
    $emp1->e_email=$_POST["e_email"];
    $emp1->e_password=$_POST["e_password"];
    $emp1->reg();

     header("location:dashboard_hcm.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Human Capital Manager</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +94 76 3564 270</li>

            </ul>
            <form class="ml-auto search-form d-none d-md-block" action="#">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Here">
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="../../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="../../../assets/images/faces/face18.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image">

                            <p class="font-weight-light text-muted mb-0">pms4lmsl@gmail.com</p>
                        </div>

                        <a class="dropdown-item" href="login.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <img class="img-xs rounded-circle" src="../../../assets/images/faces/face18.jpg" alt="profile image">
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <p class="designation">Human Capital Manager</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Main Menu</li>


                <li class="nav-item">
                    <a class="nav-link" href="dashboard_hcm.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon typcn typcn-coffee"></i>
                        <span class="menu-title">Annual Target Report</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="annuaal_mi_tar_tb.php">Mining</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="annual_pro_tar_tb.php">Production</a>
                            </li>

                        </ul>
                    </div>
                </li>

            </ul>
        </nav>



                <div class="main-panel" style="margin: auto" >
                    <div class="content-wrapper"  align="center" style="background: transparent;" >
                        <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                            <div class="col-8 stretch-card" >
                                <div class="card">
                                    <div class="card-body" align="left" >
                                        <h4 style="font-size: x-large;" class="card-title" align="center">Employee Registration</h4>
                                        <form class="forms-sample"action="#" method="post">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" name="e_name" style="border-radius: 10px; height: 40px;font-size: larger;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Gender</label>
                                                <div class="form-group" align="left">
                                                    <div class="form-radio">
                                                        <label class="form-check-label" style="font-size: large;color: lightgrey">
                                                            <input type="radio" class="form-check-input" name="e_gender" id="optionsRadios1"  value="male"  checked> Male </label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <label class="form-check-label" style="font-size: large;color: lightgrey">
                                                            <input type="radio" class="form-check-input" name="e_gender" id="optionsRadios2"  value="female"> Female </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Type</label>
                                                <div class="col-sm-9">
                                                    <select name="e_type">
                                                        <option value="labour">labour</option>
                                                        <option value="plant engineer">Plant Engineer</option>
                                                        <option value="mining engineer">Mining Engineer</option>
                                                        <option value="general manager">General Manger</option>
                                                        <option value="hcp">Human Capital Manger</option>
                                                        <option value="chief engineer">Chief Engineer</option>
                                                        <option value="chemist">Chemist</option>
                                                        <option value="stock admin">Stock Administrator</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">NID</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" pattern="([0-9]{11}[v|x])"  name="e_nid"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">User Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" required name="e_user_name"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Date Of Birth</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="exampleInputEmail2" required name="e_dob"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Phone Numb</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" required name="e_phone_no"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="exampleInputEmail2"  name="e_email"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="exampleInputEmail2" required name="e_password"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>
                                          <button onclick='save()' type='submit'>   Register </button>

                                            <script>
                                function save() {
                                    res=confirm("Successfully registered");

                                }


                            </script>
                                            <button class="btn btn-light" >Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



        <!-- partial -->

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>
</html>