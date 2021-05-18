

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

}
#cover{
  
    position: fixed;
    top: 50%;
    left:50%;
    z-index: 20;
	
}

</style>
   <body>
   <div id="cover">
   <div id="form">
<form  method="post" enctype="multipart/form-data" runat="client">

<div class="container">

<div class="card">
<div class = "card-header">

<h4 class="card-title text-center text-dark" ><?php echo $_SESSION['sp']['prod_dname']; ?><a href="brand.php" class="close">&times;</a></h4>
<div class ="card-body">

<input type="number" name="cnt" class="form-control" placeholder="Input total count"  value='1' required min="1" max="99" step="1">

</div>
<div class="card-footer">
<button type="submit" name="add" class="btn btn-primary">Add</button>

</div>




</div>
</div>
</div>
</form>
</div>
</div>
</body>
