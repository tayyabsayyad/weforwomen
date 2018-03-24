<?php

include('resources/config.php');
 

 
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --> 
       	 <meta name="description" content="Circle Hover Effects with CSS Transitions" />
        <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/style6.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
</head>
<body>

<?php
include ('resources/header.php');
?>




<div class="container-fluid">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
       <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="p1.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="p2.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="p3.jpg" style="width:100%;">
      </div>

       <div class="item">
        <img src="p4.jpg" style="width:100%;">
      </div>

        <div class="item">
        <img src="p5.jpg" style="width:100%;">
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





 <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="img1" data-slide-to="0" class="active"></li>
    <li data-target="img2" data-slide-to="1"></li>
    <li data-target="img3" data-slide-to="2"></li>
  </ol>  
       

	<div class="container-fluid" id="full">

		<div id="full" class="carousel slide" data-ride="carousel">
			
			<div class="carousel-inner" id="test">

				<div class="item active" id="img1">
					<img src="p1.jpg"style="width:100%;" id="img1">
					<button class="button" id="button"><p id="btxt">Donate</p></button>
					<div class="carousel-caption">
						<p style="font-size:35px;">Your Contribution Can Go a Long Way </p>
					</div>
				</div>

				<div class="item" id="img2">
					<img src="p2.jpg" style="width:100%;" id="img2">
					<div class="carousel-caption">
						<p style="font-size:35px;"></p>
					</div>
				</div>

				<div class="item" id="img3">
					<img src="p3.jpg" style="width:100%;" id="img3">
					<div class="carousel-caption">
						<p style="font-size:35px;"></p>
					</div>
				</div>

			</div>
 -->
			<!-- Left and right controls -->
			<!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div> -->

			<div class="container-fluid" id="full">
				<h1 id="dope1">Empower Women</h1>
				<h1 id="dope2">Change Lives.</h1>
			</div>


				<!-- buttons-->

	<div class="container">
		<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1" style="background-image: url(images/16.jpg);">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1" style="background-image: url(images/16.jpg);"></div>
									<div class="ch-info-back">
										<h3 style="color:blue;font-weight: bold;">DONATE</h3>
										<p><a href="donate.php" style="color: red; font-size: 15px;">CLICK HERE TO DONATE</a></p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2" style="background-image: url(images/17.jpg);">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2" style="background-image: url(images/17.jpg);"></div>
									<div class="ch-info-back">
										<h3 style="color:blue;font-weight: bold;">INVEST</h3>
										<p><a href="invest.php" style="color: red; font-size: 15px;">CLICK HERE TO INVEST</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3" style="background-image: url(images/18.jpg);">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3" style="background-image: url(images/18.jpg);"></div>
									<div class="ch-info-back">
										<h3 style="color:blue;font-weight: bold;">VOLUNTEER</h3>
										<p><a href="invest.php" style="color: red; font-size: 15px;">CLICK HERE TO VOLUNTEER</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-4" style="background-image: url(images/19.jpg);">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-4" style="background-image: url(images/19.jpg);"></div>
									<div class="ch-info-back">
										<h3 style="color:blue;font-weight: bold;">GET JOB</h3>
										<p><a href="job_management/get-job.php" style="color: red; font-size: 15px;">CLICK HERE TO GET JOB</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-5" style="background-image: url(images/20.jpg);">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-5" style="background-image: url(images/20.jpg);"></div>
									<div class="ch-info-back">
										<h3 style="color:blue;font-weight: bold;">POST JOB</h3>
										<p><a href="job_management/post-job.php" style="color: red; font-size: 15px;">CLICK HERE TO POST JOB</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				
			</section>
        </div>



			<!-- some private borrowed Code Testing-->


     <?php
     include("resources/footer.php");
     ?>

</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#button1").hover(function(){
        $("#button1").animate({
            height: '180px',
            width: '180px',


        });
    });
		$("#button2").hover(function(){
        $("#button2").animate({
            height: '180px',
            width: '180px'

        });
    });
		$("#button3").hover(function(){
        $("#button3").animate({
            height: '180px',
            width: '180px'

        });
    });
		$("#button4").hover(function(){
        $("#button4").animate({
            height: '180px',
            width: '180px'

        });
    });
		$("#button5").hover(function(){
        $("#button5").animate({
            height: '180px',
            width: '180px'

        });
    });
});
</script> -->
<style>
		.container-fluid{
			margin:0px;
			border:0px;
		}
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
			color:#FFFFFF;
			top:210px;
			left:450px;
		}
		#legal{
			background-color: #0082ca;
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
			color:white;
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
	</style>
</html>
