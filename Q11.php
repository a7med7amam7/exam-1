<?php

if (isset($_POST['color'])) {
    $color = $_POST['color'];

    setcookie('background_color', $color, time() + 30 * 24 * 60 * 60, '/'); 

} else {

    $color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'white'; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;">

    <h2>Select a Background Color</h2>
    
    <form method="POST">
        <select name="color">
            <option value="white" <?php if ($color == 'white') echo 'selected'; ?>>White</option>
            <option value="blue" <?php if ($color == 'blue') echo 'selected'; ?>> Blue</option>
            <option value="green" <?php if ($color == 'green') echo 'selected'; ?>> Green</option>
            <option value="yellow" <?php if ($color == 'yellow') echo 'selected'; ?>> Yellow</option>
        </select>
        <button type="submit">Change Color</button>
    </form>

</body>
</html>
