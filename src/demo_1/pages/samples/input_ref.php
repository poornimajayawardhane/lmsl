<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}

include "issue.php";
$issue2= new issue() ;


$issue_array=$issue2->get_lot();

if(isset($_GET['iid'])){
    $issue2->remove($_GET['iid']);
    header("location:input_ref.php");
}
if(isset($_GET['iida'])){
    $issue2->approve($_GET['iida']);
    header("location:input_reference.php");
}




include "gm_header.php";
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
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Lot Information</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Issue Number</th>
                                <th style="font-size: x-large;color: lightgrey">Date & Time</th>
                                <th style="font-size: x-large;color: lightgrey">Quantity</th>
                                <th style="font-size: x-large;color: lightgrey">Action</th>
                                <th style="font-size: x-large;color: lightgrey">Action</th>
                            </tr>
                            </thead>
                            <?php
                            foreach ($issue_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->i_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->i_date</td>
                                              
                                                    <td style=\"font-size: large;color: lightgrey\">$item->i_tot</td>
                                                  
                                                    <td style=\"font - size:large;color: lightgrey\">
                                                     <button>  <a onclick='app($item->i_id)' href = input_reference.php?i_id=$item->i_id&i_tot=$item->i_tot> Confirm</a></button>
                                                       
                                                    </td>
                                                    <td style=\"font - size:large;color: lightgrey\">
                                                     <button> <a onclick='del($item->i_id)'>Cancel</a></button>
                                                      </td>
                                              </tr>";

                            }
                            ?>

                        </table>
                        <script>
                            function del(c2) {
                                res=confirm("Are You Sure??");

                                if(res==true){
                                    location.href=("input_ref.php?iid="+ c2)
                                }

                            }
                            function app(c3) {
                                res=confirm("Are You Sure??");

                                if(res==true){
                                    location.href=("input_ref.php?iida="+ c3)
                                }

                            }

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "gm_footer.php";
?>