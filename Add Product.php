<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
	background-image: url("Images/5.jpg");
	background-size: cover;
	background-image:			
  }
  fieldset{
    margin-left: 30%;
    margin-right: 30%;
    border:hidden;
    margin-top: 10%;
    font-style: bold;
    font-size: 170%;

  }
  li a.active{
      background-color: white;
      color: black;
    }
  #Submit{
    padding: 15px;
      color: white;
      font-size: 120%;
      background-color: black;
      display: inline-block;
      text-decoration: none;
      border: none;
      width: auto;

  }
  input[type=text],[type=email], [type=password]{
    width: 100%;

  }
  form{
    text-align: left;
  }
  li a{
      text-decoration: none;
      padding: 14px 16px;
      color: white;
      background-color: black;

    }

    ul{
      list-style-type: none;
      margin: 0;
      padding: 20px;
      overflow: hidden;
      background-color: black;
      

    }
    li a.active{
      background-color: white;
      color: black;
    }
    li{
      float: left;
    }
      

	</style>
</head>
<body>
<center>
<ul>
<li><a href="homepage.php">HOME</a></li>
<li><a class="active" href="Product.php">ADD PRODUCT</a></li>
<li><a href="search.php">SEARCH</a></li>
</ul>
<fieldset>
<form method="POST"> <!--POST is used to collect form data-->
ProductID:<br>
<input type="text" placeholder="ProductID"  name="productID" required><br>
 ProductName:<br>
<input type="text" placeholder="ProductName"  name="productname" required><br>
ProductType:<br>
<input type="text" placeholder="ProductType" name="producttype" required><br>
   Priceofproduct:<br>
  <input type="number" placeholder="ProductPrice" name="productprice" required><br>
   ProductExpiry:<br>
  <input type="date" placeholder="ProductExpiry" name="productexpiry" required><br>
  <center>
  <input id="Submit" type="submit" name="submit" value="Add Product">
  </center>
 </form>
 </fieldset>
 </center> 
</body>
</html>

<?php
// if user presses the submit button 
if (isset($_POST['submit'])) {
$ProductId =$_POST['ProductID'];
$ProductName =$_POST['ProductName'];
$ProductType =$_POST['ProductType'];
$ProductPrice =$_POST['ProductPrice'];
$ProductExpiry=$_POST['ProductExpiry'];



mysqli_connect("localhost", "root");
$link=mysqli_connect("localhost", "root");

mysqli_select_db($link, "pharmatech");

$query=mysqli_query($link, "INSERT INTO product(ProductID, Productname, Producttype, ProductPrice, ProductExpiry)
VALUES('$productid','$productname', '$producttype', '$productprice', '$productexpiry')"); 
if($query==1){
  echo("$productname added successfully");
}
elseif($query==0){
  echo("Adding failed please try again");
  exit();
}
}

?>
