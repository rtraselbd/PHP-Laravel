<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="grade_calculator.php">
        <label for="score">Enter Score/Percentage:</label>
        <input type="number" name="score" id="score" required>
        <br>
        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = $_POST["score"];
        $grade = "";

        // Calculate the grade based on the score
        if ($score >= 90 && $score <= 100) {
            $grade = "A+";
        } elseif ($score >= 80 && $score < 90) {
            $grade = "A+";
        } elseif ($score >= 70 && $score < 80) {
            $grade = "A";
        } elseif ($score >= 60 && $score < 70) {
            $grade = "A-";
        } elseif ($score >= 50 && $score < 60) {
            $grade = "B";
        } elseif ($score >= 40 && $score < 50) {
            $grade = "C";
        } elseif ($score >= 33 && $score < 40) {
            $grade = "D";
        } elseif ($score >= 0 && $score < 33) {
            $grade = "F";
        } else {
            echo "<p>Invalid score. Please enter a score between 0 and 100.</p>";
        }

        if ($grade) {
            echo "<p>Your grade is: $grade</p>";
        }
    }
    ?>
</body>
</html>
