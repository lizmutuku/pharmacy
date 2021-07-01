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
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <title>RESPIRATORY</title>
</head>

<body>

	<h1 style="text-align: center;padding-top: 20px;">RESPIRATORY</h1>

	<div class="row" style="padding-top: 0px;">
  		
     <div class="column">
         <img src="images\respiratory\coldcap capsules.JPG"style="width:400px;height:300px">
         <p >NAME:COLDCAP CAPSULES</p>
        <p >PRICE:300</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
  		<div class="column">

  			 <img src="images\respiratory\flugone caps.JPG"style="width:400px;height:300px">
  			 <p >NAME:FLUGONE CAPSULES</p>
    		<p >PRICE:500</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  		<div class="column">
   			<img src="images/antibiotics/Amoxil 500mg.jpeg"style="width:400px;height:300px">
   			<p >NAME:AMOXIL 500MG (100s)CAPSULES</p>
    		<p >PRICE:1,500</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  	</div>
  	<div class="row" style="padding-top: 0px;">
  		<div class="column">
   			<img src="images\antibiotics\ampliclox 500mg.jpg"style="width:400px;height:300px">
   			<p >NAME:AMPICLOX 500MG CAPSULES</p>
    		<p >PRICE:2,000</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">	
  		</div>
  		<div class="column">
  			 <img src="images\antibiotics\augmentin 500mg.png"style="width:400px;height:300px">
  			 <p >NAME:AUGMENTIN 500MG CAPSULES</p>
    		<p >PRICE:2,000</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
      <div class="column">
        <img src="images\antibiotics\zinnat 500mg.jpeg"style="width:400px;height:300px">
        <p >NAME:ZINNAT 500MG(10s)CAPSULES</p>
        <p >PRICE:2,500</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
      <div>

      <button href="checkout.php"enabled class="btn btn-sm btn-success">Check out</button>
</div>

</body>
</html>