<?php
session_start();
if(isset($_SESSION["ct"]) && ($_SESSION["ct"])=="registered"){}
else{
    header("login.php");
}

include "bid.php";
$bid2= new bid() ;


$bid2_array=$bid2->get_all();



?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lot Information(CH)</title>
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
<div class="container-scroller" >
    <div class="container-fluid page-body-wrapper" >
        <div class="content-wrapper"  align="right" style="background: transparent;" >
            <div class="col-md-20 d-flex align-items-stretch grid-margin" align="center" >
                <div class="col-12 stretch-card" align="center">
                    <div class="card" style="background: black;opacity: 0.4"  align="right">
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Lot Information</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Reference no </th>
                                <th style="font-size: x-large;color: lightgrey">Production</th>
                                <th style="font-size: x-large;color: lightgrey">Quantity</th>
                                <th style="font-size: x-large;color: lightgrey">Package</th>
                                <th style="font-size: x-large;color: lightgrey">Minimum Value</th>
                                <th style="font-size: x-large;color: lightgrey">Start Date</th>
                                <th style="font-size: x-large;color: lightgrey">End Date</th>


                            </tr>
                            </thead>
                            <?php
                            foreach ($bid2_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_ref_num</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_production</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_quantity</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_package</td>
                                              
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_bid_security</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_opening_date</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->t_closing_date
                                                  
                                                   
                                              </tr>";

                            }
                            ?>

                        </table>

                    </div>

                </div>

            </div>

            <div class="row" style="margin-left: 1000px">
                <button><a href="T_home_page.php">Back To Home</a> </button>
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

<!-- End custom js for this page-->
</body>
</html>