<?php

$currentDate = new DateTime();

$currentDate->modify('-1 month');

$previousMonth = $currentDate->format('m'); 

echo "The number of the month before the current month is: " . $previousMonth;


?>
