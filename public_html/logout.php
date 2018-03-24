<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['current_org_id']);

unset($_SESSION['username']);
unset($_SESSION['current_user_id']);




session_destroy();

$_SESSION = array();
header("Location: index.php");

?>