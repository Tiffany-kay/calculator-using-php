<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
        $operation = $_POST['operation'];
        $result = '';

        if ($operation == 'add') {
            $result = $num1 + $num2;
        } elseif ($operation == 'subtract') {
            $result = $num1 - $num2;
        } elseif ($operation == 'multiply') {
            $result = $num1 * $num2;
        } elseif ($operation == 'divide') {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
        } elseif ($operation == 'percentage') {
            $result = ($num1 / 100) * $num2;
        
        } elseif ($operation == 'log') {
            $result = "Logarithm of $num1 is " . log($num1);
            if ($num2 !== null) {
                $result .= "<br>Logarithm of $num2 is " . log($num2);
            }
        } else {
            $result = "Invalid operation";
        }

        echo "<p>Result: $result</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>
    <br><br>
    <a href="index.html">Go back to the calculator</a>
</body>
</html>
