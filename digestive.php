<?php
require_once "config.php";

require_once"layout-head.php";
?>

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
  <title>DIGESTIVE RELIEF</title>
</head>

<body>

	<h1 style="text-align: center;padding-top: 20px;">DIGESTIVE RELIEF</h1>

	<div class="row" style="padding-top: 0px;">
  		
     <div class="column">
         <img src="images/Digestive relief/ABZ suspension.JPG"style="width:200px;height:200px">
         <p >NAME:ABZ SUSPENSION</p>
        <p >PRICE:100</p> 
       <form action="cart.php" method="post">
        <input type="submit" class="btn btn-primary" value="Add to cart" name="abz_suspension/100">
        </form>
      </div>
  		<div class="column">

  			 <img src="images/Digestive relief/ABZ tabs.JPG"style="width:200px;height:200px">
  			 <p >NAME:ABZ TABLETS</p>
    		<p >PRICE:100</p>	
    		<form action="cart.php" method="post">
    		<input type="submit" class="btn btn-primary" value="Add to cart" name="abz_tablets/100">
    		</form>
  		</div>
  		<div class="column">

   			<img src="images/Digestive relief/Colix drops.JPG"style="width:200px;height:200px">
   			<p >NAME:COLIC DROPS</p>
    		<p >PRICE:200</p>	
    		<form action="cart.php" method="post">
    		<input type="submit" class="btn btn-primary" value="Add to cart" name="colic_drops/200">
    		</form>
  		</div>

  	</div>

  	<div class="row" style="padding-top: 0px;">

  		<div class="column">

   			<img src="images/Digestive relief/Flatameal DS suspension.JPG"style="width:200px;height:200px">
   			<p >NAME:FLATAMEAL DS SUSPENSION</p>
    		<p >PRICE:500</p>
    		<form action="cart.php" method="post">
    		<input type="submit" class="btn btn-primary" value="Add to cart" name="flatameal_ds_suspension/500">
    		</form>	
    		</form>
  		</div>
  		<div class="column">
  			 <img src="images/Digestive relief/Flatameal DS tabs.JPG"style="width:200px;height:200px">
  			 <p >NAME:FLATAMEAL DS TABLETS</p>
    		<p >PRICE:300</p>
    		<form action="cart.php" method="post">	
    		<input type="submit" class="btn btn-primary" value="Add to cart" name="flatameal_ds_tablets/300">
    		</form>
  		</div>
      <div class="column">
        <img src="images/Digestive relief/Relcer gel.JPG"style="width:200px;height:200px">
        <p >NAME:RELCER GEL</p>
        <p >PRICE:1000</p>
        <form action="cart.php" method="post">
        <input type="submit" class="btn btn-primary" value="Add to cart" name="relcer_gel/1000"> 
        </form>
      </div>
    </div>
  <div class="row" style="padding-top: 0px;">

      <div class="column">

        <img src="images/Digestive relief/Relcer tabs.JPG"style="width:200px;height:200px">
        <p >NAME:RELCER TABLETS</p>
        <p >PRICE:800</p>
        <form action="cart.php" method="post">
        <input type="submit" class="btn btn-primary" value="Add to cart" name="relcer_tablets/800">
        </form>
      </div>
      <div class="column">
         <img src="images/Digestive relief/Zentel suspension.JPG"style="width:200px;height:200px">
         <p >NAME:ZENTEL SUSPENSION</p>
        <p >PRICE:200</p> 
        <form action="cart.php" method="post">
        <input type="submit" class="btn btn-primary" value="Add to cart" name="zentel_suspension/200">
        </form>
      </div>
      <div class="column">
        <img src="images/Digestive relief/Zentel tabs.JPG"style="width:200px;height:200px">
        <p >NAME:ZENTEL TABLETS</p>
        <p >PRICE:150</p>
        <form action="cart.php" method="post">
        <input type="submit" class="btn btn-primary" value="Add to cart" name="zentel_tablets/150">
        </form>
      </div>
</div>

</body>
</html>
