<?php

$name = validate($name);
$subject = validate($subject);
$message = validate($message);
$isValidEmail = validEmail($email);

echo $name ? "Name: " . htmlspecialchars($name) . "<br>" : '';
echo $email ? "Email: " . htmlspecialchars($email) . "<br>" : '';
echo $subject ? "Subject: " . htmlspecialchars($subject) . "<br>" : '';
echo $message ? "Message: " . nl2br(htmlspecialchars($message)) . "<br>" : '';
echo $isValidEmail ? "IS Valid Email: " . $isValidEmail . "<br>" : '';