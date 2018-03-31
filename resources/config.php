<?php

$servername = "shareddb-i.hosting.stackcp.net";
$username = "ischyro";
$password = "yash4321";
$dbname="weforwomen-33376a73";

// Create connection
$con =mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
?>