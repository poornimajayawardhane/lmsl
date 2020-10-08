<?php
include "material.php";

$mat1 = new material();

if(isset($_POST["m_category"])) {

    $mat1->m_type = $_POST['m_type'];
    $mat1->m_min_con = $_POST['m_min_con'];
    $mat1->m_max_con = $_POST['m_max_con'];
    $mat1->m_category = $_POST['m_category'];
    $mat1->reg();

}

?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Storage range</title>
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
                                <h4 style="font-size: x-large;" class="card-title" align="center">Storage range</h4>
                                <form class="forms-sample"action="#" method="post">


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Category</label>
                                        <div class="form-group" align="left">
                                            <div class="form-radio">
                                                <label class="form-check-label" style="font-size: large;color: lightgrey">
                                                    <input type="radio" class="form-check-input" name="m_category" id="optionsRadios1"  value="Row"  checked> Row </label>
                                            </div>
                                            <div class="form-radio">
                                                <label class="form-check-label" style="font-size: large;color: lightgrey">
                                                    <input type="radio" class="form-check-input" name="m_category" id="optionsRadios2"  value="Production"> Production </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Type</label>
                                        <div class="col-sm-9">
                                            <select name="m_type">
                                                <option value="ilmenite">Ilmenite</option>
                                                <option value="rutile">Rutile</option>
                                                <option value="zircon">Zircon</option>
                                                <option value="monsite">Monsite</option>
                                                <option value="garnet">Garnet</option>
                                                <option value="magnetite">Magnetite</option>
                                                <option value="hi ti ilmenite">Hi Ti ilmenite</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Minimum Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="m_min_con"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Maximum Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="m_max_con"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success mr-2">Save</button>
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
