<?php

session_start();

include('resources/config.php');
$maxSession = "select * from sessions order by session_id desc limit 1 ";
$maxResult = mysqli_query($con, $maxSession);
$maxrow = mysqli_fetch_array($maxResult);
$maxSessionfinal =  $maxrow["session_id"];
$logoutquery= "UPDATE sessions set session_logout= current_timestamp where session_id =".$maxSessionfinal;

$result5= mysqli_query($con, $logoutquery);




session_unset();
session_destroy();


header("Location: index.php");
exit();
?>