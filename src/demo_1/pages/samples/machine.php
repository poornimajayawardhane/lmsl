<?php
include "Controller.php";
class machine
{

    public $m_name;
    public $m_plant;
    public $m_serial_number;
    public $m_model_number;
    public $m_note;
    public $m_service_frequency;
    public $m_maximum_capacity;
    public $m_emp;

    private $con;

    function __construct()
    {
        $this->con=new mysqli(host,user_name,password,db_name);
    }

    public function reg()
    {
        session_start();
        $this->m_emp= $_SESSION["e_reg_id"];
        $sql = "insert into machine(m_name,m_plant,m_serial_num,m_model_num,m_note,m_service,m_maximum_capacity,m_emp)values ('$this->m_name','$this->m_plant','$this->m_serial_number','$this->m_model_number','$this->m_note','$this->m_service_frequency','$this->m_maximum_capacity','$this->m_emp')";
        echo $sql;
        $this->con->query($sql);
    }

    function get_all()
    {
        $con = new Mysqli(
            "localhost", "root", "", "lmsl");
        $sql = "select * from employee where e_status!='del'";
        $res = $this->con->query($sql);
        $ar = array();

        //echo $sql;
        while ($row = $res->fetch_array()) {
            $emp3 = new employee();
            $emp3->e_name = $row["e_name"];
            $emp3->e_nid = $row["e_nid"];
            $emp3->e_user_name = $row["e_user_name"];
            $emp3->e_status = $row["e_status"];
            $emp3->e_dob = $row["e_dob"];
            $emp3->e_gender = $row["e_gender"];
            $emp3->e_type = $row["e_type"];
            $emp3->e_phone_no = $row["e_phone_no"];
            $emp3->e_email = $row["e_email"];
            $emp3->e_reg_id = $row["e_reg_id"];
            $emp3->e_password = $row["e_password"];


            $ar[] = $emp3;
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

    function get_by_id($e_nid)
    {

        $sql = "select * from employee where e_nid= 'e_nid'";
        $r = $this->con->query($sql);
        //echo $sql;
        if ($r->num_rows == 1) {
            $row = $r->fetch_array();
            $this->e_name = $row["e_name"];
            $this->e_nid = $row["e_nid"];
            $this->e_user_name = $row["e_user_name"];
            $this->e_status = $row["e_status"];
            $this->e_action = $row["e_action"];
            $this->e_dob = $row["e_dob"];
            $this->e_gender = $row["e_gender"];
            $this->e_type = $row["e_type"];
            $this->e_phone_no = $row["e_phone_no"];
            $this->e_email = $row["e_email"];
            $this->e_reg_id = $row["e_reg_id"];
            $this->e_password = $row["e_password"];

            return $this;
        } else
            return null;

    }

    function update($e_name)
    {
        $sql = "update employee set e_name='$this->e_name',e_nid='$this->e_nid',e_user_name='$this->e_user_name',e_status='$this->e_status',e_action='$this->e_action',e_dob='$this->e_dob',e_gender='$this->e_gender',e_type='$this->e_type',e_phone_no='$this->e_phone_no',e_email='$this->e_email',e_password='$this->e_password', where e_name=$e_name";
        $this->con->query($sql);

        echo $sql;
    }

    function login($e_user_name, $e_password)
    {
        $sql = "select * from employee where e_user_name='$e_user_name' and e_password='$e_password'";
        echo $sql;
        $res = $this->con->query($sql);
        if ($res->num_rows == 1) {
            $row = $res->fetch_array();

            $_SESSION["e_reg_id"] = $row["e_reg_id"];
            $_SESSION["ut"] = $row["e_type"];
            return $row["e_type"];;
        } else {
            return "fail";
        }


    }
}
?>