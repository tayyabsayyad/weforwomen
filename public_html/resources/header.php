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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/weforwomen/public_html/index.php">We4Women</a>
    </div>
   <ul class="nav navbar-nav">
		<li><a href="/weforwomen/public_html/index.php">Home</a></li>
		<li><a href="/weforwomen/public_html/about.php" >About</a></li>
		<li >
			<a href="/weforwomen/public_html/youcan.php" >You can</a></li>
		<!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> -->
			<!-- <a class="dropdown-toggle" data-toggle="dropdown">You Can
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="/weforwomen/public_html/job_management/get-job.php">Get a Job</a><br/></li>
					<li><a class="dropdown-item" href="/weforwomen/public_html/job_management/post-job.php">Post a Job</a><br/></li>
					<li><a class="dropdown-item" href="/weforwomen/public_html/Support.php">Get Support</a><br/></li>
	</ul>
			</a> -->


	</li>
	<li><a href="/weforwomen/public_html/donate.html">Initiatives</a></li>
	<li><a href="/weforwomen/public_html/contact.php">Contact Us</a></li>
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
				      <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
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