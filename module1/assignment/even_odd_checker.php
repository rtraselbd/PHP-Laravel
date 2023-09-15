<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>
    <form method="post" action="even_odd_checker.php">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required>
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            echo "<p>$number is even.</p>";
        } else {
            echo "<p>$number is odd.</p>";
        }
    }
    ?>
</body>
</html>
