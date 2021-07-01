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
