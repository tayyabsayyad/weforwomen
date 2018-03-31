<?php

include("../resources/config.php");
include("../resources/header.php");














// session_start();
// $_SESSION['user_id'] = 1;



// // unset($_SESSION['current_user_id']);
// // unset($_SESSION['donation_id']);
// if(isset($_SESSION['donation_id'])){
//     if(isset($_SESSION['donation_id'])){

//     }
//     else{
//         header('Location:get-donation.php');
//         exit();
//     }
// }
// else{
//     echo "<script type='text/javascript'>alert('You Must be Logged in');
//     window.location.href='get-donation.php';
//     </script>";
    
    
// }

if(isset($_POST['submit'])){
    include('../resources/config.php');
    //$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");
    $organisation_id = isset($_SESSION['current_org_id'])? $_SESSION['current_org_id'] : 0;
    $user_id = isset($_SESSION['current_user_id']) ? $_SESSION['current_user_id'] : 0;

    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $fileTmpLoc = $_FILES['file']['tmp_name'];
    $fileExt = explode('.',$filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');

    $user_id = $_SESSION['user_id'];
    $donation_id = $_SESSION['donation_id'];
    if(isset($_POST['message-textarea'])){
        $message = $_POST['message-textarea'];
    }
    else{
        $message = null;
    }
    if(in_array($fileActualExt, $allowed)){
       
        $fileDestination = "Profile/".$filename;
        move_uploaded_file($fileTmpLoc, $fileDestination);
    }
    else{
        echo "<script type='text/javascript'>
        alert('File should be in png or jpeg or jpg Format');
        window.location.href = 'submit-image.php';
        </script>";
    }

    
    $donationtitle=$_POST['donation-title'];
    $donationcause=$_POST['donation-cause'];
    $startdate=$_POST['from-date'];
    $enddate=$_POST['to-date'];
    $contact=$_POST['contact-no'];
    $description=$_POST['donation-desc'];
    $getamount=$_POST['get-amount'];






    $query = "INSERT INTO get_donation(donation_title,donation_cause,donation_start_date,donation_end_date,donation_contact_no,donation_description,donation_get_amount,donate_img_dir) values('$donationtitle','$donationcause','$startdate','$enddate','$contact',' $description','$getamount','$fileDestination')";
    $result = mysqli_query($con, $query);
    if($result){
        echo "<script type='text/javascript'>alert(' Submitted Succesfully !!!');</script>";
        unset($_SESSION['donation_id']);
        echo "<script type='text/javascript'>window.location.href='give-donation.php';</script>";
        exit();
    }
    else{
        unset($_SESSION['donation_id']);
        echo "<script type='text/javascript'>alert('Unable to Submit');
        window.location.href = 'get-donation.php';
        </script>";
    }
    

}

	


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ASK FOR DONATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

</head>
<body>
   <img src="get-donation2.jpg" style="width:100%;position:relative;top:-20px;height:500px;"></img>
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3">
            <div class="inner-content">
                <form action="get-donation.php" method="post" enctype="multipart/form-data">
                <center><h2>ASK FOR DONATION</h2></center>
                <br/><br/>

                <form action="submit-image.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="picture">Upload your Donation Profile Picture (png*,jpg*,jpeg*)</label>
                        <input type="file" class="form-control" name="file" id="picture" required>
                    </div>
                    <br/>
                    <!-- <div class="form-group">
                        <textarea class="form-control" rows="5" style="max-width:100%" name="message-textarea" id="message-textarea" placeholder = "Any Message (optional)" value=""></textarea>
                    </div>
                    <div class="row">
                     -->    
                     
                
                <div class="form-group">
                    <label for="donation-title">Donation Title*</label><br>
                    <input required type="text" class="form-control" name="donation-title" id="donation-title" placeholder = "e.g. Web Development" required>
                </div> 
                 <div class="form-group">
                    <label for="user">User Name*</label>
                    <input type="text" class="form-control" name="user" id="user" placeholder="some user" disabled>
                </div>              
                <div class="form-group">
                    <label for="organisation">Organisation Name*</label><br>
                    <input type="text" class="form-control" name="organisation" id="organisation" placeholder="some organisation" disabled>
                </div>

                
                <div class="form-group">
                    <label for="donation-cause">Donation Cause</label><br>
                    <input type="donation-cause" class="form-control" name="donation-cause" id="donation-cause" placeholder = "Eg. Cancer" required>
                </div>

                <div class="form-group"> <!-- Date input -->
                    
                    <label class="control-label" for="date">Date : From</label>
                    <input type="date" class="form-control" name="from-date"  id="from-date" placeholder="MM/DD/YYY" />
                    <label class="control-label" for="date">Date : To</label>
                    <input type="date" class="form-control" name="to-date"  id="to-date" placeholder="MM/DD/YYY" />
                   
                </div>
                        <!-- <div id="example">
                <div class="demo-section k-header" style="width: 300px; text-align: center;">
                    <div id="calendar" ></div>
                </div>
                    <script>

                $(document).ready(function() {
                    // create Calendar from div HTML element
                    $("#calendar").kendoCalendar();
                    object.onclick = function(){calendar};
                });
                    </script>
                </div> -->
                <div class="form-group">
                    <label for="contact-no">Contact Number</label><br>
                    <input type="Tell" class="form-control" name="contact-no" id="contact-no" minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="donation-desc">Tell us more about your Donation*</label><br>
                    <textarea required class="form-control" rows="5" style="max-width:100%;overflow: auto; resize: none;" name="donation-desc" id="donation-desc" placeholder = "Describe Your Donation Here ..." ></textarea>
                </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="get-amount">Get Amount (Rs)*</label><br>
                            <input required type="number" class="form-control" name="get-amount" id="get-amount" placeholder="Eg: 30000" required>
                        </div>
                    </div>
                    <div class="col-sm-6"><button type="submit" style="width:100%" class="btn btn-success" name="submit">Submit</button></div>
                    <div class="col-sm-6"><a href="../index.php" class="btn btn-danger" style="width:100%">Cancel</a></div>
                    <div>
                    <!-- <center>
                <input type="submit" class="btn btn-success" type="submit" id="submit" value="Ask Donation" >
                </center> -->
            </div>

                   

                
                </form>
            </div>

        </div>

    </div>
    <script src="../jquery/jquery.js">
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
   <!--  <script src="../bootstrap/js/bootstrap.min.js"></script>
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
</script> -->
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
    document.getElementById("donation-id").value = 1;
    document.getElementById("submit2").click();
}

document.getElementById('submit6').onclick = function(){
    document.getElementById("donation-id").value = 0;
    document.getElementById("submit2").click();
}

</script>








</script>
<?php
include('../resources/footer.php');
?>
</body>
</html>


</body>
</html>
