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
  <title>EAR/EYE NOSE THROAT</title>
</head>

<body>

	<h1 style="text-align: center;padding-top: 20px;">EAR/EYE NOSE THROAT</h1>

	<div class="row" style="padding-top: 0px;">
  		
     <div class="column">
         <img src="images/ENT/Cerumol ear drops.JPG"style="width:200px;height:200px">
         <p >NAME:CERUMOL EAR DROPS</p>
        <p >PRICE:300</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
  		<div class="column">

  			 <img src="images/ENT/Nasosal nasal drops.JPG"style="width:200px;height:200px">
  			 <p >NAME:NASOSAL NASAL DROPS</p>
    		<p >PRICE:500</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
  		<div class="column">

   			<img src="images/ENT/optive plus eye drops.JPG"style="width:200px;height:200px">
   			<p >NAME:OPTIVE PLUS EYE DROPS</p>
    		<p >PRICE:500</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>

  	</div>

  	<div class="row" style="padding-top: 0px;">

  		<div class="column">

   			<img src="images/ENT/Otrivin nasal infant drops.JPG"style="width:200px;height:200px">
   			<p >NAME:OTRIVIN NASAL DROPS</p>
    		<p >PRICE:1,000</p>
    		<input type="submit" class="btn btn-primary" value="Add to cart">	
  		</div>
  		<div class="column">
  			 <img src="images/ENT/Probeta N.JPG"style="width:200px;height:200px">
  			 <p >NAME:PROBETA N</p>
    		<p >PRICE:500</p>	
    		<input type="submit" class="btn btn-primary" value="Add to cart">
  		</div>
      <div class="column">
        <img src="images/ENT/Waxsol ear drops.JPG"style="width:200px;height:200px">
        <p >NAME:WAXSOL EAR DROPS</p>
        <p >PRICE:1000</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>


</body>
</html>