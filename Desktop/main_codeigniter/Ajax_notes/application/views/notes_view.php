<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/advance_notes.css"> 
			<!-- connects stylesheet for css --> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<title>Notes</title>
		<script type = "text/javascript">
		
		$(document).ready(function(){

			$('#note_info').submit(function(){
				$.post(
					$(this).attr('action'),
					$(this).serialize(), 
					function(data){
						console.log(data['add_note'])
						$('#wrapper').append("<div class = 'note'>" + "<a class = 'link' href = '/notes/delete/" + data.id + "'>X</a>" + "<u>" + data['description'] + ":</u>" + "<form class = 'inside' action = '/notes/edit/" + data.id + "' method = 'post'><textarea class = 'box' name = 'description'>" + data['add_note'] + "</textarea><input type = 'submit'></form>" + "</div>");
						$('#blank').val(''); //this takes the inputs that you entered and blanks them so that they don't keep the entered info.
						$('#small_blank').val(''); //you replace the info with '' blanks.
					}, 'json')//this says, 'hey, add into this div this class and only THIS part of the object [add_note]'
							return false; //this stops the page from refreshing. THE WHOLE POINT!
				})
			$(document).on('click', '.link', function()
			{
				$.post(
				$(this).attr('href'))
				$(this).parent().remove();
				return false;
			})

			$('.inside').submit(function(){

				$.post($(this).attr('action'),
					$(this).serialize(), function(data){
						console.log(data)
					}, 'json')
					return false;
			})
		});  //end of doc ready
		</script>
	</head>
	<body>
		<div id = 'wrapper'>
			<h2><u>Ajax Notes</u></h2>
			<?php
			foreach ($unique_note as $note) //so I can reach the next level of the array
			{
				echo "<div class = 'note'>" . "<a class = 'link' href = '/notes/delete/{$note['id']}'>X</a>" . "<span>"; //this makes our delete button and places everything in a div.
				echo $note['title'] . ":</span><br><br>"; //this takes and places our info in the div
				echo "<form class = 'inside' action = '/notes/edit/{$note['id']}' method = 'post'><textarea class = 'box' name = 'description'>" . $note['description'] . "</textarea><input id = 'button' type = 'submit'>" . "</form>";
				//this puts in a new form class for the editing function.
				echo "</div>"; //closes the div/our sticky note.
			}
			// var_dump($unique_note);
			
			?>
		</div>
			<form id = 'note_info' action = "/notes/create" method = "post">
			 <input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
				Add a note:<br>
				<textarea id = 'blank' name = 'add_note' value = 'add_note' placeholder = "Enter description here..."></textarea>
				<br><input id = 'small_blank' type = "text" name = "description" placeholder = "Insert note title here..."><br>
				<br><label class = "btn btn-primary">Add Note
			 	<input type = "submit" class = "hidden">
				</label>
			</form>	
	</body>
</html>