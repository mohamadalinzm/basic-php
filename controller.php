<?php

include './db.php';

$sql = "INSERT INTO contact_forms (name, subject, email, message) VALUES ('$name', '$subject', '$email', '$message')";
$userSQL = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $userSQL)) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();