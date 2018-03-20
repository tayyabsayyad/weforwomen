<?php
	if(isset($_POST['submit'])){
		$con = mysqli_connect("localhost","root","") or die("Unable to connect");
		if(!$con){
			echo "unable to connect";
		}
		else{
			echo "connection established";
			mysqli_select_db($con, "weforwomen");
			$uid = $_POST['uid'];
			$fname  = $_POST['fname'];
			$lname  = $_POST['lname'];
			$gender = $_POST['gender'];
			$country = $_POST['country'];
			$email = $_POST['email'];
			$password = $_POST['pwd'];
			$c_password = $_POST['pwd2'];
			$mobile = $_POST['mobile'];
			$sql = "select * from aadhaar where mobile = '$mobile'";
			$result = mysqli_query($con, $sql);
			if($result){
				while ($rows = mysqli_fetch_array($result)) {
					# code...
					$u = $rows['aadhar_no'];
						if ($u == $uid && $password == $c_password){
							echo '<script type="text/javascript">alert("Signed In");</script>';


							$sql1 = "insert into register(fname, lname, password, country, gender, location, email, mobile_no) values('$fname','$lname', '$password','$gender','$country',
							'$location','$email', '$mobile')";
							$query_run = mysqli_query($con, $sql1);
							if($query_run){
								echo '<script type="text/javascript">alert("User Registered");</script>';
							}else{
								echo '<script type="text/javascript">alert("User Not Registered");</script>';
							}
						}
				}
			}
			else{
				echo "afsagsa";
			}







	}

}




?>













































<?php

include('../resources/config.php');
 include ('../resources/header.php');

 
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Circle Hover Effects with CSS Transitions" />
        <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/style6.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="../js/modernizr.custom.79639.js"></script> 
</head>
<body>



	<!-- modal code-->
	<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
					<ul class="nav nav-tabs">
  					<li class="active"><a href="#">Sign Up</a></li>
  					<li ><a href="#">Login</a></li>
					</ul>
						</div>

        <!-- Modal body -->
        <div class="modal-body">
					<div class="container1">

							<h3 style="text-align:left">Sign Up</h3>
											<br>
											<form class="form-horizontal" role="form" method="post" action="homepage.php">
												<div class="form-group">
													<label class="control-label col-sm-2" for="name" name="fname">First Name:</label>
													<div class="col-sm-4">
				        					<input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
				      						</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-2" for="name" name="lname">Last Name:</label>
													<div class="col-sm-4">
				        					<input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
				      						</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-2" for="gender" name="gender">Gender:</label>
													<div class="col-sm-4">
														<select id="gender">
															<option value="m">Male</option>
															<option value="f">Female</option>
														</select>
													</div>
												</div>
													<div class="form-group">
														<label class="control-label col-sm-2" for="lname" name="country">Country:</label>
														<div class="col-sm-4">
															<select id="drop-country" name="country">
																<option value="AFG">Afghanistan</option>
																<option value="ALA">Åland Islands</option>
																<option value="ALB">Albania</option>
																<option value="DZA">Algeria</option>
																<option value="ASM">American Samoa</option>
																<option value="AND">Andorra</option>
																<option value="AGO">Angola</option>
																<option value="AIA">Anguilla</option>
																<option value="ATA">Antarctica</option>
																<option value="ATG">Antigua and Barbuda</option>
																<option value="ARG">Argentina</option>
																<option value="ARM">Armenia</option>
																<option value="ABW">Aruba</option>
																<option value="AUS">Australia</option>
																<option value="AUT">Austria</option>
																<option value="AZE">Azerbaijan</option>
																<option value="BHS">Bahamas</option>
																<option value="BHR">Bahrain</option>
																<option value="BGD">Bangladesh</option>
																<option value="BRB">Barbados</option>
																<option value="BLR">Belarus</option>
																<option value="BEL">Belgium</option>
																<option value="BLZ">Belize</option>
																<option value="BEN">Benin</option>
																<option value="BMU">Bermuda</option>
																<option value="BTN">Bhutan</option>
																<option value="BOL">Bolivia, Plurinational State of</option>
																<option value="BES">Bonaire, Sint Eustatius and Saba</option>
																<option value="BIH">Bosnia and Herzegovina</option>
																<option value="BWA">Botswana</option>
																<option value="BVT">Bouvet Island</option>
																<option value="BRA">Brazil</option>
																<option value="IOT">British Indian Ocean Territory</option>
																<option value="BRN">Brunei Darussalam</option>
																<option value="BGR">Bulgaria</option>
																<option value="BFA">Burkina Faso</option>
																<option value="BDI">Burundi</option>
																<option value="KHM">Cambodia</option>
																<option value="CMR">Cameroon</option>
																<option value="CAN">Canada</option>
																<option value="CPV">Cape Verde</option>
																<option value="CYM">Cayman Islands</option>
																<option value="CAF">Central African Republic</option>
																<option value="TCD">Chad</option>
																<option value="CHL">Chile</option>
																<option value="CHN">China</option>
																<option value="CXR">Christmas Island</option>
																<option value="CCK">Cocos (Keeling) Islands</option>
																<option value="COL">Colombia</option>
																<option value="COM">Comoros</option>
																<option value="COG">Congo</option>
																<option value="COD">Congo, the Democratic Republic of the</option>
																<option value="COK">Cook Islands</option>
																<option value="CRI">Costa Rica</option>
																<option value="CIV">Côte d'Ivoire</option>
																<option value="HRV">Croatia</option>
																<option value="CUB">Cuba</option>
																<option value="CUW">Curaçao</option>
																<option value="CYP">Cyprus</option>
																<option value="CZE">Czech Republic</option>
																<option value="DNK">Denmark</option>
																<option value="DJI">Djibouti</option>
																<option value="DMA">Dominica</option>
																<option value="DOM">Dominican Republic</option>
																<option value="ECU">Ecuador</option>
																<option value="EGY">Egypt</option>
																<option value="SLV">El Salvador</option>
																<option value="GNQ">Equatorial Guinea</option>
																<option value="ERI">Eritrea</option>
																<option value="EST">Estonia</option>
																<option value="ETH">Ethiopia</option>
																<option value="FLK">Falkland Islands (Malvinas)</option>
																<option value="FRO">Faroe Islands</option>
																<option value="FJI">Fiji</option>
																<option value="FIN">Finland</option>
																<option value="FRA">France</option>
																<option value="GUF">French Guiana</option>
																<option value="PYF">French Polynesia</option>
																<option value="ATF">French Southern Territories</option>
																<option value="GAB">Gabon</option>
																<option value="GMB">Gambia</option>
																<option value="GEO">Georgia</option>
																<option value="DEU">Germany</option>
																<option value="GHA">Ghana</option>
																<option value="GIB">Gibraltar</option>
																<option value="GRC">Greece</option>
																<option value="GRL">Greenland</option>
																<option value="GRD">Grenada</option>
																<option value="GLP">Guadeloupe</option>
																<option value="GUM">Guam</option>
																<option value="GTM">Guatemala</option>
																<option value="GGY">Guernsey</option>
																<option value="GIN">Guinea</option>
																<option value="GNB">Guinea-Bissau</option>
																<option value="GUY">Guyana</option>
																<option value="HTI">Haiti</option>
																<option value="HMD">Heard Island and McDonald Islands</option>
																<option value="VAT">Holy See (Vatican City State)</option>
																<option value="HND">Honduras</option>
																<option value="HKG">Hong Kong</option>
																<option value="HUN">Hungary</option>
																<option value="ISL">Iceland</option>
																<option value="IND" selected>India</option>
																<option value="IDN">Indonesia</option>
																<option value="IRN">Iran, Islamic Republic of</option>
																<option value="IRQ">Iraq</option>
																<option value="IRL">Ireland</option>
																<option value="IMN">Isle of Man</option>
																<option value="ISR">Israel</option>
																<option value="ITA">Italy</option>
																<option value="JAM">Jamaica</option>
																<option value="JPN">Japan</option>
																<option value="JEY">Jersey</option>
																<option value="JOR">Jordan</option>
																<option value="KAZ">Kazakhstan</option>
																<option value="KEN">Kenya</option>
																<option value="KIR">Kiribati</option>
																<option value="PRK">Korea, Democratic People's Republic of</option>
																<option value="KOR">Korea, Republic of</option>
																<option value="KWT">Kuwait</option>
																<option value="KGZ">Kyrgyzstan</option>
																<option value="LAO">Lao People's Democratic Republic</option>
																<option value="LVA">Latvia</option>
																<option value="LBN">Lebanon</option>
																<option value="LSO">Lesotho</option>
																<option value="LBR">Liberia</option>
																<option value="LBY">Libya</option>
																<option value="LIE">Liechtenstein</option>
																<option value="LTU">Lithuania</option>
																<option value="LUX">Luxembourg</option>
																<option value="MAC">Macao</option>
																<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
																<option value="MDG">Madagascar</option>
																<option value="MWI">Malawi</option>
																<option value="MYS">Malaysia</option>
																<option value="MDV">Maldives</option>
																<option value="MLI">Mali</option>
																<option value="MLT">Malta</option>
																<option value="MHL">Marshall Islands</option>
																<option value="MTQ">Martinique</option>
																<option value="MRT">Mauritania</option>
																<option value="MUS">Mauritius</option>
																<option value="MYT">Mayotte</option>
																<option value="MEX">Mexico</option>
																<option value="FSM">Micronesia, Federated States of</option>
																<option value="MDA">Moldova, Republic of</option>
																<option value="MCO">Monaco</option>
																<option value="MNG">Mongolia</option>
																<option value="MNE">Montenegro</option>
																<option value="MSR">Montserrat</option>
																<option value="MAR">Morocco</option>
																<option value="MOZ">Mozambique</option>
																<option value="MMR">Myanmar</option>
																<option value="NAM">Namibia</option>
																<option value="NRU">Nauru</option>
																<option value="NPL">Nepal</option>
																<option value="NLD">Netherlands</option>
																<option value="NCL">New Caledonia</option>
																<option value="NZL">New Zealand</option>
																<option value="NIC">Nicaragua</option>
																<option value="NER">Niger</option>
																<option value="NGA">Nigeria</option>
																<option value="NIU">Niue</option>
																<option value="NFK">Norfolk Island</option>
																<option value="MNP">Northern Mariana Islands</option>
																<option value="NOR">Norway</option>
																<option value="OMN">Oman</option>
																<option value="PAK">Pakistan</option>
																<option value="PLW">Palau</option>
																<option value="PSE">Palestinian Territory, Occupied</option>
																<option value="PAN">Panama</option>
																<option value="PNG">Papua New Guinea</option>
																<option value="PRY">Paraguay</option>
																<option value="PER">Peru</option>
																<option value="PHL">Philippines</option>
																<option value="PCN">Pitcairn</option>
																<option value="POL">Poland</option>
																<option value="PRT">Portugal</option>
																<option value="PRI">Puerto Rico</option>
																<option value="QAT">Qatar</option>
																<option value="REU">Réunion</option>
																<option value="ROU">Romania</option>
																<option value="RUS">Russian Federation</option>
																<option value="RWA">Rwanda</option>
																<option value="BLM">Saint Barthélemy</option>
																<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
																<option value="KNA">Saint Kitts and Nevis</option>
																<option value="LCA">Saint Lucia</option>
																<option value="MAF">Saint Martin (French part)</option>
																<option value="SPM">Saint Pierre and Miquelon</option>
																<option value="VCT">Saint Vincent and the Grenadines</option>
																<option value="WSM">Samoa</option>
																<option value="SMR">San Marino</option>
																<option value="STP">Sao Tome and Principe</option>
																<option value="SAU">Saudi Arabia</option>
																<option value="SEN">Senegal</option>
																<option value="SRB">Serbia</option>
																<option value="SYC">Seychelles</option>
																<option value="SLE">Sierra Leone</option>
																<option value="SGP">Singapore</option>
																<option value="SXM">Sint Maarten (Dutch part)</option>
																<option value="SVK">Slovakia</option>
																<option value="SVN">Slovenia</option>
																<option value="SLB">Solomon Islands</option>
																<option value="SOM">Somalia</option>
																<option value="ZAF">South Africa</option>
																<option value="SGS">South Georgia and the South Sandwich Islands</option>
																<option value="SSD">South Sudan</option>
																<option value="ESP">Spain</option>
																<option value="LKA">Sri Lanka</option>
																<option value="SDN">Sudan</option>
																<option value="SUR">Suriname</option>
																<option value="SJM">Svalbard and Jan Mayen</option>
																<option value="SWZ">Swaziland</option>
																<option value="SWE">Sweden</option>
																<option value="CHE">Switzerland</option>
																<option value="SYR">Syrian Arab Republic</option>
																<option value="TWN">Taiwan, Province of China</option>
																<option value="TJK">Tajikistan</option>
																<option value="TZA">Tanzania, United Republic of</option>
																<option value="THA">Thailand</option>
																<option value="TLS">Timor-Leste</option>
																<option value="TGO">Togo</option>
																<option value="TKL">Tokelau</option>
																<option value="TON">Tonga</option>
																<option value="TTO">Trinidad and Tobago</option>
																<option value="TUN">Tunisia</option>
																<option value="TUR">Turkey</option>
																<option value="TKM">Turkmenistan</option>
																<option value="TCA">Turks and Caicos Islands</option>
																<option value="TUV">Tuvalu</option>
																<option value="UGA">Uganda</option>
																<option value="UKR">Ukraine</option>
																<option value="ARE">United Arab Emirates</option>
																<option value="GBR">United Kingdom</option>
																<option value="USA">United States</option>
																<option value="UMI">United States Minor Outlying Islands</option>
																<option value="URY">Uruguay</option>
																<option value="UZB">Uzbekistan</option>
																<option value="VUT">Vanuatu</option>
																<option value="VEN">Venezuela, Bolivarian Republic of</option>
																<option value="VNM">Viet Nam</option>
																<option value="VGB">Virgin Islands, British</option>
																<option value="VIR">Virgin Islands, U.S.</option>
																<option value="WLF">Wallis and Futuna</option>
																<option value="ESH">Western Sahara</option>
																<option value="YEM">Yemen</option>
																<option value="ZMB">Zambia</option>
																<option value="ZWE">Zimbabwe</option>
															</select>

					      						</div>
											    </div>
													<div class="form-group">
														<label class="control-label col-sm-2" for="lname" name="email">Email:</label>
														<div class="col-sm-4">
					        					<input type="text" class="form-control" id="Location" placeholder="Email" name="email">
					      						</div>
											    </div>

													<div class="form-group">
														<label class="control-label col-sm-2" for="lname" name="uid">UID:</label>
														<div class="col-sm-4">
					        					<input type="text" class="form-control" id="uid" placeholder="Email" name="uid">
					      						</div>
											    </div>
													<div class="form-group">
														<label class="control-label col-sm-2" for="mobile" name="mobile">Mobile</label>
														<div class="col-sm-4">
					        					<input type="number" class="form-control" id="mobile" placeholder="mobile" name="mobile">
					      						</div>
											    </div>
												<div class="form-group">
													<label class="control-label col-sm-2" for="pwd" name="pwd">Password:</label>
													<div class="col-sm-4">
				        					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				      						</div>
										    </div>
												<div class="form-group">
													<label class="control-label col-sm-2" for="pwd" name="pwd2">Confirm Password:</label>
													<div class="col-sm-4">
				        					<input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd2">
				      						</div>
										    </div>



											<div class="col-sm-offset-2 col-sm-2">
											<button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color:#00adff;border-color:#00adff;">Sign Up</button>
										</div>

										</form>
						</div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color:#FE0017;border-color:#FE0017;">Close</button>
        </div>

      </div>
    </div>
  </div>

	<!--pics-->

	<div class="container-fluid" id="full">

		<div id="full" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->


			<!-- Wrapper for slides -->
			<div class="carousel-inner" id="test">

				<div class="item active" id="img_container">
					<img src="p1.jpg" alt="Los Angeles" style="width:100%;">
					<button class="button" id="button"><p id="btxt">Donate</p></button>
					<div class="carousel-caption">
						<p style="font-size:35px;">Your Contribution Can Go a Long Way </p>
					</div>
				</div>

				<div class="item">
					<img src="p2.jpg" alt="Chicago" style="width:100%;">
					<div class="carousel-caption">
						<p style="font-size:35px;"></p>
					</div>
				</div>

				<div class="item">
					<img src="p3.jpg" alt="New York" style="width:100%;">
					<div class="carousel-caption">
						<p style="font-size:35px;"></p>
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

			<div class="container-fluid" id="full">
				<h1 id="dope1">empower women</h1>
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
										<h1 style="color:blue;">DONATE</h1>
										
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
										<h1 style="color:blue;">INVEST</h1>
										
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
										<h1 style="color:blue;">VOLUNTEER</h1>
										
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
										<h1 style="color:blue;">GET JOB</h1>
						
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
										<h1 style="color:blue;">POST JOB</h1>
									
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
     include("../resources/footer.php");
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
