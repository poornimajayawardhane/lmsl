<?php
class material{

    public $m_id;
    public $m_desc;
    public $m_category;
    public $m_type;
    public $m_min_con;
    public $m_max_con;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){
        $sql= "insert into material(m_category,m_type,m_min_con,m_max_con)values ('$this->m_category','$this->m_type','$this->m_min_con','$this->m_max_con')";
        echo $sql;
        $this->con->query($sql);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","lmsl");
        $sql="select * from material where m_status!='del'";
        $res= $con->query($sql);
        $ar =array();

        while($row=$res->fetch_array()){
            $mat3=new material();
            $mat3->m_id=$row["m_id"];
            $mat3->m_desc=$row["m_desc"];
            $mat3->m_category=$row["m_category"];
            $mat3->m_type=$row["m_type"];
            $mat3->m_min_con=$row["m_min_con"];
            $mat3->m_max_con=$row["m_max_con"];




            $ar[]=$mat3;
        }
        return $ar;

    }

    function remove($t_id){
        $sql="update material set m_status= 'del' where m_id=$m_id";
        echo "$sql";
        $this->con->query($sql);

    }

    function get_by_id($m_id){

        $sql="select * from material where m_id = '$m_id'";
        $r=$this->con->query($sql);
        echo $sql;
        if($r->num_rows==1){
            $row=$r->fetch_array();
            $this->m_id=$row["m_id"];
            $this->m_desc=$row["m_desc"];
            $this->m_category=$row["m_category"];
            $this->m_type=$row["m_type"];
            $this->m_min_con=$row["m_min_con"];
            $this->m_max_con=$row["m_max_con"];



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