<?php

include("../resources/header.php");
if (isset($_POST['submit'])) {
	$con = mysqli_connect('shareddb-i.hosting.stackcp.net', 'ischyro',"yash4321",'weforwomen-33376a73');
	if(!$con){
		echo '<script type="text/javascript">alert("Connection Not Established"); </script>';  
	}
	$username = $_POST['name'];
	$pssword = $_POST['pwd'];
	// $mobile= $_POST['mobile'];
	$sql = "SELECT * from organization where  org_username = '$username' && org_password = '$pssword'";
	$query_run = mysqli_query($con, $sql);
	if($query_run){

		while( $rows = mysqli_fetch_array($query_run))
		{
			// $u = $rows['UID'];
			// $n = $rows['name'];
			 $p = $rows['org_password'];
			 if($p == $pssword)
			 {


			 	$_SESSION['current_org_id']= $rows['org_id'];
			 	$_SESSION['username'] = $rows['org_username'];


			 	$abc = $rows['org_id'];

			 	$sql2 = "INSERT into sessions(org_id) values($abc)";

			 	$result = mysqli_query($con,$sql2);
			 	if($result)
			 	{
			 		// $sessionIdretrieval = "SELECT MAX(session_id) from sessions ";
			 		// 	$resultsessions = mysqli_query($con,$sessionIdretrieval);

			 		// 	$sessionrow= mysql_fetch_array($resultsessions);
			 		// 	$sessionidfinal=  $sessionrow["session_id"];

			 		// 	$_SESSION["session_id_org"]= $sessionidfinal;


			 		echo '<script type="text/javascript">alert("Login Sucessfull");

									window.location="../index.php"

								 </script>';
			 	}
			 	else
			 		echo "dddssdsf";

			 			
			 }
			 else
			 {
			 	echo '<script type="text/javascript">alert("User not registered"); </script>';
			 }
			// if($u == $uid && $pssword == $cpassword)
			// {						
			// 		$sql1 = "INSERT INTO register VALUES('$fllname','$cuntry','$lcation','$eail',$mobile,'$pssword')";

			// 		$query_run2 = mysqli_query($con, $sql1);
					
			// 		if($query_run2){
			// 			echo '<script type="text/javascript">alert("User registered"); </script>';
			// 		}else{
			// 			echo '<script type="text/javascript">alert("User not registered"); </script>';
			// 		}				
			// }else{
			// 	echo '<script type="text/javascript">alert("Please Enter Valid Credentials"); </script>';
			// }
		}
	}
}

?>

















<html lang="en">
<head>
	<title>PEFAC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	

	<!--Login Code starts here -->
  <div class="container">

			<h1 style="text-align:center">LOGIN</h1>
							<br>
							 <form class="form-horizontal" role="form" method="post" action="orglogin.php">
							
								<div class="form-group">
									<label class="control-label col-sm-4" for="name">Username:</label>
									<div class="col-sm-4">
        								<input type="text" class="form-control" id="name" placeholder="User Name" name="name">
      								</div>
								</div>
							<!-- 		<div class="form-group">
										<label class="control-label col-sm-4" for="lname">Country:</label>
										<div class="col-sm-4">
			        						<input type="text" class="form-control" id="country" placeholder="Country" name="country">
			      						</div>
							    </div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="lname">Location:</label>
										<div class="col-sm-4">
			        						<input type="text" class="form-control" id="Location" placeholder="Location" name="Location">
			      						</div>
							    </div>
								<div class="form-group">
									<label class="control-label col-sm-4" for="email">Email:</label>
									<div class="col-sm-4">
		        						<input type="email" class="form-control" id="email" placeholder="E-Mail" name="email">
		      						</div>		
						    </div> -->
						    <!--  <div class="form-group">
									<label class="control-label col-sm-4" for="email">Mobile Number</label>
									<div class="col-sm-4">
		        						<input type="number" maxlength="12"  class="form-control" id="mobile" placeholder="Enter your registered Mobile number" name="mobile">
		      						</div>		
						    </div>
 --> -->
								<div class="form-group">
									<label class="control-label col-sm-4" for="pwd">Password:</label>
									<div class="col-sm-4">
		        						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		      						</div>
						    	</div>
								<!-- <div class="form-group">
									<label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
									<div class="col-sm-4">
		        						<input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd2">
		      						</div>
						    	</div>
						    	<div class="form-group">
										<label class="control-label col-sm-4" for="lname">UID:</label>
										<div class="col-sm-4">
		        							<input type="number" class="form-control" id="UID" placeholder="UID" name="UID" required="yes">
		      							</div>

							</div> -->
							
							
						<div class="modal-footer">
							<div class="col-sm-offset-4 col-sm-4">
							<button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color:#FE0017;">Login</button><br>
							<a style="text" , href="#">Forget password?</a>
						</div>
					</div>
						</form>
		</div>
	</body>
	</html>
