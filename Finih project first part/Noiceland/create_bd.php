<?php
// СТВОРЕННЯ БД 
// СТВОРЕННЯ ТАБЛИЦЬ
// ЗАНЕСЕННЯ ДАНИХ ДО ТАБЛИЦЬ

// Змінні
// $host     = 'localhost:8889'; // Порт
// $mydbName = 'noiceland'; // Назва БД 
// $mytableMain = 'table_first'; // Назва першої таблиці
// $mytableFooter = 'table_second'; // Назва другої таблиці
// $user     = 'root'; // Користувач
// $password = 'root'; // Пароль

// Створення БД
// try {
    // $pdo = new PDO("mysql:host=$host; port=7888", $user, $password);
    // $pdo->exec("CREATE DATABASE noiceland CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    // echo "БД створена!";
// } catch (PDOException $e) {
    // echo "Помилка: " . $e->getMessage();
// }

// Створення першої таблиці
// try {
    // $pdo = new PDO(
        // "mysql:host=$host;dbname=$mydbName;charset=utf8",
        // $user,
        // $password,
        // [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    // );
// 
    // $sql = "
        // CREATE TABLE $mytableMain (
            // id INT AUTO_INCREMENT PRIMARY KEY,
            // photo VARCHAR(255) NOT NULL,
            // title VARCHAR(255) NOT NULL,
            // text VARCHAR(255) NOT NULL,
            // autor VARCHAR(255) NOT NULL,
            // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        // )
    // ";
// 
    // $pdo->exec($sql);
    // echo "Таблицю $mytableMain створено успішно";
// } catch (PDOException $e) {
    // echo "Помилка: " . $e->getMessage();
// }

// Створення другої таблиці
// try {
    // $pdo = new PDO(
        // "mysql:host=$host;dbname=$mydbName;charset=utf8",
        // $user,
        // $password,
        // [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    // );
// 
    // $sql = "
        // CREATE TABLE $mytableFooter (
            // id INT AUTO_INCREMENT PRIMARY KEY,
            // above VARCHAR(255),
            // down VARCHAR(255),
            // one_one VARCHAR(255),
            // one VARCHAR(255),
            // two VARCHAR(255),
            // three VARCHAR(255),
            // created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        // )
    // ";
    // $pdo->exec($sql);
    // echo "Таблицю $mytableFooter створено успішно";
// } catch (PDOException $e) {
    // echo "Помилка: " . $e->getMessage();
// }

// Підключаємо файл 
// require_once ('data.php');


// Запис даних у першу таблицю
// $conn = new mysqli("localhost", $user, $password, $mydbName, 8889);
// 
// if ($conn->connect_error) {
    // die("Помилка підключення: " . $conn->connect_error);
// }
// 
// $sql = "INSERT INTO $mytableMain (photo, title, text, autor)
        // -- VALUES (?, ?, ?, ?)";
// 
// $stmt = $conn->prepare($sql);
// 
// foreach ($mainArt as $row) {
    // $stmt->bind_param(
        // "ssss",
        // $row['photo'],
        // $row['title'],
        // $row['text'],
        // $row['autor']
    // );
    // $stmt->execute();
// }
// $stmt->close();
// $conn->close();
// 

// Запис даних у другу таблицю

// $conn = new mysqli("localhost", $user, $password, $mydbName, 8889);
// 
// if ($conn->connect_error) {
    // die("Помилка підключення: " . $conn->connect_error);
// }
// 
// $sql = "INSERT INTO $mytableFooter (above, down, one_one, one, two, three)
        // -- VALUES (?, ?, ?, ?, ?, ?)";
// 
// $stmt = $conn->prepare($sql);
// 
// foreach ($footerMenu as $row) {
    // $stmt->bind_param(
        // "ssssss",
        // $row['above'],
        // $row['down'],
        // $row['one_one'],
        // $row['one'],
        // $row['two'],
        // $row['three']
    // );
    // $stmt->execute();
// }
// $stmt->close();
// $conn->close();

?>