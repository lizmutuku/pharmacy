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

</head>
<body>


  <title>ANTIBIOTICS</title>
</head>

<body>

	<h1 style="text-align: center;padding-top: 10px;">ANTIBIOTICS</h1>
<form id="form1" name="form1" method="post" action="cart.php">
	<div class="row" style="padding-top: 0px;">
  		
    <div class="column">



      <img src="images/antibiotics/amoxil suspension 125ml.jpg" style="width:200px;height:200px">
      <p > NAME: AMOXIL SUSPENSION</p>
      <p class="price">KSH:300</p>
      
      <p><button type="submit" name="selected-product">Add to Cart</button></p>
    
    </div>
		<div class="column">

      <img src="images/antibiotics/agumentin suspension.jpg"style="width:200px;height:200px">
      <p >NAME:AGUMENTIN SUSPENSION</p>
      <p >PRICE:500</p>	
      <button class="btn active">Add to Cart</button>
        
    	
		</div>
		<div class="column">

 			<img src="images/antibiotics/amoxil-500mg.jpg"style="width:200px;height:200px">
 			<p >NAME:AMOXIL 500MG (100s)CAPSULES</p>
  		<p >PRICE:1,500</p>	
      <p><button>Add to Cart</button></p>

  		
		</div>

	</div>

	<div class="row" style="padding-top: 0px;">

		<div class="column">

 			<img src="images/antibiotics/Amoxil-Capsules-250mg.jpg"style="width:200px;height:200px">
 			<p >NAME:AMOXIL 250MG CAPSULES</p>
  		<p >PRICE:2,000</p>
      <p><button>Add to Cart</button></p>
  	
		</div>
		<div class="column">
			 <img src="images/antibiotics/ampliclox 500mg.png"style="width:200px;height:200px">
			 <p >NAME:AMPICLOX 500MG CAPSULES</p>
  		<p >PRICE:2,000</p>	
      <p><button>Add to Cart</button></p>
      
		</div>
    <div class="column">
      <img src="images/antibiotics/augmentin-tablet-500x500.jpg"style="width:200px;height:200px">
      <p >NAME:AGUMENTIN 500MG(10s)CAPSULES</p>
      <p >PRICE:2,500</p>
      <p><button>Add to Cart</button></p>
     
    </div>
  </div>
  <div class="row" style="padding-top: 0px;">

    <div class="column">

      <img src="images/antibiotics/acyclovir-800mg-tablet-500x500.jpg"style="width:200px;height:200px">
      <p >NAME:ACYCLOVIR TABLETS</p>
      <p >PRICE:1,000</p>
      <p><button>Add to Cart</button></p>
    
    </div>
    <div class="column">
       <img src="images/antibiotics/clavulin syrup.jpg"style="width:200px;height:200px">
       <p >NAME:CLAVULIN SYRUP</p>
      <p >PRICE:800</p> 
      <p><button>Add to Cart</button></p>
     
    </div>
    <div class="column">
      <img src="images/antibiotics/clavulin tabs.jpg"style="width:200px;height:200px">
      <p >NAME:CLAVULIN TABLETS</p>
      <p >PRICE:2,500</p>
      <p><button>Add to Cart</button></p>
     
    </div>
  </div>
  <div class="row" style="padding-top: 0px;">

    <div class="column">

      <img src="images/antibiotics/Sehat-com-pk-Doxycycline-Cap-100-mg-10-10-s__82811_zoom.jpg"style="width:200px;height:200px">
      <p >NAME:DOXYCYCLINE CAPSULES</p>
      <p >PRICE:2,000</p>
      <p><button>Add to Cart</button></p>
       
    </div>
    <div class="column">
       <img src="images/antibiotics/zinnat tabs.png"style="width:200px;height:200px">
       <p >NAME:ZINNAT TABLETS</p>
      <p >PRICE:2,000</p> 
      <p><button>Add to Cart</button></p>
      
    </div>

    <div class="column">
      <img src="images/antibiotics/Zinnat-Susp-125mg.jpg"style="width:200px;height:200px">
      <p >NAME:ZINNAT SUSPENSION</p>
      <p >PRICE:2,500</p>
      <p><button>Add to Cart</button></p>
      
        <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
        <input type="submit" name="button" id="button" value="Add to Shopping Cart" />
      </form>
    </div>
  </div>
  
</body>
</html>