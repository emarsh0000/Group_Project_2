<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
		<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/maps.css"> 
			<!-- connects stylesheet for css --> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<title>Google Maps</title>
		<script type = "text/javascript">

		$(document).ready(function(){

			$("form").submit(function(){
				$.get($(this).attr('action'),
					$(this).serialize(), function(dojo){

						var steps = dojo.routes[0].legs[0].steps;

						console.log(dojo);
						$('#route').append("Directions from " + dojo.routes[0].legs[0].start_address + " to " + dojo.routes[0].legs[0].end_address); //this breaks down the object to get at the pieces we need to insert. (IN INSPECT ELEMENT)
						for (var i = 0; i < steps.length; i++) 
						{
							//console.log(dojo.routes[0].legs[0].steps[i].html_instructions); //this says show in the console the directions.
							$('#directions').append("<li>" + dojo.routes[0].legs[0].steps[i].html_instructions + "</li>");

						};
						
					}, 'json');
					return false;
			});
		});
		</script>
	</head>
	<body>
		<span id = "plane" class="glyphicon glyphicon-send"></span><h1>Emily-Quest</h1><span id = "road" class="glyphicon glyphicon-road"></span>
		<form action = '/maps/direction' method = 'get'>
			<!-- can do multiple classes as long as separated by space -->
				<h4>From: </h4><input type = "text" name = 'origin'>
				<h4>To: </h4><input type = "text" name = 'destination'>
				<input type = 'hidden' name = 'key' 
				value = 'AIzaSyAhlDnWxIQinXB_7J8aDtgfV2uTuCd8pdc'>
			<input type = 'hidden' name = 'format' value = 'json'><br><br>
			<label class = "btn btn-primary">Get Directions!
			 	<input type = "submit" class = "hidden">
			</label>
		</form><br>
		<div id = "all">
		<div id = 'route'>
		</div><br>
		<div>
			<ol id = "directions">
			</ol>
		</div>
	</div>
	</body>
</html>