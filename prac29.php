<?php
$numbers = [10, 20, 30, 20, 40, 10, 50];

echo "Original Array: <br>";
print_r($numbers);

$unique = array_unique($numbers);

echo "<br><br>Array after removing duplicates: <br>";
print_r($unique);
?>