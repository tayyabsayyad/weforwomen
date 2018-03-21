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
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-default" id="navigation">
		<div class="container-fluid">
			<!--meant for branding of the website-->
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>		
				 </button>-->
				<img src="img/w4wbrand.png" class="navbar-brand" id="brand">
			</div>

			<!--left hand side options-->
			<div class="collapse navbar-collapse" id="#mainNavBar">

				<h4>
					<ul class="nav navbar-nav">
						<li><a href="index.php" id="blink" style="color:black;">Home</a></li>
						<li><a href="about.php" id="blink" style="color:black;">About</a></li>



						<li>
						<li><a href="about.php" id="blink" style="color:black;">You can</a></li>
							<!-- <div class="dropdown" style="float: right">
						    	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">You Can
						    	<span class="caret"></span></button>
								<ul class="dropdown-menu" style="position:absolute;right:0px">
						    	  <li><a href="#">Get a Job</a></li>
						      	<li><a href="#">Post a Job</a></li>
						      </ul>
							</div> -->
						</li>
						

						<li><a href="donate.html" id="blink" style="color:black;">Initiatives</a></li>
						<li><a href="contact.php" id="blink" style="color:black;">Contact Us</a></li>
					</ul>
				</h4>

				<div class="dropdown" style="float: right">
				    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login/Signup
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu" style="position:absolute;right:0px">
				      <li><a href="user_management/orgregister.php">Signup as Organization</a></li>
				      <li><a href="user_management/signup.php">Signup as Individual</a></li>
				      <li><a href="user_management/orglogin.php">Login as Organization</a></li>
				      <li><a href="user_management/userlogin.php">Login as Individual</a></li>
				    </ul>
				</div>
		<!-- 	
				<ul class="nav navbar-nav navbar-right">
      		<li><button type="button" id="glyph" data-target="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-user" style="color:#00e500;"></span></button> </li>
          	</ul> -->

			</div>
		</div>
	</nav>
	<style type="text/css">
		#bb{
			margin-left: 120px;
		}
		#dope1{
			position: relative;
			font-size:65px;
			margin-left: 60px;
			color:#0082ca;
		}
		#dope2{
			position: relative;
			margin-left: 600px;
			font-size: 100px;
		}

		#full{
			padding:0px;
			margin:0px;
		}
		#test{
			height:700px;
			width:100%;
		}
		#blink{
			margin-left: 30px;
			padding-left: 80px;
			font-family: 'Roboto', sans-serif;
		}
		#blink1{
			margin-left: 0px;
			padding-top:7px;
			font-family: 'Roboto', sans-serif;
			font-size: 30px;
			color:black;
		}
		#blink2{
			margin-left: 0px;
			padding-top:7px;
			font-family: 'Roboto', sans-serif;
			font-size: 30px;
			color:black;
			position: relative;
		}
		#brand{
			margin-left: 20px;

		}

		#dope1{
			font-size:120px;
		}
		#navigation{
			position:relative;
			margin-left:50px;
			background-color:white;
			margin:0px;
			padding:0px;
			border-radius:0px;
			border-color:#FFFFFF;
		}
		#txt{
			text-align: center;
		}

			#button1{
				width:170px;
				height:170px;
				margin-right: 50px;
				background-color:#FFFFFF;
				border-style:solid;
				border-color: #0082ca;
				border-radius:50%;
				border-width:2px;
			}

			#button2{
				width:170px;
				height:170px;
				margin-right: 50px;
				background-color:#FFFFFF;
				border-style:solid;
				border-color: #fe0017;
				border-radius:50%;
				border-width:2px;
			}
			#button3{
				width:170px;
				height:170px;
				margin-right: 50px;
				background-color:#FFFFFF;
				border-style:solid;
				border-color: #11B054;
				border-radius:50%;
				border-width:2px;
			}
			#button4{
				width:170px;
				height:170px;
				margin-right: 50px;
				background-color:#FFFFFF;
				border-style:solid;
				border-color: #d9b104;
				border-radius:50%;
				border-width:2px;
			}
			#button5{
				width:170px;
				height:170px;
				margin-right: 50px;
				background-color:#FFFFFF;
				border-style:solid;
				border-color: #101e45;
				border-radius:50%;
				border-width:2px;
			}

			#p{
				color:#101e45;
				padding-top: 8px;
				font-family: code light;
			}
		#email{
			margin-left: 300px;
			margin-top: 203px;
			border-style: solid;
			border-radius: 1px;
			height:40px;
			width:500px;
			background-color:#FFFFFF;
			border-color: #101e45;
		}
		#l1{
			font-family: roboto thin;
			font-size: 20px;
			color:#FFFFFF;
			top:90px;
		}
		#l2{
			font-family: roboto thin;
			font-size: 20px;
			color:#black;
			top:210px;
			left:450px;
			font-weight: bold;
		}
		#legal{
			background-color: #fbf7f5;
			height:450px;
			padding-top: 10px;
			margin-top: 40px;
		}
		#logo{
				width:20%;
				position: relative;
				padding:25px;
				top:270px;
				left:100px;
		}
		#list{
			list-style: none;
		}
		#list1{
			text-align: center;
			text-decoration: none;
			color:black;
			font-family: 'Roboto', sans-serif;
			font-size:18px;
			right:120px;
		}
		#gap{
			padding-top: 10px;
		}
		#glyph{
			appearance:none;
			-webkit-appearance:none;
			-moz-appearance:none;
			outline:none;
			border:0;
			background: transparent;
			padding-top: 15px;
			padding-left: 15px;

		}
		#close{
			margin-top: 10px;
			padding-top:10px;
		}
		#drop-country, #gender{
			display: block;
			width:100%;
			height:34px;
			padding: 6px 12px;
			line-height: 1.428;
			color:#555;
			background-color: white;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			transition: border-color:ease-in-out .15s , box-shadow ease-in-out .15s;
		}
		#banner{
			color:black;
			font-family: 'Roboto', sans-serif;
			font-size: 135px;
			position: absolute;
			top:60px;
			left:300px;
		}
		#form{
			margin-top: 60px;
		}
		#f, #s {
			font-family: roboto thin;
			font-weight: bolder;
			font-size: 18px;
			color:black;
		}
		#drop{
			display: block;
			width:100%;
			height:34px;
			padding: 6px 12px;
			line-height: 1.428;
			color:#555;
			background-color: white;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			transition: border-color:ease-in-out .15s , box-shadow ease-in-out .15s;
		}
		#box{
			height:140px;
			width:600px;
		}
		#head{
				font-family: 'Roboto', sans-serif;

				font-size: 28px;
				color:black;
		}
		#subutt{
			background-color: black;
			border-color: black;
			height:50px;
			width:200px;
			border-radius: 25px;
			box-shadow: 0px 5px 5px 0px;
		}
		#n{
			font-family: 'Roboto', sans-serif;
			font-size: 18px;
			color:white;
			padding-top: 10px;
		}
	@import url('https://fonts.googleapis.com/css?family=Roboto');
</style>
</body>
</html>
