<?php

echo "<h2>For and ForEach Loop</h2>";

echo "<table>";
echo "<tr>
        <th>For Loop Output</th>
      </tr>";

echo "<tr>
        <td>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . "  ";
}

echo "</td></tr>";

echo "<tr>
        <th>Foreach Loop Output</th>
      </tr>";

echo "<tr>
        <td>";

$arr = [5,6,7,8,9,10];
foreach ($arr as $a) {
    if ($a <= 10) {
        echo $a . "  ";
    }
}

echo "</td></tr>";

echo "</table>";
