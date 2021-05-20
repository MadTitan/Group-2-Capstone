<?php 
if(isset($_POST['cart'])){
    include('cart.php');
}

function comp(){
    $_SESSION['amt'] =0;
    if(isset($_SESSION['list'])){
 
        foreach ($_SESSION['list'] as $key => $value) {
            $_SESSION['amt'] = $_SESSION['amt'] + ($value['prod_sprice'] * $value['qty']);
        }
    }

}
comp();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SPCC | Inventory and Reservation</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="shortcut icon" type="image/x-icon" href="icon/favicon.ico">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/download.png" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="about.php">About</a> </li>
                                        <li><a href="brand.php">Products</a></li>
                                        <li><a href="special.php">Specials</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>

                                        <?php

                                            if(isset($_SESSION['user_access'])){
                                         ?>
                                         <li><a href="../logout.php">Logout</a></li>
                                         <li>
                                            <form method="post"> 
                                                <button name='cart' class="btn btn-sm">Cart</button>
                                            </form>
                                         </li>
                                         <?php 
                                            }else{
                                        ?>
                                        <li><a href="../login.php">Login</a></li>

                                        <?php

                                            }
                                         ?>
                                        <li class="last">
                                        
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
        <!-- end header inner -->
    </header>
    <!-- end header -->