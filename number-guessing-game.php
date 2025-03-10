<?php
session_start(); // Start session to store attempts

// Generate a random number between 1 and 100 if not already set
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
}

// Get user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = intval($_POST['guess']);
    $_SESSION['attempts']++;

    if ($guess == $_SESSION['random_number']) {
        echo "🎉 Congratulations! You guessed the number {$_SESSION['random_number']} in {$_SESSION['attempts']} attempts!<br>";
        session_destroy(); // Reset game after correct guess
    } elseif ($guess > $_SESSION['random_number']) {
        echo "🔺 Too high! Try again.<br>";
    } else {
        echo "🔻 Too low! Try again.<br>";
    }
}
?>

<!-- HTML Form for User Input -->
<form method="post">
    <label>Enter your guess (1-100): </label>
    <input type="number" name="guess" min="1" max="100" required>
    <button type="submit">Guess</button>
</form>
