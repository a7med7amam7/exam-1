<?php

$numbers = [10, 20, 30, 40, 50, 60, 70, 80];

// not get division by zero
if (count($numbers) > 0) {
    //sum of the array
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    // the average
    $average = $sum / count($numbers);


    echo "The average of the array is: " . $average;
} else {
    echo "The array is empty, cannot calculate the average.";
}
?>
