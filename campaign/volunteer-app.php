<?php

include("../resources/config.php");
include('../resources/header.php');
if(isset($_SESSION['current_user_id']) || isset($_SESSION['current_org_id'])){

}
else{
    header("Location:start-campaign.php");
    exit();
}
?>
<?php
if(isset($_POST['submit'])){
    $campaign_id = $_SESSION['campaign_id'];
    $organisation_id = isset($_SESSION['current_org_id'])? $_SESSION['current_org_id'] : 0;
    $user_id = isset($_SESSION['current_user_id']) ? $_SESSION['current_user_id'] : 0;
    $no_of_vol = $_POST['noOfVol'];

    $query = "insert into volunteer_app(campaign_id,user_id,org_id,no_of_vol) values($campaign_id,$user_id,$organisation_id,$no_of_vol)";
    $result = mysqli_query($con, $query);
    if($result){
        echo "<script>alert('Thank You For Your Help !!! ');
        window.location = 'volunteer-campaign.php';
        </script>";
    }
    else{
        
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
    <title>Document</title>
</head>
<body>
<div>
    <img src="volunteer.png" style="width:100%;position:relative;top:-20px"></img>
</div>
    <br/>
    <br/>
    <div class="col-sm-6 col-sm-offset-3">
    <form action="volunteer-app.php" method="post">
    
        <div class="form-group">
            <label for="salary">No of Volunteers*</label>
            <input  type="number" min="0" step="1" class="form-control" name="noOfVol" id="noOfVol" required>
            
        </div>
        <div class="row">
            <div class="col-sm-6"><button type="submit" style="width:100%;margin-bottom:5px" class="btn btn-success" name="submit">volunteer</button></div>
            <div class="col-sm-6"><a href="get-job.php" class="btn btn-danger" style="width:100%">Cancel</a></div>
        <div>
        </form>
    </div>
   

</body>
</html>

 
