<?php
class mining_target{

    public $mt_id;
    public $mt_year;
    public $mt_jan;
    public $mt_feb;
    public $mt_mar;
    public $mt_apr;
    public $mt_may;
    public $mt_jun;
    public $mt_jul;
    public $mt_aug;
    public $mt_sep;
    public $mt_oct;
    public $mt_nov;
    public $mt_dec;
    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){
        $sql= "insert into mining_target(mt_jan,mt_feb,mt_mar,mt_apr,mt_may,mt_jun,mt_jul,mt_aug,mt_sep,mt_oct,mt_nov,mt_dec,mt_year)values ('$this->mt_jan','$this->mt_feb','$this->mt_mar','$this->mt_apr','$this->mt_may','$this->mt_jun','$this->mt_jul','$this->mt_aug','$this->mt_sep','$this->mt_oct','$this->mt_nov','$this->mt_dec','$this->mt_year')";
       // echo $sql;

        $this->con->query($sql);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from mining_target";
        //echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $tar3=new mining_target();
            $tar3->mt_id=$row["mt_id"];
            $tar3->mt_year=$row["mt_year"];
            $tar3->mt_jan=$row["mt_jan"];
            $tar3->mt_feb=$row["mt_feb"];
            $tar3->mt_mar=$row["mt_mar"];
            $tar3->mt_apr=$row["mt_apr"];
            $tar3->mt_may=$row["mt_may"];
            $tar3->mt_jun=$row["mt_jun"];
            $tar3->mt_jul=$row["mt_jul"];
            $tar3->mt_aug=$row["mt_aug"];
            $tar3->mt_sep=$row["mt_sep"];
            $tar3->mt_oct=$row["mt_oct"];
            $tar3->mt_nov=$row["mt_nov"];
            $tar3->mt_dec=$row["mt_dec"];


            $ar[]=$tar3;
        }
        return $ar;

    }
    function get_by_time($mt_year,$mt_month){

        $sql="select * from mining_target where mt_year='$mt_year'";
        $r=$this->con->query($sql);
        //echo $sql;

        if($r->num_rows==1){
            $row=$r->fetch_array();

            $x=$row["$mt_month"];


            return $x;
        }



    }


    function get_by_id($mt_year){

        $sql="select * from mining_target where mt_year = '$mt_year'";
        $r=$this->con->query($sql);
        //echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();

            $this->mt_id=$row["mt_id"];
            $this->mt_year=$row["mt_year"];
            $this->mt_jan=$row["mt_jan"];
            $this->mt_feb=$row["mt_feb"];
            $this->mt_mar=$row["mt_mar"];
            $this->mt_apr=$row["mt_apr"];
            $this->mt_may=$row["mt_may"];
            $this->mt_jun=$row["mt_jun"];
            $this->mt_jul=$row["mt_jul"];
            $this->mt_aug=$row["mt_aug"];
            $this->mt_sep=$row["mt_sep"];
            $this->mt_oct=$row["mt_oct"];
            $this->mt_nov=$row["mt_nov"];
            $this->mt_dec=$row["mt_dec"];


            return $this;
        }
        else
            return null;


    }

}
?>