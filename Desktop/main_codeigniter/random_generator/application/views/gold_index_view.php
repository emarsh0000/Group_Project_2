<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
			<!--bootstrap-->
			<link rel = "stylesheet" type = "text/css" href = "/assets/css/ninja.css"> 
			<!-- connects stylesheet for css --> 
		<title>Ninja Gold</title>
	</head>
		<body>

			<h3>Your Gold:<h3>
				<form action = "processninja.php" method = "post" > <!-- This says to process this through the page listed -->
					<input type = "text" name = "gold" placeholder = "0" id = "goldbox" value = "<?php if(isset($_SESSION['gold'])) {echo $_SESSION['gold'];}?>";>
					<input type = "submit" class = "button" name = "reset" value = "reset">
				</form>
				

			<div id = "farm" class = "square" name = "farm">
				<h4>Farm</h4>
				<h5>(earns 10-20 gold coins)</h5>
				<form action = "processninja.php" method = "post" >
					<input type = "hidden" name = "farm" value = "farm"> <!-- The user will never see this happen -->
					<input type = "submit" class = "button" name = "gold_button" value = "Find Gold!">
				</form>
			</div>

			<div id = "cave" class = "square" name = "cave" value = >
				<h4>Cave</h4>
				<h5>(earns 5-10 gold coins)</h5>
				<form action = "processninja.php" method = "post" >
					<input type = "hidden" name = "cave" value = "cave">
					<input type = "submit" class = "button" name = "gold_button" value = "Find Gold!">
				</form>
			</div>

			<div id = "house" class = "square" name = "house">
				<h4>House</h4>
				<h5>(earns 2-5 gold coins)</h5>
				<form action = "processninja.php" method = "post" >
					<input type = "hidden" name = "house" value = "house">
					<input type = "submit" class = "button" name = "gold_button" value = "Find Gold!">
				</form>
			</div>

			<div id = "casino" class = "square" name = "casino">
				<h4>Casino!</h4>
				<h5>(earns/takes 0-50 gold coins)</h5>
				<form action = "processninja.php" method = "post" >
					<input type = "hidden" name = "casino" value = "casino">
					<input type = "submit" class = "button" name = "gold_button" value = "Find Gold!">
				</form>
			</div>


			<p>Activities:</p>
				<div name = "comment" id = "comments"> 

					 <?php if(isset($_SESSION['log'])) 

					 	foreach ($_SESSION['log'] as $key => $value) 
					 	{
					 		echo $value;
					 	
					 	}

					?>

				</div>
			</form>
		<form action = '<?php echo base_url('ninjagold/farm')?>'>
			<input type = 'submit'>
		</form>
	</body>
</html>