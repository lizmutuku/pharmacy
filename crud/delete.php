<?php 

// process delete operations
if (isset($_POST['id'])&& !empty($_POST['id'])) {
	require_once"config.php";

	// prepare delete stmt
	$sql="DELETE FROM users WHERE id=?";

	if ($stmt=mysqli_prepare($conn,$sql)) {
		// bind params
		mysqli_stmt_bind_param($stmt,'i',$param_id);

		// set param
		$param_id=trim($_POST['id']);

		// try to execute
		if (mysqli_stmt_execute($stmt)) {
			// record deleted
			header("location:view-user.php");
			exit();
		}else{
			echo "Oops!something went wrong";
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);	
}else{
	// check existence of the id parameter
	if (empty(trim($_GET['id']))) {
		header("location:error.php");
		exit();
	}
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>delete record</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
   <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>delete record</h2> 
                </div>
               
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
               <div class="alert alert-danger fade-in">
               	<input type="hidden" name="id"value="<?php echo trim($_GET['id']); ?>">
               		<p>Are you sure you want to delete</p><br>
               		<p><input type="submit" name="yes"class="btn btn-danger">
               			<a href="view-user.php" class="btn btn-default">No</a>
               		</p>
               	
               </div>
                  

                </form>

            </div>
            
        </div>
        
    </div>
       
   </div>  
 </body>
 </html>