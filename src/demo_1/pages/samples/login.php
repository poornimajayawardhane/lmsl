<?php
session_start();

include "employee.php";

$emp2= new employee();
$xxx="";
if(isset($_POST['e_user_name'])){

    $r=$emp2->login($_POST['e_user_name'],$_POST['e_password']);
    if ($r=='fail'){

        $xxx="please enter a valid Username or password";

    }
    elseif ($r=="chemist"){
        header('location:dashboard_chemist.php');
    }
    elseif ($r=="chief engi"){
        header('location:dashboard_chief_engineer.php');
    }
    elseif ($r=="plant engi"){
        header('location:dashboard_plant_engineer.php');
    }
    elseif ($r=="hcp"){
        header('location:dashboard_hcm.php');
    }
    elseif ($r=="general ma"){
        header('location:dashboard_gm.php');
    }
    elseif ($r=="stock admi"){
        header('location:dashboard_supply_ao.php');
    }



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
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
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="label">Username</label>
                                <div class="input-group">
                                    <input type="text" required name="e_user_name" id="e_id" class="form-control" placeholder="Username">

                                    <div class="input-group-append">
                        <span class="input-group-text">
                            <p id="demo"></p>
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label" >Password</label>
                                <div class="input-group">
                                    <input type="password" required name="e_password" class="form-control" placeholder="*********">
                                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Login</button>
                            </div>
                            <?php
                            echo $xxx;

                            ?>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="../../../assets/js/shared/off-canvas.js"></script>
<script src="../../../assets/js/shared/misc.js"></script>


<style>
    .form-control {

        opacity: 1;}
</style>
</body>
</html>

