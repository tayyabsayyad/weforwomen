<?php
session_start();
    $con = mysqli_connect("localhost", "root", "", "weforwomen");
    $_SESSION['current_user_id'] = 1;
    if(isset($_SESSION['job_id'])){
        $job_profile_id = $_SESSION['job_id'];
        $queryProfile = "select * from job_post where job_post_id = ".$job_profile_id;
        $resultProfile = mysqli_query($con, $queryProfile);
        $row = mysqli_fetch_array($resultProfile);

        $user_id = $row['job_post_user_id'];
        $org_id = $row['job_post_org_id'];

        $stateId = $row['job_post_state'];
        $cityId = $row['job_post_city'];

        $stateQuery = "select * from state where StCode =".$stateId;
        $cityQuery = "select * from district where DistCode =".$cityId;

        $stateResult = mysqli_query($con, $stateQuery);
        $cityResult = mysqli_query($con, $cityQuery);

        $stateRow = mysqli_fetch_array($stateResult);
        $cityRow = mysqli_fetch_array($cityResult);

        $stateName = $stateRow['StateName'];
        $cityName = $cityRow['DistrictName'];

        if($user_id == 0){
            $query2 = "select * from organization where org_id =".$org_id;
            $resultProvider = mysqli_query($con, $query2);
            $rowProvider = mysqli_fetch_array($resultProvider);
            $providerName = $rowProvider['org_username'];
            $providerEmail = $rowProvider['org_email'];
            $providerDesc = $rowProvider['org_description'];
        }
        else {
            $query2 = "select * from register where user_id =".$user_id;
            $resultProvider = mysqli_query($con, $query2);
            $rowProvider = mysqli_fetch_array($resultProvider);
            $providerName = $rowProvider['user_fname'];
            $providerEmail = $rowProvider['user_email'];
            $providerDesc = "Individual";
        }

    }
    else{
        header('Location: post-job.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="profile.css"/>
    
    <title>Profile</title>
</head>
<body>
<br/><br/><br/>
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="inner-container">
                <div class="job-title"><?php echo $row['job_post_title']?></div>
                <div class="job-org"><?php echo $providerName?></div>
                <div class="skills"><strong>key skills :</strong> <?php echo $row['job_post_skills']?></div>
                <div class="location"><strong>Location : </strong><?php echo $cityName.", ".$stateName ?> </div>
                <div class="description"><strong>Job Description :</strong> <br/>&nbsp &nbsp<?php echo $row['job_post_description']?></div>
                <div class="description"><strong>About <?php echo $providerName?> :</strong> <br/>&nbsp &nbsp<?php echo $providerDesc?></div>
                <div class="contact"><strong>Email : </strong><?php echo $providerEmail ?> </div>
                <div class="experience"><strong>Experience : </strong><?php echo $row['job_post_exp']?> year(s) & above</div>
                <div class="salary"><strong>Salary : </strong> Rs.  <?php echo $row['job_post_salary']?>  </div>
                <div class="duration"><strong>Duration : </strong><?php echo $row['job_post_duration']?> days</div>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="profile.php" method="post">
                            <button type="submit" name="submit" class = "btn btn-primary custom-apply-btn">Apply</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <button id= "clearSession" class = "btn btn-danger custom-cancel-btn">Cancel</button>
                    </div>
                </div>
               
                

            </div>
        </div>
      


    
    </div>
<?php
if(isset($_POST['submit'])){
    if(isset($_SESSION['current_user_id'])){
        header('Location:submit-resume.php');
        exit();
    }
    else{
        echo "<script>alert('You must be Logged In to apply');</script>";
    }
}

?>
<script>
document.getElementById("clearSession").addEventListener("click", clearSessions);
    function clearSessions(){
        <?php
            
        ?>
        window.location.href = "get-job.php";
    }
</script>
</body>
</html>