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
  <title>PAIN RELIEF</title>
</head>

<body>

  <h1 style="text-align: center;padding-top: 10px;">PAIN RELIEF</h1>

  <div class="row" style="padding-top: 0px;">
      
     <div class="column">
         <img src="images/Pain Relief/action tabs 20s.JPG"style="width:200px;height:200px">
         <p >NAME:ACTION TABS</p>
        <p >PRICE:300</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
         <img src="images/Pain Relief/brustan tabs.JPG"style="width:200px;height:200px">
         <p >NAME:BRUSTAN TABS</p>
        <p >PRICE:500</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Pain Relief/Deep freeze cold gel.JPG"style="width:200px;height:200px">
        <p >NAME:DEEP FREEZE COLD GEL</p>
        <p >PRICE:500</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
    </div>
    <div class="row" style="padding-top: 0px;">
      <div class="column">
        
        <img src="images/Pain Relief/Deep heat.JPG"style="width:200px;height:200px">
        <p >NAME:DEEP HEAT </p>
        <p >PRICE:400</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
      <div class="column">
         <img src="images/Pain Relief/maramoja.JPG"style="width:200px;height:200px">
         <p >NAME:MARA MOJA </p>
        <p >PRICE:200</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Pain Relief/panadol extra.JPG"style="width:200px;height:200px">
        <p >NAME:PANADOL EXTRA</p>
        <p >PRICE:200</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
    </div>
       <div class="row" style="padding-top: 0px;">
      <div class="column">
        
        <img src="images/Pain Relief/cataflam.jpg"style="width:200px;height:200px">
        <p >NAME:CATAFLAM </p>
        <p >PRICE:400</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
      <div class="column">
         <img src="images/Pain Relief/ibuprofen.jpg"style="width:200px;height:200px">
         <p >NAME:IBUPROFEN </p>
        <p >PRICE:200</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Pain Relief/ponstan forte.jpeg"style="width:200px;height:200px">
        <p >NAME:PONSTAN FORTE</p>
        <p >PRICE:200</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
    </div>
       <div class="row" style="padding-top: 0px;">
      
      <div class="column">
         <img src="images/Pain Relief/tramadol.jpg"style="width:200px;height:200px">
         <p >NAME:TRAMADOL </p>
        <p >PRICE:500</p> 
        <input type="submit" class="btn btn-primary" value="Add to cart">
      </div>
      <div class="column">
        <img src="images/Pain Relief/betapyn.png"style="width:200px;height:200px">
        <p >NAME:BETAPYN</p>
        <p >PRICE:400</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
      <div class="column">
        <img src="images/Pain%20Relief/doloact%20.jpg"style="width:200px;height:200px">
        <p >NAME:DOLOACT</p>
        <p >PRICE:400</p>
        <input type="submit" class="btn btn-primary" value="Add to cart"> 
      </div>
    </div>


</body>
</html>