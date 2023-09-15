<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    <form method="post" action="comparison_tool.php">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        $larger_number = ($num1 > $num2) ? $num1 : $num2;

        echo "<p>The larger number is: $larger_number</p>";
    }
    ?>
</body>
</html>
