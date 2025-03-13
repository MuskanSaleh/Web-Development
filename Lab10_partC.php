<?php
// Initialize variables
$name = $email = "";
$request_method = $_SERVER["REQUEST_METHOD"]; // Detects GET or POST

// Check if form is submitted via GET or POST
if ($request_method == "POST") {
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
} elseif ($request_method == "GET") {
    $name = isset($_GET["name"]) ? trim($_GET["name"]) : "";
    $email = isset($_GET["email"]) ? trim($_GET["email"]) : "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Superglobals: GET & POST Handling</title>
</head>
<body>

    <h2>PHP Form Handling with GET and POST</h2>

    <!-- Form to test both GET and POST methods -->
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <input type="submit" value="Submit (POST)">
    </form>

    <br>

    <form method="get">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <input type="submit" value="Submit (GET)">
    </form>

    <h3>Form Submission Results</h3>

    <?php if (!empty($name) && !empty($email)): ?>
        <p><strong>Request Method:</strong> <?php echo htmlspecialchars($request_method); ?></p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <?php else: ?>
        <p><strong>No data submitted yet.</strong></p>
    <?php endif; ?>

</body>
</html>
