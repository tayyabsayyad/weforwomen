<?php

include("resources/config.php");
include ('resources/header.php');
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
	<link rel="stylesheet" href="css/style.css">
	
<style type="text/css">
	

</style>
</head>


<body>
<br>
	 <center><h1 class="heading" style="color:blue;">You Can</h1></center>
<!-- 
	<center>
		<h1>You can</h1>
	
		<div>
			<a href="job_management/get-job">Get a Job</a>
			<br>
			<br>
			<a href="job_management/post-job">Post a Job</a>
		</div>
	</center>
  -->
  <br>
  <br>
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="y1.jpg" style="width:100%;">
        <div class="carousel-caption">
          
        <!-- <button type="button" class="btn btn-lg btn-success" href="job_management/get-job" style="float: left;"> get a job</button> -->

        <a href="job_management/get-job.php" class="btn btn-success btn-lg">
          Get a Job <span class="glyphicon glyphicon-menu-right"></span>  
        </a>

        </div>
      </div>

      <div class="item">
        <img src="y2.jpg" style="width:100%;">
        <div class="carousel-caption">
          <a href="job_management/post-job.php" class="btn btn-success btn-lg">
          Post a Job <span class="glyphicon glyphicon-menu-right"></span>  
        </a>
        </div>
      </div>
    
      <div class="item">
        <img src="y3.jpg" style="width:100%;">
        <div class="carousel-caption">
          <a href="Support.php" class="btn btn-success btn-lg">
          Get Support <span class="glyphicon glyphicon-menu-right"></span>  
        </a>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br>
<br>
<br>
<br>
</body>
</html>

<style>

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
				font-family: roboto medium;
			}
			#blink1{
				margin-left: 0px;
				padding-top:7px;
				font-family: roboto medium;
				font-size: 30px;
				color:black;
			}
			#blink2{
				margin-left: 0px;
				padding-top:7px;
				font-family: roboto medium;
				font-size: 30px;
				color:black;
				position: relative;
			}
			#brand{
				margin-left: 80px;
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
				color:black;
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
			.list1{
				text-align: center;
				text-decoration: none;
				color:black;
				font-family: roboto light;
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
				font-family: roboto thin;
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
					font-family: roboto medium;

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
				font-family: roboto thin;
				font-size: 18px;
				color:white;
				padding-top: 10px;
			}
			h2
			{
			  text-align: center;
			  color: blue;
			}
			#para
			{
			  padding-left: 200px;
			  padding-right: 200px;
			  font-size: 20px;
			}
			#info
			{
			  font-size:25px;
			  color: red;
			}
			#banner3{
			 font-family:  'Tangerine', serif;
			  font-size: 100px;
			  position: absolute;
			  top:90px;
			  left:550px;
			  color:black;

			}

	</style>
<?php
include("resources/footer.php");
?>