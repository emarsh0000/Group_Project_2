<?php
// Create a function that takes two parameters. The first a word to censor and the
// second a string of text that may contain the word to be censored. Return the string
// with the censor word replaced with the correct length of *'s

// Hard mode: have it replaced with random symbols instead of just *'s



function censorship_2000($censor, $string)
{
	$stars = "";
	for ($j=0; $j < strlen($censor); $j++) 
	{ 
		$stars .= "*";
	}

	$array = explode(" ", $string);
	for ($i=0; $i < count($array); $i++) 
	{ 
		if($array[$i] == $censor)
		{
			$array[$i] = $stars;
		}
	}

	$string = implode(" ", $array);
	return $string;
}
echo censorship_2000('chicken', 'The chicken crossed the chicken road') . "<br />";
//expect: "The ******* crossed the road"

function censor($word, $sentence)
{
	$new_word = str_repeat('*', strlen($word));
	$array = explode(" ", $sentence);
	for($i = 0; $i < count($array); $i++)
	{
		if($array[$i] == $word)
		{
			$array[$i] = $new_word;
		}
	}
	$array = implode(" ", $array);
	return $array;
}

echo censor("chicken", "Why did the chicken cross the road") . "<br />";
//Why did the ******* cross the road


function symbol_censor($word, $string)
{
	$word = strtolower($word);
	$string = strtolower($string);
	$string_array = explode(" ", $string);
	$censor_tools = "!@#$%^&*";

	for($i = 0; $i < count($string_array); $i++)
	{
		$start = strpos($string_array[$i], $word);
		if(is_numeric($start))
		{
			for($j = 0; $j < strlen($word); $j++)
			{
				$string_array[$i][$j+$start] = $censor_tools[rand(0,strlen($censor_tools) - 1)];
			}
		}
	}
	return implode(" ", $string_array);
}

echo symbol_censor("neck", "What a pain in the neck.") . "<br>";
echo symbol_censor("neck", "What a pain in the rubbernecker.") . "<br>";
