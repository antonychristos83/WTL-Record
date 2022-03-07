<?php
// Returns maximum in array
function getMax($array)
{
$n = count($array);
$max = $array[0];
for ($i = 1; $i < $n; $i++)
	if ($max < $array[$i])
		$max = $array[$i];
	return $max;	
}

// Returns maximum in array
function getMin($array)
{
$n = count($array);
$min = $array[0];
for ($i = 1; $i < $n; $i++)
	if ($min > $array[$i])
		$min = $array[$i];
	return $min;	
}

// Driver code
$array = array(1222, 2, 31, 42, 82);
echo"maximum = ";
echo(getMax($array));
echo("\n");
echo"minimum = ";
echo(getMin($array));
?>
