<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $token = md5($email . time());
    echo "<h2>Generated Token:</h2>";
    echo "<p>$token</p>";
    echo "<p>This token can be used in password reset URLs to verify the user's identity securely.</p>";
}
?>

<form method="POST" action="">
    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Generate Token">
</form>
