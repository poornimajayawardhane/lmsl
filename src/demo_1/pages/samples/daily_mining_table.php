<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}

include "daily_mining.php";
$dmin2= new daily_mining() ;


$dly_mi_array=$dmin2->get_all();


?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daily mining</title>
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
        <div class="content-wrapper"  align="center" style="background: transparent;" >
            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                <div class="col-12 stretch-card" >
                    <div class="card" style="background: black;opacity: 0.4" >
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Daily Mining table</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Mining Id</th>
                                <th style="font-size: x-large;color: lightgrey">Mining Quantity</th>
                                <th style="font-size: x-large;color: lightgrey">Date & Time</th>
                                <th style="font-size: x-large;color: lightgrey">Description</th>
                                <th style="font-size: x-large;color: lightgrey">Employee</th>
                            </tr>
                            </thead>
                            <?php
                            foreach ($dly_mi_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->dm_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->dm_con</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->dm_date</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->dm_desc</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->dm_employee</td>
                                                 
                                                    
                                              </tr>";
                            }
                            ?>

                        </table>
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