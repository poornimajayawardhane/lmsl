<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}

include "sample.php";

$sam1 = new sample();


if(isset($_POST["s_feed"])) {
    $f= $_POST['s_feed'];
    $c = $_POST['s_con'];
    $t=  $_POST['s_tailing'];
    $r= ((($f-$t)*$c)/(($c-$t)*$f))*100;

    $sam1->s_con=$_POST["s_con"];
    $sam1->s_feed=$_POST["s_feed"];
    $sam1->s_tailing=$_POST["s_tailing"];
    $sam1->s_recovery=$r;
    $sam1->lot_id=$_POST["lot_id"];

    $sam1->reg();
    header("location:recovery_table.php");


}

$recovery=$r;
$lot=$_GET['lot_id'];


include "chemist_header.php";


?>

        <div class="main-panel" style="margin: auto" >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                    <div class="col-8 stretch-card" >
                        <div class="card">
                            <div class="card-body" align="left" >
                                <h4 style="font-size: x-large;" class="card-title" align="center">Recovery Report</h4>
                                <form class="forms-sample"action="#" method="post">


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Lot Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" value="<?=$lot?>" name="lot_id"  style="border-radius: 10px; height: 40px;font-size: larger; " readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Concentrate</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="s_con"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Feed</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="s_feed"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Tailing</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="s_tailing"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Recovery</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" readonly name="s_recovery"  style="border-radius: 10px; height: 40px;font-size: larger; " value="<?=$recovery?>">
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success mr-2">Calculate</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php

include "chemist_footer.php";
?>