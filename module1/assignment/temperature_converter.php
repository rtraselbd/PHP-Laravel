<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
</head>

<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="temperature_converter.php">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br>
        <label for="conversion_type">Select Conversion Type:</label>
        <select name="conversion_type" id="conversion_type" required>
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="f_to_c">Fahrenheit to Celsius</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion_type = $_POST["conversion_type"];
        $result = "";

        if ($conversion_type == "c_to_f") {
            $result = ($temperature * 9 / 5) + 32;
            $result_unit = "Fahrenheit";
        } elseif ($conversion_type == "f_to_c") {
            $result = ($temperature - 32) * 5 / 9;
            $result_unit = "Celsius";
        }

        echo "<p>Result: $temperature &deg;$result_unit is $result &deg;$result_unit</p>";
    }
    ?>
</body>

</html>