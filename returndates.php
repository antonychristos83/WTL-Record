<?php

// Declare two dates
$Date1 = '06-03-2022';
$Date2 = '16-03-2022';

// Declare an empty array
$array = array();

// Use strtotime function
$Variable1 = strtotime($Date1);
$Variable2 = strtotime($Date2);

// Use for loop to store dates into array
// 86400 sec = 24 hrs = 60*60*24 = 1 day
for ($currentDate = $Variable1; $currentDate <= $Variable2;
								$currentDate += (86400)) {
									
$Store = date('d-m-Y', $currentDate);
$array[] = $Store;
}

// Display the dates in array format
print_r($array);
?>
