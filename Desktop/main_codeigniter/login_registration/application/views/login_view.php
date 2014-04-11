<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/login.css"> 
			<!-- connects stylesheet for css --> 
		<title>Login/Registration</title>	
	</head>
	<body>
		<div id = 'wrapper'>
			<?php
					echo($this->session->flashdata('errors'));
			?>
		<div id = 'login'>
			<h2>Login!</h2>
			<form action='/logins/login' method='post'>
			Email: <input name = "email"type = "type"><br><br>
			Password: <input name = "password" type = "password"><br><br>
			<br><label class = "btn btn-primary">Login
			 	<input type = "submit" class = "hidden">
				</label><br><br>
			</form>
		</div>
		<div>
			<br><br>
		</div>

		<div id = 'register'>
			<h2> Or Register Here!</h2>
			<form action='/logins/add' method='post'>
			First Name: <input name = "first_name" type = "type"><br><br>
			Last Name: <input name = "last_name" type = "type"><br><br>
			Email Address: <input name = "email" type = "type"><br><br>
			Password: <input name = "password" type = "password"><br><br>
			Confirm Password: <input name = "confirm_password" type = "password"><br><br>
			<br><label class = "btn btn-primary">Register
			 	<input type = "submit" class = "hidden">
				</label><br><br>
			</form>
		</div>
		</div>
	</body>
</html>