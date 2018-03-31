<?php

include('../resources/config.php');
include('../resources/header.php');
if(isset($_SESSION['current_user_id'])){
    echo "<script>window.location = '../index.php';</script>";
    exit();
}
?>
<?php

// unset($_SESSION['current_user_id']);
// unset($_SESSION['current_org_id']);
// $_SESSION['current_org_id'] = 1;
// $_SESSION['current_user_id']= 5;

 //$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");
// if(isset($_SESSION['current_user_id']) || isset($_SESSION['current_org_id'])){
//     if(isset($_SESSION['current_org_id'])){
//         $orgId = $_SESSION['current_org_id'];
//         $queryOrg = "select * from organization where org_id = ".$orgId;
//         $resultOrg = mysqli_query($con, $queryOrg);
//         while($rowOrg = mysqli_fetch_array($resultOrg)){
//             $orgName = $rowOrg['org_username'];
//         }
//         
//          document.getElementById('organisation').disabled = true;
//         </script>
//         <?php
//     }
//     else{
//      echo "<script>document.getElementById('orgDiv').style.display='none';</script>";
//     }
// }
// else{
    
//     echo "<script>
//     alert('You Must be Logged In !!!');
//     window.location.href = 'get-job.php';</script>";
//     exit();
// }


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


    $job_title = mysqli_real_escape_string($con, $_POST['project_title']);

    // $organisation_id = isset($_SESSION['current_org_id'])? $_SESSION['current_org_id'] : 0;
    // $user_id = isset($_SESSION['current_user_id']) ? $_SESSION['current_user_id'] : 0;
    $invest_sector = $_POST['investsector'];  //field = sector
    $job_desc = mysqli_real_escape_string($con, $_POST['job-desc']);
    $state = $_POST['state'];
    $city = $_POST['district']; 
    // $skills = mysqli_real_escape_string($con, $_POST['skills']);
    // $establishment = $_POST['establishment'];
    // $salary= $_POST['salary'];
    $invest_type = $_POST['investment_type'];
    $year = $_POST['years'];
    $amount =  $_POST['amount'];
    $shares= $_POST['shares'];
    $marketprice = $_POST['marketprice'];
    // $job_type = $_POST['job-type'];

    $query = "INSERT INTO investment (job_title,invest_sector,job_desc,state,city,invest_type,year,amount,shares,market_price ) VALUES ( '$job_title', '$invest_sector', '$job_desc', '$state','$city','$invest_type',$year, $amount,$shares,$marketprice)";

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
    <title>Post an Investment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
    <script type="text/javascript">!function(t,e){"use strict";var r=function(t){try{var r=e.head||e.getElementsByTagName("head")[0],a=e.createElement("script");a.setAttribute("type","text/javascript"),a.setAttribute("src",t),r.appendChild(a)}catch(t){}};t.CollectId = "5ab7e0540873d442245a04d0",r("https://s3.amazonaws.com/collectchat/launcher.js")}(window,document);</script>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3">
            <div class="inner-content">
                <form action="post-invest.php" method="post" >
                <h2>Get Investment and Get Big</h2>
                <br/><br/>
                    
                <div class="form-group">
                    <label for="job-title">Project Title*</label>
                    <input type="text" class="form-control" name="project_title" id="project-title" placeholder = "" required>
                </div>                
                <div class="form-group" id="orgDiv">
                    <label for="organisation">Organisation Name*</label>
                    <input type="text" class="form-control" name="organisation" id="organisation" placeholder="some organisation">
                </div>

                <div class="form-group">
                    <label for="job-sector">Investment-field*</label>
                        <select class="form-control" name="investsector" id="job-sector">
                            
                            <option value="Agriculture">Agriculture</option>
                             <option value="Manfacture">Manfacture</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Business">Business</option>
                            <option value="Construction">Construction</option>
                            <option value="Textile">Textile</option>
                            <option value="Information-Technology">Information Technology</option>
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
                    <label for="skills">Investment type*</label>
                    <select required class="form-control" name="investment_type" id="experience">
                                <option value="Loan">No Interest Loan</option>
                                <option value="InterestLoan">Interest Loan</option>
                                <option value="Shares">Shares</option>
                               
                            </select>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="experience">Years of establishment*</label>
                            <select required class="form-control" name="years" id="experience">
                                <option value="0">New</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>
                    </div>
                 <!--    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="salary">Salary (Rs)*</label>
                            <input required type="number" min="0" step="1" class="form-control" name="salary" id="salary" required>
                        </div>
                    </div>
 -->


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
                    <div class="col-sm-4"> 
                        <div class="form-group">
                            <label for="duration">Amount Needed*</label>
                            <input type="number" min="0" step="1" class="form-control" name="amount" id="duration" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4"> 
                        <div class="form-group">
                            <label for="duration">Shares*</label>
                            <input type="number" min="0" step="1" class="form-control" name="shares" id="duration" required placeholder="">
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4"> 
                        <div class="form-group">
                            <label for="duration">Market Price*</label>
                            <input type="number" min="0" step="1" class="form-control" name="marketprice" id="duration" required placeholder="">
                        </div>
                    </div>
                   <!--  <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="vacancy">Number of Vacancies*</label>
                            <input type="number" min="0" step="1" class="form-control" name="vacancy" id="vacancy" required>
                        </div>
                    </div> -->
                </div>



                <!-- <div class="form-group">
                    <label for="resume">Upload your Resume (only pdf)</label>
                    <input type="file" class="form-control" name="file" id="resume">
                </div> -->
                
                <br/><br/>
                <button class="btn btn-success" type="submit" id="submit" name="submit">Post my Project</button>
            
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
            $("#district-list") .html(data);
        }
        });
    }
    function selectCountry(val) {
    $("#search-box").val(val);
    $("#suggesstion-box").hide();
    }
</script>
<?php

// unset($_SESSION['current_user_id']);
// unset($_SESSION['current_org_id']);
// $_SESSION['current_org_id'] = 1;
// $_SESSION['current_user_id']= 5;

 //$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");
if(isset($_SESSION['current_user_id']) || isset($_SESSION['current_org_id'])){
    if(isset($_SESSION['current_org_id'])){
        $orgId = $_SESSION['current_org_id'];
        $queryOrg = "select * from organization where org_id = ".$orgId;
        $resultOrg = mysqli_query($con, $queryOrg);
        while($rowOrg = mysqli_fetch_array($resultOrg)){
            $orgName = $rowOrg['org_username'];
        }
        ?>
        <script> document.getElementById('organisation').value = "<?php echo $orgName;?>"
         document.getElementById('organisation').disabled = true;
        </script>
        <?php
    }
    else{
     echo "<script>document.getElementById('orgDiv').style.display='none';</script>";
    }
}
else{
    
    echo "<script>
    alert('You Must be Logged In !!!');
    window.location.href = 'get-job.php';</script>";
    exit();
}




?>
<?php
include('../resources/footer.php');
?>



</body>
</html>

