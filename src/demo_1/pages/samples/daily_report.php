<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="plant_eng"){}
else{
    header("login.php");
}
include "plant_header.php";
include "input_lot.php";
$lot2= new input_lot() ;


$in_lot_array=$lot2->get_ready();
?>


    <div class="content-wrapper"  align="center" style="background: transparent;" >
        <div class="col-md-20 d-flex align-items-stretch grid-margin" >
            <div class="col-12 stretch-card" >
                <div class="card" style="background: black;opacity: 0.4" >
                    <h4 class="card-title" style="font-size: x-large;"  align="center">Lot Information</h4>

                    <table class="table table-striped" >
                        <thead>
                        <tr>
                            <th style="font-size: x-large;color: lightgrey">Input Quantity</th>
                            <th style="font-size: x-large;color: lightgrey">Ilmenite</th>
                            <th style="font-size: x-large;color: lightgrey">Rutile</th>
                            <th style="font-size: x-large;color: lightgrey">zircon</th>
                            <th style="font-size: x-large;color: lightgrey">Monozite</th>
                            <th style="font-size: x-large;color: lightgrey">Wastage</th>
                            <th style="font-size: x-large;color: lightgrey">Status</th>

                        </tr>
                        </thead>
                        <?php
                        foreach ($in_lot_array as $item){
                            echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_date</td>
                                                  
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_emp</td>
                                                    <td style=\"font-size:large;color: lightgrey\">$item->lot_phase </td>
                                                    <td style=\"font-size:large;color: lightgrey\">$item->p_id </td>
                                                    <form action='process_details' method='post'>
                                                    <td style=\"font-size:large;color: lightgrey\">
                                                    <a href = process_details.php?lot_id=$item->lot_id>process</a>
                                                       
                                                    </td>
                                                    </form>
                                                   
                                                  
                                                      
                                              </tr>";

                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->

    </div>
<?php
include "plant_footer.php";
?>