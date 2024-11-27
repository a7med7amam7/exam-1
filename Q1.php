<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Chessboard</h1>
    <table border="1">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
            
                $isBlack = ($row + $col) % 2 == 0;
                $class = $isBlack ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
