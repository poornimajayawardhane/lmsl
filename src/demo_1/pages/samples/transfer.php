<?php

if(isset($_SESSION['e_reg_id'])){}
else{
    header("login.php");
}

include "daily_mining.php";
include "issue.php";

$dmin2= new daily_mining() ;
$issue2= new issue();


$dly_mi_array=$dmin2->get_all();
if(isset($_POST["i_issue"])) {

    $issue2->i_note = $_POST['i_note'];
    $issue2->i_tot = $_POST['i_tot'];
    $issue2->dm_id=$_POST['dm_id'];
    $issue2->i_issue=$_POST['i_issue'];

    $issue2->add();


    // header("location:success.php");
}




?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Treansfer table</title>
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
<div class="card">

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper"  >
        <div class="content-wrapper"  align="center" style="background: transparent;" >
            <form class="forms-sample"action="#" method="post">
            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                <div class="col-10 stretch-card" >
                    <div class="card" style="background: black;opacity: 0.4" >    <div class="card-body" align="center" >
                            <h4 style="font-size: x-large;" class="card-title" align="center">Transfer Information</h4>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-size: large;color: lightgrey">Note</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputEmail2" name="i_note"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-1 col-form-label" style="font-size: large;color: lightgrey">Total</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="itot" name="i_tot"  style="border-radius: 10px; height: 40px;font-size: larger; " >
                                </div>
                            </div>

                        </div>


                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Mining Num</th>
                                <th style="font-size: x-large;color: lightgrey">Mining Quantity</th>
                                <th style="font-size: x-large;color: lightgrey">New</th>
                            </tr>
                            </thead>
                            <?php
                            foreach ($dly_mi_array as $item){
                                echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_id<input hidden type='text' value='$item->dm_id' name='dm_id[]' ></td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_con</td>
                                                 <td style=\"font-size: large;color: lightgrey\" ><input type='text' name='i_issue[]' class='tbx' > </td>
                                                
                                                    
                                              </tr>";

                            }


                            ?>
                        </table>
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-success mr-2">Transfer</button>
                <button class="btn btn-light">Cancel</button>
            </form>
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
<script>
    $(document).on("change", ".tbx", function() {
        var sum = 0;
        $(".tbx").each(function(){
            sum += +$(this).val();
        });
        $("#itot").val(sum);
    });
</script>
<!-- End custom js for this page-->
</body>
</html>