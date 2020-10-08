<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chief engi"){}
else{
    header("login.php");
}

include "daily_mining.php";

$dmin3= new daily_mining() ;


if(isset($_POST["year"])) {

    $dmin3->dm_year=$_POST["year"];
    $dmin3->dm_month= $_POST["month"];

    $dly3_mi_array=$dmin3->get_by_time();


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chemist</title>
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

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +94 76 3564 270</li>

            </ul>

            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


                            <a class="dropdown-item" href="login.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                        </div>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">

                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper" >
                            <p class="designation">Chemist</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Main Menu</li>




                <li class="nav-item">
                    <a class="nav-link" href="dashboard_chief_engineer.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="recovery_table.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Recovery log</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="ch_input_lot_table.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Pending Samples</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Sign Out</span>
                    </a>
                </li>

            </ul>
        </nav>




        <div class="main-panel">
            <div class="content-wrapper"  align="right" style="background: transparent;" >
                <form class="forms-sample"action="#" method="post">
                    <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                        <div class="col-12 stretch-card" >
                            <div class="card" style="background: black;opacity: 0.4" >
                                <div class="card-body" align="center" >
                                    <h4 style="font-size: x-large;" class="card-title" align="center">Monthly Recovery</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Year</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="year" value="">
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Month</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="month" value="">
                                                    <option value="1">january</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Date</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="day" value="">
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="6">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: 40px">
                                        <button type="submit" class="btn btn-success mr-2" >view</button>
                                    </div>
                                    <style>
                                        .btn-success {
                                            color: #212529;
                                            background-color: #28a7456b;
                                            border-color: #19d895;}
                                    </style>




                                </div>

                                <table class="table table-striped" >
                                    <thead>
                                    <tr>
                                        <th style="font-size: x-large;color: lightgrey">Date & Time</th>
                                        <th style="font-size: x-large;color: lightgrey">Concentrate</th>
                                        <th style="font-size: x-large;color: lightgrey">Feed</th>
                                        <th style="font-size: x-large;color: lightgrey">Tailing</th>
                                        <th style="font-size: x-large;color: lightgrey">Recovery</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    if(isset($_POST["year"])) {

                                        foreach ($sample3_array as $item) {
                                            echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_date</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_con</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_feed</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_tailing</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_recovery</td>
                                                 
                                                    
                                              </tr>";

                                        }

                                    }
                                    ?>
                                </table>
                                <style>
                                    .form-control {
                                        display: block;
                                        width: 100%;
                                        height: calc(1.5em + 0.75rem + 2px);
                                        padding: 0.56rem 1.375rem;
                                        font-size: 0.75rem;
                                        font-weight: 400;
                                        line-height: 1;
                                        color: black;
                                        background-color: white;
                                        opacity: 0.8}

                                </style>

                            </div>

                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>



<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
<script src="../../../assets/js/shared/off-canvas.js"></script>
<script src="../../../assets/js/shared/misc.js"></script>
<script src="../../../assets/js/shared/chart.js"></script>

</body>
</html>