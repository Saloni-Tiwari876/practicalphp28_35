<?php
$students = [
    "Rahul" => 85,
    "Sneha" => 92,
    "Amit" => 78,
    "Priya" => 88
];

$key = "Amit";

if(array_key_exists($key, $students)){
    echo "Key '$key' exists in the array.";
} else {
    echo "Key '$key' does not exist in the array.";
}
?>