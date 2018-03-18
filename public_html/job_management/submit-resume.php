<?php
session_start();
$_SESSION['current_user_id'] = 1;
// unset($_SESSION['current_user_id']);
// unset($_SESSION['job_id']);
if(isset($_SESSION['job_id'])){
    if(isset($_SESSION['job_id'])){

    }
    else{
        header('Location:get-job.php');
        exit();
    }
}
else{
    echo "<script type='text/javascript'>alert('You Must be Logged in');
    window.location.href='get-job.php';
    </script>";
    
    
}

if(isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root","","weforwomen") or die("Unable to connect");

    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $fileTmpLoc = $_FILES['file']['tmp_name'];
    $fileExt = explode('.',$filename);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');

    $user_id = $_SESSION['current_user_id'];
    $job_post_id = $_SESSION['job_id'];
    if(isset($_POST['message-textarea'])){
        $message = $_POST['message-textarea'];
    }
    else{
        $message = null;
    }
    if(in_array($fileActualExt, $allowed)){
       
        $fileDestination = "Resume/".$filename;
        move_uploaded_file($fileTmpLoc, $fileDestination);
    }
    else{
        echo "<script type='text/javascript'>
        alert('Resume must be in pdf Format');
        window.location.href = 'submit-resume.php';
        </script>";
    }

    $query = "insert into job_application(user_id, job_post_id, job_app_resume_dir, job_app_message) values($user_id, $job_post_id, '$fileDestination', '$message')";
    $result = mysqli_query($con, $query);
    if($result){
        echo "<script type='text/javascript'>alert('Resume Submitted Succesfully !!!');</script>";
        unset($_SESSION['job_id']);
        echo "<script type='text/javascript'>window.location.href='get-job.php';</script>";
        exit();
    }
    else{
        unset($_SESSION['job_id']);
        echo "<script type='text/javascript'>alert('Unable to Submit');
        window.location.href = 'get-post.php';
        </script>";
    }
    

}


?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Submit Resume</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css" />
</head>
<body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <br/><br/>
                <form action="submit-resume.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="resume">Upload your Resume (only pdf)</label>
                        <input type="file" class="form-control" name="file" id="resume">
                    </div>
                    <br/>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="max-width:100%" name="message-textarea" id="message-textarea" placeholder = "Any Message (optional)" value=""></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><button type="submit" style="width:100%" class="btn btn-success" name="submit">Submit</button></div>
                        <div class="col-sm-6"><a href="get-job.php" class="btn btn-danger" style="width:100%">Cancel</a></div>
                    <div>
                    
                </form>
                
            </div>
        <div>
   </div> 
</body>
</html>