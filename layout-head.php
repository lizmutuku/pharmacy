<?php
require_once "config.php";


?>
 <link rel="stylesheet" href="css/index2.css">  
<div class="topnav">
  <a class="active" href="index.php">Home</a>
   
   <div class="dropdown">
    <button class="dropbtn">
      PRODUCTS 
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

   
  <div class="topnav-right">
    
    <a class="active" href="cart.php">Cart</a>
                        <!-- <?php
                        // count products in cart
                        // $cart_count=count($_SESSION['cart']);
                         ?> -->
                        <!-- Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span> -->
                    <!-- </a> -->
                <!-- </li> -->
                
    <a href="logout.php">LOGOUT</a>
   </div>
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