<?php
class production{

    public $pr_id;
    public $pr_type;
    public $pr_quan;
    public $pr_date;
    public $pr_desc;
    public $pr_emp;
    public $p_lot_id;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg_row(){
        session_start();
        $this->pr_emp= $_SESSION["e_reg_id"];
        $sql= "insert into production(t_desc,t_type,pr_emp)values ('$this->t_desc','$this->t_type','$this->pr_emp')";
        //echo $sql;
        $this->con->query($sql);
    }

    function get_ilmenite(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from production where pr_type='ilmenite'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $pro3=new production();
            $pro3->pr_id=$row["pr_id"];
            $pro3->pr_quan=$row["pr_quan"];

            $ar[]=$pro3;
        }
        return $ar;

    }



    function remove($t_id){
        $sql="update target set t_status= 'del' where t_id=$t_id";
        echo "$sql";
        $this->con->query($sql);

    }

    function get_by_time(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from production where year (pr_date)=$this->pr_year AND month (pr_date)=$this->pr_month and pr_type='$this->pr_type' order by pr_id ";
        $res= $con->query($sql);
        $ar =array();
        //echo $sql;

        while($row=$res->fetch_array()){
            $production3=new production();
            $production3->pr_id=$row["pr_id"];
            $production3->pr_date=$row["pr_date"];
            $production3->pr_quan=$row["pr_quan"];



            $ar[]=$production3;
        }
        return $ar;
    }
    function update($plant_id){
        $sql  = "update target set plant_name='$this->plant_name',plant_production='$this->plant_production' where plant_id=$plant_id";
        $this->con->query($sql);

        echo $sql;
    }


}
?>