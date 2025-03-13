<?php
// Define an array to store contacts
$phone_directory = [];

// Function to add a contact
function addContact(&$directory, $name, $phone) {
    if (!isset($directory[$name])) {
        $directory[$name] = $phone;
        return "Contact '$name' added successfully!";
    }
    return "Contact with name '$name' already exists.";
}

// Function to delete a contact
function deleteContact(&$directory, $name) {
    if (isset($directory[$name])) {
        unset($directory[$name]);
        return "Contact '$name' deleted successfully!";
    }
    return "Contact '$name' not found.";
}

// Handle form submission for adding a contact
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_contact"])) {
    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);

    if (!empty($name) && !empty($phone)) {
        $message = addContact($phone_directory, $name, $phone);
    } else {
        $message = "Please enter both Name and Phone Number.";
    }
}

// Handle delete request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_contact"])) {
    $nameToDelete = $_POST["delete_contact"];
    $message = deleteContact($phone_directory, $nameToDelete);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Phone Directory</title>
</head>
<body>

    <h2>Phone Directory</h2>
    
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
        
        <input type="submit" name="add_contact" value="Add Contact">
    </form>

    <?php
    // Show success or error message
    if (isset($message)) {
        echo "<p><strong>$message</strong></p>";
    }
    ?>

    <h3>Saved Contacts</h3>

    <?php if (!empty($phone_directory)): ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
            <?php foreach ($phone_directory as $name => $phone): ?>
                <tr>
                    <td><?php echo htmlspecialchars($name); ?></td>
                    <td><?php echo htmlspecialchars($phone); ?></td>
                    <td>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="delete_contact" value="<?php echo htmlspecialchars($name); ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p><strong>No contacts to display or delete.</strong></p>
    <?php endif; ?>

</body>
</html>
