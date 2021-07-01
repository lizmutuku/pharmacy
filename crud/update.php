<?php 
require_once('config.php');

// define vars and initialize them with empty value
$name=$email=$gender=$address=$phoneNo="";
$name_error=$email_error=$gender_error=$address_error=$phoneNo_error="";
// processing form data when the form is submitted
if (isset($_POST['id'])&& !empty($_POST['id'])) {
    // get hidden input value
    $id=$_POST['id'];

    // validate name
    $input_name=trim($_POST['name']);
    if (empty($input_name)) {
        $name_error="Please enter a name";
    }elseif (!filter_var($input_name,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $name_error="Please enter a valid  name";
    }else{
        $name=$input_name;
    }

    $input_email=trim($_POST['email']);
    if (empty($input_email)) {
        $email_error="Please enter your email";
    }else{
        $email=$input_email;
    }

    $input_gender=trim($_POST['gender']);
    if (empty($input_gender)) {
        $gender_error="Please enter your gender";
    }else{
        $gender=$input_gender;
    }
     $input_address=trim($_POST['address']);
    if (empty($input_address)) {
        $address_error="Please enter your address";
    }else{
        $address=$input_address;
    }
    $input_phoneNo=trim($_POST['phoneNo']);
    if(empty($input_phoneNo)) {
        $phoneNo_error="Please fill in your phoneNo";
    }else{
        $phoneNo=$input_phoneNo;
    }
    // check input error before updating
      if (empty($name_error) && empty($email_error) && empty($gender_error) && empty($address_error) && empty($phoneNo_error))  {

        // prpare an update stmt
         $sql="UPDATE users SET name=?,email=?,gender=?,address=?,phoneNo=? WHERE id=?";

        if ($stmt=mysqli_prepare($conn,$sql)) {
            // bind vars to the prepared stmt
            mysqli_stmt_bind_param($stmt,"ssssii",$param_name,$param_email,$param_gender,$param_address,$param_phoneNo,$param_id);

            // set params
            $param_name=$name;
            $param_email=$email;
            $param_gender=$gender;
            $param_address=$address;
            $param_phoneNo=$phoneNo;
            $param_id=$id;

            // try to execute
            if (mysqli_stmt_execute($stmt)) {
                // records updated
                // redirect
                header("location:view-user.php");
                exit(); 
            }else{
                echo "Error".mysqli_error($conn);   
        }
       
      }
       mysqli_stmt_close($stmt);
  }
      mysqli_close($conn);
}else{
    // check existence of id parameter before processing
   if (isset($_GET['id'])&& !empty(trim($_GET['id']))) {
        $id=trim($_GET['id']);
        $sql="SELECT * FROM user WHERE id=?";
        if ($stmt=mysqli_prepare($conn,$sql)) {
            mysqli_stmt_bind_param($stmt,'i',$param_id);

            $param_id=$id;

            if (mysqli_stmt_execute($stmt)) {
                $result=mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result)==1) {
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

                    $name=$row['name'];
                    $email=$row['email'];
                     $gender=$row['gender'];
                      $address=$row['address'];
                    $phoneNo=$row['phoneNo'];
                }else{
                    header("location:error.php");
                    exit();
                }
            }else{
                echo "Failed to execute";
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }else{
        header("location:error.php");
        exit();
    }
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>update record</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
   <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-3">
                <div class="page-header">
                    <h2> update record</h2> 
                </div>
                <p>Edit user form</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI']));?>" method="post">
                <div class="form-group
                <?php echo (!empty($name_error))? 'alert danger':''; ?> ">
                <label for="name">Name:</label>
                    <input type="text"  id='name'name="name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block">
                        <?php echo $name_error;?></span>
                </div>
                  
                  <div class="form-group<?php echo(!empty($email_error)) ?>">
                    <label for='email'>email:</label>
                        <input type="email" id='email'name="email" class ="form-control" value="<?php echo $email;?>">
                        <span class="help-block">
                        <?php echo $email_error;?>
                    </span>  
                      
                  </div>
                   <div class="form-group">
            <label for="gender">Gender:</label>
              <input type="radio" name="gender" value="male" checked> Male
             <input type="radio" name="gender" value="female" checked> Female<br>
              <span class="help-block"> <?php echo $gender_error;?>         
             </span>           
            </div>
                  <div class="form-group
                  <?php echo (!empty($address_error))? 'has-error':'' ;?>">
                  <label for="address"> Address</label>
                  <textarea name='address' id='address' class="form-control">
                      <?php echo $address ?>
                  </textarea>
                  <span class="help-block">
                        <?php echo $address_error;?>
                    </span>
                      
                  </div>
                  <div class="form-group<?php echo(!empty($phoneNo_error)) ?>">
                    <label for='phoneNo'>phoneNo:</label>
                        <input type="number" id='phoneNo'name="phoneNo" class ="form-control" value="<?php echo $phoneNo;?>">
                        <span class="help-block">
                        <?php echo $phoneNo_error;?>
                    </span>  
                      
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id;?>"/>
                  <input type="submit" class="btn btn-primary" value="submit">
                  <a href="view-user.php "class="btn btn-default">cancel</a>
                  </div>
            



                </form>

            </div>
            
        </div>
        
    </div>
       
   </div>  
 </body>
 </html>