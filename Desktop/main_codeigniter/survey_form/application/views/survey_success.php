<!doctype html>
<html>
	<head>
		<meta charset = "UTF-8">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
		<!--bootstrap-->
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/survey.css"> 
		<!-- connects stylesheet for css --> 
		<title>Survey Form Success</title>
	</head>
	<body id = 'success'>
		<div id = 'survey'>
		<div id = 'click'>
			<?php
			echo "Thanks for submitting this form! You have submitted this form " . $this->session->userdata('click') . " time(s) now.";
			//this is calling from the controller page the phrase that houses the number of clicks.
			?>
		</div>
			<h4>Submitted Information</h4>
			<div id = 'info'>
				<p>Name: </p><br>
				<p>Dojo Location: </p><br>
				<p>Favorite Language: </p><br>
				<p>Comment: </p><br>
			</div>
			<div id = 'user'>
				<!--  <p><?= $name ?><p>  this is shorthand for php echo-->

			<?php
			echo "<p>" . $name . "</p><br>";  //these are the keys' values
			echo "<p>" . $city . "</p><br>";
			echo "<p>" . $language . "</p><br>";
			echo "<p>" . $comment . "</p><br>";
			?>

			</div>
		    <div>
				<br><label id = 'button' class = "btn btn-primary"><a style = 'color:white;' href = '/'>Go Back!</a>
			 			<input type = "submit" class = "hidden">
			 		</label>
			 		<a href = "/survey/session_stop">ALL DONE!</a>
		</div>
		</div>
	</body>
</html>