<?php
$fruits = [
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 100,
    "Orange" => 80,
    "Grapes" => 60
];

echo "Original Array:<br>";
print_r($fruits);

asort($fruits); // sort by value
echo "<br><br>Sorted by Price (Value):<br>";
print_r($fruits);

ksort($fruits); // sort by key
echo "<br><br>Sorted by Fruit Name (Key):<br>";
print_r($fruits);
?>