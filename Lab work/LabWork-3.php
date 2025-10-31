<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = trim($_POST['fullname']);
    $fullName = strtolower($fullName);
    $words = explode(' ', $fullName);
    foreach ($words as &$word) {
        $word = ucfirst($word);
    }
    $formattedName = implode(' ', $words);
    echo "<h2>Formatted Name:</h2>";
    echo "<p>$formattedName</p>";
}
?>

<form method="POST" action="">
    <label for="fullname">Full Name:</label><br>
    <input type="text" name="fullname" required><br><br>
    <input type="submit" value="Format Name">
</form>
