<?php 
require_once "config.php";

$username=$phoneNo=$prescription=$address=$quantity=$confirmation="";
$username_error=$phoneNo_error=$prescription_error=$address_error=$quantity_error=$confirmation_error="";



if ($_SERVER["REQUEST_METHOD"]== "POST") {

    
    $input_username= filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
    if (empty($input_username)) {
        $name_error= "Please enter your Name";

           }elseif (!filter_var($input_username, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $username_error="Please enter a valid   Name" ; 
           }else{
            $username=$input_username;
           }
           $input_phoneNo= trim($_POST['phoneNo']);
           if (empty($input_phoneNo)){
               $phoneNo_error="Please enter phone number";
           }else{
         
            $phoneNo=$input_phoneNo;
        }
        
        $input_prescription=trim($_POST['prescription']);
        if (empty($input_prescription)) {
            $prescription_error="Please enter prescription";
             }else{
                $description=$input_description;
     }
     $input_address=trim($_POST['address']);
        if (empty($input_address)) {
            $address_error="address is required";
        }else{
            $address=$input_address;
    }
    $input_quantity=trim($_POST['quantity']);
        if (empty($input_quantity)) {
            $quantity_error="Please enter quantity";
             }else{
                $quantity=$input_quantity;
             }

        $input_confirmation=trim($_POST['confirmation']);
        if (empty($input_confirmation)) {
            $confirmation_error="Please enter confirmation";
             }else{
                $confirmation=$input_confirmation;
     }

             //check if any input errors occurred
            if (empty($username_error) && empty($phoneNo_error)&& empty($prescription_error)&& empty($address_error)&& empty($quantity_error)&& empty($confirmation_error)) {

                //sql prepare statement
               $sql="INSERT INTO medicine(username,phoneNo,prescription,address,quantity,confirmation)VALUES(?,?,?,?)";
               if($stmt=mysqli_prepare($conn,$sql) ){
                mysqli_stmt_bind_param($stmt,'sissis',$param_username,$param_phoneNo,$param_prescription,$param_address,$param_quantity,$param_confirmation);

                //set parameters
                $param_username=$username;
                $param_phoneNo=$phoneNo;
                $param_prescription=$prescription;
                $param_address=$address;
                $param_quantity=$quantity;
                $param_confirmation=$confirmation;
               


                //attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)){
                    header('location:admin.php');
                    exit();
                }else{
                    echo "Something went wrong" . mysqli_error($conn);
                }

               }else{
                echo "Error:Query failed to prepare".mysqli_error($conn);
               }
                //close the statement
              mysqli_stmt_close($stmt);
            }
            //close statement
            mysqli_close($conn);

            
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>medicine form</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
   <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-3">
                <div class="page-header">

                    <h2>medicine form</h2> 
                </div>
                <p><b>PLEASE FILL THIS FORM</b></p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="form-group
              <?php echo (!empty($username_error))? 'alert danger':''; ?> ">
                <label for="username"> Name:</label>
                    <input type="text"  id='username'name="unserame" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block">
                        <?php echo $username_error;?></span>
                </div>
                  
                  <div class="form-group
                  <?php echo (!empty($phoneNo_error))? 'has-error':'' ;?>">
                  <label for="phoneNo"> Phone No</label>
                   <input type="number" id='phoneNo'name="phoneNo" class ="form-control" value="<?php echo $phoneNo;?>">
                  <span class="help-block">
                        <?php echo $phoneNo_error;?>
                    </span>
                      
                  </div>
                  <div class="form-group<?php echo(!empty($prescription_error)) ?>">
                    <label for='prescription'>Prescription:</label>
                    <input type='text' id='prescription' name="prescription" class="form-control"
                      value="<?php echo $prescription ;?>">
                        <span class="help-block">
                        <?php echo $prescription_error;?>
                    </span>  
                      
                  </div>
                  <div class="form-group<?php echo(!empty($address_error)) ?>">
                    <label for='address'>Address:</label>
                    <textarea name='text' id='address' class="form-control"
                      value="<?php echo $address;?>">
                  </textarea>
                       
                        <span class="help-block">
                        <?php echo $address_error;?>
                    </span>  
                      
                  </div>
                   <div class="form-group<?php echo(!empty($quantity_error)) ?>">
                    <label for='quantity'>Quantity:</label>
                    <input type='number' id='quantity' name="quantity" class="form-control" value="<?php echo $quantity;?>">
                        <span class="help-block">
                        <?php echo $quantity_error;?>
                    </span>  
                      
                  </div> 
                    <div class="form-group<?php echo(!empty($confirmation_error)) ?>">
                    <label for='confirmation'>Confirmation:</label>
                    <select name="confirmation" id="confirmation">
                      <option value="Approved">Approved</option>
                      <option value="Pending">Pending</option>
                    </select>
                        <span class="help-block">
                        <?php echo $confirmation_error;?>
                    </span>  
                      
                  </div> 
                  <input type="Save" class="btn btn-primary" value="Save">
                  <input type="Reset" class="btn btn-primary" value="Reset">
                  <input type="submit" class="btn btn-primary" value="submit">
                  <a href="admin.php "class="btn btn-default">cancel</a>
                  </div>
            



                </form>

            </div>
            
        </div>
        
    </div>
       
   </div>  
 </body>
 </html>