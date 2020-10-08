<?php
class production_target{

    public $pt_id;
    public $pt_year;
    public $pt_jan;
    public $pt_feb;
    public $pt_mar;
    public $pt_apr;
    public $pt_may;
    public $pt_jun;
    public $pt_jul;
    public $pt_aug;
    public $pt_sep;
    public $pt_oct;
    public $pt_nov;
    public $pt_dec;
    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){
        $sql= "insert into production_target(pt_year,pt_jan,pt_feb,pt_mar,pt_apr,pt_may,pt_jun,pt_jul,pt_aug,pt_sep,pt_oct,pt_nov,pt_dec)values ('$this->pt_year','$this->pt_jan','$this->pt_feb','$this->pt_mar','$this->pt_apr','$this->pt_may','$this->pt_jun','$this->pt_jul','$this->pt_aug','$this->pt_sep','$this->pt_oct','$this->pt_nov','$this->pt_dec')";
        //echo $sql;
        $this->con->query($sql);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from production_target where pt_status!='del'";
        //echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $tar3=new production_target();
            $tar3->pt_id=$row["pt_id"];
            $tar3->pt_year=$row["pt_year"];
            $tar3->pt_jan=$row["pt_jan"];
            $tar3->pt_feb=$row["pt_feb"];
            $tar3->pt_mar=$row["pt_mar"];
            $tar3->pt_apr=$row["pt_apr"];
            $tar3->pt_may=$row["pt_may"];
            $tar3->pt_jun=$row["pt_jun"];
            $tar3->pt_jul=$row["pt_jul"];
            $tar3->pt_aug=$row["pt_aug"];
            $tar3->pt_sep=$row["pt_sep"];
            $tar3->pt_oct=$row["pt_oct"];
            $tar3->pt_nov=$row["pt_nov"];
            $tar3->pt_dec=$row["pt_dec"];


            $ar[]=$tar3;
        }
        return $ar;

    }
    function get_by_time($pt_year,$pt_month){

        $sql="select * from production_target where pt_year='$pt_year'";
        $r=$this->con->query($sql);
        //echo $sql;

        if($r->num_rows==1){
            $row=$r->fetch_array();

            $x=$row["$pt_month"];


            return $x;
        }



    }


    function get_by_id($pt_year){

        $sql="select * from production_target where pt_year = '$pt_year'";
        $r=$this->con->query($sql);
        //echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();

            $this->pt_id=$row["pt_id"];
            $this->pt_year=$row["pt_year"];
            $this->pt_jan=$row["pt_jan"];
            $this->pt_feb=$row["pt_feb"];
            $this->pt_mar=$row["pt_mar"];
            $this->pt_apr=$row["pt_apr"];
            $this->pt_may=$row["pt_may"];
            $this->pt_jun=$row["pt_jun"];
            $this->pt_jul=$row["pt_jul"];
            $this->pt_aug=$row["pt_aug"];
            $this->pt_sep=$row["pt_sep"];
            $this->pt_oct=$row["pt_oct"];
            $this->pt_nov=$row["pt_nov"];
            $this->pt_dec=$row["pt_dec"];


            return $this;
        }
        else
            return null;


    }

}
?>