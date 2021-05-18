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
<?php 
include_once "footer.php";
?>