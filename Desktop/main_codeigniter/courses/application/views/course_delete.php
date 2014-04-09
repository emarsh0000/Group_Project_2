<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
			<link rel = "stylesheet" type = "text/css" href = "/assets/css/courses.css"> 
			<!-- connects stylesheet for css --> 
		<title>Courses</title>
	</head>
	<body>
		<h5> Are you sure you want to delete the following course?</h5>
		<p>Name: </p>
		<p>Description: </p>
		<form id = 'delete' action = "/courses/destroy" method = "post">
			 <input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
			<br><label class = "btn btn-danger">No!
			 	<input type = "submit" class = "hidden">
				</label><br>
		</form>
		<form id = 'delete' action = <?php echo "'/courses/delete/{$id}'"?> method = "post">
			 <input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
			<br><label class = "btn btn-success">Yes! I want to delete this 
			 	<input type = "submit" class = "hidden">
				</label>
		</form>
		
	</body>
</html>