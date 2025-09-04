<?php
$fruits = ["apple", "banana", "mango", "orange"];
$search = "mango";

if(in_array($search, $fruits)){
    echo "$search exists in the array.";
} else {
    echo "$search does not exist in the array.";
}
?>