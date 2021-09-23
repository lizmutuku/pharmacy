<?php
 $conn = mysqli_connect("localhost","root","","pharmacy");
 if(!$conn)
  {
   echo "Error: ".mysqli_connect_error();
  }
?>