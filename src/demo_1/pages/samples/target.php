<?php
class target{

    public $t_id;
    public $t_desc;
    public $t_date;
    public $t_type;
    public $t_employee;
    public $t_status;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){

        $this->t_employee= $_SESSION["e_reg_id"];
        $sql= "insert into target(t_desc,t_type,t_employee)values ('$this->t_desc','$this->t_type','$this->t_employee')";
        //echo $sql;
        $this->con->query($sql);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from target where t_status!='del'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $tar3=new target();
            $tar3->t_id=$row["t_id"];
            $tar3->t_desc=$row["t_desc"];
            $tar3->t_date=$row["t_date"];
            $tar3->t_type=$row["t_type"];
            $tar3->t_status=$row["t_status"];



            $ar[]=$tar3;
        }
        return $ar;

    }

    function remove($t_id){
        $sql="update target set t_status= 'del' where t_id=$t_id";
        //echo "$sql";
        $this->con->query($sql);

    }

    function get_by_id($t_id){

        $sql="select * from target where t_id = '$t_id'";
        $r=$this->con->query($sql);
        //echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->t_id=$row["t_id"];
            $this->t_date=$row["t_date"];
            $this->t_desc=$row["t_desc"];
            $this->t_type=$row["t_type"];



            return $this;
        }
        else
            return null;


    }
    function difference()
    {
        $sql="select Project_Estimated_cost from project where Project_ID=$this->Project_ID";
        $es=$this->Database->query($sql);

        $sql2="select Project_Actual_cost from project where Project_ID=$this->Project_ID";
        $ac=$this->Database->query($sql2);

        $Cost_Difference=$es-$ac;
        return $Cost_Difference;
    }


}
?>