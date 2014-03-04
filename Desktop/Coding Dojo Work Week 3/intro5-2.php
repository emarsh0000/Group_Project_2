
 <!--(See intro5.php for reference)-->


  <?php

 $A = array(2, 4, 10, 16);

 function multiply($array, $factor = 2)
{
	for ($i = 0; $i < count($array); $i++) 
	{ 
		$array[$i] = $array[$i] * $factor;
	}
		return $array;
}