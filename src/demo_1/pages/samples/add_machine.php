<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="plant engi"){}
else{
    header("login.php");
}

include "plant_header.php";
include "machine.php";
$mach1 = new machine();

if(isset($_POST["name"])) {

    $mach1->m_name = $_POST['name'];
    $mach1->m_plant = $_POST['plant'];
    $mach1->m_serial_number = $_POST['serial_number'];
    $mach1->m_model_number = $_POST['model_number'];
    $mach1->m_note = $_POST['note'];
    $mach1->m_service_frequency = $_POST['service_frequency'];
    $mach1->m_maximum_capacity = $_POST['capacity'];

    $mach1->reg();

    // header("location:success.php");
}

?>

        <div class="main-panel" style="margin: auto" >
            <div class="content-wrapper"  align="center" style="background: transparent;" >
                <div class="col-md-10 d-flex align-items-stretch grid-margin" >
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">MMachine Information</h4>
                                <form class="form-sample" action="#" method="post">
                                    <p class="card-description"> Machine Info</p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Plant</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="plant" value="">
                                                        <option value="plant_a">Plant A</option>
                                                        <option value="plant_b">Plant B</option>
                                                        <option value="dry_mill">Dry Mill</option>
                                                        <option value="wet_mill">Wet MIll</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Serial Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="serial_number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Model Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"name="model_number" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Service Frequency</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="service_frequency" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Note</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="note" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Maximum Capacity</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="capacity" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Note</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="note" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <button type="submit" class="btn btn-success mr-2">Add Machine</button>
                                    <button class="btn btn-light">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include "plant_footer.php";
?>
