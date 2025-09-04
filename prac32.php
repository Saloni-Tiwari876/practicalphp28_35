<?php
$students = [
    "Rahul" => 85,
    "Sneha" => 92,
    "Amit" => 78,
    "Priya" => 88
];

// Update Sneha’s marks
$students["Sneha"] = 95;

echo "Updated Student Marks:<br>";
foreach($students as $name => $marks){
    echo "$name : $marks<br>";
}
?>