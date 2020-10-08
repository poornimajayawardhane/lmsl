<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
include "PHPMailer.php";
include "SMTP.php";
include "Exception.php";
include "OAuth.php";
include "POP3.php";

include "Controller.php";
class bid
{

    public $b_ref_num;
    public $b_production;
    public $b_quantity;
    public $b_unit_price;
    public $b_note;
    public $b_organization;
    public $b_status;
    public $b_id;
    public $b_date;

    private $con;

    function __construct()
    {
        $this->con=new mysqli(host,user_name,password,db_name);
    }

    public function bid()
    {
        $this->b_organization= $_SESSION["cname"];

        $sql = "insert into bid(b_ref_num,b_production,b_quantity,b_unit_price,b_note,b_organization)values ('$this->b_ref_num','$this->b_production','$this->b_quantity','$this->b_unit_price','$this->b_note','$this->b_organization')";
        //echo $sql;
        $this->con->query($sql);
    }



    function get_all()
    {
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql = "select * from bid where b_status ='active'";
        $res = $con->query($sql);
        $ar = array();

        //echo $sql;
        while ($row = $res->fetch_array()) {
            $bid3 = new bid();
            $bid3->b_id = $row["b_id"];
            $bid3->b_ref_num = $row["b_ref_num"];
            $bid3->b_production= $row["b_production"];
            $bid3->b_quantity = $row["b_quantity"];
            $bid3->b_unit_price = $row["b_unit_price"];
            $bid3->b_note = $row["b_note"];
            $bid3->b_organization = $row["b_organization"];

            $ar[] = $bid3;
        }
        return $ar;

    }

    function remove($b_id)
    {
        $sql = "update bid set b_status= 'del' where b_id=$b_id";
        // echo "sql";
        $this->con->query($sql);

    }

    function approve($b_id)
    {
        $sql = "update bid set b_status= 'approve' where b_id=$b_id";
        // echo "sql";
        $this->con->query($sql);








    }





}
?>