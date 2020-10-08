<?php
    session_start();
    if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chief engi"){}
    else{
        header("login.php");
    }


    include "daily_mining.php";

    $dly1 = new daily_mining();

    if(isset($_POST["dm_con"])) {

        $dly1->dm_desc = $_POST['dm_desc'];
        $dly1->dm_con = $_POST['dm_con'];
        $dly1->reg();
        header("location:transfer_lot.php");

}

include "ch_header.php";
?>

        <div class="main-panel" style="margin: auto" >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                    <div class="col-8 stretch-card" >
                        <div class="card">
                            <div class="card-body" align="left" >
                                <h4 style="font-size: x-large;" class="card-title" align="center">Daily Mining</h4>
                                <form class="forms-sample"action="#" method="post">

                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="dm_desc"  style="border-radius: 10px; height: 40px;font-size: larger; ">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputEmail2" required name="dm_con"  style="border-radius: 10px; height: 40px">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2">Save</button>
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