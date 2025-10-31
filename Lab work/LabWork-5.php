<?php
$bannedWords = ['spam', 'hack', 'scam'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentRaw = trim($_POST['comment']);
    $commentLower = strtolower($commentRaw);
    $safeComment = htmlspecialchars($commentRaw, ENT_QUOTES, 'UTF-8');

    $flagged = false;
    foreach ($bannedWords as $word) {
        if (strpos($commentLower, $word) !== false) {
            $flagged = true;
            break;
        }
    }

    echo "<h2>Comment:</h2>";
    echo "<p>$safeComment</p>";
    if ($flagged) {
        echo "<p style='color:red; font-weight:bold;'>Warning: Comment contains banned words.</p>";
    } else {
        echo "<p>Comment is clean.</p>";
    }
}
?>

<form method="POST" action="">
    <label for="comment">Enter Comment:</label><br>
    <textarea name="comment" rows="4" cols="40" required></textarea><br><br>
    <input type="submit" value="Submit Comment">
</form>
