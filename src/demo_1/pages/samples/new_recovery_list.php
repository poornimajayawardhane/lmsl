<?php

include "sample.php";
$sample4= new sample() ;


$sample4_array=$sample4->get_new_recovery();

include "chemist_header.php"
?>


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper"  >
            <div class="content-wrapper"  align="right" style="background: transparent;" >
                <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                    <div class="col-12 stretch-card" >
                        <div class="card" style="background: black;opacity: 0.4" >
                            <h4 class="card-title" style="font-size: x-large;"  align="center">Recovery List</h4>

                            <div>
                                <label>Recovery Value</label>
                                <input type="number" name="recovery">
                            </div>

                            <table class="table table-striped" >
                                <thead>
                                <tr>
                                    <th style="font-size: x-large;color: lightgrey">Lot Number</th>
                                    <th style="font-size: x-large;color: lightgrey">Recovery</th>


                                </tr>
                                </thead>
                                <?php
                                foreach ($sample4_array as $item){
                                    echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->lot_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_recovery</td>
                                                    
                                  
                                              </tr>";
                                }
                                ?>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "chemist_footer.php";
?>