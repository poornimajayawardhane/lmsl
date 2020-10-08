<?php
class input_lot{

    public $lot_ref_id;
    public $lot_tot;
    public $lot_id;
    public $lot_date;
    public $p_id;
    public $lot_emp;
    public $lot_phase;
    public $lot_status;
    public $p2_quan;
    public $input_quantity;
    public $confirm_status;
    public $remaining;


    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){

        $this->lot_emp= $_SESSION["e_reg_id"];
        $sql= "insert into input_lot(lot_ref_id,p_id,lot_emp,input_quantity)values ('$this->lot_ref_id',1,'$this->lot_emp','$this->input_quantity')";
        $sql1="update input_lot set confirm_status= 'Confirm' where lot_ref_id=$this->lot_ref_id";
        //echo $sql;
        //echo $sql1;
        $this->con->query($sql);
        $this->con->query($sql1);
    }

    public function phase2(){

        $this->lot_emp= $_SESSION["e_reg_id"];
        $p_idnew=$this->p_id+1;
        $sql= "insert into input_lot(p_id,input_quantity,lot_emp)values ($p_idnew,$this->remaining,lot_emp)" ;
        $sql1="update process set r_quan= $this->remaining where p_lot_id=$this->lot_ref_id";
        echo $sql1;
        $this->con->query($sql);
        $this->con->query($sql1);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from input_lot where lab_status!='del'&& p_id<='4'   order by lot_id desc limit 10 ";
        //echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $lot3=new input_lot();
            $lot3->lot_id=$row["lot_id"];
            $lot3->lot_ref_id=$row["lot_ref_id"];
            $lot3->lot_date=$row["lot_date"];
            $lot3->lot_emp=$row["lot_emp"];
            $lot3->lot_phase=$row["lot_phase"];
            $lot3->p_id=$row["p_id"];
            $lot3->lot_ref_id=$row["lot_ref_id"];


            $ar[]=$lot3;
        }
        return $ar;

    }

    function get_ready(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from input_lot where lot_phase='ready' && process_status='pending' && input_quantity!='0'&& p_id<='4'";
       // echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $lot5=new input_lot();
            $lot5->lot_id=$row["lot_id"];
            $lot5->lot_date=$row["lot_date"];
            $lot5->lot_emp=$row["lot_emp"];
            $lot5->lot_phase=$row["lot_phase"];
            $lot5->p_id=$row["p_id"];
            $lot5->lot_tot=$row["p_id"];
            $lot5->input_quantity=$row["input_quantity"];


            $ar[]=$lot5;
        }
        return $ar;

    }

    function get_pending(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from input_lot where lot_phase='pending'";
        echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $lot6=new input_lot();
            $lot6->lot_id=$row["lot_id"];
            $lot6->lot_date=$row["lot_date"];
            $lot6->lot_emp=$row["lot_emp"];
            $lot6->lot_tot=$row["lot_tot"];
            $lot6->lot_phase=$row["lot_phase"];
            $lot6->p_id=$row["p_id"];


            $ar[]=$lot6;
        }
        return $ar;

    }





    function sample_status($lot_id){
        include "sample.php";
        $samplestat=new sample();
        $sql="update input_lot set lot_status= 's_status' where lot_id=$lot_id";
       // echo "$sql";
        $this->con->query($sql);

    }


    function get_by_id($lot_ref_id){

        $sql="select * from input_lot where lot_ref_id = '$lot_ref_id'";
        $r=$this->con->query($sql);
        echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->i_id=$row["i_id"];
            $this->i_desc=$row["i_desc"];
            $this->i_con=$row["i_con"];
            $this->i_date=$row["i_date"];
            $this->i_status=$row["i_status"];


            return $this;
        }
        else
            return null;

    }


    function approve($lot_id)
    {
        $sql = "update  set confirm_status= 'approve' where lot_id=$lot_id";
        // echo "sql";
        $this->con->query($sql);

    }
    function process($lot_id)
    {
        $sql = "update input_lot set process_status= 'done' where lot_id=$lot_id";
        echo $sql;
        $this->con->query($sql);

    }


}
?>