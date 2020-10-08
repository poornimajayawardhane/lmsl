<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include "PHPMailer.php";
include "SMTP.php";
include "Exception.php";
include "OAuth.php";
include "POP3.php";
class client{

    public $c_name;
    public $c_user_name;
    public $c_address;
    public $c_phone_num;
    public $c_email;
    public $c_reg_id;
    public $c_password;
    public $c_organization;

    private $con;

    function __construct()
    {
        $this->con=new mysqli("localhost","root","","pms");
    }

    public function reg(){

        $sql= "insert into client(c_name,c_user_name,c_address,c_phone_num,c_email,c_reg_id,c_password,c_organization)values ('$this->c_name','$this->c_user_name','$this->c_address','$this->c_phone_num','$this->c_email','$this->c_reg_id',md5('$this->c_password'),'$this->c_organization')";
        //echo $sql;
        $this->con->query($sql);
    }

    function get_all(){
        $con=new Mysqli(
            "localhost","root","","pms");
        $sql="select * from client where c_status='active'";
        $res= $this->con->query($sql);
        $ar =array();

        //echo $sql;
        while($row=$res->fetch_array()){
            $client3=new client();
            $client3->c_name=$row["c_name"];
            $client3->c_user_name=$row["c_user_name"];
            $client3->c_email=$row["c_email"];
            $client3->c_phone_num=$row["c_phone_num"];
            $client3->c_address=$row["c_address"];
            $client3->c_reg_id=$row["c_reg_id"];
            $client3->c_organization=$row["c_organization"];

            $ar[]=$client3;
        }
        return $ar;

    }


    function remove($c_reg_id)
    {
        $sql = "update client set c_status= 'del' where c_reg_id=$c_reg_id";
        // echo "sql";
        $this->con->query($sql);

        $sql="select c_email from client where c_reg_id=$c_reg_id";
        $res= $this->con->query($sql);
        $row=$res->fetch_array();


        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'pms4lmsl@gmail.com';
        $mail->Password = 'link0pink';
        $mail->SMTPAuth = true;

        $mail->From = 'pms4lmsl@gmail.com';
        $mail->FromName = 'PMS';
        $mail->AddAddress($row['c_email']);
        $mail->AddReplyTo('pms4lmsl@gmail.com', 'Information');

        $mail->IsHTML(true);
        $mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
        $mail->Body    = "Registration Failed. you Can not place Bid. Sorry. ";

    }

    function approve($c_reg_id)
    {
        $sql = "update client set c_status= 'approve' where c_reg_id=$c_reg_id";
        // echo "sql";
        $this->con->query($sql);

        $sql="select c_email from client where c_reg_id=$c_reg_id";
        $res= $this->con->query($sql);
        $row=$res->fetch_array();


        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'pms4lmsl@gmail.com';
        $mail->Password = 'link0pink';
        $mail->SMTPAuth = true;

        $mail->From = 'pms4lmsl@gmail.com';
        $mail->FromName = 'PMS';
        $mail->AddAddress($row['c_email']);
        $mail->AddReplyTo('pms4lmsl@gmail.com', 'Information');

        $mail->IsHTML(true);
        $mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
        $mail->Body    = "Registered sussessfully. You Can Plave A bid";

        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Message sent!";
        }




    }

    function login($c_user_name,$c_password)
    {
        $sql = "select * from client where c_user_name='$c_user_name' and c_password='$c_password' and c_status='approve'";
        echo $sql;
        $res = $this->con->query($sql);
        if ($res->num_rows == 1) {
            $row = $res->fetch_array();

            $_SESSION["c_reg_id"] = $row["c_reg_id"];
            $_SESSION["ct"] = $row["c_status"];
            $_SESSION["cname"]=$row["c_organization"];

            return true;
        } else {
            return false;
        }
    }


}
?>