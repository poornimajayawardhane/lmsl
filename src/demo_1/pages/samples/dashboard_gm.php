
<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="general ma"){}
else{
    header("login.php");
}

include "production.php";

$production3= new production() ;


if(isset($_POST["year"])) {

    $production3->pr_year=$_POST["year"];
    $production3->pr_month= $_POST["month"];
    $production3->pr_type= $_POST["type"];

    $production_array=$production3->get_by_time();


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>General Manager</title>
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

                        <a class="dropdown-item" href="logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
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
                            <p class="designation">General Manager</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Main Menu</li>

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


                <li class="nav-item">
                    <a class="nav-link" href="dashboard_gm.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="monthly_mining_gm.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Mining Info</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="recovery_log_gm.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Recovery Info</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="output.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Final Production</span>
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
            <div class="content-wrapper">
                <div class="row">
                    <div class="row">
                        <div class="col-md-15">
                            <div class="row grid-margin stretch-card">


                                <div class="col-md-3 grid-margin stretch-card" >
                                    <form method="get" action="T_admin_reg_tb.php">
                                        <button class="btn-lg" style="background-color: rgba(100,255,200,0.2); border: #3bd949; font-size: x-large; font-family: 'Times New Roman' ;  " type="submit"  > Client Registration</button>
                                    </form>
                                </div>

                                <div class="col-md-3 grid-margin stretch-card" >
                                    <form method="get" action="T_invitation.php">
                                        <button class="btn-lg" style="background-color: rgba(100,255,200,0.2); border: #3bd949; font-size: x-large; font-family: 'Times New Roman' ;  " type="submit"  > Publish Tender </button>
                                    </form>
                                </div>

                                <div class="col-md-3 grid-margin stretch-card" >
                                    <form method="get" action="T_bidding_list.php">
                                        <button class="btn-lg" style="background-color: rgba(100,255,200,0.2); border: #3bd949; font-size: x-large; font-family: 'Times New Roman' ;  " type="submit"  > Bids </button>
                                    </form>
                                </div>
                                <div class="col-md-3 grid-margin stretch-card" >
                                    <form method="get" action="input_ref.php">
                                        <button class="btn-lg" style="background-color: rgba(100,255,200,0.2); border: #3bd949; font-size: x-large; font-family: 'Times New Roman' ;  " type="submit"  > Input Confirm </button>
                                    </form>
                                </div>

                                <div class="col-lg-12 grid-margin stretch-card" >

                                    <div class="content-wrapper"  align="right" style="background: transparent;" >
                                        <form class="forms-sample"action="#" method="post">
                                            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                                                <div class="col-12 stretch-card" >
                                                    <div class="card" style="background: black;opacity: 0.4" >
                                                        <div class="card-body" align="center" >
                                                            <h4 style="font-size: x-large;" class="card-title" align="center">Final production</h4>
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
                                                                            <option value="mar">March</option>
                                                                            <option value="apr">April</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group row">
                                                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Type</label>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-control" name="type" value="">
                                                                            <option value="ilmenite">Ilmenite</option>
                                                                            <option value="rutile">Rutile</option>
                                                                            <option value="zircon">Zircon</option>
                                                                            <option value="magnetite">Magnetite</option>
                                                                            <option value="garnet">Garnet</option>
                                                                            <option value="hi ti">Hi TI</option>
                                                                            <option value="monosite">Monosite</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div style="margin-left: 55px">
                                                                <button type="submit" class="btn btn-success mr-2">Submit</button>
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
                                                                <th style="font-size: x-large;color: lightgrey">Lot Id</th>
                                                                <th style="font-size: x-large;color: lightgrey">Time</th>
                                                                <th style="font-size: x-large;color: lightgrey">Production Quantity</th>

                                                            </tr>
                                                            </thead>
                                                            <?php

                                                            if(isset($_POST["year"])) {
                                                                $tot = 0;
                                                                foreach ($production_array as $item) {
                                                                    $tot += $item->pr_quan;
                                                                    echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->pr_id<input hidden type='text'  ></td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->pr_date</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->pr_quan</td>
                                                 
                                                    
                                              </tr>";

                                                                }

                                                            }
                                                            ?>
                                                        </table>
                                                        <div class="row">
                                                        </div>
                                                        <div class="col-md-11">

                                                            <div class="form-group row" style="margin-left: 600px">

                                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Total</label>
                                                                <div class="col-sm-9" >


                                                                    <input type="text" class="form-control" name="quantity" value="<?php

                                                                    if(isset($_POST["year"]))
                                                                        echo $tot;
                                                                    ?>"/>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                        </form>
                                        <style>
                                            .form-control {
                                                display: block;
                                                width: 100%;
                                                height: calc(1.5em + 0.75rem + 2px);
                                                padding: 0.56rem 1.375rem;
                                                font-size: 0.9rem;
                                                font-weight: 600;
                                                line-height: 1;
                                                color: black;
                                                background-color: white;
                                                opacity: 2;
                                        </style>

                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <div class="col-md-12 grid-margin">

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