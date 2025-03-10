<?php
// Defining a multidimensional array with student details
$students = [
    [
        "name" => "Muskan",
        "age" => 21,
        "grade" => "A+"
    ],
    [
        "name" => "Asad",
        "age" => 22,
        "grade" => "A+"
    ],
    [
        "name" => "Alee Raza",
        "age" => 22,
        "grade" => "A"
    ]
];

// Loop through the array and display student information
echo "<h2>Student Information</h2>";
foreach ($students as $student) {
    echo "📌 Name: " . $student["name"] . "<br>";
    echo "📌 Age: " . $student["age"] . "<br>";
    echo "📌 Grade: " . $student["grade"] . "<br><br>";
}
?>
