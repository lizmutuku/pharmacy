 <?php 
 require_once"config.php";

$username=$email=$password=$confirm_password=$gender=$address=$telephone="";
$username_error=$email_error=$password_error=$confirm_password_error=$gender_error=$address_error=$telephone_error="";

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$input_username=trim($_POST['username']);
	if (empty($input_username)) {
		$username_error="Username is required";
	}else{
		$sql="SELECT * FROM users WHERE username='$input_username'";
		$exQuery=mysqli_query($conn,$sql);

		if ($exQuery) {
			if (mysqli_num_rows($exQuery)>0) {
				$username_error="Username already exists";
			}else{
				$username=$input_username;
			}
		}else{
			echo "query failed";

		}

	}
     $input_email=trim($_POST['email']);
if (empty($input_email)) {
	$email_error="email is required";
}else{
	$email=$input_email;
}

$input_password=trim($_POST['password']);
if (empty($input_password)) {
	$password_error="password is required";
}else{
	$password=$input_password;
}

$input_confirm_password=trim($_POST['confirm_password']);
if (empty($input_confirm_password)) {
	$confirm_password_error="confirm password is required";
}else{
	$confirm_password=$input_confirm_password;
	if (empty($password_error) && $password !=$confirm_password) {
		$confirm_password_error="Password do not match";
	}
	$input_gender=trim($_POST['gender']);
if (empty($input_gender)) {
	$gender_error="gender is required";
}else{
	$gender=$input_gender;
}
$input_address=trim($_POST['address']);
if (empty($input_address)) {
	$address_error="address is required";
}else{
	$address=$input_address;
}
$input_telephone=trim($_POST['telephone']);
if (empty($input_telephone)) {
	$telephone_error="telephone is required";
}else{
	$telephone=$input_telephone;
}

}
if (empty($username_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error) && empty($gender_error) && empty($address_error) && empty($telephone_error)) {
	$hashed_password=password_hash($password, PASSWORD_DEFAULT);
	$sql="INSERT INTO users(username,email,password,gender,address,telephone) VALUES('$username','$email','$hashed_password','$gender','$address','$telephone')";
	if (mysqli_query($conn,$sql)) {
		header("location:login.php");
		exit();
	}else{
		echo "Error creating account" .mysqli_error($conn);
	}
}else{
	echo "Field errors";
}

}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">
	<div class="col-md-6 offset-3">

<form action="" method="post">

	<h3 class="text-center">Register</h3>

  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username">
    <span class="text-danger"><?php echo $username_error; ?></span>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
     <span class="text-danger"><?php echo $email_error; ?></span>
  </div>

  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <span class="text-danger"><?php echo $password_error; ?></span>
  </div>

  <div class="form-group ">
    <label for="confirm_password">Confirm_password</label>
    <input type="password" class="form-control" id="confirm_password" placeholder="Re-enter password"name="confirm_password">
    <span class="text-danger"><?php echo $confirm_password_error; ?></span>
  </div>
   <div class="form-group">
            <label for="gender">Gender:</label>
              <input type="radio" name="gender" value="male" checked> Male
             <input type="radio" name="gender" value="female" checked> Female<br>
              <span class="help-block"> <?php echo $gender_error;?>         
             </span>           
            </div>
 
  <div class="form-group ">
    <label for="telephone">telephone</label>
    <input type="number" class="form-control" id="telephone" placeholder="Enter your telephone " name="telephone">
    <span class="text-danger"><?php echo $telephone_error; ?></span>
  </div>

  <div class="form-group ">
    <label for="address">address</label>
    <input type="varchar" class="form-control" id="address" placeholder="Enter your address" name="address">
    <span class="text-danger"><?php echo $address_error; ?></span>
  </div>
 <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
 <div class="form-group">
 					<input type="submit" class="btn btn-primary" value="Register">
 				</div>
 
  			
  <a href="login.php" class="text-center"> Already have an account</a>

</form>

</div>
</div>
</body>
</html>
