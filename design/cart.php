

<style>

body {

    z-index: 1;
	
}
#form{
		 background: rgb(0, 0, 0);
   background: rgba(0, 0, 0, 0.7);
    position: fixed; 
    top: 0%;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10;
    font-size:75%;
}
#cover{
  
    position: fixed;
    top: 50%;
    left:50%;
    z-index: 20;
	
}

</style>
   <div id="cover">
   <div id="form" >
<form  method="post" enctype="multipart/form-data" runat="client">

<div class="container">
<div class="card" class="col-8 offset-2">

<div class = "card-header">

<h1 class="card-title text-center" >My Cart<a href="brand.php" class="close">&times;</a></h1>
<div class ="card-body table-responsive">

<table class="table  table-bordered table-hover table-condensed">
<tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
      <th>Action</th>
    </tr>


    <?php 

    if(isset($_SESSION['list'])){
    foreach ($_SESSION['list'] as $key => $value) {

    ?>
    <tr>
        
      <td><?php echo $value['prod_id']; ?></td>
       <td><?php echo $value['prod_dname']; ?></td>
       <td><?php echo $value['prod_sprice']; ?></td>
       <td><?php echo $value['qty']; ?></td>
      <td><?php echo ($value['prod_sprice'] * $value['qty']); ?></td>
    <td><button class="btn btn-danger" type="submit" name="lprod[]" value="<?php echo $value['prod_id']; ?>">Remove</button></td>
    </tr>


    <?php

    }
    }else{



    ?>

    <tr>
      <td colspan="6" style="text-align:center;"><h4 class='text-muted'>No Item</h4></td>
    </tr>
    <?php 
  }
    ?>


</table>



<div class="card-footer">

<div class="float-right">
      
      <h4><span class="label label-warning " >Current Amount: Php <?php if(isset($_SESSION['amt'])){echo $_SESSION['amt'];} ?></span>
      </h4>

    </div>
</div>
<button type="submit" name="save" class="btn btn-primary">Save</button>

</div>



</div>

</div>
</div>
</form>
</div>
</div>
