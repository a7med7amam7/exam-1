<?php

$String1 = "welcome to the world ";
$String2 = "welcome";

if (preg_match("/$String2/", $String1)) {

    echo "The string '$String2' is found.";

} else {
    
    echo "The string '$String2' is not found.";
}
?>
