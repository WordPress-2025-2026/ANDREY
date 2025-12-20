<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "root", "root", "mysql", 8889);

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

echo "З'єднання успішне!";