<?php
session_start();

$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");
$query = "select * from job_post order by job_post_id desc";
$result = mysqli_query($con,$query);

if(isset($_POST['submit'])){
    $_SESSION['job_id'] = $_POST['job-id'];
    header("Location:submit-resume.php");
    exit();
}
?>
<!-- is_numeric() -->





<!-- <?php
if(isset($_POST['apply'])){

}
?> -->




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Get Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
    <link rel = "stylesheet" href="../css/get-job.css"/>
    
</head>
<body>
    <div class="container">
    <?php
  
    while($rows = mysqli_fetch_array($result)){
        $queryState = "select StateName from state where StCode =". $rows['job_post_state'];
        $queryCity = "select DistrictName from district where DistCode = ".$rows['job_post_city'];

        $resultState = mysqli_query($con,$queryState);
        $resultCity = mysqli_query($con, $queryCity);

        $cityName = mysqli_fetch_array($resultCity);
        $stateName = mysqli_fetch_array($resultState);

        $time = substr($rows['job_post_start_time'],0,10);


        $job_box = "<div class=\"row\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"job-content\">
                <div class=\"job-brief\">
                    <div class=\"job-title\">".$rows['job_post_title']."</div>
                    <div class=\"job-provider\">".$rows['job_post_org']."</div>
                    <div class=\"job-desc\">".$rows['job_post_description']."</div>
                    <div class=\"job-desc\">Skills : ".$rows['job_post_skills']."</div>
                    <div class=\"job-location\">".$cityName[0].', '.$stateName[0]."</div>
                    <div class=\"job-duration\">Duration : ".$rows['job_post_duration']." days</div>
                </div>
                    <div class=\"job-brief-bottom\">posted on ".$time."<button id=\"".$rows['job_post_id']."\" class=\"btn btn-primary custom-apply-btn\" name=\"appy\" onclick=\"applyFunction(this)\">Apply</button></div>
                </div>
            </div>
        </div>";

        echo $job_box;
    }
    
    
    
    
    ?>





        <!-- <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="job-content">
                    <div class="job-brief">
                        <div class="job-title">Job title</div>
                        <div class="job-provider">Job provider</div>
                        <div class="job-desc">
                            something something something something something something something something something something something something something something 
                            something something something something something something something 
                        </div>
                        <div class="job-location ">Job Location</div>
                        <div class="job-duration ">Job Duration</div>
                           
                    </div>
                    <div class="job-brief-bottom">
                        posted on january first.
                        <button class="btn btn-primary custom-apply-btn">Apply</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</body>
<script type="text/javascript">
    
    function applyFunction(elem){

    
       var ab= elem.id;
       document.getElementById("job-id").value = ab;
       document.getElementById("submit").click();

        
    }
</script>
<form action="get-job.php" method="POST">
    <input type = "number" name="job-id" hidden id="job-id"/>
    <input type="submit" name="submit" id="submit" hidden/>
</form>








</html>
