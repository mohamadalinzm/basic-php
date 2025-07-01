<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

function validate(string $input): string
{
    $input = trim($input);
    $input = preg_replace('/[^a-zA-Z\s]/', '', $input);

    return $input;
}

function validEmail($email): string
{
    $email = trim($email);
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Valid' : 'InValid';
}


include './showFormResult.php';
include './controller.php';