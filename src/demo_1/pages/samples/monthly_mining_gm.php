<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}
include "gm_header.php";
include "daily_mining.php";

$dmin3= new daily_mining() ;


if(isset($_POST["year"])) {

    $dmin3->dm_year=$_POST["year"];
    $dmin3->dm_month= $_POST["month"];

    $dly3_mi_array=$dmin3->get_by_time();


}

?>

<div class="content-wrapper"  align="right" style="background: transparent;" >
    <form class="forms-sample"action="#" method="post">
        <div class="col-md-20 d-flex align-items-stretch grid-margin" >
            <div class="col-12 stretch-card" >
                <div class="card" style="background: black;opacity: 0.4" >
                    <div class="card-body" align="center" >
                        <h4 style="font-size: x-large;" class="card-title" align="center">Monthly Mining</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Year</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="year" value="">
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Month</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="month" value="">
                                        <option value="1">january</option>
                                        <option value="2">February</option>
                                        <option value="mar">March</option>
                                        <option value="apr">April</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 100px">
                            <button type="submit" class="btn btn-success mr-2">View</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>


                    </div>

                    <table class="table table-striped" >
                        <thead>
                        <tr>
                            <th style="font-size: x-large;color: lightgrey">Mining Num</th>
                            <th style="font-size: x-large;color: lightgrey">Time</th>
                            <th style="font-size: x-large;color: lightgrey">Mining Quantity</th>

                        </tr>
                        </thead>
                        <?php

                        if(isset($_POST["year"])) {
                            $tot = 0;
                            foreach ($dly3_mi_array as $item) {
                                $tot += $item->dm_con;
                                echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_id<input hidden type='text'  ></td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_date</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->dm_con</td>
                                                 
                                                    
                                              </tr>";

                            }

                        }
                        ?>
                    </table>
                    <div class="row">
                    </div>
                    <div class="col-md-11">

                        <div class="form-group row" style="margin-left: 600px">

                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Total</label>
                            <div class="col-sm-9">

                            <input type="text" class="form-control" name="production" value="<?php

                            if(isset($_POST["year"]))
                                echo $tot;
                            ?>">';


                            </div>
                            <style>
                                .form-control {
                                    display: block;
                                    width: 100%;
                                    height: calc(1.5em + 0.75rem + 2px);
                                    padding: 0.56rem 1.375rem;
                                    font-size: 0.9rem;
                                    font-weight: 600;
                                    line-height: 1;
                                    color: black;
                                    background-color: white;
                                    opacity: 0.8;}
                            </style>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </form>

</div>
<style>
    .form-control {
        display: inline-block;
        border: 1px solid #dee2e6;
        font-family: "roboto", sans-serif;
        font-size: 1rem;
        color: #212529;
        padding: 0 .75rem;
        line-height: 14px;
        font-weight: 600;
    }
</style>



<?php
include "gm_footer.php";
?>

