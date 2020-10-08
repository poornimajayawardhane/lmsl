<?php
    session_start();
        if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="admin"){}
        else{
            header("login.php");
    }


include "input_lot.php";
$lot2= new input_lot() ;
$lot3=new input_lot();


if (isset($_GET['pr'])) {
    $lot3->process($_GET['pr']);
}

$in_lot_array=$lot2->get_ready();

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plant Engineer</title>
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
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +94 76 3564 270</li>

            </ul>

            <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

                        <a class="dropdown-item" href="login.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <p class="designation">Plant Engineer</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Main Menu</li>

                <li class="nav-item">
                    <a class="nav-link" href="dashboard_plant_engineer.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Home    </span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="menu-icon typcn typcn-user-outline"></i>
                        <span class="menu-title">Sign Out</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->

        <div class="col-md-20 d-flex align-items-stretch grid-margin" >
            <div class="col-12 stretch-card" >


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-15">
                        <div class="row grid-margin stretch-card">
                            <div class="col-md-3 grid-margin stretch-card" >

                                <form method="get" action="add_machine.php">
                                    <button class="btn-lg" style="background-color: rgba(100,255,200,0.2); border: #3bd949; font-size: x-large; font-family: 'Times New Roman';" type="submit"   > Add A Machine</button>

                                </form>


                            </div>
                            <div class="col-md-3 grid-margin stretch-card" >

                                <form method="get" action="lot_status.php">

                                    <button class="btn-lg" style="background-color: rgba(100,255,200,0.2); border: #3bd949; font-size: x-large; font-family: 'Times New Roman';" type="submit"  > Input lot Status </button>
                                </form>
                            </div>

                            <div class="card" style="background: black;opacity: 0.4" >
                                <h4 class="card-title" style="font-size: x-large;"  align="center">Approved Input Lot</h4>

                                <table class="table table-striped" >
                                    <thead>
                                    <tr>
                                        <th style="font-size: x-large;color: lightgrey">Input Lot Num</th>
                                        <th style="font-size: x-large;color: lightgrey">Input Quantity</th>
                                        <th style="font-size: x-large;color: lightgrey">Date & Time</th>
                                        <th style="font-size: x-large;color: lightgrey">Employee</th>
                                        <th style="font-size: x-large;color: lightgrey">Phase</th>
                                        <th style="font-size: x-large;color: lightgrey">Phase Num</th>
                                        <th style="font-size: x-large;color: lightgrey">Action</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    foreach ($in_lot_array as $item){
                                        echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_id</td>
                                                    <td style=\"font - size: large;color: lightgrey\">$item->input_quantity</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_date</td>
                                                  
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_emp</td>
                                                    <td style=\"font-size:large;color: lightgrey\">$item->lot_phase </td>
                                                    <td style=\"font-size:large;color: lightgrey\">$item->p_id </td>
                                                    <form action='process_details' method='post'>
                                                    <td style=\"font-size:large;color: lightgrey\">
                                                     <a onclick='del ($item->lot_id)' href = process_details.php?lot_id=$item->lot_id&phaseid=$item->p_id&quantity=$item->input_quantity> Process</a>
                                                       
                                                    </td>
                                                    </form>
                                                   
                                                  
                                                      
                                              </tr>";

                                    }
                                    ?>

                                </table>
                                <script>
                                    function del(lot_id) {
                                        res=confirm("Are You Sure? The lot Goes to the process");

                                        if(res==true){
                                            location.href=("lot_status.php?pr=" + lot_id)
                                        }

                                    }
                                </script>
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
    <script src="../../../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>
</html>