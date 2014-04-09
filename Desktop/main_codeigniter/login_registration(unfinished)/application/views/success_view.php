<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/success.css"> 
			<!-- connects stylesheet for css --> 
		<title>Login/Registration Success</title>	
	</head>
	<body>
		<div id = 'facebook'>
			<h1>YEA! YOU MADE IT! WELCOME TO FACE-TO-FACE! :)</h1>

			<?php
					echo($this->session->flashdata('error'));
					echo($this->session->flashdata('message'));
			?>
			
		<div id = 'message'>
				<h4><u>Update Status</u></h4>
			
			<form id = "messages" action = "/logins/message_add" method = "post">
				<textarea class = "form-control" rows = "3" name = 'message' placeholder = "What's on your mind?"></textarea><br>
				<label class = "btn btn-danger">Post
					<input type = "submit" class = "hidden"> 
				</label> 
				<!-- <input type = "hidden" name = "action" value = "message">  --> <!-- user won't see but sends a verification to process page -->	
				</form><br>
		</div>

		<div id = 'comments'>
			<form class = "comments" action = "/logins/comment_add" method = "post">
			<h5><u>Comment</u></h5>
			<input type = "text" class = "form-control" name = 'comment' placeholder = "Write a comment..."><br>
			<label class = "btn btn-warning">Comment
				<input type = "submit" class = "hidden"> 
			</label>
			<input type = "hidden" name = "action" value = "comment">  <!-- user won't see but sends a verification to process page -->
			<input type = "hidden" name = 'messages_id' value = '<?php echo $grab_messages[$i]['id'] ?>'>
			</form>
		
		</div>
		</div>
	</body>
</html>