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
    <a href="login.php">LOGIN</a>
    <a href="register.php">REGISTER</a>
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
  <title>ANTIBIOTICS</title>
</head>

<body>

	<h1 style="text-align: center;padding-top: 10px;">ANTIBIOTICS</h1>

	<div class="row" style="padding-top: 0px;">
  		
     <div class="column">

<div class="card">
  <img src="images/antibiotics/amoxil suspension 125ml.jpg" style="width:200px;height:200px">
  <p> NAME: AMOXIL SUSPENSION</p>
  <p class="price">KSH:300</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
    
      </div>
    </div>
  		<div class="column">

  			 <img src="images/antibiotics/agumentin suspension.jpg"style="width:200px;height:200px">
  			 <p >NAME:AGUMENTIN SUSPENSION</p>
    		<p >PRICE:500</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  		<div class="column">

   			<img src="images/antibiotics/amoxil-500mg.jpg"style="width:200px;height:200px">
   			<p >NAME:AMOXIL 500MG (100s)CAPSULES</p>
    		<p >PRICE:1,500</p>	
         <button><a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</button></a>
    		
  		</div>

  	</div>

  	<div class="row" style="padding-top: 0px;">

  		<div class="column">

   			<img src="images/antibiotics/Amoxil-Capsules-250mg.jpg"style="width:200px;height:200px">
   			<p >NAME:AMOXIL 250MG CAPSULES</p>
    		<p >PRICE:2,000</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">	
  		</div>
  		<div class="column">
  			 <img src="images/antibiotics/ampliclox 500mg.png"style="width:200px;height:200px">
  			 <p >NAME:AMPICLOX 500MG CAPSULES</p>
    		<p >PRICE:2,000</p>	
        <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
    		
  		</div>
      <div class="column">
        <img src="images/antibiotics/augmentin-tablet-500x500.jpg"style="width:200px;height:200px">
        <p >NAME:AGUMENTIN 500MG(10s)CAPSULES</p>
        <p >PRICE:2,500</p>
        <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
       
      </div>
</div>
        <div class="row" style="padding-top: 0px;">

      <div class="column">

        <img src="images/antibiotics/acyclovir-800mg-tablet-500x500.jpg"style="width:200px;height:200px">
        <p >NAME:ACYCLOVIR TABLETS</p>
        <p >PRICE:1,000</p>
       <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
      </div>
      <div class="column">
         <img src="images/antibiotics/clavulin syrup.jpg"style="width:200px;height:200px">
         <p >NAME:CLAVULIN SYRUP</p>
        <p >PRICE:800</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/antibiotics/clavulin tabs.jpg"style="width:200px;height:200px">
        <p >NAME:CLAVULIN TABLETS</p>
        <p >PRICE:2,500</p>
        <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
        <div class="row" style="padding-top: 0px;">

      <div class="column">

        <img src="images/antibiotics/Sehat-com-pk-Doxycycline-Cap-100-mg-10-10-s__82811_zoom.jpg"style="width:200px;height:200px">
        <p >NAME:DOXYCYCLINE CAPSULES</p>
        <p >PRICE:2,000</p>
        <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
      </div>
      <div class="column">
         <img src="images/antibiotics/zinnat tabs.png"style="width:200px;height:200px">
         <p >NAME:ZINNAT TABLETS</p>
        <p >PRICE:2,000</p> 
        <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
      </div>
      <div class="column">
        <img src="images/antibiotics/Zinnat-Susp-125mg.jpg"style="width:200px;height:200px">
        <p >NAME:ZINNAT SUSPENSION</p>
        <p >PRICE:2,500</p>
        <a href="cart/add_to_cart.php" class="btn btn-primary">Add to Cart</a>
      </div>
</div>

</body>
</html>