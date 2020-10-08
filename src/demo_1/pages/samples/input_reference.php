<?php
session_start();

if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="general ma"){}
else{
    header('location:login.php');
}


include "input_lot.php";


$lot1 = new input_lot();

if(isset($_GET['iida'])){
    $issue2->approve($_GET['iida']);
}
if(isset($_GET['iid'])){
    $issue2->remove($_GET['iid']);
}

if(isset($_POST["lot_ref_id"])) {

    $lot1->lot_ref_id = $_POST['lot_ref_id'];
    $lot1->input_quantity = $_POST['lot_quan'];
    $lot1->reg();
    header("location:input_ref.php");
}

include "gm_header.php";

$tot=$_GET['i_tot'];
$id=$_GET['i_id'];
//include "header.php";
?>



        <div class="main-panel" style="margin: auto" >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                    <div class="col-8 stretch-card" >
                        <div class="card">
                            <div class="card-body" align="left" >
                                <h4 style="font-size: x-large;" class="card-title" align="center">Input Quantity</h4>
                                <form class="forms-sample"action="#" method="post">

                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Reference Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="lot_ref_id" value="<?=$id?>" style="border-radius: 10px; height: 40px;font-size: larger; " readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="lot_quan" value="<?=$tot?>" style="border-radius: 10px; height: 40px" readonly>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2" >confirm</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
include "gm_footer.php";
?>