<link rel="stylesheet" href="css/index2.css"> 
<div class="topnav">
  <a class="active" href="index.php">Home</a>
   <div class="dropdown">
    <button class="dropbtn">PRODUCTS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="antibiotics.php">ANTIBIOTICS</a>
      <a href="painrelief.php">PAIN RELIEF</a>
      <a href="respiratory.php">RESPIRATORY</a>
      <a href="ent.php">EAR NOSE THROAT</a>
      <a href="digestive.php">DIGESTIVE RELIEF</a>
    </div>
  </div> 
   <a href="prescription.php">PRESCRIPTION</a>
   
  <div class="topnav-right">
    
    <a href="register.php"> LOGIN / REGISTER</a>
  </div>
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
  <title>DIGESTIVE RELIEF</title>
</head>

<body>

	<h1 style="text-align: center;padding-top: 20px;">DIGESTIVE RELIEF</h1>

	<div class="row" style="padding-top: 0px;">
  		
     <div class="column">
         <img src="images/Digestive relief/ABZ suspension.JPG"style="width:200px;height:200px">
         <p >NAME:ABZ SUSPENSION</p>
        <p >PRICE:100</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
  		<div class="column">

  			 <img src="images/Digestive relief/ABZ tabs.JPG"style="width:200px;height:200px">
  			 <p >NAME:ABZ TABLETS</p>
    		<p >PRICE:100</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  		<div class="column">

   			<img src="images/Digestive relief/Colix drops.JPG"style="width:200px;height:200px">
   			<p >NAME:COLIC DROPS</p>
    		<p >PRICE:200</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>

  	</div>

  	<div class="row" style="padding-top: 0px;">

  		<div class="column">

   			<img src="images/Digestive relief/Flatameal DS suspension.JPG"style="width:200px;height:200px">
   			<p >NAME:FLATAMEAL DS SUSPENSION</p>
    		<p >PRICE:500</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">	
  		</div>
  		<div class="column">
  			 <img src="images/Digestive relief/Flatameal DS tabs.JPG"style="width:200px;height:200px">
  			 <p >NAME:FLATAMEAL DS TABLETS</p>
    		<p >PRICE:300</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
      <div class="column">
        <img src="images/Digestive relief/Relcer gel.JPG"style="width:200px;height:200px">
        <p >NAME:RELCER GEL</p>
        <p >PRICE:1000</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
    </div>
  <div class="row" style="padding-top: 0px;">

      <div class="column">

        <img src="images/Digestive relief/Relcer tabs.JPG"style="width:200px;height:200px">
        <p >NAME:RELCER TABLETS</p>
        <p >PRICE:800</p>
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
         <img src="images/Digestive relief/Zentel suspension.JPG"style="width:200px;height:200px">
         <p >NAME:ZENTEL SUSPENSION</p>
        <p >PRICE:200</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Digestive relief/Zentel tabs.JPG"style="width:200px;height:200px">
        <p >NAME:ZENTEL TABLETS</p>
        <p >PRICE:150</p>
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
</div>

</body>
</html>