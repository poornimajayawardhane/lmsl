<?php
class plant{

    public $p_id;
    public $p_name;
    public $p_desc;
    public $p_production;
    public $p_machine;
    public $p_status;
    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }




    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from plant where s_status!='del'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $pl3=new plant();
            $pl3->p_id=$row["p_id"];
            $pl3->p_name=$row["p_name"];
            $pl3->p_desc=$row["p_desc"];
            $pl3->p_production=$row["p_production"];
            $pl3->p_machine=$row["p_machine"];
            $pl3->p_status=$row["p_status"];


            $ar[]=$pl3;
        }
        return $ar;

    }

    function get_all_week($pl){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="SELECT CONCAT(YEAR(s_date),'/',WEEK(s_date)) week,sum(s_con)/7 ctot,sum(s_feed)/7 ftot,sum(s_tailing)/7 ttot,sum(s_recovery)/7 rtot,s_id FROM sample WHERE s_date and s_plant='$pl' GROUP BY CONCAT(YEAR(s_date),'/',WEEK(s_date))";        echo $sql;

        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sam4=new sample();
            $sam4->s_con=$row["ctot"];
            $sam4->s_feed=$row["ftot"];
            $sam4->s_tailing=$row["ttot"];
            $sam4->s_recovery=$row["rtot"];
            $sam4->s_date=$row["week"];
            $sam4->s_id=$row["s_id"];

            $ar[]=$sam4;
        }
        return $ar;

    }

    function get_all_daily(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="SELECT CONCAT(YEAR(s_date),'/',day(s_date)) daily FROM sample WHERE s_date and s_plant='plant_a' GROUP BY CONCAT(YEAR(s_date),'/',day (s_date))";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sam6=new sample();
            $sam6->s_con=$row["tot"];
            $sam6->s_date=$row["daily"];
            $sam6->s_id=$row["s_id"];

            $ar[]=$sam6;
        }
        return $ar;

    }


    function remove($t_id){
        $sql="update sample set s_status= 'del' where s_id=$s_id";
        echo "$sql";
        $this->con->query($sql);

    }

    function get_by_id($t_id){

        $sql="select * from sample where s_id = '$s_id'";
        $r=$this->con->query($sql);
        echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->s_id=$row["s_id"];
            $this->s_plant=$row["s_plant"];
            $this->s_date=$row["s_date"];
            $this->s_con=$row["s_con"];
            $this->s_feed=$row["s_feed"];
            $this->s_tailing=$row["s_tailing"];
            $this->s_recovery=$row["s_recovery"];
            $this->s_status=$row["s_status"];


            return $this;
        }
        else
            return null;


    }
    function update($plant_id){
        $sql  = "update target set plant_name='$this->plant_name',plant_production='$this->plant_production' where plant_id=$plant_id";
        $this->con->query($sql);

        echo $sql;
    }


}
?>