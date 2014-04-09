<!doctype html>
<html>
	<head>
		<meta charset = "UTF-8">
			<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
			<link rel = "stylesheet" type = "text/css" href = "/assets/css/random.css"> 
			<!-- connects stylesheet for css --> 
			<title>Random Word Generator</title>
	</head>
	<body>
		<div id = 'wrapper'>
		<div id = 'attempt'>
		<?php
			echo "Random Word (attempt # " . $this->session->userdata('click') . ")";
			//this is calling from the controller page the phrase that houses the number of clicks.
		?>
		</div>
		<div id = 'random'>
			<?php
			echo $this->session->userdata('mixed-word');
			?>
		</div>
		<div>
			<form id = 'random_submit' action = "/random/mix_and_click" method = "post">
			 		<input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
			<br><label class = "btn btn-primary">Generate!
			 		<input type = "submit" class = "hidden">
			 	</label>
			 </form>	
		</div>
		<a href = "/random/session_stop">ALL DONE!</a>
		</div>
	</body>
</html>