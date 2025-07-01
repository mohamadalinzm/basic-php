<?php

$firsName = "Reza";
$lastName = "Kaabi";
$fullName = $firsName . " " . $lastName;

$name = "Reza Kaabi";  //string
$height = 185; //integer
$weight = 60.5; //float
$isStudent = true; //boolean


function validator(string $input): string
{
    $input = trim($input);
    //regex to remove special characters
    $input = preg_replace('/[^a-zA-Z\s]/', '', $input);

    return $input;
}

echo validator($firsName);

$students = [
    "name" => $name,
    "height" => $height,
    "weight" => $weight,
    "isStudent" => false
];

foreach ($students as $student) {
    echo $student . "\n";
}

$name = $_POST['name'];