<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="general ma"){}
else{
    header("login.php");
}

include "tender.php";

$ten1 = new tender();

if(isset($_POST["quantity"])) {

    $ten1->t_production = $_POST['product'];
    $ten1->t_quantity = $_POST['quantity'];
    $ten1->t_bid_security = $_POST['bid_security'];
    $ten1->t_package = $_POST['package'];
    $ten1->t_opening_date = $_POST['opening_date'];
    $ten1->t_closing_date = $_POST['end_date'];
    $ten1->t_note = $_POST['note'];
    $ten1->reg();

    header("success.php");


}
include "gm_header.php";

    ?>


        <div class="main-panel" style="margin: auto" >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body" align="left">
                                <h4 class="card-title">Tender Invitation</h4>
                                <form class="form-sample" action="#" method="post">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Product</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="product" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"name="quantity" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Bid Security</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="bid_security" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Package</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="package"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Opening date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="opening_date" readonly value="<?php echo date('Y-M-d')?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Closing Date</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" name="end_date" required/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Note</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="note" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <button type="submit" class="btn btn-success mr-2" >Publish</button>
                                    <button class="btn btn-light">Cancel</button>

                                </form>
                            </div>
                            <style>
                                .form-control {
                                    display: block;
                                    width: 100%;
                                    height: calc(1.5em + 0.75rem + 2px);
                                    padding: 0.56rem 1.375rem;
                                    font-size: 0.75rem;
                                    font-weight: 600;
                                    line-height: 1;
                                    color: black;
                                    background-color: white;
                                    opacity: 0.6;}
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
include "gm_footer.php";
?>