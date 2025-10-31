<?php

echo "Original array:\n<pre>";
print_r(["One" => "Apple", "Two" => "Banana", "Three" => "Cherry"]);
echo "</pre>\n";

echo "Keys changed to lower case:\n<pre>";
print_r(array_change_key_case(["One" => "Apple", "Two" => "Banana", "Three" => "Cherry"], CASE_LOWER));
echo "</pre>\n";

echo "Keys changed to UPPER CASE:\n<pre>";
print_r(array_change_key_case(["One" => "Apple", "Two" => "Banana", "Three" => "Cherry"], CASE_UPPER));
echo "</pre>\n";

echo "<hr>";

echo "Array chunks of 3 months:\n<pre>";
print_r(array_chunk(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], 3));
echo "</pre>\n";

echo "<hr>";

echo "Count of each color:\n<pre>";
print_r(array_count_values(["red", "blue", "red", "green", "blue", "blue"]));
echo "</pre>\n";

echo "<hr>";

echo "Combined array (keys + values):\n<pre>";
print_r(array_combine(["name", "age", "city"], ["Alice", 25, "New York"]));
echo "</pre>\n";

echo "<hr>";

$stack = ["one", "two", "three"];
$last = array_pop($stack);
echo "Popped last element: $last<br>";
echo "Array after pop:\n<pre>";
print_r($stack);
echo "</pre>\n";

echo "<hr>";

array_push($stack, "four", "five");
echo "Array after pushing two elements:\n<pre>";
print_r($stack);
echo "</pre>\n";

echo "<hr>";

array_unshift($stack, "zero");
echo "Array after unshifting one element:\n<pre>";
print_r($stack);
echo "</pre>\n";

echo "<hr>";

$first = array_shift($stack);
echo "Shifted first element: $first<br>";
echo "Array after shift:\n<pre>";
print_r($stack);
echo "</pre>\n";

echo "<hr>";

?>
