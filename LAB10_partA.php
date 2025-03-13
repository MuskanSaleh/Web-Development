<?php
// Function to calculate the factorial of a number
function factorial($num) {
    if ($num < 0) {
        return "Factorial not defined for negative numbers";
    }
    if ($num == 0 || $num == 1) {
        return 1;
    }
    return $num * factorial($num - 1);
}

// Arithmetic functions using function overloading
function calculate(...$args) {
    $operation = array_shift($args);
    
    switch ($operation) {
        case 'add':
            return array_sum($args);
        case 'subtract':
            return count($args) == 2 ? $args[0] - $args[1] : $args[0] - $args[1] - $args[2];
        case 'multiply':
            return array_product($args);
        case 'divide':
            if (in_array(0, array_slice($args, 1))) {
                return "Cannot divide by zero";
            }
            return count($args) == 2 ? $args[0] / $args[1] : $args[0] / $args[1] / $args[2];
        default:
            return "Invalid operation";
    }
}

// Function to convert a number into digit-wise words
function numberToDigitWords($num) {
    $digitWords = array(
        '0' => 'Zero', '1' => 'One', '2' => 'Two', '3' => 'Three', '4' => 'Four',
        '5' => 'Five', '6' => 'Six', '7' => 'Seven', '8' => 'Eight', '9' => 'Nine'
    );

    $numStr = strval($num); // Convert number to string
    $wordArray = [];

    // Convert each digit into words
    for ($i = 0; $i < strlen($numStr); $i++) {
        if ($numStr[$i] == '-') {
            $wordArray[] = "Negative"; // Handle negative numbers
        } else {
            $wordArray[] = $digitWords[$numStr[$i]];
        }
    }

    return implode(" ", $wordArray);
}

// Example Usage:
echo "Factorial of 5: " . factorial(5) . "<br>";
echo "Addition (2,3): " . calculate('add', 2, 3) . "<br>";
echo "Subtraction (10,5): " . calculate('subtract', 10, 5) . "<br>";
echo "Multiplication (4,5,6): " . calculate('multiply', 4, 5, 6) . "<br>";
echo "Division (20,5): " . calculate('divide', 20, 5) . "<br>";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Number to Words Converter</title>
</head>
<body>

    <h2>Enter a Number to Convert</h2>
    <form method="post">
        <input type="text" name="input_number" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_number = $_POST["input_number"];
        if (is_numeric($input_number) || $input_number == "0") {
            echo "<h3>Number in Words: " . numberToDigitWords($input_number) . "</h3>";
        } else {
            echo "<h3 style='color:red;'>Please enter a valid number!</h3>";
        }
    }
    ?>

</body>
</html>
