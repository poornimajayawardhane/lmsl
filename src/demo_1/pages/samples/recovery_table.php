<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemist"){}
else{
    header("login.php");
}
include "sample.php";
$sample2= new sample() ;


$sample2_array=$sample2->get_all();

include "chemist_header.php";
?>


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper"  >
        <div class="content-wrapper"  align="right" style="background: transparent;" >
            <div class="col-md-20 d-flex align-items-stretch grid-margin" >
                <div class="col-12 stretch-card" >
                    <div class="card" style="background: black;opacity: 0.4" >
                        <h4 class="card-title" style="font-size: x-large;"  align="center">Recovery List</h4>

                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th style="font-size: x-large;color: lightgrey">Lot Number</th>
                                <th style="font-size: x-large;color: lightgrey">Concentrate</th>
                                <th style="font-size: x-large;color: lightgrey">Feed</th>
                                <th style="font-size: x-large;color: lightgrey">Tailing</th>
                                <th style="font-size: x-large;color: lightgrey">Recovery</th>

                            </tr>
                            </thead>
                            <?php
                            foreach ($sample2_array as $item){
                                echo "<tr >
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_id</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_con</td>
                                                    <td style=\"font-size: large;color: lightgrey\">$item->s_feed</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->s_tailing</td>
                                                    <td style=\"font-size: large;color:lightgrey\">$item->s_recovery</td>
                                  
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