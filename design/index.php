<?php 
session_start(); 
require_once "../connection.php";
include_once "header.php";
?>


  
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
                            <a class="buynow" href="brand.php">Buy Now</a>
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
                 <form method="post">
                <div class="row">
                   
                <?php 
                    $prod_sql="select * from tbl_product where prod_deleted='0'";
                    $prod_res = $con->query($prod_sql);
                    //echo mysqli_error($con);
                    if($prod_res->num_rows > 0){
                        while($prod_rec = $prod_res->fetch_assoc()){
                ?>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/products_img/<?php echo $prod_rec['prod_img']; ?>" alt="<?php echo $prod_rec['prod_description'];  ?>" />
                            <h3>₱<strong class="dark"><?php echo $prod_rec['prod_sprice'];  ?></strong></h3>
                            <span><?php echo $prod_rec['prod_dname'];  ?></span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                        <button class="btn btn-success btn-block" value="<?php echo $prod_rec['prod_id']; ?>" name='prod[]'>Add to Cart</button>
                    </div>
                  
                <?php 
                        }
                    }else{

                ?>
             
                <h1 class="text-muted ">No Available Product..</h1>
             
                <?php 
                    }
                ?>

                </div>
                </form>
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
<?php 
include_once "footer.php";
?>