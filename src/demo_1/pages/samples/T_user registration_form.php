<?php
include "client.php";

$client1 = new client();

if(isset($_POST["c_name"])) {

    $client1->c_name=$_POST["c_name"];
    $client1->c_user_name=$_POST["c_user_name"];
    $client1->c_password=$_POST["c_password"];
    $client1->c_address=$_POST["c_address"];
    $client1->c_email=$_POST["c_email"];
    $client1->c_phone_num=$_POST["c_phone_num"];
    $client1->c_organization=$_POST["organization"];

    $client1->reg();

     header("location:T_login_form.php");
}

//include "header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>User registration form</title>
    <meta charset="UTF-8">
    <meta name="description" content="loans HTML Template">
    <meta name="keywords" content="loans, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


<!-- Hero Section end -->
<section class="hero-section">
    <div class="container">
        <div class="row" >
            <div class="col-lg-6">
                <form class="hero-form" action="T_user%20registration_form.php" method="post">
                    <h3 style="color: greenyellow; margin-top: 20px;margin-bottom: 30px"> Register Here</h3>
                    <input type="text" placeholder="Name" required name="c_name">
                    <input type="text" placeholder="Organization " required name="organization">
                    <input type="text" placeholder="User Name" required name="c_user_name">
                    <input type="password" placeholder="Create Password" required name="c_password">
                    <input type="email" placeholder="Your E-mail" required name="c_email">
                    <input type="text" pattern="[0-9]{10}" placeholder="Your Phone" required name="c_phone_num">
                    <input type="text" placeholder="Your Address" required name="c_address">

                    <button class="site-btn">Register</button>

                    <button class="site-btn"><a href="T_home_page.php">Back To Home</button>
                </form>
            </div>

        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
    </div>
</section>
<!-- Hero Section end -->






<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

</html>