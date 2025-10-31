<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $csvInput = trim($_POST['csvdata']);
    $lines = explode("\n", $csvInput);
    echo "<h2>Student Averages:</h2>";
    foreach ($lines as $line) {
        $parts = explode(',', trim($line));
        $name = array_shift($parts);
        $scores = array_map('floatval', $parts);
        $avg = count($scores) ? array_sum($scores) / count($scores) : 0;
        $summary = implode(' ', [$name, '-', 'Avg:', number_format($avg, 2)]);
        echo "<p>$summary</p>";
    }
}
?>

<form method="POST" action="">
    <label for="csvdata">Enter CSV data (one student per line):</label><br>
    <textarea name="csvdata" rows="5" cols="30" placeholder="Karan,85,90,78&#10;" required></textarea><br><br>
    <input type="submit" value="Parse CSV">
</form>
