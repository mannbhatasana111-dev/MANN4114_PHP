<?php

echo "<h2>While and Do While Loop</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>While Loop Output</th>
      </tr>";

echo "<tr>
        <td>";
   
        $i = 15;
        while($i <= 20) {
            echo $i . "  ";
            $i++;
        }

echo "</td></tr>";

echo "<tr>
        <th>Do While Loop Output</th>
      </tr>";

echo "<tr>
        <td>";

        $a = 15;
        do {
            echo $a . "  ";
            $a++;
        } while ($a <= 20);

echo "</td></tr>";

echo "</table>";
