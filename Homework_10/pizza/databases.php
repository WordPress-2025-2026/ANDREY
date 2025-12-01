<?php
// Підключення
require_once 'helpers.php';
// Змінні
$host     = 'localhost:8889'; // Порт
$dbname_pizza = 'ingredience'; // Назва Бази Даних для кожної таблиці
$user     = 'root'; // Користувач
$password = 'root'; // Пароль

try {     // Спробувати
    // SET NAMES 'UTF8';
    //  Клас  PDO для Баз Даних для сворення об'єкту PDO
    $pdo_pizza = new PDO("mysql:host=$host;dbname=$dbname_pizza", $user, $password);
    // Атрібути (відстежуємо помилки)
    $pdo_pizza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Вибірка з таблиці ingredients_data
    // Підготовка запиту
    // $stmt_ingredience = $pdo_pizza->prepare('SELECT * FROM ingredients_data');
    // Виконання запиту    
    // $stmt_ingredience->execute();
    // Повернення запиту
    // $pizza_ingredience = $stmt_ingredience->fetchAll(PDO::FETCH_ASSOC); // режим для повернення даних в асоціативному форматі

    return [
    // Вибірка з таблиці ingredients_data
    'pizza_ingredience' => getPizzadate($pdo_pizza, 'ingredients_data'),

    // Вибірка з таблиці emojis
    'pizza_emojis' => getPizzadate($pdo_pizza, 'emojis'),

    // Вибірка з таблиці pizza_sizes
    'pizza_sizes' => getPizzadate($pdo_pizza, 'pizza_sizes')        
    ];

} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}
?>