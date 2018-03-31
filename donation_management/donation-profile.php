<?php
session_start();
    $con = mysqli_connect("localhost", "root", "", "weforwomen");
    $_SESSION['current_user_id'] = 1;
    if(isset($_SESSION['donation_id'])){
        $donation_profile_id = $_SESSION['donation_id'];
        $queryProfile = "SELECT * from give_donation where donation_id = ".$donationid;
        $resultProfile = mysqli_query($con, $queryProfile);
        $row = mysqli_fetch_array($resultProfile);

        $user_id = $row['user_id'];
        $org_id = $row['org_id'];

        // $stateId = $row['job_post_state'];
        // $cityId = $row['job_post_city'];

        // $stateQuery = "select * from state where StCode =".$stateId;
        // $cityQuery = "select * from district where DistCode =".$cityId;

        // $stateResult = mysqli_query($con, $stateQuery);
        // $cityResult = mysqli_query($con, $cityQuery);

        // $stateRow = mysqli_fetch_array($stateResult);
        // $cityRow = mysqli_fetch_array($cityResult);

        // $stateName = $stateRow['StateName'];
        // $cityName = $cityRow['DistrictName'];

        if($user_id == 0){
            $query2 = "SELECT * from organization where org_id =".$org_id;
            $resultProvider = mysqli_query($con, $query2);
            $rowProvider = mysqli_fetch_array($resultProvider);
            $providerName = $rowProvider['org_username'];
            $providerEmail = $rowProvider['org_email'];
            $providerDesc = $rowProvider['org_description'];
        }
        else {
            $query2 = "SELECT * from register where user_id =".$user_id;
            $resultProvider = mysqli_query($con, $query2);
            $rowProvider = mysqli_fetch_array($resultProvider);
            $providerName = $rowProvider['user_fname'];
            $providerEmail = $rowProvider['user_email'];
            $providerDesc = "Individual";
        }

    }
    else{
        header('Location: give-donation.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="profile.css"/>
    
    <title>Donation Profile</title>
</head>
<body>
<br/><br/><br/>
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="inner-container">
                <div class="donation-title"><strong>Oraganization Title: </strong><?php echo $row['donation_title']?></div>
                <div class="donation-org"><strong>Organization Name: </strong><?php echo $providerName?></div>
                <div class="donation-from"><strong>Started from :</strong> <?php echo $row['donation_start_date']?></div>
                <div class="donation-to"><strong>End till :</strong><?php echo $row['donation_end_date']?> </div>
                <div class="description"><strong>Donation Description :</strong> <br/>&nbsp &nbsp<?php echo $row['donation_desc']?></div>
                <div class="getamount"><strong>Get Amount : </strong> Rs.  <?php echo $row['donation_get_amount']?>  </div>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="donation-profile.php" method="post">
                            <button type="submit" name="submit" class = "btn btn-primary custom-apply-btn">Donate</button>
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
        header('Location:submit-image.php');
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
        window.location.href = "give-donation.php";
    }
</script>
</body>
</html>