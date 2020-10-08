<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="general ma"){}
else{
    header("login.php");
}

include "production.php";

$production3= new production() ;


if(isset($_POST["year"])) {

    $production3->pr_year=$_POST["year"];
    $production3->pr_month= $_POST["month"];
    $production3->pr_type= $_POST["type"];

    $production_array=$production3->get_by_time();


}
include "gm_header.php";
?>

<div class="content-wrapper"  align="right" style="background: transparent;" >
    <form class="forms-sample"action="#" method="post">
        <div class="col-md-20 d-flex align-items-stretch grid-margin" >
            <div class="col-12 stretch-card" >
                <div class="card" style="background: black;opacity: 0.4" >
                    <div class="card-body" align="center" >
                        <h4 style="font-size: x-large;" class="card-title" align="center">Monthly Production</h4>
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
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="type" value="">
                                        <option value="ilmenite">Ilmenite</option>
                                        <option value="rutile">Rutile</option>
                                        <option value="zircon">Zircon</option>
                                        <option value="magnetite">Magnetite</option>
                                        <option value="garnet">Garnet</option>
                                        <option value="hi ti">Hi TI</option>
                                        <option value="monosite">Monosite</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 60px">
                            <button type="submit" class="btn btn-success mr-2">view</button>
                            <button class="btn btn-light">Cancel</button>
                            <style>
                                .btn-success {
                                    color: #212529;
                                    background-color: #28a7456b;
                                    border-color: #19d895;}
                            </style>
                        </div>


                    </div>

                    <table class="table table-striped" >
                        <thead>
                        <tr>
                            <th style="font-size: x-large;color: lightgrey">Lot Id</th>
                            <th style="font-size: x-large;color: lightgrey">Time</th>
                            <th style="font-size: x-large;color: lightgrey">Production Quantity</th>

                        </tr>
                        </thead>
                        <?php

                        if(isset($_POST["year"])) {
                            $tot = 0;
                            foreach ($production_array as $item) {
                                $tot += $item->pr_quan;
                                echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->pr_id<input hidden type='text'  ></td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->pr_date</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->pr_quan</td>
                                                 
                                                    
                                              </tr>";

                            }

                        }
                        ?>
                    </table>
                    <div class="row">
                    </div>
                    <div class="col-md-10">

                        <div class="form-group row" style="margin-left: 600px">

                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Total</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" name="quantity" value="<?php

                                if(isset($_POST["year"]))
                               echo $tot;
                                ?>"/>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </form>

</div>
<style>
    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.56rem 1.375rem;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1;
        color: black;
        background-color: white;
        opacity: 0.3;}
</style>


<?php
include "ch_footer.php";
?>

