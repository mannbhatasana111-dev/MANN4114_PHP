<?php

$a = [10,20,30,40,50];
$r = array_reverse($a);
$m = array_merge($a, $r);
sort($m);
$s = array_sum($a);
$sum = array_sum($a) + array_sum($r);

$output_a = implode(", ", $a);
$output_r = implode(", ", $r);
$output_m = implode(", ", $m);
$output_s = $s;
$output_sum = $sum;

echo "Original array : " . $output_a . "<br><br>";
echo "Reversed array : " . $output_r . "<br><br>";
echo "Merged and sorted array : " . $output_m . "<br><br>";
echo "Sum of Original array : " . $output_s . "<br><br>";
echo "Sum of Original array & Reversed array : " . $output_sum . "<br><br>";

?>