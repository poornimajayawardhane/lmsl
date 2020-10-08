<?php

session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="cheif engi"){}
else{
    header("login.php");
}

include "daily_mining.php";
include "issue.php";

$dmin2= new daily_mining() ;
$issue2= new issue();


$dly_mi_array=$dmin2->get_all();
if(isset($_POST["i_issue"])) {

    $issue2->i_note = $_POST['i_note'];
    $issue2->i_tot = $_POST['i_tot'];
    $issue2->dm_id=$_POST['dm_id'];
    $issue2->i_issue=$_POST['i_issue'];

    $issue2->add();
    header("location:chief_success.php");
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chief Engineer</title>
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
                            <p class="designation">Chief Engineer</p>
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
                    <a class="nav-link" href="dashboard_chief_engineer.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="monthly_mining.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Monthly Mining</span>
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

        <div class="content-wrapper"  align="center" style="background: transparent;">
            <form class="forms-sample"action="#" method="post">
                <div class="col-md-20 d-flex align-items-stretch grid-margin" align="right">
                    <div class="col-10 stretch-card" align="right">
                        <div class="card" style="background: black;opacity: 0.4" align="right">
                            <div class="card-body" align="right" >
                                <h4 style="font-size: x-large;" class="card-title" align="center">Transfer Information</h4>


                            </div>


                            <table class="table table-striped" >
                                <thead>
                                <tr>
                                    <th style="font-size: x-large;color: lightgrey">Mining Num</th>
                                    <th style="font-size: x-large;color: lightgrey">Mining Quantity</th>
                                    <th style="font-size: x-large;color: lightgrey">New</th>
                                    <th style="font-size: x-large;color: lightgrey">Remaining</th>

                                </tr>
                                </thead>
                                <?php
                                foreach ($dly_mi_array as $item){
                                    echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_id<input hidden type='text' value='$item->dm_id' name='dm_id[]' ></td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_con</td>
                                                 <td style=\"font-size: large;color: lightgrey\" ><input type='number' name='i_issue[]' class='tbx' min='0' max='$item->tot' > </td>
                                                 <td style=\"font-size: large;color: lightgrey\" >$item->tot </td>
                                                    
                                              </tr>";

                                }


                                ?>
                            </table>
                            <div align="right">
                            <div class="col-xl-3 col-md-6 ">

                            </div>


                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-size: large;color: lightgrey">Note</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="exampleInputEmail2" name="i_note"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-size: large;color: lightgrey">Total</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="itot" name="i_tot"  style="border-radius: 10px; height: 40px;font-size: larger; " >
                                    </div>
                                    <style>
                                        .form-control {
                                            display: block;
                                            width: 100%;
                                            height: calc(1.5em + 0.75rem + 2px);
                                            padding: 0.56rem 1.375rem;
                                            font-size: 0.75rem;
                                            font-weight: 600;
                                            line-height: 1;
                                            color: black;
                                            background-color: white;
                                            opacity: 0.9;}
                                    </style>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mr-6">Submit</button>

            </form>
        </div>

    </div>
</div>

<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
<script src="../../../assets/js/shared/off-canvas.js"></script>
<script src="../../../assets/js/shared/misc.js"></script>
<script src="../../../assets/js/shared/chart.js"></script>

<script>
    $(document).on("change", ".tbx", function() {
        var sum = 0;
        $(".tbx").each(function(){
            sum += +$(this).val();
        });
        $("#itot").val(sum);
    });
</script>

</body>
</html>