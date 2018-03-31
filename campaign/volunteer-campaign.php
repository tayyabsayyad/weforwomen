<?php

include('../resources/config.php');
include('../resources/header.php');

$query = "select * from start_campaign";

if(isset($_POST['submit2'])){
    $gef = $_POST['campaign-id2'];
    if(strcmp($gef, 0)){
        $abc = 1;
        $query = "select * from start_campaign where st_cpn_status =".$abc;
    }
    else{
        $abc = 0;
        $query = "select * from start_campaign where st_cpn_status =".$abc;
    }
}$result = mysqli_query($con, $query);



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Volunteer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
    <link rel = "stylesheet" href="../css/volunteer-campaign.css"/>
    
</head>
<body>
<div>
    <img src="volunteer.png" style="width:100%;position:relative;top:-20px;height:300px;"></img>
</div>
<br/>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="col-sm-6"><button type="submit" style="width:100%;margin-bottom:5px" class="btn btn-success" name="submit5" id="submit5">On Going Campaigns</button></div>
        <div class="col-sm-6"><button type="submit" style="width:100%;margin-bottom:5px" class="btn btn-danger" name="submit6" id="submit6">Successful Campaigns</button></div>
    </div>
<div>

<?php

while($rows1 = mysqli_fetch_array($result)){
$queryState = "select StateName from state where StCode =". $rows1['st_cpn_state'];
$queryCity = "select DistrictName from district where DistCode = ".$rows1['st_cpn_district'];

$resultState = mysqli_query($con,$queryState);
$resultCity = mysqli_query($con, $queryCity);

$cityName = mysqli_fetch_array($resultCity);
$stateName = mysqli_fetch_array($resultState);

$profile_box = 
        "<div class=\"col-sm-4\">
            <div class=\"job-content\">
                <div class=\"job-brief\">
                    <img src=\"".$rows1['st_cpn_image']."\" alt=\"image\" width=\"100%\" height=\"200\">
                    <div class=\"job-title\" id=\"".$rows1['st_cpn_title']."a\" onclick=\"profileFunction(this)\">".$rows1['st_cpn_title']."</div>
                    <div class=\"job-desc\">Cause : ".$rows1['st_cpn_cause']."</div>  
                    <div class=\"job-desc\">".$rows1['st_cpn_desc']."</div>
                    <div class=\"job-desc\">Skills required : ".$rows1['st_cpn_skills']."</div>
                    <div class=\"job-desc\"><strong><a href =\"".$rows1['st_cpn_website']."\">Website</a></strong></div>
                    <div class=\"job-location\">Location : ".$cityName[0].', '.$stateName[0]."</div>
                    <div class=\"job-duration\">Duration : ".$rows1['st_cpn_start_date']." to ".$rows1['st_cpn_end_date']."</div>
                    <div><button id=\"".$rows1['st_cpn_id']."\" class=\"btn btn-primary custom-apply-btn\" name=\"appy\" onclick=\"applyFunction(this)\">Volunteer</button></div>
                </div>
                   
            </div>
       
        </div>";

        echo $profile_box;


}

?>
<br/>

<script>
function applyFunction(elem){

    var ab= elem.id;
    document.getElementById("campaign-id").value = ab;
    document.getElementById("submit").click();
}
function applyFunction(element){

var ab= element.id;
document.getElementById("campaign-id").value = ab;
document.getElementById("submit").click();
}

document.getElementById('submit5').onclick = function(){
    document.getElementById("campaign-id2").value = 1;
    document.getElementById("submit2").click();
}

document.getElementById('submit6').onclick = function(){
    document.getElementById("campaign-id2").value = 0;
    document.getElementById("submit2").click();
}

</script>
<?php
if(isset($_POST['submit'])){
    if(isset($_SESSION['current_user_id'])){
        $_SESSION['campaign_id'] = $_POST['campaign-id'];
        echo "<script>window.location.href = 'volunteer-app.php';</script>";
        exit();
    }
    else{
        echo "<script>alert('You must be Logged In !!!');
        window.location.href = 'get-job.php';
        </script>";
        
    }
}
?>

<form action="volunteer-campaign.php" method="POST">
    <input type = "number" name="campaign-id" hidden id="campaign-id"/>
    <input type="submit" name="submit" id="submit" hidden/>
</form>

<form action="volunteer-campaign.php" method="POST">
    <input type = "number" name="campaign-id2" hidden id="campaign-id2"/>
    <input type="submit" name="submit2" id="submit2" hidden/>
</form>
</body>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
include('../resources/footer.php');
?>

</html>

