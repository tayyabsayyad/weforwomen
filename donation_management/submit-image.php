 <?php
session_start();
$_SESSION['user_id'] = 1;



// unset($_SESSION['current_user_id']);
// unset($_SESSION['job_id']);
if(isset($_SESSION['donation_id'])){
    if(isset($_SESSION['donation_id'])){

    }
    else{
        header('Location:get-donation.php');
        exit();
    }
}
else{
    echo "<script type='text/javascript'>alert('You Must be Logged in');
    window.location.href='get-donation.php';
    </script>";
    
    
}

if(isset($_POST['submit'])){
    include('../resources/config.php');
    //$con = mysqli_connect("localhost","root","oracle","weforwomen") or die("Unable to connect");

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
       
        $fileDestination = "Upload-Image/".$filename;
        move_uploaded_file($fileTmpLoc, $fileDestination);
    }
    else{
        echo "<script type='text/javascript'>
        alert('Resume must be in pdf Format');
        window.location.href = 'submit-image.php';
        </script>";
    }

    $query = "insert into get_donation(user_id,org_id, donation_id, donate_img_dir) values(0, 1, $donation_id,'$fileDestination')";
    $result = mysqli_query($con, $query);
    if($result){
        echo "<script type='text/javascript'>alert('Resume Submitted Succesfully !!!');</script>";
        unset($_SESSION['job_id']);
        echo "<script type='text/javascript'>window.location.href='get-donation.php';</script>";
        exit();
    }
    else{
        unset($_SESSION['job_id']);
        echo "<script type='text/javascript'>alert('Unable to Submit');
        window.location.href = 'give-donation.php';
        </script>";
    }
    

}


?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Submit Image</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
</head>
<body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <br/><br/>
                <form action="submit-image.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image">Upload your Donation Profile Picture (only pdf)</label>
                        <input type="file" class="form-control" name="file" id="image">
                    </div>
                    <br/>
                    <!-- <div class="form-group">
                        <textarea class="form-control" rows="5" style="max-width:100%" name="message-textarea" id="message-textarea" placeholder = "Any Message (optional)" value=""></textarea>
                    </div>
                    <div class="row">
                     -->    
                     <div class="col-sm-6"><button type="submit" style="width:100%" class="btn btn-success" name="submit">Submit</button></div>
                    <div class="col-sm-6"><a href="get-job.php" class="btn btn-danger" style="width:100%">Cancel</a></div>
                    <div>
                    
                </form>
                
            </div>
        <div>
   </div> 
</body>
</html>