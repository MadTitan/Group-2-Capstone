<?php 
session_start();
 if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_access'])){
           header('Location:../login.php');
}else{
    if($_SESSION['user_access'] != 2){
           header('Location:../login.php');
    }
}

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
    <title>SPCC Inventory and Reservation</title>
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
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
        <div class="loader"><img src="images/lowding.gif" alt="#" /></div>
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
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li><a href="brand.html">Products</a></li>
                                        <li><a href="special.html">Specials</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <?php
                                                if(isset($_SESSION['user_access'])){
                                        ?>
                                        <li><a href="../logout.php">Logout</a></li>
                                        <?php 
                                            }
                                        ?>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/spcc.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Inventory and Reservation</h1>
                            <span>System Plus Computer College</span>
                            <p>A leading and globally competitive institution of learning through service and innovation.
                                <br> Systems Plus Computer College is committed to provide liberal, quality, transformative, and relevant education towards the holistic development of all stakeholders through excellence in instruction, research and extension services.</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/2nd.jpg" alt="Second slide">
                  
                </div>
            
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-3 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/download.png" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>About Us</h3>
                        <span>June 1985</span>
                        <p>Systems Plus College Foundation was organized in Balibago, Angeles City on June 27, 1985. Its primary purpose was to conduct seminars for those who were planning to enter the electronic data processing field as programmer encoders or system analysts.Systems Plus started tutorial programs for student and professionals on July 7, 1985 (The School's Foundation Day) with just 10 enrollees. By the following year, the number of enrollees jumped to 86. </p>

                    </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/" alt="img" />
                            <h3>₱<strong class="dark">----</strong></h3>
                            <span>School Uniform (Male)</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/" alt="img" />
                            <h3>₱<strong class="blue">----</strong></h3>
                            <span>School Uniform (Female)</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/" alt="img" />
                            <h3>₱<strong class="red">----</strong></h3>
                            <span>P.E. Uniform</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="brand_box">
                            <img src="images/" alt="img" />
                            <h3>₱<strong class="red">----</strong></h3>
                            <span>Activity Shirt</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images/" alt="img" />
                            <h3>₱<strong class="red">----</strong></h3>
                            <span>Gym Bag</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images/" alt="img" />
                            <h3>₱<strong class="red">----</strong></h3>
                            <span>SPCC Lanyard</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Mission ,Vision and Philosophy of SPCC</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h1>VISION<br><strong class="ornage_color">----</strong></h1>
                                    <span>A leading and globally competitive institution of learning through service and innovation.</span>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h1>MISSION<br><strong class="ornage_color">----</strong></h1>
                                    <span>Systems Plus Computer College is committed to provide liberal, quality, transformative, and relevant education towards the holistic development of all stakeholders through excellence in instruction, research and extension services.</span>
                                    </span>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>PHILOSOPHY OF SPCC<br><strong class="ornage_color">----</strong></h3>
                                    <p> “Commitment to Excellence to Serve God and the Community”
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact us</h2>
                    </div>
                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="text" name="Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>141-143 10th Avenue, Gracepark, Caloocan City</span>
                                <p>8367-7501/8367-7502
                                    <br>info@spcc.edu.ph</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Products</a></li>
                                    <li> <a href="#">Specials  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright © 2021 SPCC Caloocan. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>