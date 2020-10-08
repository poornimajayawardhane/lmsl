<?php

session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chief engi"){}
else{
    header("login.php");
}

include "production_target.php";
$tar2= new production_target() ;


$target_pro_array=$tar2->get_all();


?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Annual Production Target Table</title>
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
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Annual Production Target Information</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Id</th>
                                <th style="font-size: x-large;color: lightgrey">Year</th>
                                <th style="font-size: x-large;color: lightgrey">Jan</th>
                                <th style="font-size: x-large;color: lightgrey">Feb</th>
                                <th style="font-size: x-large;color: lightgrey">Mar</th>
                                <th style="font-size: x-large;color: lightgrey">Apr</th>
                                <th style="font-size: x-large;color: lightgrey">May</th>
                                <th style="font-size: x-large;color: lightgrey">June</th>
                                <th style="font-size: x-large;color: lightgrey">July</th>
                                <th style="font-size: x-large;color: lightgrey">Sept</th>
                                <th style="font-size: x-large;color: lightgrey">Oct</th>
                                <th style="font-size: x-large;color: lightgrey">Nov</th>
                                <th style="font-size: x-large;color: lightgrey">Dec</th>
                            </tr>
                            </thead>
                            <?php
                            foreach ($target_pro_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->pt_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->pt_year</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->pt_jan</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_feb</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_mar</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_apr</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_may</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_jun</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_jul</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_sep</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_oct</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_nov</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->pt_dec</td>
                                                    
                                      
                                                    
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