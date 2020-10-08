<?php
session_start();

include "client.php";
$xxx="";
$client2= new client();



if(isset($_POST['c_user_name'])){

    $r=$client2->login($_POST['c_user_name'],$_POST['c_password']);
    if ($r=='fales'){

        $xxx="please enter a valid Username or password";

    }
    else
        header("location:T_registered_home_page.php");


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
                    <div class="auto-form-wrapper" align="center">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="label">Username</label>
                                <div class="input-group">
                                    <input type="text" name="c_user_name" id="e_id" class="form-control" placeholder="Username">

                                    <div class="input-group-append">
                        <span class="input-group-text">
                            <p id="demo"></p>
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="c_password" class="form-control" placeholder="*********">
                                    <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Login</button>
                                <p></p>
                                <p>OR</p>
                                <button class="btn btn-primary submit-btn btn-block"><a href="T_user%20registration_form.php">Sign Up</button>

                            </div>
                            <?php
                            echo $xxx;

                            ?>

                        </form>
                        <button><a href="T_home_page.php">Back To Home</a> </button>
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

<!--<script>
    function myFunction() {
        var x, text;

        // Get the value of the input field with id="numb"
        x = document.getElementById("e_id").value;

        // If x is Not a Number or less than one or greater than 10
        if (isNaN(x) || x < 1 || x > 10) {
            text = "Invalid DOB ";

        } else {
            text = "NIC does match the correct format";
        }
        document.getElementById("demo").innerHTML = text;
    }
</script>-->

<!-- endinject -->
<style>
    .form-control {

        opacity: 1;}

    .form-control {
        display: inline-block;
        border: 1px solid #dee2e6;
        font-family: "roboto", sans-serif;
        font-size: 1rem;
        color: #212529;
        padding: 0 .75rem;
        line-height: 14px;
        font-weight: 300;
    }
</style>
</body>
</html>