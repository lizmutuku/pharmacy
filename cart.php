<?php 
$meds = array();
 error_reporting(0); 
 
    if(isset($_POST['submit'])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }else{ 
                $_SESSION['cart'][$key]['quantity']=$val; 
            } 
        } 
          
    } 
    if(isset($_POST['karvol_capsules/2500'])){
    $meds[] = "KARVOL CAPSULES/2500";
    }
    
    if(isset($_POST['flugone_capsules/2000'])){
    $meds[] = "FLUGONE CAPSULES/2000";
    }
    
    if(isset($_POST['flugone_dm_syrup/300'])){
    $meds[] = "FLUGONE DM SYRUP/300";
    }
    
    if(isset($_POST['coldcap_tablets/150'])){
    $meds[] = "COLDCAP TABLETS/150";
    }
    
    if(isset($_POST['coldcap_syrup/200'])){
    $meds[] = "COLDCAP SYRUP/200";
    }
    
    if(isset($_POST['benylin_syrup/300'])){
    $meds[] = "BENYLIN SYRUP/300";
    }
  
?> 
  <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}
</style>
</head>
<body>
<h1>View cart</h1> 
<a href="index.php?page=products">Go back to the products page.</a> 
<form method="post" action="index.php?page=cart"> 
      
    <table> 
          
        <tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th> 
            <th>Items Price</th> 
            <th>Actions</th>
        </tr> 
        <?php
        for($i=0; $i<1;$i++){
        $details = array();
        $details = explode("/", $meds[0]);
         $name = $details[0];
       $price = $details[1];
       ?>
        
        <tr>
        <td><?php echo $name; ?></td>
        <td>1</td>
        <td><?php echo $price; ?></td>
        <td><?php echo $price; ?></td>
        <td><a href = mpesa-integration/mpesa-integration-2/index.php target="_blank">Billing</a></td>
        </tr>
        <?php } ?>
        
          
        <?php 
          
            $sql="SELECT * FROM product WHERE product_id IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
                    $query=mysql_query($sql); 
                    $totalprice=0; 
                    while($row=mysql_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price']; 
                        $totalprice+=$subtotal; 
                    ?> 
                        <!--<tr> 
                            <td><?php echo $row['name'] ?></td> 
                            <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td> 
                            <td><?php echo $row['price'] ?>$</td> 
                            <td><?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?>$</td> 
                        </tr> -->
                    <?php 
                          
                    } 
        ?> 
                    <tr> 
                        <td colspan="4">Total Price: <?php echo $totalprice ?></td> 
                    </tr> 
          
    </table> 
    
    <br /> 
    <button type="submit" name="submit">Update Cart</button> 
    <a href="checkout.php">Checkout</a>
    
</form> 
<br /> 
<p>To remove an item set its quantity to 0. </p>
</body>
</html>
