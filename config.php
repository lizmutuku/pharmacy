<?php 
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname= "pharmacy";


  $conn=mysqli_connect($server,$username,$password,$dbname);

  if(!$conn){
    
    echo "ERROR:" . mysqli_connect_error();
  }

  



 ?>