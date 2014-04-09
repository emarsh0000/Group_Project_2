<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/tasks.css"> 
			<!-- connects stylesheet for css --> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<title>Task List</title>
		<script type = "text/javascript">
		</script>
	</head>
	<body>
		<div>
			<h2>To-Do List (Get 'er Done!)</h2><br>
			<div>
			<form id = "new" action "tasks/create" method = "post">
				<input type = "text" name = "new task">
				<label class = "btn btn-primary">Add Task
			 	<input type = "submit" class = "hidden">
				</label>
			</form>
		</div>
		<div>
			<p><form id = "list" action = "tasks/edit" method = "post">
				<input type = "text" name = "tasks[completed][]" value = "task 1" /><br><br>
				<input type = "text" name = "tasks[completed][]" value = "task 2" />
				<br><br>
				<input type = "text" name = "tasks[completed][]" value = "task 3" />
				<br><br>
				<input type = "text" name = "tasks[completed][]" value = "task 4" />
				<br><br>
				<input type = "text" name = "tasks[completed][]" value = "task 5" />
				<br><br>
				<input type = "text" name = "tasks[completed][]" value = "task 6" />
				<br><br>
				<label class = "btn btn-primary">Update Tasks
			 	<input type = "submit" class = "hidden">
				</label>
			</form></p>
		</div>
	</div>

	</body>
</html>