<?php
  // connect to database
  include 'config.php';

  // include objects
  include_once "objects/products.php";
  include_once "objects/product_images.php";
  include_once "objects/cart_item.php";

  // get database connection
  $database = new Database();
  $db = $database->getConnection();

  // initialize objects
  $product = new product($db);
  $product_image = new ProductImage($db);
  $cart_item = new CartItem($db);

  // set page title
  $page_title="Checkout";

  // include page header html
  include 'header.php';

  // $cart_count variable is initialized in navigation.php
  if($cart_count>0){

      $cart_item->user_id=1;
      $stmt=$cart_item->read();

      $total=0;
      $item_count=0;

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          extract($row);

          $sub_total=$price*$quantity;

          echo "<div class='cart-row'>";
              echo "<div class='col-md-8'>";

                  echo "<div class='product-name m-b-10px'><h4>{$name}</h4></div>";
                  echo $quantity>1 ? "<div>{$quantity} items</div>" : "<div>{$quantity} item</div>";

              echo "</div>";

              echo "<div class='col-md-4'>";
                  echo "<h4>&#36;" . number_format($price, 2, '.', ',') . "</h4>";
              echo "</div>";
          echo "</div>";

          $item_count += $quantity;
          $total+=$sub_total;
      }

      echo "<div class='col-md-12 text-align-center'>";
          echo "<div class='cart-row'>";
              if($item_count>1){
                  echo "<h4 class='m-b-10px'>Total ({$item_count} items)</h4>";
              }else{
                  echo "<h4 class='m-b-10px'>Total ({$item_count} item)</h4>";
              }
              echo "<h4>&#36;" . number_format($total, 2, '.', ',') . "</h4>";

              echo "<a href='place_order.php' class='btn btn-lg btn-success m-b-10px'>";
                  echo "<span class='glyphicon glyphicon-shopping-cart'></span> Place Order";
              echo "</a>";
          echo "</div>";
      echo "</div>";

  }else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>";
            echo "No products found in your cart!";
        echo "</div>";
    echo "</div>";
  }

include 'footer.php';
?>





<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
<div class="container">
  <div class="col-md-6 offset-3">
  <form action="checkout.php" method="post">
  <h3 class="text-center">CHECKOUT</h3>
  
   <div class="form-group">
    <div class="col-md-12 offset-3"></div>

            <h3>Billing Address</h3>
            <label for="fname">Full Name:</label>
            <input type="text" class="form-control" id="username" name="username"placeholder="Enter name">
            <label for="email"> Email :</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            <label for="addrress">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city"placeholder="Enter city">
  
               <div class="form-group">
    <div class="col-md-12 offset-3"></div>
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
  
            </div>
          </div>
          
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="continue to checkout">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
