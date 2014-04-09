<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/notes.css"> 
			<!-- connects stylesheet for css --> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<title>My Posts</title>
		<script type = "text/javascript">

		$(document).ready(function(){
			$('#note_info').submit(function(){
				$.post(
					$(this).attr('action'),
					$(this).serialize(), 
					function(data){
						console.log(data)
						$('#wrapper').append("<div class = 'note'>" + data['add_note'] + "</div>");
					}, 'json')//this says, 'hey, add into this div this class and only THIS part of the object [add_note]'
							return false; //this stops the page from refreshing. THE WHOLE POINT!
			
		}
	)});
	</script>
	</head>
	<body>
		<div>
		<div id = 'wrapper'>
			<h3><u>My Posts:</u></h3>
			<?php
			foreach ($unique_note as $note) //so I can reach the next level of the array
			{
				echo "<div class = 'note'>" . $note['content'] . "</div>";
			}
			// var_dump($unique_note);
			
			?>
		</div>
		<div>
			<form id = 'note_info' action = "/notes/create" method = "post">
			 <input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
				Add a note:<br>
				<textarea name = 'add_note' value = 'add_note'></textarea>
				<br><label class = "btn btn-danger">Post It!
			 	<input type = "submit" class = "hidden">
				</label>
			</form>	
		</div>




		</div>
	</body>
</html>