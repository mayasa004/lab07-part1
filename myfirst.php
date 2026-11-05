<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Marks</title>
</head>
<body>
    <h1>Marks Result</h1>
    <?php
    $marks = [85, 85, 95];
    $marks[1] = 90;
    $ave = array_sum($marks) / count($marks);
    if ($ave >= 50) {
        $status = "PASSED";
    } else {
        $status = "FAILED";
    }
    echo "<p>Average: $ave</p>";
    echo "<p>Status: $status</p>";
    ?>
</body>
</html>