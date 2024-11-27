<?php
// Shape 1
echo "<h3>Shape 1</h3>";
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}

// Shape 2
echo "<h3>Shape 2</h3>";
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

// Shape 3
echo "<h3>Shape 3</h3>";
for ($i = $rows; $i >= 1; $i--) {
    for ($j = $i; $j < $rows; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>
