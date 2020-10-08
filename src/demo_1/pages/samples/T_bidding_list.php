<?php

include "bid.php";
$bid2= new bid() ;


$bid2_array=$bid2->get_all();

if (isset($_GET['bi'])){
    $bid2->remove($_GET['bi']);
    header("T_bidding_list.php");
}
if (isset($_GET['bia'])){

    $bid2->approve($_GET['bia']);
}
include "gm_header.php";

?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper"  >
        <div class="content-wrapper"  align="center" style="background: transparent;" >
            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                <div class="col-12 stretch-card" >
                    <div class="card" style="background: black;opacity: 0.4" >
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Bidding List</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Bid Num </th>
                                <th style="font-size: x-large;color: lightgrey">Ref Num</th>
                                <th style="font-size: x-large;color: lightgrey">Date</th>
                                <th style="font-size: x-large;color: lightgrey">Product</th>
                                <th style="font-size: x-large;color: lightgrey">Quantity</th>
                                <th style="font-size: x-large;color: lightgrey">Unit Price</th>
                                <th style="font-size: x-large;color: lightgrey">Note</th>
                                <th style="font-size: x-large;color: lightgrey">Action</th>

                            </tr>
                            </thead>
                            <?php
                            foreach ($bid2_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_ref_num</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_date</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_production</td>             
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_quantity</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_unit_price</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->b_note</td>
                                              
                                                    <td style=\"font-size:large;color: lightgrey\" onclick='del ($item->b_id)'>Delete   </td>
                                                    <td style=\"font-size:large;color: lightgrey\" onclick='app ($item->b_id)'>Approve   </td>

                                              </tr>";

                            }
                            ?>

                        </table>
                        <script>
                            function del(b_id) {
                                res=confirm("Are You Sure? You are going to Delete");

                                if(res==true){
                                    location.href=("T_bidding_list.php?bi=" + b_id)
                                }

                            }
                            function app(b_id) {
                                res=confirm("Are You Sure? You are going to approve");

                                if(res==true){
                                    location.href=("T_bidding_list.php?bia=" + b_id)
                                }

                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "gm_footer.php";
?>