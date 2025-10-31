<?php

$days = ["Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

$months = 
[
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
];

$laptops = [
    "Asus" => 
    [
        ["model" => "VivoBook", "price" => 80000], 
        ["model" => "Rog", "price" => 120000]
    ],

    "HP" => 
    [
        ["model" => "Pavilion", "price" => 65000],
        ["model" => "Envy", "price" => 75000]
    ]
];
print_r("<pre>");
print_r($days);
print_r($months);

print_r($laptops);
?>
