<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="plant engi"){}
else{
    header("login.php");
}

include "input_lot.php";
$lot2= new input_lot() ;
$lot3=new input_lot();


if (isset($_GET['pr'])) {
    $lot3->process($_GET['pr']);
}

$in_lot_array=$lot2->get_ready();
include "plant_header.php";
?>


        <div class="content-wrapper"  align="center" style="background: transparent;" >
            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                <div class="col-12 stretch-card" >
                    <div class="card" style="background: black;opacity: 0.4" >
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Approved Input Lot</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Input Lot Num</th>
                                <th style="font-size: x-large;color: lightgrey">Input Quantity</th>
                                <th style="font-size: x-large;color: lightgrey">Date & Time</th>
                                <th style="font-size: x-large;color: lightgrey">Employee</th>
                                <th style="font-size: x-large;color: lightgrey">Phase</th>
                                <th style="font-size: x-large;color: lightgrey">Phase Num</th>
                                <th style="font-size: x-large;color: lightgrey">Action</th>

                            </tr>
                            </thead>
                            <?php
                            foreach ($in_lot_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_id</td>
                                                    <td style=\"font - size: large;color: lightgrey\">$item->input_quantity</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_date</td>
                                                  
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_emp</td>
                                                    <td style=\"font-size:large;color: lightgrey\">$item->lot_phase </td>
                                                    <td style=\"font-size:large;color: lightgrey\">$item->p_id </td>
                                                    <form action='process_details' method='post'>
                                                    <td style=\"font-size:large;color: lightgrey\">
                                                     <a onclick='del ($item->lot_id)' href = process_details.php?lot_id=$item->lot_id&phaseid=$item->p_id&quantity=$item->input_quantity> Process</a>
                                                       
                                                    </td>
                                                    </form>
                                                   
                                                  
                                                      
                                              </tr>";

                            }
                            ?>

                        </table>
                        <script>
                            function del(lot_id) {
                                res=confirm("Are You Sure? The lot Goes to the process");

                                if(res==true){
                                    location.href=("lot_status.php?pr=" + lot_id)
                                }

                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->

    </div>
<?php
include "plant_footer.php";
?>