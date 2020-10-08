<?php

include "sample.php";
include "gm_header.php";

$sample4= new sample() ;
$sample5= new sample() ;


if(isset($_POST["recover"])) {

    $sample4->s_recovery=$_POST["recover"];
    $sample4_array=$sample4->get_new_recovery();


}
//$sample5_array=$sample4->get();
$sample4_array=$sample4->get_new_recovery();
?>

<div class="content-wrapper"  align="right" style="background: transparent;" >
    <form class="forms-sample"action="#" method="post">
        <div class="col-md-20 d-flex align-items-stretch grid-margin" >
            <div class="col-12 stretch-card" >
                <div class="card" style="background: black;opacity: 0.4" >
                    <div class="card-body" align="center" >
                        <h4 style="font-size: x-large;" class="card-title" align="center">Recovery List</h4>
                    </div>
                    <div class="row">


                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: large;color: lightgrey">Recovery value</label>
                            <div class="col-sm-9">
                                <input type="text"  required name="recover"  style="border-radius: 10px; height: 40px">
                            </div>
                        </div>
                        <div style="margin-left: 40px">
                            <button type="submit" class="btn btn-success mr-2" >view</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                        <style>
                            .btn-success {
                                color: #212529;
                                background-color: #28a7456b;
                                border-color: #19d895;}
                        </style>




                    </div>

                    <table class="table table-striped" >
                        <thead>
                        <tr>
                            <th style="font-size: x-large;color: lightgrey">Lot Number</th>
                            <th style="font-size: x-large;color: lightgrey">Recovery</th>


                        </tr>
                        </thead>
                        <?php
                        if(isset($_POST["recover"])) {
                            foreach ($sample4_array as $item) {
                                echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->lot_id</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_recovery</td>
                                                 
                                                 
                                                 
                                              </tr>";

                            }

                        }

                        ?>
                    </table>
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
                            opacity: 0.7;
                            background-clip:}
                    </style>


                </div>

            </div>

        </div>

    </form>
</div>

<?php
include "gm_footer.php";
?>

