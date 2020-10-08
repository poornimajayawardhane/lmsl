<?php
class output_lot{

    public $o_id;
    public $o_desc;
    public $o_date;
    public $o_con;
    public $o_status;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","lmsl");
    }

    public function reg(){
        $sql= "insert into output_lot(o_desc,o_con)values ('$this->o_desc','$this->o_con')";
        echo $sql;
        $this->con->query($sql);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","lmsl");
        $sql="select * from output_lot where o_status!='del'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $out3=new output_lot();
            $out3->o_id=$row["o_id"];
            $out3->o_desc=$row["o_desc"];
            $out3->o_date=$row["o_date"];
            $out3->o_con=$row["o_con"];
            $out3->o_status=$row["o_status"];

            $ar[]=$out3;
        }
        return $ar;

    }

    function remove($o_id){
        $sql="update output_lot set o_status= 'del' where o_id=$o_id";
        echo "$sql";
        $this->con->query($sql);

    }

    function get_by_id($o_id){

        $sql="select * from outpuy_lot where o_id = '$o_id'";
        $r=$this->con->query($sql);
        echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->o_id=$row["o_id"];
            $this->o_desc=$row["o_desc"];
            $this->o_con=$row["o_con"];
            $this->o_date=$row["o_date"];
            $this->o_status=$row["o_status"];


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