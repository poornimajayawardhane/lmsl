<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
include "PHPMailer.php";
include "SMTP.php";
include "Exception.php";
include "OAuth.php";
include "POP3.php";

// Instantiation and passing `true` enables exceptions
function email($em){
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
    $mail->AddAddress($em);
    $mail->AddReplyTo('pms4lmsl@gmail.com', 'Information');

    $mail->IsHTML(true);
    $mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail->Body    = "Hello";

    if(!$mail->Send())
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
        echo "Message sent!";
    }
}
?>