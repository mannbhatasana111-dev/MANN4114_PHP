<?php
$str = "  Hello World  ";
$str2 = "PHP";
$str3 = "MySQL";

echo "<h3>Original String: '$str'</h3>";

echo "Length: " . strlen($str) . "<br><br>";                     

echo "Concat: " . $str2 . " " . $str3 . "<br><br>";              

echo "Concat with dash: " . implode("-", [$str2, $str3, "Fun"]) . "<br><br>"; 

echo "Trim: '" . trim($str) . "'<br><br>";                       

echo "Left Trim: '" . ltrim($str) . "'<br><br>";                 

echo "Right Trim: '" . rtrim($str) . "'<br><br>";               

echo "Left Pad: '" . str_pad("123", 5, "0", STR_PAD_LEFT) . "'<br><br>"; 

echo "Right Pad: '" . str_pad("123", 5, "*", STR_PAD_RIGHT) . "'<br><br>"; 

echo "Find 'World': " . strpos($str, "World") . "<br><br>";     

echo "Strstr: '" . strstr($str, " ") . "'<br><br>";              

echo "Substring (3,5): '" . substr($str, 3, 5) . "'<br><br>";   

echo "Lowercase: '" . strtolower($str) . "'<br><br>";            

echo "Uppercase: '" . strtoupper($str) . "'<br><br>";          

echo "Repeat: '" . str_repeat("Hi ", 3) . "'<br><br>";           

echo "Replace 'World' with 'PHP': '" . str_replace("World", "PHP", $str) . "'<br><br>"; 
?>
