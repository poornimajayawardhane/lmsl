<?php
session_start();
if(isset($_SESSION["ct"]) && ($_SESSION["ct"])=="approve"){}
else{
    header("T_login.php");
}

include "bid.php";

$bid1 = new bid();

if(isset($_POST["quantity"])) {

    $bid1->b_ref_num = $_POST['b_ref_num'];
    $bid1->b_production = $_POST['production'];
    $bid1->b_quantity = $_POST['quantity'];
    $bid1->b_unit_price = $_POST['unit_price'];
    $bid1->b_note = $_POST['note'];
    $bid1->bid();

    header("success.php");


}
$ref=$_GET['t_ref_id'];


?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Annual Mining Target Table</title>
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
    <div class="container-fluid page-body-wrapper"  >


    <div class="main-panel" style="margin: auto" >
        <div class="content-wrapper"  align="center" style="background: transparent;" >
            <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body" align="left">
                            <h4 class="card-title">Bid Submission</h4>
                            <form class="form-sample" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Reference Num</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="b_ref_num" value="<?=$ref?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Production</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"name="production" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Quantity</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="quantity"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Unit Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="unit_price"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Note</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="note" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mr-2" >Publish</button>
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
</div>
</div>
<!-- End custom js for this page-->
</body>
</html>