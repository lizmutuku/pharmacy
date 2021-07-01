<?php

require_once "config.php"; 

$name ="";$email="";$password="";$gender="";$address="";$phoneNo="";


$name_error ="";$email_error="";$password_error="";$gender_error="";$address_error ="";
$phoneNo_error ="";

//process from data when submitted

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    //validate name
    
    $input_name= filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    if (empty($input_name)) {
        $name_error= "Please enter a name";

           }elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
            $name_error="Please enter a valid name" ; 
           }else{
            $name=$input_name;
           }
           
           $input_email= trim($_POST['email']);
           if (empty($input_email)){
               $email_error="Please enter your email";
           }else{
         
            $email=$input_email;
        }
        
        
        $input_password=trim($_POST['password']);
        if (empty($input_password)) {
            $password_error="Please enter password";
             }else{
                $password=$input_password;
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
        if (empty($input_phoneNo)) {
            $phoneNo_error="Please enter phone number";
             }else{
                $phoneNo=$input_phoneNo;
             }
             //check if any input errors occurred
            
            if (empty($name_error) && empty($email_error)&& empty($password_error)&& empty($gender_error)&&empty($address_error)&& empty($phoneNo_error)) {

                //sql prepare statement
                $sql="INSERT INTO users(name,email,password,gender,address,phoneNo)VALUES(?,?,?,?,?,?)";
               if($stmt=mysqli_prepare($conn,$sql) ){
                mysqli_stmt_bind_param($stmt,'sssssi',$param_name,$param_email,$param_password,$param_gender,$param_address,$param_phoneNo);

                //set parameters
                $param_name=$name;
                $param_email=$email;
                $param_password=$password;
                $param_gender=$gender;
                $param_address=$address;
                $param_phoneNo=$phoneNo;

                //attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)){
                    header('location:index.php');
                    exit();
                }else{
                    echo "Something went wrong";
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
 <html>
 <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
   <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="page-header">
                    <h2>create record</h2> 
                </div>
                <p>Add user form</p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="form-group
                <?php echo (!empty($name_error))? 'alert danger':''; ?> ">
                <label for="name">Name:</label>
                    <input type="text"  id='name'name="name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block">
                        <?php echo $name_error;?></span>
                </div>
                 <div class="form-group<?php echo(!empty($email_error)) ?>">
                    <label for='email'>Email:</label>
                        <input type="text" id='email'name="email" class ="form-control" value="<?php echo $email;?>">
                        <span class="help-block">
                        <?php echo $email_error;?>
                    </span>  
                </div>
                     <div class="form-group<?php echo(!empty($password_error)) ?>">
                    <label for='password'>Password:</label>
                        <input type="password" id='password'name="password" class ="form-control" value="<?php echo $password;?>">
                        <span class="help-block">
                        <?php echo $password_error;?>
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
                    <label for='phoneNo'>PhoneNo:</label>
                        <input type="number" id='phoneNo'name="phoneNo" class ="form-control" value="<?php echo $phoneNo;?>">
                        <span class="help-block">
                        <?php echo $phoneNo_error;?>
                    </span>  
                      
                  </div>
                  <input type="submit" class="btn btn-primary" value="submit">
                  <a href="index.php "class="btn btn-default">cancel</a>
                  </div>
            



                </form>

            </div>
            
        </div>
        
    </div>
       
   </div>  
</body>
</html>