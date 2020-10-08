<?php
class process{

    public $p_id;
    public $input_lot_id;
    public $p_date;
    public $p_stage;
    public $p_status;
    public $p_wastage;
    public $p_remaining;
    public $p_type;
    public $p_production;
    public $p_desc;
    public $p_emp;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function insert(){
        //session_start();
        $this->p_emp= $_SESSION["e_reg_id"];
        $sql= "insert into production(pr_quan,pr_type,pr_desc,pr_emp,p_lot_id,r_quan)values ('$this->p_production','$this->p_type','$this->p_desc','$this->p_emp','$this->p_id','$this->p_remaining')";
        //echo $sql;
        $this->con->query($sql);



        $sql2= "insert into wastage(w_lot_id,w_emp,w_quan)values ('$this->p_id','$this->p_emp','$this->p_wastage')";
        echo $sql2;
        $this->con->query($sql2);



    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from process where l_status!='del'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $lot3=new lot();
            $lot3->l_id=$row["l_id"];
            $lot3->l_quantity=$row["l_quantity"];
            $lot3->l_date=$row["l_date"];
            $lot3->l_status=$row["l_status"];


            $ar[]=$lot3;
        }
        return $ar;

    }

    function remove($t_id){
        $sql="update daily_mining set dm_status= 'del' where dm_id=$dm_id";
        echo "$sql";
        $this->con->query($sql);

    }

    function get_by_id($t_id){

        $sql="select * from daily_mining where dm_id = '$dm_id'";
        $r=$this->con->query($sql);
        echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->dm_id=$row["dm_id"];
            $this->dm_desc=$row["dm_desc"];
            $this->dm_target=$row["dm_target"];
            $this->dm_date=$row["dm_date"];
            $this->dm_con=$row["dm_con"];


            return $this;
        }
        else
            return null;


    }

    function get_by_time($t_id){

        $sql="select * from daily_mining where dm_date = '$dm_id'";
        $r=$this->con->query($sql);
        echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->dm_id=$row["dm_id"];
            $this->dm_desc=$row["dm_desc"];
            $this->dm_target=$row["dm_target"];
            $this->dm_date=$row["dm_date"];
            $this->dm_con=$row["dm_con"];


            return $this;
        }
        else
            return null;


    }

    function update($plant_id){
        $sql  = "update daily_mining set plant_name='$this->plant_name',plant_production='$this->plant_production' where plant_id=$plant_id";
        $this->con->query($sql);

        echo $sql;
    }


}
?>