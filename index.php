<?php
require_once "config.php";

session_start();
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
    <a href="respiratory.php">RESPIRATORY</a>
      <a href="antibiotics.php">ANTIBIOTICS</a>
      <a href="painrelief.php">PAIN RELIEF</a>
   
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

<!DOCTYPE html>
<html>
<head>
  <title>MY PHARMACY</title>
   <meta charset="UTF-8">
    <meta name="description" content="My Pharmacy">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css”>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

  <body class="text-center">
   
<div class="container">
   
    <h1 style="text-align:center">ONLINE PHARMACY</h1>
    
<div class="container">
   
  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="slideshow/7.jpg" style="width:1300px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="slideshow/2.jpg" style="width:1300px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="slideshow/3.jpg" style="width:1300px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="slideshow/4.jpeg" style="width:1300px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="slideshow/5.jpg" style="width:1300px;height:400px">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="slideshow/6.jpg" style="width:1300px;height:400px">
  </div>
</div>

    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
    
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>
</main>
<footer class="footer-distributed">
  <div class="footer-left">
      
        <h3>About<span>My Pharmacy</span></h3>
 
        <p class="footer-links">
          <a href="#">Home</a>

          |
          <a href="#">Register</a>

          |
          <a href="#">Login</a>
        </p>
 
        <p class="footer-company-name">©2020 My Pharmacy ltd</p>
      </div>
 
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
            <p><span>309 - Wood Avenue,
             Bldg. No. A - 1, Sector - 1</span>
            Kilimani, Nairobi Kenya - 400710</p>
        </div>
 
        <div>
          <i class="fa fa-phone"></i>
          <p>+254 772 800613</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@smypharmacy.com">support@mypharmacy.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          We offer state of the art german machinery .we pride ourselves in providing quality customer services to our esteemed customers.</p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </footer>





</body>
</html>
