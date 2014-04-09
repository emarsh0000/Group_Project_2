<!doctype html>
<html>
	<head>
		<meta charset = "UTF-8">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> <!--bootstrap-->
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/time.css"> <!-- connects stylesheet for css --> 
		<title>Time Display</title>
	</head>
	<body>
		<div>
			<p>The current time and date</p>
		</div><br>
		<div id = 'key'>
			<h2>
			<?php 
				echo $key;
			?>
		</h2>
		</div>

	</body>
</html>