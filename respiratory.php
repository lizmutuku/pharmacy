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
  <title>RESPIRATORY</title>
</head>

<body>

  <h1 style="text-align: center;padding-top: 20px;">RESPIRATORY</h1>

  <div class="row" style="padding-top: 0px;">
      
     <div class="column">
         <img src="images/Respiratory/benylin 4 flu.JPG"style="width:200px;height:200px">
         <p >NAME:BENYLIN SYRUP</p>
        <p >PRICE:300</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
         <img src="images/Respiratory/coldcap syrup.JPG"style="width:200px;height:200px">
         <p >NAME:COLDCAP SYRUP</p>
        <p >PRICE:200</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Respiratory/COLDCAP_1.jpg"style="width:200px;height:200px">
        <p >NAME:COLDCAP TABLETS</p>
        <p >PRICE:150</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
    </div>
    <div class="row" style="padding-top: 0px;">
      <div class="column">
        
        <img src="images/Respiratory/flugone dm syrup.JPG"style="width:200px;height:200px">
        <p >NAME:FLUGONE DM SYRUP</p>
        <p >PRICE:300</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
      <div class="column">
         <img src="images/Respiratory/flugone.JPG"style="width:200px;height:200px">
         <p >NAME:FLUGONE CAPSULES</p>
        <p >PRICE:2,000</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Respiratory/karvol.JPG"style="width:200px;height:200px">
        <p >NAME:KARVOL CAPSULES</p>
        <p >PRICE:2,500</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>


</body>
</html>