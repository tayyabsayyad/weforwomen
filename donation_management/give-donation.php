<?php
include('../resources/config.php');
include ('../resources/header.php');

// if(isset($_SESSION['current_org_id'])){
//     header('Location:../index.php');
//     exit();
// }



	// $query = "select * from start_campaign";

// if(isset($_POST['submit2'])){
//     // $gef = $_POST['donation-id2'];
//     // if(strcmp($gef, 0)){
//     //     $abc = 1;
//     //     $query = "select * from get_donation where get_donation_sts =".$abc;
//     // }
//     // else{
//     //     $abc = 0;
//     //     $query = "select * from get_donation where get_donation_sts =".$abc;
//     // }
// 	}$result = mysqli_query($con, $query);

	$query = "SELECT * from get_donation";
	$result = mysqli_query($con, $query);

	$donationtitle= empty($_POST['donation-title']) ? "" :$_POST['donation-title'];
	$getamount = empty($_POST['get-amount']) ? 0 :$_POST['get-amount'];



	if(empty($_POST['get-amount'])){
        $getamount = 0;
        $searchQuery1 =  "SELECT * FROM get_donation WHERE donation_get_amount >=".$getamount."";
        //$serachQuery2last =  ") AND (job_post_exp >=".$experience." OR job_post_city >=".$city.") order by job_post_id desc"; 
    }
    else{
        $getamount = $_POST['get-amount'];
        $searchQuery1 =  "SELECT * FROM get_donation WHERE donation_get_amount >=".$getamount."";
        //$serachQuery2last =  ") AND (job_post_exp >=".$experience." OR job_post_city =".$city.") order by job_post_id desc"; 
    }

    $words = explode(' ',$donationtitle);
    // $searchQuery1 =  "SELECT * FROM job_post WHERE job_post_exp >=".$experience." AND job_post_city =".$city." AND";
    //$conds1 = array();
    $conds11 = array();
    foreach ($words as $val) {
        //$conds1[] = " donation_title LIKE '%".$val."%'";
        // $conds11[] = " job_post_description LIKE '%".$val."%'";
        $conds111[] = " donation_get_amount LIKE '%".$val."%'";
    }
    //$searchQuery1 .= implode(' OR ', $conds1);
    // $searchQuery1 .= " OR ".implode(' OR ', $conds11);
    $searchQuery1 .= " OR ".implode(' OR ', $conds111)." order by donation_id desc";

    // $searchQuery1 .= " AND job_post_exp >=".$experience." AND job_post_city = $city";

    $result1 = mysqli_query($con, $searchQuery1);
    $match =array();

    /////////////////////////////////////////////////////

    $words2 = explode(' ',$donationtitle);
    $searchQuery2 =  "SELECT * FROM get-donation WHERE (";
    //$conds2 = array();
    $conds22 = array();
    foreach ($words2 as $val) {
       // $conds2[] = " donation_title LIKE '%".$val."%'";
        // $conds22[] = " job_post_description LIKE '%".$val."%'";
        $conds222[] = " donation_get_amount LIKE '%".$val."%'";
    }
    //$searchQuery2 .= implode(' OR ', $conds2);
    // $searchQuery2 .= " OR ".implode(' OR ', $conds22);
    $searchQuery2 .= " OR ".implode(' OR ', $conds222);
    //$searchQuery2 .= $serachQuery2last;
    // $searchQuery2 .= ") AND (job_post_exp >=".$experience." OR job_post_city =".$city.")";

    $result2 = mysqli_query($con, $searchQuery2);

/// to view details of job

    if(isset($_POST['submit3'])){
        $did = $_POST['donation-id3'];
        $_SESSION['donation_id'] = $did;
        header("Location: Profile.php");
        exit();
    }

    
// to apply for the job

// if(isset($_POST['submit']))
// {
//     if(isset($_SESSION['current_user_id']))
//     {
//         $_SESSION['donation_id'] = $_POST['donation-id'];
//         header("Location:submit-resume.php");
//         exit();
//     }
//     else{
//         echo "<script>alert('You must be Logged In !!!');
//         window.location.href = 'get-job.php';
//         </script>";
        
//     }
// }


?>





<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
    <link rel = "stylesheet" href="../css/volunteer-campaign.css"/>
    <script src="main.js"></script>
    
     <link rel = "stylesheet" href="../css/give-donation.css"/>
    <script src="main.js"></script>
	<title>Give Donation</title>
	<h1><center>Donate the needy! Be a part of the revolution</center></h1>
   <img src="get-donation.jpg" style="width:100%;position:relative;top:-20px;height:500px;padding-top:40px"></img>
</head>
<body>
  <div class="container-fluid">
 
<!--for filter-->
    <center>
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">
            <form action="give-donation.php"  method="post" name="form2">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="donation-title">Donation Title</label>
                            <input type="text" class="form-control" name="donation-title" id="donation-title" placeholder="Eg. "/>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="amount">Amount Rs: </label><input type="Tell" class="form-control" name="amount" id="amount"  placeholder="Eg. 5000"/>
                            
                        </div>
                    </div>
                    <div class="col-sm-3" style="position:relative;">
                        <button style="position:absolute;top:24px;" class="btn btn-success" type="submit" id="submit2" name="submit2"> Search</button>
                    </div>
                 </div>
            </form>
        </div>
    </div>
    </center>
</div>

<div class="container-fluid">
<?php

while($rows1 = mysqli_fetch_array($result))
{
// $queryState = "select StateName from state where StCode =". $rows1['st_cpn_state'];
// $queryCity = "select DistrictName from district where DistCode = ".$rows1['st_cpn_district'];

// $resultState = mysqli_query($con,$queryState);
// $resultCity = mysqli_query($con, $queryCity);

// $cityName = mysqli_fetch_array($resultCity);
// $stateName = mysqli_fetch_array($resultState);

$profile_box = "<div class=\"row\">
        <div class=\"col-sm-6 col-sm-offset-3\">
            <div class=\"job-content\">
                <div class=\"job-brief\">
                <table>
                <tr>
                <td>
               <img src=\"".$rows1['donate_img_dir']."\" alt=\"image\" width=\"100px\" height=\"100px\"></img>
                </td>
                <br>
              <td>
              <div class=\"donation-title\" id=\"".$rows1['donation_title']."a\" onclick=\"profileFunction(this)\"> Donation title : ".$rows1['donation_title']."</div>
                       
                <div class=\"donation-cause\">Donation Cause : ".$rows1['donation_cause']."</div>
                <div class=\"donation-description\">Donation description : ".$rows1['donation_description']."</div>
                <div class=\"duration\"> Started From : ".$rows1['donation_start_date']." to ".$rows1['donation_end_date']."</div>
                <div class=\"get-amount\"> TOTAL AMOUNT : ".$rows1['donation_get_amount']."</div>
               
              </td>
              </tr>
                </table>
               
                 <div style= \"position:relative;top:10px\"> 
                <form action=\"payment.php\" method=\"get\">
                 <input type=\"submit\" button class=\"btn btn-primary custom-apply-btn\" value=\"Donate Now\">
                </form>
                </div>
            </div>
       		</div>
        </div>";

        echo $profile_box;


}

?>
</div>
</body>


<script>
function applyFunction(elem){

    var ab= elem.id;
    document.getElementById("donation-id").value = ab;
    document.getElementById("submit").click();
}
function applyFunction(element){

var ab= element.id;
document.getElementById("donation-id").value = ab;
document.getElementById("submit").click();
}

document.getElementById('submit5').onclick = function(){
    document.getElementById("donation-id3").value = 1;
    document.getElementById("submit3").click();
}

document.getElementById('submit6').onclick = function(){
    document.getElementById("donation-id3").value = 0;
    document.getElementById("submit3").click();
}

</script>
<?php
if(isset($_POST['submit'])){
    if(isset($_SESSION['current_user_id'])){
        $_SESSION['campaign_id'] = $_POST['campaign-id'];
        echo "<script>window.location.href = 'give-donation.php';</script>";
        exit();
    }
    else{
        echo "<script>alert('You must be Logged In !!!');
        window.location.href = '../user_management/userlogin.php';
        </script>";
        
    }
}
?>
<form action="give-donation.php" method="POST">
    <input type = "number" name="donation-id" hidden id="donation-id"/>
    <input type="submit" name="submit" id="submit" hidden/>
</form>
<form action="give-donation" method="POST">
    <input type = "number" name="donation-id2" hidden id="donation-id2"/>
    <input type="submit" name="submit2" id="submit2" hidden/>
</form>


</html>

<?php
include ('../resources/footer.php');
?>