<?php
require_once 'navbar.php'; 
 ?>
<div class="navbar">
 <a href="home.php">HOME</a>
  <a href="AboutUs.php">ABOUT US</a>
  <a href="products.php">PRODUCTS</a>
  <a href="prescription.php">PRESCRIPTION</a>
  
</div>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<!DOCTYPE html>
<html>
<head>
	<style>

* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 30.00%;
  padding: 0px;
  text-align: center;
}

</style>
	<title>PAINKILLERS</title>
</head>
<body>

	<h1 style="text-align: center;padding-top: 20px;" >PAINKILLERS</h1>

	<div class="row" style="padding-top: 0px;">
  		<div class="column">
    		<img src="images\painkillers\action tabs 20s.JPG" style="width:400px;height:300px">
    			<p >NAME:ACTION TABLETS</p>
    			<p >PRICE:200</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">
 		 </div>
  		<div class="column">
  			 <img src="images\painkillers\brustan tabs.JPG"style="width:400px;height:300px">
  			 <p >NAME:BRUSTAN TABLETS</p>
    		<p >PRICE:200</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  		<div class="column">
   			<img src="images\painkillers\maramoja.JPG"style="width:400px;height:300px">
   			<p >NAME:MARA MOJA TABLETS</p>
    		<p >PRICE:150</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  	</div>
  	<div class="row" style="padding-top: 0px;">
  		<div class="column">
   			<img src="images\painkillers\panadol%20advance.JPG"style="width:400px;height:300px">
   			<p >NAME:PANADOL ADVANCE</p>
    		<p >PRICE:500</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">	
  		</div>
  		<div class="column">
   			<img src="images/painkillers/panadol%20extra.JPG"style="width:400px;height:300px">
   			<p >NAME:PANADOL EXTRA</p>
    		<p >PRICE:550</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">	
  		</div>
  	


</body>
</html>