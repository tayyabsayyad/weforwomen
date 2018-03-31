<?php

include("../resources/config.php");  
$delete_id=$_POST['del'];  
$delete_query="delete from register WHERE id='$delete_id'";//delete query  
$run=mysqli_query($con,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>