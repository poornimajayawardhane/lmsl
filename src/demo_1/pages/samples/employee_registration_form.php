<?php
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

     header("location:success.php");
}

//include "header.php";
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee registration</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/icheck/skins/all.css">
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
    <div class="container-fluid page-body-wrapper"  >
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
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="e_nid"  style="border-radius: 10px; height: 40px;font-size: larger; ">
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

                                    <button type="submit" class="btn btn-success mr-2">Register</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-panel ends -->
</div>
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
<!-- End custom js for this page-->

</body>
</html>
