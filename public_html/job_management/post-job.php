<?php
include('../resources/header.php');
include('../resources/config.php');
 //$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");

if(isset($_POST['submit']))
{

    // $file = $_FILES['file'];
    // $filename = $_FILES['file']['name'];
    // $fileTmpLoc = $_FILES['file']['tmp_name'];
    // $fileExt = explode('.',$filename);
    // $fileActualExt = strtolower(end($fileExt));
    // $allowed = array('jpg','jpeg','png','pdf');

    // if(in_array($fileActualExt, $allowed)){
       
    //     $fileDestination = "uploads/".$filename;
    //     move_uploaded_file($fileTmpLoc, $fileDestination);
    // }


    $job_title = mysqli_real_escape_string($con, $_POST['job-title']);
    $organisation = mysqli_real_escape_string($con, $_POST['organisation']);
    $job_sector = $_POST['job-sector'];  //field = sector
    $job_desc = mysqli_real_escape_string($con, $_POST['job-desc']);
    $state = $_POST['state'];
    $city = $_POST['district']; 
    $skills = mysqli_real_escape_string($con, $_POST['skills']);
    $experience = $_POST['experience'];
    $salary= $_POST['salary'];
    $duration = $_POST['duration'];
    $vacancy = $_POST['vacancy'];
    // $job_type = $_POST['job-type'];

    $query = "INSERT INTO job_post(job_post_title,job_post_org,job_post_sector, job_post_description, job_post_state,job_post_city,job_post_skills ,job_post_exp, job_post_salary, job_post_duration, job_post_vacancy, job_post_user_id) VALUES ('$job_title', '$organisation','$job_sector', '$job_desc', $state, $city,'$skills', $experience ,$salary, $duration,$vacancy, 1)";

    $result = mysqli_query($con, $query);
    if($result){
        echo "<script type='text/javascript'>window.alert('Successfully Posted !!!')</script>";
    }
    else{
        echo "<script type='text/javascript'>window.alert('Unable to accept !!!')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Post a Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3">
            <div class="inner-content">
                <form action="post-job.php" method="post" enctype="multipart/form-data">
                <h2>Get help by helping others</h2>
                <br/><br/>
                
                <div class="form-group">
                    <label for="job-title">Project Title*</label>
                    <input type="text" class="form-control" name="job-title" id="job-title" placeholder = "e.g. Web Development" required>
                </div>                
                <div class="form-group">
                    <label for="organisation">Organisation Name*</label>
                    <input type="text" class="form-control" name="organisation" id="organisation" required>
                </div>

                <div class="form-group">
                    <label for="job-sector">job-field*</label>
                        <select class="form-control" name="job-sector" id="job-sector">
                            <option value="Agriculture">Agriculture</option>
                            <option value="Manfacture">Manfacture</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Business">Business</option>
                            <option value="=Construction">Construction</option>
                            <option value="Textile">Textile</option>
                            <option value="Other">Other</option>
                        </select>
                </div>
                <div class="row">
                    <div class= "col-sm-6">
                        <div class="form-group">
                            <label for="state">State*</label>
                            <select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" required>
                                <option value="">Select</option>
                                    <?php $query =mysqli_query($con,"SELECT * FROM state");
                                    while($row=mysqli_fetch_array($query))
                                    { 
                                        ?>
                                        <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                                        <?php
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class= "col-sm-6">
                        <div class="form-group">
                            <label for="district-list">District*</label>
                            <select name="district" id="district-list" class="form-control" required>
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="job-desc">Tell us more about your project*</label>
                    <textarea required class="form-control" rows="5" style="max-width:100%" name="job-desc" id="job-desc" placeholder = "Describe your project here ..."></textarea>
                </div>
                

                <div class="form-group">
                    <label for="skills">What skills are required?*</label>
                    <input type="text" class="form-control" name="skills" id="skills" required>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="experience">Years of Experience*</label>
                            <select required class="form-control" name="experience" id="experience">
                                <option value="0">Fresher</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="salary">Salary (Rs)*</label>
                            <input required type="number" class="form-control" name="salary" id="salary" required>
                        </div>
                    </div>



                    <!-- <div class="col-md-8">
                        <div class="form-group">
                            <label for="budget">Years of Experience</label>
                            <select class="form-control" name="budget" id="budget">
                                <option value="Micro Project (₹600 - 1500 INR)" selected="selected" label="Micro Project (₹600 - 1500 INR)">Micro Project (₹600 - 1500 INR)</option>
                                <option value="Simple project (₹1500 - 12500 INR)" label="Simple project (₹1500 - 12500 INR)">Simple project (₹1500 - 12500 INR)</option>
                                <option value="Very small project (₹12500 - 37500 INR)" label="Very small project (₹12500 - 37500 INR)">Very small project (₹12500 - 37500 INR)</option>
                                <option value="Small project (₹37500 - 75000 INR)" label="Small project (₹37500 - 75000 INR)">Small project (₹37500 - 75000 INR)</option>
                                <option value="Medium project (₹75000 - 150000 INR)" label="Medium project (₹75000 - 150000 INR)">Medium project (₹75000 - 150000 INR)</option>
                                <option value="Large project (₹150000 - 250000 INR)" label="Large project (₹150000 - 250000 INR)">Large project (₹150000 - 250000 INR)</option>
                                <option value="Larger project (₹250000 - 500000 INR)" label="Larger project (₹250000 - 500000 INR)">Larger project (₹250000 - 500000 INR)</option>
                                <option value="Very Large project (₹500000 - 1000000 INR)" label="Very Large project (₹500000 - 1000000 INR)">Very Large project (₹500000 - 1000000 INR)</option>
                                <option value="Huge project (₹1000000 - 2500000 INR)" label="Huge project (₹1000000 - 2500000 INR)">Huge project (₹1000000 - 2500000 INR)</option>
                                <option value="Major project (₹2500000 +  INR)" label="Major project (₹2500000 +  INR)">Major project (₹2500000 +  INR)</option>
                            </select>
                        </div>
                    </div> -->
                </div>
            
            
            
                <!-- <label for="pay">How do you want to pay?</label>
                <div class="radio">
                    <label><input type="radio" name="pay">Fixed price project</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="pay">Hourly project</label>
                </div> -->


                <div class="row">
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="duration">Job Duration*</label>
                            <input type="number" class="form-control" name="duration" id="duration" required placeholder="e.g. 5 days">
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="vacancy">Number of Vacancies*</label>
                            <input type="number" class="form-control" name="vacancy" id="vacancy" required>
                        </div>
                    </div>
                </div>



                <!-- <div class="form-group">
                    <label for="resume">Upload your Resume (only pdf)</label>
                    <input type="file" class="form-control" name="file" id="resume">
                </div> -->
                
                <br/><br/>
                <button class="btn btn-success"type="submit" id="submit" name="submit">Post my Project</button>
            
            <br/><br/><br/>
            
                </form>
            </div>

        </div>

    </div>
    <script src="../jquery/jquery.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
    function getdistrict(val) {
        $.ajax({
        type: "POST",
        url: "get_district.php",
        data:'state_id='+val,
        success: function(data){
            $("#district-list").html(data);
        }
        });
    }
    function selectCountry(val) {
    $("#search-box").val(val);
    $("#suggesstion-box").hide();
    }
</script>
<?php
include('../resources/footer.php');
?>
</body>
</html>
