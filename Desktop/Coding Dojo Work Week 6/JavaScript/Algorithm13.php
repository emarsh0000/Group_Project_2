<?php

function bubble_sort($array) 
{
    $size = count($array);
    for ($i=0; $i<$size; $i++) 
    {
        for ($j=0; $j<$size-1-$i; $j++) 
        {
            if ($array[$j+1] < $array[$j]) 
            {
                swap($array, $j, $j+1);
            }
        }
    }
    return $array;
}

function swap($array, $a, $b) 
{
    $tmp = $array[$a];
    $array[$a] = $array[$b];
    $array[$b] = $tmp;
}

/* test bubble sort */

$array = array(1,3,2,8,5,7,4,0);

echo("Before sorting");
var_dump($array);

bubble_sort($array);
echo("After sorting by using bubble sort");
var_dump($array);

?>