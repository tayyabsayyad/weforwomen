<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file"><br><br>
<input type="submit" value="submit" name="submit">
</form>

</body>
</html>
<?php 

//no database and connectivity is required in this

 if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'uploads/';  
 //create a directory uploads in same folder which will contains all images uploaded on web page

            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>
