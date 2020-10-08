<?php
class issue{

    public $i_id;
    public $i_quan;
    public $i_issue;
    public $i_note;
    public $i_emp;
    public $i_date;
    public $i_tot;
    public $dm_id;
    public $p_id;
    public $i_lt;
    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }



    function add(){

    $sql = "insert into issue(i_note,i_tot,p_id,i_emp) value('$this->i_note','$this->i_tot',1,'$this->i_emp')";
    $this->con->query($sql);
    $i_id=$this->con->insert_id;


    $c=0;
    foreach ($this->dm_id as $item) {
        $sql = "insert into issue_item(i_quan,i_id,dm_id) values(".$this->i_issue[$c].", $i_id,$item)";
        $this->con->query($sql);
       // echo $sql;
        $c++;

    }
       $sql = "insert into input_lot(lot_tot,lot_phase,lot_ref_id,lot_status,lot_emp) value('$this->i_tot',1,$i_id,'pending',1)";
       //echo $sql;
       $this->con->query($sql);
        $i_id=$this->con->insert_id;
    }



    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from daily_mining where dm_status!='del'";
       // echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $dmin3=new daily_mining();
            $dmin3->dm_id=$row["dm_id"];
            $dmin3->dm_desc=$row["dm_desc"];
            $dmin3->dm_date=$row["dm_date"];
            $dmin3->dm_con=$row["dm_con"];
            $dmin3->dm_employee=$row["dm_employee"];


            $ar[]=$dmin3;
        }
        return $ar;

    }

    function get_lot(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from issue where i_status ='pending'";
        // echo $sql;
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $issue3=new issue();
            $issue3->i_id=$row["i_id"];
            $issue3->i_date=$row["i_date"];
            $issue3->i_tot=$row["i_tot"];




            $ar[]=$issue3;
        }
        return $ar;

    }


    function get_by_id($t_id){

        $sql="select * from issue where lot = '$dm_id'";
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


    function approve($i_id)
    {
        $sql = "update issue set i_status= 'approve' where i_id=$i_id";
         echo "sql";
        $this->con->query($sql);


    }
    function remove($t_id){
        $sql="update issue set i_status= 'del' where i_id=$t_id";
        //echo "$sql";
        $this->con->query($sql);

    }



}
?>