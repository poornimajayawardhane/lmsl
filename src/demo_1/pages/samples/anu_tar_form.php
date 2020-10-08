<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="cheif engi"){}
else{
    header("login.php");

}

include "target.php";
include "mining_target.php";
include "production_target.php";

$tar1 = new target();
$mtar1 = new mining_target();
$ptar1 = new production_target();



    if(isset($_GET["tar2"])){
        $tar1= $tar1->get_by_id($_GET["tar2"]);

    }

    if(isset($_GET["mtar2"])){
        $mtar1= $mtar1->get_by_id($_GET["mtar2"]);

    }

    if(isset($_GET["ptar2"])){
        $ptar1= $tar1->get_by_id($_GET["ptar2"]);

    }

    if(isset($_POST["t_type"])) {

        $tar1->t_type = $_POST['t_type'];
        $tar1->t_desc = $_POST['t_desc'];
        $tar1->reg();


        if ($_POST["t_type"]=='min'){
            $mtar1->mt_year=$_POST["t_year"];
            $mtar1->mt_jan=$_POST["t_jan"];
            $mtar1->mt_feb=$_POST["t_feb"];
            $mtar1->mt_mar=$_POST["t_mar"];
            $mtar1->mt_apr=$_POST["t_apr"];
            $mtar1->mt_may=$_POST["t_may"];
            $mtar1->mt_jun=$_POST["t_jun"];
            $mtar1->mt_jul=$_POST["t_jul"];
            $mtar1->mt_aug=$_POST["t_aug"];
            $mtar1->mt_sep=$_POST["t_sep"];
            $mtar1->mt_oct=$_POST["t_oct"];
            $mtar1->mt_nov=$_POST["t_nov"];
            $mtar1->mt_dec=$_POST["t_dec"];
            $mtar1->reg();

        }
        else{
            $ptar1->pt_year=$_POST["t_year"];
            $ptar1->pt_jan=$_POST["t_jan"];
            $ptar1->pt_feb=$_POST["t_feb"];
            $ptar1->pt_mar=$_POST["t_mar"];
            $ptar1->pt_apr=$_POST["t_apr"];
            $ptar1->pt_may=$_POST["t_may"];
            $ptar1->pt_jun=$_POST["t_jun"];
            $ptar1->pt_jul=$_POST["t_jul"];
            $ptar1->pt_aug=$_POST["t_aug"];
            $ptar1->pt_sep=$_POST["t_sep"];
            $ptar1->pt_oct=$_POST["t_oct"];
            $ptar1->pt_nov=$_POST["t_nov"];
            $ptar1->pt_dec=$_POST["t_dec"];
            $ptar1->reg();


        }

        header("location:annuaal_mi_tar_tb.php");

    }
$date=date('Y',strtotime('+1 year'));

include "ch_header.php";


?>


                <div class="main-panel" style="margin: auto" >
                    <div class="content-wrapper"  align="center" style="background: transparent;" >
                        <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                            <div class="col-8 stretch-card" >
                                <div class="card">
                                    <div class="card-body" align="left" >
                                        <h4 style="font-size: x-large;" class="card-title" align="center">Target Information</h4>
                                        <form class="forms-sample"action="#" method="post">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Year</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" name="t_year" value="<?=$date?>" style="border-radius: 10px; height: 40px;font-size: larger;" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Type</label>
                                                <div class="form-group" align="left">
                                                    <div class="form-radio">
                                                        <label class="form-check-label" style="font-size: large;color: lightgrey">
                                                            <input type="radio" class="form-check-input" name="t_type" id="optionsRadios1"  value="min"  checked> Mining </label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <label class="form-check-label" style="font-size: large;color: lightgrey">
                                                            <input type="radio" class="form-check-input" name="t_type" id="optionsRadios2"  value="pro"> Production </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Description</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="exampleInputEmail2" name="t_desc"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">January</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_jan"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">February</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_feb"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">March</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_mar"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">April</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_apr"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">May</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2"  name="t_may"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">June</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_jun"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">July</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_jul"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">August</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_aug"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">September</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_sep"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">October</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_oct"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">November</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_nov"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">December</label>
                                                <div class="col-sm-7">
                                                    <input type="number" class="form-control" id="exampleInputEmail2" required name="t_dec"  style="border-radius: 10px; height: 40px">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success mr-2">Set Target</button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
include "ch_footer.php";
?>

