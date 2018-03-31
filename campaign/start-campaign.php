<?php
include('../resources/config.php');
include('../resources/header.php');

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Start Campaign</title>
    <link rel="stylesheet" type="text/css"  href="../bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css"  href="start-campaign.css" />

    <body>
    <div>
    <img src="campaign.jpg" style="width:100%;position:relative;top:-20px;height:500px;"></img>
</div>
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3">
            <div class="inner-content">
                <form action="start-campaign.php" method="post" enctype="multipart/form-data">
                <h2>Start a Campaign</h2>
                <br/><br/>
                
                <div class="form-group">
                    <label for="cpn-title">Campaign Title*</label>
                    <input type="text" class="form-control" name="cpn-title" id="cpn-title" placeholder = "e.g. Beti Padhao Beti Bachao" required>
                </div>
                <div class="form-group" id="orgDiv">
                    <label for="organisation">Organisation Name*</label>
                    <input type="text" class="form-control" name="organisation" id="organisation" placeholder="some organisation">
                </div>
                <div class="form-group">
                    <label for="cpn-cause">Cause*</label>
                    <input type="text" class="form-control" name="cpn-cause" id="cpn-cause" placeholder = "Girls Education" required>
                </div> 
                <div class="form-group">
                    <label for="cpn-website">Website</label>
                    <input type="url" class="form-control" name="cpn-website" id="cpn-website" required>
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
                    <label for="cpn-desc">Tell us more about your campaign*</label>
                    <textarea required class="form-control" rows="5" style="max-width:100%" name="cpn-desc" id="cpn-desc" placeholder = "Describe your Campaign here ..."></textarea>
                </div>
                

             
                
                <div class="row">
                <div class="col-sm-12"><label for="cpn-start">Campaign Duration</label></div>
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="cpn-start">Start Date*</label>
                            <input type="date" class="form-control" name="cpn-start" id="cpn-start" required>
                        </div>
                    </div>
                    
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="cpn-end">End Date*</label>
                            <input type="date" class="form-control" name="cpn-end" id="cpn-end" required>
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="noofvol">Number of Volunteers*</label>
                            <input type="number" min="0" step="1" class="form-control" name="noofvol" id="noofvol" required>
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="pre-vol">Preferred Volunteer skills*</label>
                            <input type="text" class="form-control" name="pre-vol" id="pre-vol" required>
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label for="money">Money Required*</label>
                            <input type="number" class="form-control" name="money" id="money" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="picture">Image (jpeg, png)</label>
                        <input type="file" class="form-control" name="file" id="picture" required>
                </div>

                
                <br/><br/>
                <button class="btn btn-success"type="submit" id="submit" name="submit">Start Campaign</button>
            
            <br/><br/><br/>
            
                </form>
            </div>

        </div>

    </div>


    
    
</body>

<script src="../jquery/jquery.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
    function getdistrict(val) {
        $.ajax({
        type: "POST",
        url: "../job_management/get_district.php",
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
</html>
<?php

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
    window.location.href = '/weforwomen/public_html/index.php';</script>";
    exit();
}



    if(isset($_POST['submit'])){
        $organisation_id = isset($_SESSION['current_org_id'])? $_SESSION['current_org_id'] : 0;
        $user_id = isset($_SESSION['current_user_id']) ? $_SESSION['current_user_id'] : 0;

        $title = $_POST['cpn-title'];
        $cause = $_POST['cpn-cause'];
        $website = $_POST['cpn-website'];
        $state = $_POST['state'];
        $city = $_POST['district'];
        $desc = $_POST['cpn-desc'];
        $startDate = $_POST['cpn-start'];
        $endDate = $_POST['cpn-end'];
        $noVolunteer = $_POST['noofvol'];
        $skills = $_POST['pre-vol'];
        $money = $_POST['money'];
        
        $file = $_FILES['file'];
        $filename = $_FILES['file']['name'];
        $fileTmpLoc = $_FILES['file']['tmp_name'];
        $fileExt = explode('.',$filename);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png');

        if(in_array($fileActualExt, $allowed)){
            $t= time();
            $fileDestination = "profile/".$t.".".$fileActualExt;
            move_uploaded_file($fileTmpLoc, $fileDestination);
        }
        else{
            echo "<script type='text/javascript'>
            alert('Image must be jpeg or png');
            window.location.href = 'start-campaign.php';
            </script>";
        }

        $query = "insert into start_campaign(st_cpn_title, st_cpn_cause,st_cpn_website,st_cpn_state,st_cpn_district,st_cpn_desc,st_cpn_start_date,st_cpn_end_date,st_cpn_volunteers,st_cpn_skills,st_cpn_money,st_cpn_image) 
        values('$title','$cause','$website',$state, $city,'$desc','$startDate','$endDate',$noVolunteer,'$skills',$money,'$fileDestination')";

        $result = mysqli_query($con, $query);
        if($result){
            echo "<script type='text/javascript'>window.alert('Campaign Registeration Successfull !!!')</script>";
        }
        else{
            echo "<script type='text/javascript'>window.alert('Unable to Submit !!!')</script>";
        }


    }
?>