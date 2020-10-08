<?php
class sample{

    public $s_id;
    public $s_plant;
    public $s_type;
    public $s_date;
    public $s_con;
    public $s_feed;
    public $s_tailing;
    public $s_recovery;
    public $s_status;
    public $s_employee;
    public $lot_id;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){

        if ($this->s_recovery >= 92) {
             $a = "Approved";

        }
        else
            $a = "Rejected";

        $sql= "insert into sample(s_con,s_feed,s_tailing,s_recovery,s_status,lot_id,s_employee)values ('$this->s_con','$this->s_feed','$this->s_tailing','$this->s_recovery','$a','$this->lot_id','$this->s_employee')";
        $sql1="update input_lot SET lot_phase='ready' where lot_id='$this->lot_id '";
        $sql2="update input_lot SET lab_status='del' where lot_id='$this->lot_id '";


        //echo $sql;
        //echo $sql1;
        $this->con->query($sql);
        $this->con->query($sql1);
        $this->con->query($sql2);

    }






    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from sample where s_status!='del' order by s_id desc limit 10";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sam3=new sample();
            $sam3->s_id=$row["s_id"];
            $sam3->s_date=$row["s_date"];
            $sam3->s_date=$row["s_date"];
            $sam3->s_con=$row["s_con"];
            $sam3->s_feed=$row["s_feed"];
            $sam3->s_tailing=$row["s_tailing"];
            $sam3->s_recovery=$row["s_recovery"];



            $ar[]=$sam3;
        }
        return $ar;

    }
    function get(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from sample where s_status!='del' order by s_id desc limit 10";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sam5=new sample();
            $sam5->lot_id=$row["lot_id"];
            $sam5->s_recovery=$row["s_recovery"];



            $ar[]=$sam5;
        }
        return $ar;

    }

    function get_new_recovery(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from sample WHERE s_recovery>='$this->s_recovery' ";
        //echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sam4=new sample();
            $sam4->lot_id=$row["lot_id"];
            $sam4->s_recovery=$row["s_recovery"];


            $ar[]=$sam4;
        }
        return $ar;

    }



    function get_by_id($sid){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from sample where s_id='$sid'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sam4=new sample();
            $sam4->s_id=$row["s_id"];
            $sam4->s_status=$row["s_status"];

            $ar[]=$sam4;
        }
        return $ar;

    }

    function get_by_time(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from sample where year (s_date)=$this->s_year AND month (s_date)=$this->s_month or day (s_date)=$this->s_day";
        //echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $sample3=new sample();
            $sample3->s_date=$row["s_date"];
            $sample3->s_con=$row["s_con"];
            $sample3->s_feed=$row["s_feed"];
            $sample3->s_tailing=$row["s_tailing"];
            $sample3->s_recovery=$row["s_recovery"];



            $ar[]=$sample3;
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





}
?>