<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    $temperature = 20;

    echo "<p>Current Temperature: $temperature&deg;C</p>";

    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "<p>It's cool.</p>";
    } elseif ($temperature > 15) {
        echo "<p>It's warm.</p>";
    }
    ?>
</body>
</html>
