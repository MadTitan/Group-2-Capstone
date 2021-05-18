<?php 
session_start(); 
require_once "../connection.php";
include_once "header.php";

if(!isset($_SESSION['list'])){

$_SESSION['list'] = array();
}

if(!isset($_SESSION['sp'])){

$_SESSION['sp']= array();
}


if(isset($_POST['lprod'])){
    for($x=0;$x<count($_POST['lprod']);$x++){

    if($_POST['lprod'][$x] !=""){
        $prodid =  $_POST['lprod'][$x];
        
        foreach ($_SESSION['list'] as $key => $value) {
        
            if($value['prod_id'] == $prodid){

                unset($_SESSION['list'][$key]);
            }
        }

        
        
    }
}

}





if(isset($_POST['save'])){
    echo "<script>alert('Add a script the will execute save to database')</script>";
}


if(isset($_POST['prod'])){
for($x=0;$x<count($_POST['prod']);$x++){

    if($_POST['prod'][$x] !=""){
        $prodid =  $_POST['prod'][$x];
        
        $getprod_sql="select * from tbl_product where prod_id='". $prodid."'";
        $getprod_res = $con->query($getprod_sql);
        $getprod_rec = $getprod_res->fetch_assoc();
        $getprod_rec['qty'] = 0;
        $_SESSION['sp'] = $getprod_rec;
 
    }
}
include('count.php');
}


if(isset($_POST['add'])){

    

$fnd=false;

    foreach ($_SESSION['list'] as $key => $value) {
        
            if($value['prod_id'] == $_SESSION['sp']['prod_id']){
                $_SESSION['list'][$key]['qty'] +=  $_POST['cnt'];
                $fnd=true;
                comp();
                break;
            }   
        }
if($fnd == false){
    if(count($_SESSION['list']) <=12){

    $qty = (int)$_POST['cnt'];

    $_SESSION['sp']['qty'] = $qty;
    array_push($_SESSION['list'],$_SESSION['sp']);
    comp();
    }else{
    echo "<script>alert('Maximum purchase item reach')</script>";
}
    
}

}

  comp();
?>


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
<?php 
include_once "footer.php";
?>