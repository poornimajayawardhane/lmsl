<?php
session_start();
if(isset($_SESSION["ut"]) && ($_SESSION["ut"])=="chemisti"){}
else{
    header("login.php");
}
include "sample.php";
include "gm_header.php";

$sample3= new sample() ;


if(isset($_POST["year"])) {

    $sample3->s_year=$_POST["year"];
    $sample3->s_month= $_POST["month"];
    $sample3->s_day= $_POST["day"];

    $sample3_array=$sample3->get_by_time();


}

?>

<div class="content-wrapper"  align="right" style="background: transparent;" >
    <form class="forms-sample"action="#" method="post">
        <div class="col-md-20 d-flex align-items-stretch grid-margin" >
            <div class="col-12 stretch-card" >
                <div class="card" style="background: black;opacity: 0.4" >
                    <div class="card-body" align="center" >
                        <h4 style="font-size: x-large;" class="card-title" align="center">Monthly Recovery</h4>
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
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
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
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" style="font-size: small;color: lightgrey">Date</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="day" value="">
                                        <option value="0">00</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>


                                    </select>
                                </div>
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
                            <th style="font-size: x-large;color: lightgrey">Date & Time</th>
                            <th style="font-size: x-large;color: lightgrey">Concentrate</th>
                            <th style="font-size: x-large;color: lightgrey">Feed</th>
                            <th style="font-size: x-large;color: lightgrey">Tailing</th>
                            <th style="font-size: x-large;color: lightgrey">Recovery</th>

                        </tr>
                        </thead>
                        <?php
                        if(isset($_POST["year"])) {
                            foreach ($sample3_array as $item) {
                                echo "<tr >
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_date</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_con</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_feed</td>
                                                 <td style=\"font-size: large;color: lightgrey\">$item->s_tailing</td>
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

