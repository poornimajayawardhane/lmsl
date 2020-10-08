<?php

include "sample.php";
$sam2= new sample() ;

    $wkly_sample_array=$sam2->get_all_week("plant_a");



?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Weekly Sample report</title>
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
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Weekly Sample Report</h4>
                        <div class="form-group row">
                            <form method="post">
                            <label for="exampleInputEmail2" class="col-sm-2 col-form-label" style="font-size: large;color: lightgrey">Select Plant</label>
                            <div class="col-sm-1">
                                <?php
                                         include "plant.php";
                                         $pl2= new plant();
                                         $all=$pl2->get_all();



                                    echo' <select  name="p_name">';
                                    foreach($all as $item){
                                        echo"<option value='$item->p_name'>$item->p_name</option>";

                                    echo'</select>';
                                }
                                ?>
                              <button onclick="">click me</button>'


                            </div>
                            </form>
                        </div>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Sample Id</th>
                                <th style="font-size: x-large;color: lightgrey">Date & time</th>
                                <th style="font-size: x-large;color: lightgrey">Concentrate</th>
                                <th style="font-size: x-large;color: lightgrey">Feed</th>
                                <th style="font-size: x-large;color: lightgrey">Tailing</th>
                                <th style="font-size: x-large;color: lightgrey">Recovery</th>
                                <th style="font-size: x-large;color: lightgrey">Status</th>
                                <th style="font-size: x-large;color: lightgrey">Employee</th>
                            </tr>
                            </thead>
                            <?php
                            foreach ($wkly_sample_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_date</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_con</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_feed</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_tailing</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_recovery</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_status</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_employee</td>
                                                         
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