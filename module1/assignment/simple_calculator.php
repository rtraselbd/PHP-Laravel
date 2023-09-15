<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="simple_calculator.php">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operation selected.</p>";
                break;
        }

        if ($operation != 'divide' || ($operation == 'divide' && $num2 != 0)) {
            echo "<p>Result: $num1 ";
            switch ($operation) {
                case 'add':
                    echo "+";
                    break;
                case 'subtract':
                    echo "-";
                    break;
                case 'multiply':
                    echo "*";
                    break;
                case 'divide':
                    echo "/";
                    break;
            }
            echo " $num2 = $result</p>";
        }
    }
    ?>
</body>
</html>
