<?php
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Germany" => "Berlin"
];

$search = "Tokyo";
$country = array_search($search, $countries);

if($country){
    echo "$search is the capital of $country.";
} else {
    echo "$search not found in the array.";
}
?>