<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

//  ascending 
function sortAscending($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {


                // Swap 
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;

            }
        }
    }
    return $array;
}

// descending 
function sortDescending($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                // Swap elements
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Sort in ascending
$ascending = sortAscending($array);
echo "Ascending : " . implode(", ", $ascending) . "\n";

echo "<br>";

// Sort in descending 
$descending = sortDescending($array);
echo "Descending : " . implode(", ", $descending) . "\n";
?>
