<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}
include "chemist_header.php";
include "production.php";
$production2= new production() ;


$ilmenite_array=$production2->get_ilmenite();



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
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper"  >
        <div class="content-wrapper"  align="center" style="background: transparent;" >
            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                <div class="col-12 stretch-card" >
                    <div class="card" style="background: black;opacity: 0.4" >
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Pending Samples</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Production Number</th>
                                <th style="font-size: x-large;color: lightgrey">Quantity</th>

                            </tr>
                            </thead>
                            <?php
                            foreach ($ilmenite_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->pr_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->pr_quan</td>
                                                
                                                      
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


<?php
include "chemist_footer.php";
?>