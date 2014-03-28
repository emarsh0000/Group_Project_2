<?php

	//Given a target string and a search string, write a function that
	// returns 'true' if the search string is in the target string,
	// 'false' if it is not.
	// (optional): Instead of 'true' or 'false', return the number of times
	// the search string is in the target string.
	function finder($needle, $haystack)
	{
		$count = 0;
		$needle_length = strlen($needle);
		$needle_positions = (strlen($haystack) - $needle_length) + 1;

		for($i = 0; $i < $needle_positions; $i++)
		{
			$word_exists = TRUE;
			for($j = 0; $j < $needle_length; $j++)
			{
				if ($haystack[$i + $j] != $needle[$j])
				{
					$word_exists = FALSE;
				}
			}
			if ($word_exists)
			{
				$count += 1;
			}
		}
		return $count;
	}

	echo "Finding I sc <br />";
	echo finder('I sc', 'I scream, you scream, we all scream for ice cream');
	echo '<br />';
	echo "Finding cream <br />";
	echo finder('cream', 'I scream, you scream, we all scream for ice cream');
	echo '<br />';
	echo "Finding kitty <br />";
	echo finder('kitty', 'I scream, you scream, we all scream for ice cream');
?>