<?php 
//check existence of id parameter
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
	require_once('config.php');

	$sql="SELECT * FROM users WHERE userid=?";

	if ($stmt= mysqli_prepare($conn,$sql)) {
		//bind parameters
		mysqli_stmt_bind_param($stmt,'i',$param_id);

		// set parameters
		$param_id=trim($_GET['id']);

		// attempt to execute prepared stmt
		if (mysqli_stmt_execute($stmt)) {
			$result=mysqli_stmt_get_result($stmt);
			if (mysqli_num_rows($result)==1) {
				
				// fetch results as associative array
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

				// retrieve
				$username=$row['username'];
				$email=$row['email'];
				$gender=$row['gender'];
				$address=$row['address'];
				$phoneNo=$row['phoneNo'];
			}
		}else{
			header("location:error.php");
			exit();
		}
	}else{
		echo "Error:failed to prepare.". mysqli_error($conn);
	}


mysqli_stmt_close($stmt);
mysqli_close($conn);
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>View record</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<div class="wrapper">
 	 <div class="container">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="page-header">
 						<h1> View record</h1>
 						
 					</div>
 					<div class="form-group">
 						<label> username:</label>
 						<p class="form-control-static">
 							<?php echo $username;?>
 								
 							</p>
 						</div>
 						<div class="form-group">
 						<label> email:</label>
 						<p class="form-control-static">
 							<?php echo $email;?>
 								
 							</p>
 						</div>
 						<div class="form-group">
 						<label> gender:</label>
 						<p class="form-control-static">
 							<?php echo $gender;?>
 								
 							</p>
 						</div>

 							<div class="form-group">
 						<label> Address:</label>
 						<p class="form-control-static">
 							<?php echo $address;?>
 								
 							</p>
 						</div>

 							<div class="form-group">
 						<label> phoneNo:</label>
 						<p class="form-control-static">
 							<?php echo $phoneNo;?>
 								
 							</p>
 						</div>
 						<a href="view-user.php" class="btn btn-primary">
 						Back
 						</a>	
 						
 					</div>

 				</div>
 				
 			</div>
 			
 		</div>
 		
 	</div> 	
 </body>
 </html>