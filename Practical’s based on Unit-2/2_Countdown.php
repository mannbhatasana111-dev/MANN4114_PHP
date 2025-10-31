<?php
$eventDate = new DateTime("20-10-2025");

$today = new DateTime();

$interval = $today->diff($eventDate);

echo "📅 Days remaining until event : " . $interval->days;
?>
