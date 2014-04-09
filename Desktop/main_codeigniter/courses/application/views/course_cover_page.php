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
		<?php
			if($this->session->flashdata('errors'))
			{
			echo $this->session->flashdata('errors');
			}
			if($this->session->flashdata('message'))
			{
				echo $this->session->flashdata('message');
			}
		?>
		<h3><u>Add a new course</u></h3>
		<form id = 'course' action = "/courses/add" method = "post">
			 <input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
			Name: <input type = "text" name = 'title'><br><br>
			Description: <textarea type = "text" name = 'description' value = 'description'></textarea><br>
			<br><label class = "btn btn-primary">Add!
			 	<input type = "submit" class = "hidden">
				</label>
		</form>
		<h3><u>Courses</u></h3>
		<div>
			<table class = "table table-hover">
				<thead>
					<th>Course Name</th>
					<th>Description</th>
					<th>Date Added</th>
					<th>Actions</th>
				</thead>
					<tbody>
						<?php 
							foreach ($courses as $key => $value) 
							{	
								echo "<tr>"; //opens row
								echo "<td class = 'danger'>" . $value['title'] . "</td>"; //opens the array and only echo's this piece
								echo "<td class = 'warning'>" . $value['description'] . "</td>";
								echo "<td class = 'success'>" . $value['created_at'] . "</td>";
								echo "<td class = 'info'><a href = '/courses/course_delete/{$value['id']}'> Delete</a></td>";
								echo "</tr>"; //this closes the row.
							}
						?>
					</tbody>
			</table>
		</div>
	</body>
</html>