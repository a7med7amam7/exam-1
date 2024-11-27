<?php

$numbers = [10, 15, 20, 25, 30, 35, 40];

// remove even numbers
$oddNumbers = [];
foreach ($numbers as $number) {
    if ($number % 2 != 0) { 
        $oddNumbers[] = $number; 
    }
}

echo "Array with even numbers removed: ";
print_r($oddNumbers);
?>
