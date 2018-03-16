<?php
include("resources/config.php");
include("header.php");

	if(isset($_POST['submit'])){

		// For saving the image into folder
		$name       = $_FILES['img']['name'];  
    	$temp_name  = $_FILES['img']['tmp_name'];  
    	if(isset($name)){
        	if(!empty($name)){      
            	$location = 'img/campaign/';//records will be inserted in this path  
 	
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    	}  else {
        	echo 'You should select a file to upload !!';
    	}





		$type=$_POST['type'];
		$cat=$_POST['category'];
		$cause=$_POST['cause'];
		$desc=$_POST['desc'];
		$amt=$_POST['amount'];
		$no=$_POST['nv'];
		$dur=$_POST['duration'];
		$fk = 1;

		if($type == "donation" || $type == "investment"){
			$ins= "INSERT INTO needsupport (type_of_help,duration,cause,amount,support_desc,category, fk_r_id) VALUES('$type',$dur,'$cause',$amt,'$desc','$cat', $fk)";
			$query=mysqli_query($conn,$ins);
			if ($query) {
	    		echo "New record created successfully";
			}
			else {
	    		echo "Error: " ;
			}
		}else if ($type == "volunteer") {
			$ins= "INSERT INTO needsupport (type_of_help,duration,cause,support_desc,category, fk_r_id) VALUES('$type',$dur,'$cause','$desc','$cat', $fk)";
			$query=mysqli_query($conn,$ins);
			if ($query) {
	    		echo "New record created successfully";
			}
			else {
	    		echo "Error: " ;
			}
		}


	}

//uploading image 

	//no database and connectivity is required in this



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
</head>

<body>

	<!--pics-->

				<div id="img_container">
					<img src="img/support_01.png" style="width:100%;">
						<h2 id="banner">Get Support </h2>
					</div>

	<!-- form code-->

	<form action="Support.php" method="post" class="form-horizontal" id="form" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label col-md-offset-1 col-md-3" id="support_type" name="type">Type</label>
				<div id="type" class="col-sm-4">
						<select name="type" id="type_select">
								<option value="select">--select--</option>
								<option value="donation" id="s">Donation</option>
								<option value="investment"id="s">Investment</option>
								<option value="volunteer"id="s">Volunteering</option>
					  </select>
				</div>
			</div>

			<div class="form-group" id="ctgry_div">
				<label class="control-label col-md-offset-1 col-md-3" id="category" name="category">Category</label>
					<div class="col-sm-4">
						<select name="category" >
								<option value="select">--select--</option>
								<option value="Arts" class="s">Art (Fine Arts/Performing Arts)</option>
								<option value="Teaching" class="s">Teaching</option>
								<option value="ST" class="s">Science & Technology</option>
								<option value="BC" class="s">Banking & Commerce</option>
								<option value="Legalities" class="s">Legalities </option>
								<option value="Others" class="s">Others</option>
						</select>
					</div>
				</div>

				<div class="form-group" id="cause_div">
					<label class="control-label col-md-offset-1 col-md-3" id="s" name="cause" >Cause</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="cause" placeholder="Cause Title">
						</div>
				</div>

				<div class="form-group" id="image_div">
					<label class="control-label col-md-offset-1 col-md-3" id="s" name="img" draggable="true">Add Image</label>
						<div class="col-sm-4">
							<input type="file" class="form-control" name="img">
						</div>
				</div>

				<div class="form-group" id="description_div">
					<label class="control-label col-md-offset-1 col-md-3" id="s" name="desc">Description</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="box" name="desc">
						</div>
				</div>

				<div class="form-group" id="amount_div">
					<label class="control-label col-md-offset-1 col-md-3" id="s" name="amount">Amount (INR)</label>
						<div class="col-sm-4">
							<input type="number" class="form-control" name="amount" placeholder="Indian Rupees">
						</div>
				</div>

				<div class="form-group" id="no_of_ppl_div">
					<label class="control-label col-md-offset-1 col-md-3" id="s" name="nv">No. of Volunteers</label>
						<div class="col-sm-4">
							<input type="number" class="form-control" name="nv" placeholder="Enter the number of volunteers required">
						</div>
				</div>

				<div class="form-group" id="duration_div">
					<label class="control-label col-md-offset-1 col-md-3" id="s" name="duration" >Duration</label>
						<div class="col-sm-4">
							<input type="number" class="form-control" name="duration"placeholder="Duration in Hours">
					  </div>
			 </div>

			 <div class="form-group">
				 <div class="col-md-offset-5 col-sm-4">
					 <input type="submit" value="Submit" name="submit" id="sumbit"/>
				 </div>
			 </div>

</form>

		


</body>
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
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(function(){
            $("#type_select").change(function(){
            	if($(this).val() == "donation"){
            		// $("#").show();
            		$("#amount_div").show();
            		$("#no_of_ppl_div").hide();
            	}else if ($(this).val() == "investment") {
            		$("#amount_div").show();
            		$("#no_of_ppl_div").hide();
            	}else if ($(this).val() == "volunteer") {
            		$("#no_of_ppl_div").show();
            		$("#amount_div").hide();
            	}

            });
        });
    </script>


</html>

<?php
include("footer.php");
?>
