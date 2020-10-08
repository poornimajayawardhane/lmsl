<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}

include "client.php";
$client2= new client() ;


$client_array=$client2->get_all();

if (isset($_GET['ci'])){
    $client2->remove($_GET['ci']);
    header("T_admin_reg_tb.php");

}
if (isset($_GET['cia'])){

    $client2->approve($_GET['cia']);
    header("T_admin_reg_tb.php");
}

include "gm_header.php";

?>


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper"  >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-15 d-flex align-items-stretch grid-margin" >
                    <div class="col-19 stretch-card" >
                        <div class="card" style="background: black;opacity: 0.4" >
                            <h4 class="card-title" style="font-size: x-large;"  align="center">client Registration</h4>

                            <table class="table table-striped" >
                                <thead>
                                <tr>
                                    <th style="font-size: x-large;color: lightgrey">ID</th>
                                    <th style="font-size: x-large;color: lightgrey">Name</th>
                                    <th style="font-size: x-large;color: lightgrey">Organization</th>
                                    <th style="font-size: x-large;color: lightgrey">Email ID</th>
                                    <th style="font-size: x-large;color: lightgrey">Phone Number</th>

                                    <th style="font-size: x-large;color: lightgrey">Action</th>
                                </tr>
                                </thead>
                                <?php
                                foreach ($client_array as $item){
                                    echo "<tr >
                                                        <td style=\"font-size: large;color: lightgrey\">$item->c_reg_id</td>
                                                        <td style=\"font-size: large;color: lightgrey\">$item->c_name</td>
                                                        <td style=\"font-size: large;color: lightgrey\">$item->c_organization</td>
                                                        <td style=\"font-size: large;color:lightgrey\">$item->c_email</td>
                                                        <td style=\"font-size: large;color:lightgrey\">$item->c_phone_num</td>
                                                        
                                                        <td style=\"font-size: large;color:lightgrey\">
                                                            <button onclick='del ($item->c_reg_id)'>reject</button>
                                                            <button onclick='app ($item->c_reg_id)'>Approve</button>
                                                         
                                                        </td>     
                                                        
                                                  </tr>";
                                }
                                ?>

                            </table>
                            <script>
                                function del(c_reg_id) {
                                    res=confirm("Are You Sure? You are going to Delete");

                                    if(res==true){
                                        location.href=("T_admin_reg_tb.php?ci=" + c_reg_id)
                                    }

                                }

                                function app(c_reg_id) {
                                    res=confirm("Are You Sure? You are going to approve");

                                    if(res==true){
                                        location.href=("T_admin_reg_tb.php?cia=" + c_reg_id)
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