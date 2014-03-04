<?php 

$arrayA = array(1, 2, 5, 10, 255, 3);

$sumofA = 0;

for ($i = 0; $i < count($arrayA); $i++) 
	{ 
		$sumofA = $sumofA + $arrayA[$i];

	}

	echo $sumofA;
 ?>


 <?php 

$arrayA = array(1, 2, 5, 10, 255, 3);

$average = $sumofA / count($arrayA);

echo $average


  ?>