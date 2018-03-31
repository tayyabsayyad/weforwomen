<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>We4Women</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
<style>

/*.dropdown-menu{
	display: none;
	text-decoration: none;
	background-color: grey;
}
.dropdown-item:hover{
	background-color: black;
	color: white;
}*/

</style>
</head>
<body>
<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">We4Women</a>
    </div>
   <ul class="nav navbar-nav">
		<li><a href="../index.php">Home</a></li>
		<li><a href="../about.php" >About</a></li>
		<li >
			<a class="dropdown-toggle" data-toggle="dropdown">You Can
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="../job_management/get-job.php">Get a Job</a></li>
					<li><a class="dropdown-item" href="../job_management/post-job.php">Post a Job</a></li>
					<li><a class="dropdown-item" href="../Support.php">Get Support</a></li>
					<li><a class="dropdown-item" href="../mentorship/men.php">Mentor Me</a></li>
                  	<li><a class="dropdown-item" href="../donation_management/get-donation.php">Get Donation</a></li>
                  	<li><a class="dropdown-item" href="../donation_management/give-donation.php">Give Donation</a></li>
				</ul>
			</a> 
		</li>

		<li>
			<a class="dropdown-toggle" data-toggle="dropdown">Campaign
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="../campaign/start-campaign.php">start a campaign</a></li>
					<li><a class="dropdown-item" href="../campaign/volunteer-campaign.php">Volunteer</a></li>
				</ul>
			</a> 

		</li>
     	<li><a href="https://limitless-lake-16886.herokuapp.com/dashboard/ivrCalls" target="_blank">IVR</a></li>
	

	<li><a href="../contact.php">Contact Us</a></li>
	</ul>

	<div id="notloggedin" class="dropdown" style="float: right">
				    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login/Signup
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu" style="position:absolute;right:0px">
				      <li><a href="user_management/orgregister.php">Signup as Organization</a></li>
				      <li><a href="user_management/signup1.php">Signup as Individual</a></li>
				      <li><a href="user_management/orglogin.php">Login as Organization</a></li>
				      <li><a href="user_management/userlogin.php">Login as Individual</a></li>
				    </ul>
	</div>

	<div id="loggedin" style="float: right">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img src="icon_user.png" alt="Profile image" class="img-circle" /><span class="caret"></span></button>
		<ul class="dropdown-menu" style="position:absolute;right:0px">
				      <li><a href="dashboard.php">Dashboard</a></li>
				      <li><a href="./logout.php" class="btn btn-danger">Logout</a></li>
		</ul>
	</div>


  </div>
</nav>
<!-- <?php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		<?php 
		if(isset($_SESSION['username'])){

		?>
				$("#notloggedin").hide();
		        $("#loggedin").show();
		<?php
		    }else{
		?>
		    	$("#notloggedin").show();
		        $("#loggedin").hide();
		<?php
		    } 		
		?>

	</script>
	

</body>
</html>