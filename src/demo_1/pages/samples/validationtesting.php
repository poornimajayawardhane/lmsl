<?php
$path="employee";
include "regi_header.php";
include"employee.php";
$ne=new employee();

if(isset($_GET["Employee_ID"]))
{
    $ne = $ne->get_user_by_ID($_GET["Employee_ID"]);

}
if(isset($_POST["Employee_Last_Name"]))
{
    $p=new employee();
    $p->Employee_Last_Name = $_POST['Employee_Last_Name'];
    $p->Employee_First_Name = $_POST['Employee_First_Name'];
    $p->Employee_DOB = $_POST['Employee_DOB'];
    $p->Employee_NIC = $_POST['Employee_NIC'];
    $p->Employee_Address = $_POST['Employee_Address'];
    $p->Employee_Contact_Number = $_POST['Employee_Contact_Number'];
    $p->Employee_Hire_Date = $_POST['Employee_Hire_Date'];
    $p->Employee_Job_Role = $_POST['Employee_Job_Role'];
    $p->Employee_Email = $_POST['Employee_Email'];
    $p->Employee_Username = $_POST['Employee_Username'];
    $p->Employee_Password = $_POST['Employee_Password'];
    $p->Employee_Privilege=$_POST['Employee_Privilege'];

    if(isset($_POST['eid']))
        $p->update($_POST['eid']);

    else
        $p->Register();
    //header("location:Employee_Registered.php")   ;
}
?>
    <html xmlns="http://www.w3.org/1999/html">
<h1>Employee Registration</h1>
<form method="POST" action="#" class="form-horizontal" >
    <?php
    if (isset($_GET['Employee_ID'])){
        $id=$ne->Employee_ID;
        echo "<input type='hidden' class='eid' name='eid' value='$id'>";
    }
    ?>


    <div class="form-group">

        <label class="control-label col-sm-4" > Last Name</label>
        <div class="col-sm-10">
            <input type="text"  value="<?=$ne->Employee_Last_Name ?>"  name="Employee_Last_Name" required class="form-control" id="emlname" >
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" > First Name</label>
        <div class="col-sm-10">
            <input type="text"  value="<?=$ne->Employee_First_Name ?>" name="Employee_First_Name" required class="form-control" id="emfname" >
        </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-4" > Date Of Birth</label>
        <div class="col-sm-10">
            <input type="date" required name="Employee_DOB" class="form-control" id="DOB">
            <p id="demo"></p>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" > NIC</label>
        <div class="col-sm-10">
            <input type="text" required name="Employee_NIC" class="form-control" id="NIC" placeholder="Ex:960456546v">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" > Address</label>
        <div class="col-sm-10">
            <input type="text" required name="Employee_Address" class="form-control" id="Address" placeholder="Ex:10/2/g,peradeniya">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" >Contact Number</label>
        <div class="col-sm-10">
            <input type="text" required name="Employee_Contact_Number" class="form-control" id="contact" placeholder="Ex:77285799">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" >Hire Date</label>
        <div class="col-sm-10">
            <input type="date" required name="Employee_Hire_Date" class="form-control" id="hire" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" >Job Role</label>
        <div class="col-sm-10">
            <select  name="Employee_Job_Role" required class="form-control" id="Job">
                <?php

                include"jobrole.php";
                $c=new jobrole();
                $all=$c->Getall();

                foreach ($all as $item)
                {
                    echo"<option value='$item->Job_ID'> $item->Job_Name</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" >Email</label>
        <div class="col-sm-10">
            <input type="email" required name="Employee_Email" class="form-control" id="hire" placeholder="Ex:asd@gmail.com">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" >Username</label>
        <div class="col-sm-10">
            <input type="text" required name="Employee_Username" class="form-control" id="Username">

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" >Password</label>
        <div class="col-sm-10">
            <input type="password" required name="Employee_Password" class="form-control" id="pw" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" >Privilege</label>
        <div class="col-sm-10">
            <select name="Employee_Privilege" required id="select" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Employee">Employee</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

            <p id="demo"></p>
            <?php
            $bname="register";
            if (isset($_GET['Employee_ID']))
                $bname="update";


            ?>
            <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                <span class="text"><?=$bname?></span>
            </button>



        </div>
    </div>

    <button type="button" onclick="myFunction()">Sudd</button>

</form>




            <script>
                function myFunction() {
                    var x, text;

                    // Get the value of the input field with id="numb"
                    x = document.getElementById("DOB").value;

                    // If x is Not a Number or less than one or greater than 10
                    if (isNaN(x) || x < 1 || x > 10) {
                        text = "Invalid DOB ";

                    } else {
                        text = "NIC does match the correct format";
                    }
                    document.getElementById("demo").innerHTML = text;
                }
            </script>












<?php
include "footer.php";
?>