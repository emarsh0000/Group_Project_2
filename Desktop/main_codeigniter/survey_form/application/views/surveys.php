<!doctype html>
<html>
	<head>
		<meta charset = "UTF-8">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> <!--bootstrap-->
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/survey.css"> <!-- connects stylesheet for css --> 
		<title>Survey Form</title>
	</head>
	<body>
		<div id = 'wrapper'>
			<div class = 'Header'>
			 	<form id = 'survey' action = "/survey/success" method = "post">
			 		<input type = "hidden" name = "action" value = "register"> <!-- user won't see but sends info to process -->
			 		Your Name: <input type = "text" name = "name" ><br>
			 		<br>Dojo Location: 
			 		<select class = "form-control" name = 'city'>
						  <option value = 'mountain_view'>Mountain View</option>
						  <option value = 'seattle'>Seattle</option>
						  <option value = 'kiev'>Kiev</option>
						  <option value = 'guadajara'>Guadajara</option>
						  <option value = 'sydney'>Sydney</option>
					</select><br>
			 		Favorite Language: 
			 		<select class = "form-control" name = 'language'>
						  <option value = 'html'>HTML</option>
						  <option value = 'css'>CSS</option>
						  <option value = 'javascript'>Javascript</option>
						  <option value = 'php'>PHP</option>
						  <option value = 'ruby'>Ruby</option>
						  <option value = 'node'>Node</option>
						  <option value = 'c++'>C++</option>
						  <option value = 'jquery'>JQuery</option>
					</select><br>
			 		<br>Comment (optional)<br>
			 		<textarea type = "type" name = 'comment' value = 'comment'></textarea>			 		
			 		<br><label class = "btn btn-primary">Submit!
			 			<input type = "submit" class = "hidden">
			 			</label>
			 	</form>	
		 </div>

		</div>
	</body>
</html>