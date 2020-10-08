<?php
include "Controller.php";
class daily_mining{

    public $dm_id;
    public $dm_desc;
    public $dm_date;
    public $dm_target;
    public $dm_con;
    public $dm_status;
    public $dm_employee;
    public $tot;

    private $con;

    function __construct()
    {
        $this->con=new mysqli(host,user_name,password,db_name);
    }

    public function reg(){

        $this->dm_employee= $_SESSION["e_reg_id"];
        $sql= "insert into daily_mining(dm_desc,dm_con,dm_employee)values ('$this->dm_desc','$this->dm_con','$this->dm_employee')";
        //echo $sql;
        $this->con->query($sql);
    }



    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="SELECT *,((dm_con)-coalesce (sum(i_quan),0))tot FROM issue_item RIGHT JOIN daily_mining ON daily_mining.dm_id = issue_item.dm_id GROUP BY daily_mining.dm_id having tot >0 ";
        //echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $dmin3=new daily_mining();
            $dmin3->dm_id=$row["dm_id"];
            $dmin3->dm_desc=$row["dm_desc"];
            $dmin3->dm_date=$row["dm_date"];
            $dmin3->dm_con=$row["dm_con"];
            $dmin3->dm_employee=$row["dm_employee"];
            $dmin3->tot=$row["tot"];



            $ar[]=$dmin3;
        }
        return $ar;


    }

    function remove($t_id){
        $sql="update daily_mining set dm_status= 'del' where dm_id=$dm_id";
        //echo "$sql";
        $this->con->query($sql);

    }

    function get_by_id($t_id){

        $sql="select * from daily_mining where dm_id = '$dm_id'";
        $r=$this->con->query($sql);
        //echo $sql;
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

    function get_by_time(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from daily_mining where year (dm_date)=$this->dm_year AND month (dm_date)=$this->dm_month order by dm_id ";
        $res= $con->query($sql);
        $ar =array();
        //echo $sql;

        while($row=$res->fetch_array()){
            $dmin3=new daily_mining();
            $dmin3->dm_id=$row["dm_id"];
            $dmin3->dm_date=$row["dm_date"];
            $dmin3->dm_con=$row["dm_con"];



            $ar[]=$dmin3;
        }
        return $ar;
    }

    function update($plant_id){
        $sql  = "update daily_mining set plant_name='$this->plant_name',plant_production='$this->plant_production' where plant_id=$plant_id";
        $this->con->query($sql);

        //echo $sql;
    }


}
?>