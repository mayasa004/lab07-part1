<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Days of the Week</title>
</head>
<body>
    <h1>Days of the Week</h1>
    <?php
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    echo '<h2>English</h2><p>' . implode(', ', $days) . '</p>';

    // Replace the English values with their French equivalents.
    $days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    echo '<h2>French</h2><p lang="fr">' . implode(', ', $days) . '</p>';
    ?>
</body>
</html>