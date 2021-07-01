<?php


//u hav to hav a session for one to login

//Here we check if any session exists 



session_start();

//this code below locks the page unless one logs in

if (! isset($_SESSION['user'])) //this means that if u dont have a session
//in this case the session user was created in the login page
{   echo("<h2><center>");
  echo("Access denied!You dont have rights to access this page");
  echo("<br/>");
  echo("<a href='Login.php'>LOGIN HERE</a>  ");
  echo("</h2></center>");
  exit();
}
else{

  $user =$_SESSION['user'];
  echo("<h4>");
  echo("You Are Logged In As: $user");
  echo("</h4>");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
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
		li{
			float: left;
		}
	</style>
</head>
<body>
<ul>
<li><a href="homepage.php">HOME</a></li>
<li><a href="aboutus.php">ABOUT US</a></li>
<li><a href="Logout.php">LOGOUT</a></li>
<li><a href="Add Product.php">ADD PHARMACY</a></li>
<li id="pharmanet">PHARMA NET</li>
</ul>


</body>
</html>
