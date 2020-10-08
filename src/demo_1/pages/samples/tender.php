<?php
include "Controller.php";
class tender
{

    public $t_production;
    public $t_quantity;
    public $t_bid_security;
    public $t_package;
    public $t_opening_date;
    public $t_closing_date;
    public $t_pub_emp;
    public $t_ref_num;
    public $t_status;
    public $t_note;
    public $t_unit_price;

    private $con;

    function __construct()
    {
        $this->con=new mysqli(host,user_name,password,db_name);
    }

    public function reg()
    {
        //session_start();
        $this->t_emp= $_SESSION["e_reg_id"];
        $sql = "insert into tender(t_production,t_con,t_min_value,t_package,t_start_date,t_end_date,t_pub_emp,t_desc)values ('$this->t_production','$this->t_quantity','$this->t_bid_security','$this->t_package','$this->t_opening_date','$this->t_closing_date','$this->t_pub_emp','$this->t_note')";
        //echo $sql;
        $this->con->query($sql);
    }

    public function bid()
    {
        $sql = "insert into tender(t_production,t_con,t_min_value,t_package,t_start_date,t_end_date,t_pub_emp,t_desc)values ('$this->t_production','$this->t_quantity','$this->t_bid_security','$this->t_package','$this->t_opening_date','$this->t_closing_date','$this->t_pub_emp','$this->t_note')";
        //echo $sql;
        $this->con->query($sql);
    }

    function get_all()
    {
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql = "select * from tender where t_status!='del' && t_end_date >curdate() ";
        $res = $con->query($sql);
        $ar = array();

        //echo $sql;
        while ($row = $res->fetch_array()) {
            $ten3 = new tender();
            $ten3->t_ref_num = $row["t_ref_num"];
            $ten3->t_production = $row["t_production"];
            $ten3->t_quantity= $row["t_con"];
            $ten3->t_package = $row["t_package"];
            $ten3->t_bid_security = $row["t_min_value"];
            $ten3->t_opening_date = $row["t_start_date"];
            $ten3->t_closing_date = $row["t_end_date"];

            $ar[] = $ten3;
        }
        return $ar;

    }

    function remove($e_name)
    {
        $sql = "update employee set e_status= 'del' where e_nid=$e_name";
        // echo "sql";
        $this->con->query($sql);


        echo "done";
    }






}
?>