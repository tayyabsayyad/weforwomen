<?php

include("../resources/header.php");
if (isset($_POST['submit'])) {
	$con = mysqli_connect('shareddb-i.hosting.stackcp.net', 'ischyro',"yash4321",'weforwomen-33376a73');
	if(!$con){
		echo '<script type="text/javascript">alert("Connection Not Established"); </script>'; 
	}
	$orgusername = $_POST['orgusername'];
	$orgname = $_POST['orgname'];
	$empid = $_POST['empid'];
	$cuntry = $_POST['country'];
	$lcation = $_POST['location'];
	$eail = $_POST['email'];
	$pin = $_POST['pin'];
	$pan = $_POST['pan'];
	// $logo = $_POST['logo'];
	$license = $_POST['license'];
	$gst = $_POST['gst'];
	$cst = $_POST['cst'];
	$wct = $_POST['wct'];
	$contact1 = $_POST['contact1'];
	$contact2 = $_POST['contact2'];
	$contact3 = $_POST['contact3'];
	$orgdes = $_POST['orgdes'];
	$orgtype = $_POST['orgtype'];

	// $ismentor = $_POST['ismentor'];
	$pssword = $_POST['pwd'];
	// $uid = $_POST['UID'];
	// $mobile= $_POST['mobile'];
	$cpassword = $_POST['pwd2'];
	// $gender = $_POST['gender'];
	// $orgname = $_POST['orgname'];
	// $orgrep = $_POST['orgrep'];





	if($cpassword == $pssword){

		$sql2 = "SELECT * from organization where org_username = '$orgusername'";
				$query_run2 = mysqli_query($con, $sql2);
				if(mysqli_num_rows($query_run2)>0){
					echo '<script type=text/javascript>alert("User already exixts");</script>';
				}else{

		$sql = "INSERT INTO organization(org_username,org_name,emp_id,org_country,org_location,org_pin,org_license_no,org_gstn_no,org_cstn_no,org_wct_no,org_pan,org_contact_no1,org_contact_no2,org_contact_no3,org_password,org_email,org_description,org_type) VALUES('$orgusername','$orgname','$empid','$cuntry','$lcation',$pin,$license,$gst,$cst,$wct,'$pan','$contact1',  '$contact2','$contact3','$pssword','$eail','$orgdes','$orgtype')";		

		$query_run = mysqli_query($con, $sql);
		if($query_run){
			 
			echo '<script type="text/javascript">alert("User registered"); </script>';
		}else{
				echo '<script type="text/javascript">alert("User not registered"); </script>';
		}
	}}else{
		echo '<script type="text/javascript">alert("Please Enter Valid Credentials"); </script>';

	}

	// $sql = "SELECT * from aadhar ";
	// $query_run = mysqli_query($con, $sql);
	// if($query_run){

	// 	while( $rows = mysqli_fetch_array($query_run))
	// 	{
	// 		$u = $rows['UID'];
	// 		$n = $rows['name'];
	// 		$m = $rows['mobile'];
	// 		if($pssword == $cpassword)
	// 		{						
	// 				$sql1 = "INSERT INTO organization(org_username,org_name,emp_id,org_country,org_location,org_pin,org_license_no,org_gstn_no,org_cstn_no,org_wct_no,org_pan,org_contact_no1,org_contact_no2,org_contact_no3,org_password,org_email,org_description,org_type) VALUES('$orgusername','$orgname','$empid','$cuntry','$lcation',$pin,$license,$gst,$cst,$wct,'$pan','$contact1',  '$contact2','$contact3','$pssword','$eail','$orgdes','$orgtype')";

	// 				$query_run2 = mysqli_query($con, $sql1);
					
	// 				if($query_run2){
	// 					echo '<script type="text/javascript">alert("User registered"); </script>';
	// 				}else{
	// 					echo '<script type="text/javascript">alert("User not registered"); </script>';
	// 				}				
	// 		}else{
	// 			echo '<script type="text/javascript">alert("Please Enter Valid Credentials"); </script>';
	// 		}
	// 	}
	 // }
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



	<!-- Login Code starts here  -->
  <div class="container">

			<h1 style="text-align:center">Organization Sign Up</h1>
							<br>
				
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
							<form class="form-horizontal" role="form" method="post" action="orgregister.php">

								<div class="form-group">
									<label class="control-label col-sm-4" for="name">User Name:</label>
									<div class="col-sm-4">
        								<input type="text" class="form-control" id="name" placeholder="Username" name="orgusername">
      								</div>
								</div>





								<div class="form-group">
										<label class="control-label col-sm-4" for="lname">Organization Name:</label>
										<div class="col-sm-4">
		        							<input type="text" class="form-control" id="orgname" placeholder="Organization Name" name="orgname" required="yes">
		      							</div>

							</div>

							<div class="form-group">
										<label class="control-label col-sm-4" for="lname">Employee Id:</label>
										<div class="col-sm-4">
		        							<input type="number" class="form-control" id="UID" placeholder="Id of Employee who will manage" name="empid" >
		      							</div>

							</div>
					
								
								<!--   <div class="form-group">
													<label class="control-label col-sm-4" for="image">Add Logo</label>
														<div class="col-sm-4">
													<input type="file" accept="image/*" class="form-control" name="logo">
														</div> 
												</div>
 -->
								<!-- <div class="form-group">
									<label class="control-label col-sm-4" for="name">First Name:</label>
									<div class="col-sm-4">
        								<input type="text" class="form-control" id="name" placeholder="First Name" name="fname">
      								</div>
								</div>


								<div class="form-group">
									<label class="control-label col-sm-4" for="name">Last Name:</label>
									<div class="col-sm-4">
        								<input type="text" class="form-control" id="name" placeholder="First Name" name="lname">
      								</div>
								</div> -->
									<div class="form-group">
										<label class="control-label col-sm-4" for="lname">Country:</label>
										<div class="col-sm-4">
			        						<input type="text" class="form-control" id="country" placeholder="Country" name="country">
			      						</div>
							    </div>
									<div class="form-group">
														<label class="control-label col-sm-4" for="location" name="location">Location:</label>
														<div class="col-sm-4">
															<select id="drop-location" name="location">
<option>Ahmedabad</option> 
<option>Bengaluru/Bangalore</option>
<option>Chandigarh</option>
<option>Chennai</option>
<option>Delhi</option>
<option>Gurgaon</option>
<option>Hyderabad/Secunderabad</option>
<option>Kolkatta</option>
<option>Mumbai</option>
<option>Noida</option>
<option>Pune</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
<option>Anantapur</option>
<option>Guntakal</option>
<option>Guntur</option>
<option>Hyderabad/Secunderabad</option>
<option>kakinada</option>
<option>kurnool</option>
<option>Nellore</option>
<option>Nizamabad</option>
<option>Rajahmundry</option>
<option>Tirupati</option>
<option>Vijayawada</option>
<option>Visakhapatnam</option>
<option>Warangal</option>
<option>Andra Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
<option>Itanagar</option>
<option>Arunachal Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
<option>Guwahati</option>
<option>Silchar</option>
<option>Assam-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
<option>Bhagalpur</option>
<option>Patna</option>
<option>Bihar-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
<option>Bhillai</option>
<option>Bilaspur</option>
<option>Raipur</option>
<option>Chhattisgarh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
<option>Panjim/Panaji</option>
<option>Vasco Da Gama</option>
<option>Goa-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
<option>Ahmedabad</option>
<option>Anand</option>
<option>Ankleshwar</option>
<option>Bharuch</option>
<option>Bhavnagar</option>
<option>Bhuj</option>
<option>Gandhinagar</option>
<option>Gir</option>
<option>Jamnagar</option>
<option>Kandla</option>
<option>Porbandar</option>
<option>Rajkot</option>
<option>Surat</option>
<option>Vadodara/Baroda</option>
<option>Valsad</option>
<option>Vapi</option>
<option>Gujarat-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
<option>Ambala</option>
<option>Chandigarh</option>
<option>Faridabad</option>
<option>Gurgaon</option>
<option>Hisar</option>
<option>Karnal</option>
<option>Kurukshetra</option>
<option>Panipat</option>
<option>Rohtak</option>
<option>Haryana-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
<option>Dalhousie</option>
<option>Dharmasala</option>
<option>Kulu/Manali</option>
<option>Shimla</option>
<option>Himachal Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
<option>Jammu</option>
<option>Srinagar</option>
<option>Jammu and Kashmir-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
<option>Bokaro</option>
<option>Dhanbad</option>
<option>Jamshedpur</option>
<option>Ranchi</option>
<option>Jharkhand-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
<option>Bengaluru/Bangalore</option>
<option>Belgaum</option>
<option>Bellary</option>
<option>Bidar</option>
<option>Dharwad</option>
<option>Gulbarga</option>
<option>Hubli</option>
<option>Kolar</option>
<option>Mangalore</option>
<option>Mysoru/Mysore</option>
<option>Karnataka-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
<option>Calicut</option>
<option>Cochin</option>
<option>Ernakulam</option>
<option>Kannur</option>
<option>Kochi</option>
<option>Kollam</option>
<option>Kottayam</option>
<option>Kozhikode</option>
<option>Palakkad</option>
<option>Palghat</option>
<option>Thrissur</option>
<option>Trivandrum</option>
<option>Kerela-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
<option>Bhopal</option>
<option>Gwalior</option>
<option>Indore</option>
<option>Jabalpur</option>
<option>Ujjain</option>
<option>Madhya Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
<option>Ahmednagar</option>
<option>Aurangabad</option>
<option>Jalgaon</option>
<option>Kolhapur</option>
<option value="Mumbai">Mumbai</option>
<option>Mumbai Suburbs</option>
<option>Nagpur</option>
<option>Nasik</option>
<option>Navi Mumbai</option>
<option>Pune</option>
<option>Solapur</option>
<option>Maharashtra-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
<option>Imphal</option>
<option>Manipur-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
<option>Shillong</option>
<option>Meghalaya-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
<option>Aizawal</option>
<option>Mizoram-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
<option>Dimapur</option>
<option>Nagaland-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
<option>Bhubaneshwar</option>
<option>Cuttak</option>
<option>Paradeep</option>
<option>Puri</option>
<option>Rourkela</option>
<option>Orissa-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
<option>Amritsar</option>
<option>Bathinda</option>
<option>Chandigarh</option>
<option>Jalandhar</option>
<option>Ludhiana</option>
<option>Mohali</option>
<option>Pathankot</option>
<option>Patiala</option>
<option>Punjab-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
<option>Ajmer</option>
<option>Jaipur</option>
<option>Jaisalmer</option>
<option>Jodhpur</option>
<option>Kota</option>
<option>Udaipur</option>
<option>Rajasthan-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
<option>Gangtok</option>
<option>Sikkim-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
<option>Chennai</option>
<option>Coimbatore</option>
<option>Cuddalore</option>
<option>Erode</option>
<option>Hosur</option>
<option>Madurai</option>
<option>Nagerkoil</option>
<option>Ooty</option>
<option>Salem</option>
<option>Thanjavur</option>
<option>Tirunalveli</option>
<option>Trichy</option>
<option>Tuticorin</option>
<option>Vellore</option>
<option>Tamil Nadu-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
<option>Agartala</option>
<option>Tripura-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
<option>Chandigarh</option>
<option>Dadra-Nagar Haveli-Silvassa</option>
<option>Daman-Diu</option>
<option>Delhi</option>
<option>Pondichery</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
<option>Agra</option>
<option>Aligarh</option>
<option>Allahabad</option>
<option>Bareilly</option>
<option>Faizabad</option>
<option>Ghaziabad</option>
<option>Gorakhpur</option>
<option>Kanpur</option>
<option>Lucknow</option>
<option>Mathura</option>
<option>Meerut</option>
<option>Moradabad</option>
<option>Noida</option>
<option>Varanasi/Banaras</option>
<option>Uttar Pradesh-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
<option>Dehradun</option>
<option>Roorkee</option>
<option>Uttaranchal-Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
<option>Asansol</option>
<option>Durgapur</option>
<option>Haldia</option>
<option>Kharagpur</option>
<option>Kolkatta</option>
<option>Siliguri</option>
<option>West Bengal - Other</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Other-</i></font></option>
<option>Other</option>
</select>


					      						</div>
											    </div>

											    <div class="form-group">
									<label class="control-label col-sm-4" for="email">Pin Code:</label>
									<div class="col-sm-4">
		        						<input type="number" class="form-control" id="pin" placeholder="Pin-Code" name="pin" pattern="\d*" maxlength="6">
		      						</div>		
						    </div>


								<div class="form-group">
									<label class="control-label col-sm-4" for="email">License No: :</label>
									<div class="col-sm-4">
		        						<input type="number" class="form-control" id="license" placeholder="License no." name="license">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="email">GSTN No: :</label>
									<div class="col-sm-4">
		        						<input type="number" class="form-control" id="gst" placeholder="GST No " name="gst">
		      						</div>		
						    </div>

						     <div class="form-group">
									<label class="control-label col-sm-4" for="email">CSTN No: :</label>
									<div class="col-sm-4">
		        						<input type="number" class="form-control" id="cst" placeholder="CST No " name="cst">
		      						</div>		
						    </div>

						     <div class="form-group">
									<label class="control-label col-sm-4" for="email">WCT No: :</label>
									<div class="col-sm-4">
		        						<input type="number" class="form-control" id="wct" placeholder="WCT No " name="wct">
		      						</div>		
						    </div>

						    	<div class="form-group">
									<label class="control-label col-sm-4" for="email">Pan No:</label>
									<div class="col-sm-4">
		        						<input type="text" class="form-control" id="pan" placeholder="Pan no." name="pan" pattern="\d*" maxlength="6">
		      						</div>		
						    </div>

						     <div class="form-group">
									<label class="control-label col-sm-4" for="email">Contact No 1: :</label>
									<div class="col-sm-4">
		        						<input type="Tell" class="form-control" id="contact1" placeholder="Contact No 1 " name="contact1">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="email">Contact No 2 :</label>
									<div class="col-sm-4">
		        						<input type="Tell" class="form-control" id="contact2" placeholder="Contact No 2 " name="contact2">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="email">Contact No 3 :</label>
									<div class="col-sm-4">
		        						<input type="Tell" class="form-control" id="contact3" placeholder="Contact No 3 " name="contact3">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="pwd">Password: :</label>
									<div class="col-sm-4">
		        						<input type="password" class="form-control" id="pwd" placeholder="Password " name="pwd">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
									<div class="col-sm-4">
		        						<input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd2">
		      						</div>
						    	</div>

						    	<div class="form-group">
									<label class="control-label col-sm-4" for="email">Email:</label>
									<div class="col-sm-4">
		        						<input type="email" class="form-control" id="email" placeholder="E-Mail" name="email">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="email">Organization Description:</label>
									<div class="col-sm-4">
		        						<input type="text" class="form-control" id="email" placeholder="Describe your Organization" name="orgdes">
		      						</div>		
						    </div>

						    <div class="form-group">
									<label class="control-label col-sm-4" for="location" name="orgtype">Organization Type:</label>
									<div class="col-sm-4">
									<select id="drop-location" name="orgtype">
									<option value="Agriculture">Agriculture</option> 
									<option value="Manufacture">Manufacture</option>
									<option value="Medicines">Medicines</option>
									<option value="Information Technology">Information Technology</option>
									<option value="Construction">Construction</option>
									<option value="Income Tax">Income Tax</option>
									<option value="Textiles">Textiles</option>
									<option value="Outsource">Outsource</option>
									</select>
									</div></div>


							
						  
						    	
							
							
						<div class="modal-footer">
							<div class="col-sm-offset-4 col-sm-4">
							<button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color:#FE0017;">Sign Up</button>
						</div>
					</div>
						</form>
		</div>
	</body>
	</html>
