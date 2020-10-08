<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemist"){}
else{
    header("login.php");
}
    include "input_lot.php";
    include "process.php";
    include "issue.php";

    $process1 = new process();
    $input1=new input_lot();
    $issue1=new issue();

$phaseid=$_GET['phaseid'];
$lot=$_GET['lot_id'];
$quantity=$_GET['quantity'];


    if(isset($_POST["production"])) {

        $process1->p_production=$_POST["production"];
        $process1->p_remaining=$_POST["remaining"];
        $process1->p_desc=$_POST["desc"];
        $process1->p_type=$_POST["type"];
        $process1->p_id=$_POST["phaseid"];
        $process1->r_quan=$_POST["phaseid"];

        $process1->insert();


    }

    if(isset($_POST["remaining"])) {

        $rem=$_POST['remaining'];
        $pr=$_POST['production'];
        $qu=$_POST['quantity'];
        $wastage=($qu-$rem)-$pr;

        $input1->remaining=$_POST["remaining"];
        $input1->p_id=$_POST["phaseid"];
        $input1->lot_id=$_POST["lot_num"];
        $input1->phase2();
        header("location:dashboard_plant_engineer.php");


    }

$r=$wastage;

include "plant_header.php";

?>


        <div class="main-panel" style="margin: auto" >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Processing Information</h4>
                                <form class="form-sample" action="#" method="post">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Phase ID</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="phaseid" value="<?=$phaseid?>" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Lot Quantity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="quantity" value="<?=$quantity?>" readonly/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Input Lot Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="lot_num" value="<?=$lot?>" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Wastage</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control"name="wastage" max="<?=$quantity?>"readonly/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Type</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="type" value="" required>
                                                        <option value="ilmenite">Ilmenite</option>
                                                        <option value="rutile">Rutile</option>
                                                        <option value="zircon">Zircon</option>
                                                        <option value="monozite">Monozite</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey" >Production</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="production" max="<?=$quantity?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Remaining</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="remaining" max="<?=$quantity?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Note</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="desc" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>

                                </form>
                                <style>
                                    .form-control {
                                        display: block;
                                        width: 100%;
                                        height: calc(1.5em + 0.75rem + 2px);
                                        padding: 0.56rem 1.375rem;
                                        font-size: 0.8rem;
                                        font-weight: 500;
                                        line-height: 1;
                                        color: black;
                                        background-color: white;
                                        opacity: 0.9}
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
<?php
include "plant_footer.php";
?>