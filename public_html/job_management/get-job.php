<?php
session_start();
include('../resources/config.php');

//$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");
$query = "select * from job_post order by job_post_id desc";
$result = mysqli_query($con,$query);


////////////////////////////////////


    $job_title= empty($_POST['job-title']) ? "" :$_POST['job-title'];

    $experience = empty($_POST['experience']) ? 0 :$_POST['experience'];

    if(empty($_POST['city'])){
        $city = 0;
        $searchQuery1 =  "SELECT * FROM job_post WHERE job_post_exp >=".$experience." AND job_post_city >=".$city." AND";
        $serachQuery2last =  ") AND (job_post_exp >=".$experience." OR job_post_city >=".$city.") order by job_post_id desc"; 
    }
    else{
        $city = $_POST['city'];
        $searchQuery1 =  "SELECT * FROM job_post WHERE job_post_exp >=".$experience." AND job_post_city =".$city." AND";
        $serachQuery2last =  ") AND (job_post_exp >=".$experience." OR job_post_city =".$city.") order by job_post_id desc"; 
    }


    $words = explode(' ',$job_title);
    // $searchQuery1 =  "SELECT * FROM job_post WHERE job_post_exp >=".$experience." AND job_post_city =".$city." AND";
    $conds1 = array();
    $conds11 = array();
    foreach ($words as $val) {
        $conds1[] = " job_post_title LIKE '%".$val."%'";
        $conds11[] = " job_post_description LIKE '%".$val."%'";
        $conds111[] = " job_post_skills LIKE '%".$val."%'";
    }
    $searchQuery1 .= implode(' OR ', $conds1);
    $searchQuery1 .= " OR ".implode(' OR ', $conds11);
    $searchQuery1 .= " OR ".implode(' OR ', $conds111)." order by job_post_id desc";

    // $searchQuery1 .= " AND job_post_exp >=".$experience." AND job_post_city = $city";

    $result1 = mysqli_query($con, $searchQuery1);
    $match =array();

    /////////////////////////////////////////////////////

    $words2 = explode(' ',$job_title);
    $searchQuery2 =  "SELECT * FROM job_post WHERE (";
    $conds2 = array();
    $conds22 = array();
    foreach ($words2 as $val) {
        $conds2[] = " job_post_title LIKE '%".$val."%'";
        $conds22[] = " job_post_description LIKE '%".$val."%'";
        $conds222[] = " job_post_skills LIKE '%".$val."%'";
    }
    $searchQuery2 .= implode(' OR ', $conds2);
    $searchQuery2 .= " OR ".implode(' OR ', $conds22);
    $searchQuery2 .= " OR ".implode(' OR ', $conds222);
    $searchQuery2 .= $serachQuery2last;
    // $searchQuery2 .= ") AND (job_post_exp >=".$experience." OR job_post_city =".$city.")";

    $result2 = mysqli_query($con, $searchQuery2);































// if(isset($_POST['submit2'])){
//     $experience = $_POST['experience'];
//     $city = $_POST['city'];
//     $job_title = $_POST['job-title'];

//   // //////////////////////////////////////////////  
  
//     $words = explode(' ',$job_title);
//     $searchQuery =  "SELECT * FROM job_post WHERE ";
//     $conds = array();
//     foreach ($words as $val) {
//         $conds[] = " job_post_title LIKE '%".$val."%'";
//     }
//     $searchQuery .= implode(' OR ', $conds);
//     $searchQuery .= " OR job_post_exp >=".$experience. " OR job_post_city =".$city;
// }


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

<?php
include('../resources/header.php');
?>


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
        <div class="col-sm-8 col-sm-offset-2">
            <form action="get-job.php"  method="post" name="form2">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="job-title">Job Title</label>
                            <input type="text" class="form-control" name="job-title" id="job-title" placeholder="eg.web development"/>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="number" class="form-control" name="experience" id="experience" placeholder="eg.5 years"/>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="city">Location (city)</label>
                            <select name="city" id="city" class="form-control">
                            <option value="">Select</option>
                                    <?php $query =mysqli_query($con,"SELECT * FROM district");
                                        
                                    while($row=mysqli_fetch_array($query))
                                    {   
                                        $query2 = "select * from state where StCode =".$row['StCode'];
                                        $row2 = mysqli_fetch_array(mysqli_query($con, $query2));
                                        ?>
                                        <option value="<?php echo $row['DistCode'];?>"><?php echo $row['DistrictName'].", ".$row2['StateName'];?></option>
                                        <?php
                                    }
                                    ?>
                            </select>



                            <!-- <input type="text" class="form-control" name="city" id="city" placeholder="eg.Mumbai"/> -->
                        </div>
                    </div>
                    <div class="col-sm-3" style="position:relative;">
                        <button style="position:absolute;top:24px;" class="btn btn-success" type="submit" id="submit2" name="submit2"> Search</button>
                    </div>
                    <br/><br/>
                </div>
            </form>
        </div>

    </div>

    <div class="container">
    <?php
  
    while($rows1 = mysqli_fetch_array($result1)){
        $match[] = $rows1['job_post_id'];
        $queryState = "select StateName from state where StCode =". $rows1['job_post_state'];
        $queryCity = "select DistrictName from district where DistCode = ".$rows1['job_post_city'];

        $resultState = mysqli_query($con,$queryState);
        $resultCity = mysqli_query($con, $queryCity);

        $cityName = mysqli_fetch_array($resultCity);
        $stateName = mysqli_fetch_array($resultState);

        $time = substr($rows1['job_post_start_time'],0,10);


        $job_box = "<div class=\"row\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"job-content\">
                <div class=\"job-brief\">
                    <div class=\"job-title\">".$rows1['job_post_title']."</div>
                    <div class=\"job-provider\">".$rows1['job_post_org']."</div>
                    <div class=\"job-desc\">".$rows1['job_post_description']."</div>
                    <div class=\"job-desc\">Skills : ".$rows1['job_post_skills']."</div>
                    <div class=\"job-location\">".$cityName[0].', '.$stateName[0]."</div>
                    <div class=\"job-duration\">Duration : ".$rows1['job_post_duration']." days</div>
                </div>
                    <div class=\"job-brief-bottom\">posted on ".$time."<button id=\"".$rows1['job_post_id']."\" class=\"btn btn-primary custom-apply-btn\" name=\"appy\" onclick=\"applyFunction(this)\">Apply</button></div>
                </div>
            </div>
        </div>";

        echo $job_box;
    }
    
    while($rows2 = mysqli_fetch_array($result2)){
        if(in_array($rows2['job_post_id'],$match)){
            continue;
        }
        $queryState = "select StateName from state where StCode =". $rows2['job_post_state'];
        $queryCity = "select DistrictName from district where DistCode = ".$rows2['job_post_city'];

        $resultState = mysqli_query($con,$queryState);
        $resultCity = mysqli_query($con, $queryCity);

        $cityName = mysqli_fetch_array($resultCity);
        $stateName = mysqli_fetch_array($resultState);

        $time = substr($rows2['job_post_start_time'],0,10);


        $job_box = "<div class=\"row\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"job-content\">
                <div class=\"job-brief\">
                    <div class=\"job-title\">".$rows2['job_post_title']."</div>
                    <div class=\"job-provider\">".$rows2['job_post_org']."</div>
                    <div class=\"job-desc\">".$rows2['job_post_description']."</div>
                    <div class=\"job-desc\">Skills : ".$rows2['job_post_skills']."</div>
                    <div class=\"job-location\">".$cityName[0].', '.$stateName[0]."</div>
                    <div class=\"job-duration\">Duration : ".$rows2['job_post_duration']." days</div>
                </div>
                    <div class=\"job-brief-bottom\">posted on ".$time."<button id=\"".$rows2['job_post_id']."\" class=\"btn btn-primary custom-apply-btn\" name=\"appy\" onclick=\"applyFunction(this)\">Apply</button></div>
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


<?php
include('../resources/footer.php');

?>





</html>
