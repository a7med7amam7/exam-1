<?php

function isPrime($number) {
    
    if ($number <= 1) {
        return false; 
    }

    echo "<br>";


    if ($number == 2) {
        return true;
    }

    echo "<br>";

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$primeNumbers = [1, 2, 3, 4, 5, 16, 17, 18, 19, 20];

foreach ($primeNumbers as $number) {
    if (isPrime($number)) {
        echo "$number is a prime number.\n";

        echo "<br>";

    } else {
        echo "$number is not a prime number.\n";
    }
}
?>
