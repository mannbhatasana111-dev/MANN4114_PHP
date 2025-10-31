<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

    echo "<h2>Sanitized Output:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
}
?>

<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label for="message">Message:</label><br>
    <textarea name="message" rows="5" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>
