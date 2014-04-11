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

					//var_dump($data);
					echo "Hey {$first_name}!";
					echo "<a href = '/logins/session_stop'> LOG OFF </a><br>";
					echo "You have been poked " . $this->session->userdata('click') . " time(s) now.<br>";
					echo "<a href = '/logins/poke/'>POKE</a><br>";
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

				<?php
					foreach ($messages as $message) 
					{
						echo "<div class = 'show-messages'>";
						echo $message['content'] . "<br>";
						echo "<a href = '/logins/message_delete/{$message['id']}'> Delete</a>";
						echo "</div>";

							foreach ($comments as $comment) 
							{
								if ($comment['message_id'] == $message['id']) 
								{
									
								echo "<div class = 'show-comments'>";
								echo $comment['content'] . "<br>";
								echo "<a href = '/logins/comment_delete/{$comment['id']}'> Delete</a>";
								echo "</div>";
								}
							}
					?>
			<div id = 'comments'>
			<form class = "comments" action = "/logins/comment_add/<?= $message['id'] ?>" method = "post">
			<h5><u>Comment</u></h5>
			<input type = "text" class = "form-control" name = 'comment' placeholder = "Write a comment..."><br>
			<label class = "btn btn-warning">Comment
				<input type = "submit" class = "hidden"> 
			</label>
			</form>
		
		</div><br><br>
		<?php
					}
					// var_dump($messages);
					

				?>
		</div>

		
		</div>
	</body>
</html>