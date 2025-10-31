<?php
$responses = [4, 5, 3, 4, 2, 5, 4];

function calculateAverage($data) {
    $total = array_sum($data);
    $count = count($data);
    return $count > 0 ? $total / $count : 0;
}

$average = calculateAverage($responses);
echo "📊 Average survey score : " . round($average, 2);
?>
