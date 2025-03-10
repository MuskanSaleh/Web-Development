<?php
function checkAgeCategory($age) {
    if (!is_numeric($age) || $age < 0) {
        echo "Invalid input.";
    } elseif ($age < 18) {
        echo "You are a minor.";
    } elseif ($age <= 65) {
        echo "You are an adult.";
    } else {
        echo "You are a senior citizen.";
    }
}

// Test cases
$test_ages = [10, 18, 30, 65, 70, -5, "abc"];
foreach ($test_ages as $age) {
    echo "Age: $age -> ";
    checkAgeCategory($age);
    echo "<br>";
}
?>
