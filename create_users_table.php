<?php

include './db.php';
// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
