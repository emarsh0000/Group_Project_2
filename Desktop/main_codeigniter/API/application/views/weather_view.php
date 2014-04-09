<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/weather.css"> 
			<!-- connects stylesheet for css --> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<title>Weather List</title>
		<script type = "text/javascript">

		$(document).ready(function(){
			$("form").submit(function(){
				$.get($(this).attr('action') + "?callback=?",
					$(this).serialize(), function(dojo){
						var temp = dojo.data.current_condition[0].temp_F;
						$('#forecast').text("the current temperature is:  " + temp);
					}, 'json');
					return false;
			});
		});
		</script>
	</head>
	<body>
		<div>
		<span class="glyphicon glyphicon-globe"></span><h2>The Emilyopolis Weather Report</h2>
		<span class="glyphicon glyphicon-cloud"></span>
		<h4>(For all it's hard-working citizens)</h4><br>
		<form action = 'http://api.worldweatheronline.com/free/v1/weather.ashx' method = 'get'>
			<!-- can do multiple classes as long as separated by space -->
				<select name = 'q'>
					<option value = '94061'>Redwood City</option>
					<option value = '94303'>Mountain View</option>
					<option value = '92708'>Orange County</option>
					<option value = '98005'>Seattle</option>
					<option value = '77005'>Houston</option>
					<option value = '10014'>New York</option>
				</select>
			<input type = 'hidden' name = 'key' value = 'jtpc4myth9fwxjgwz9fh5fw5'>
			<input type = 'hidden' name = 'format' value = 'json'><br><br>
			<label class = "btn btn-primary">Get Weather!
			 	<input type = "submit" class = "hidden">
			</label>
		</form><br>
		</div>
		<div id = 'forecast'>
		</div>
	</body>
</html>