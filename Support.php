<?php

include("resources/config.php");
include("resources/header.php");

?>

<?php

	if(isset($_POST['submit'])){
$conn = mysqli_connect('localhost','root',"","weforwomen");
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
		

		if($type == "donation" || $type == "investment"){
			$ins= "INSERT INTO needsupport (type_of_help,duration,cause,amount,support_desc,category) VALUES('$type',$dur,'$cause',$amt,'$desc','$cat')";
			$query=mysqli_query($conn,$ins);
			if ($query) {
	    		echo "New record created successfully";
			}
			else {
	    		echo "Error: " ;
			}
		}else if ($type == "volunteer") {
			$ins= "INSERT INTO needsupport (type_of_help,duration,cause,nv,support_desc,category) VALUES('$type',$dur,'$cause',$no,'$desc','$cat')";
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
</head>

<body>

	<!--pics-->

				<div id="img_container">
					<img src="images/support_01.png" style="width:100%;">
						<h2 id="banner">Get Support </h2>
					</div>

	<!-- form code-->

	<form action="Support.php" method="post" class="form-horizontal" id="form" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label col-md-offset-1 col-md-3" id="support_type" name="type">Type</label>
				<div id="type" class="col-sm-4">
						<select name="type" id="type_select">
								<option value="select">--select--</option>
								<option value="donation" >Donation</option>
								<option value="investment">Investment</option>
								<option value="volunteer">Volunteering</option>
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
include("resources/footer.php");
?>
