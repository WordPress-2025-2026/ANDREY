<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection MySQL</title>
</head>

<body>

</body>

</html>
<?php
$host     = 'localhost:8889';
$dbname_ingredience = 'ingredience';
$dbname_emojis      = 'emojis';
$dbname_pizza_sizes = 'pizza_sizes';
$user     = 'root';
$password = 'root';

echo 'ФАЙЛ databases.php ВИВЕДЕНО' . '<br>';

try {
    $pdo_ingredience = new PDO("mysql:host=$host;dbname=$dbname_ingredience", $user, $password);
    $pdo_ingredience->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Вибірка з таблиці ingredients_data
    $stmt_ingredience = $pdo_ingredience->prepare('SELECT * FROM ingredients_data');
    $stmt_ingredience->execute();
    $pizza_ingredience = $stmt_ingredience->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($pizza_ingredience);
    echo '</pre>';
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}

try {
    $pdo_emojis = new PDO("mysql:host=$host;dbname=$dbname_emojis", $user, $password);
    $pdo_emojis->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Вибірка з таблиці emojis
    $stmt_emojis = $pdo_emojis->prepare('SELECT * FROM emojis');
    $stmt_emojis->execute();
    $pizza_emojis = $stmt_emojis->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($pizza_emojis);
    echo '</pre>';
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}

try {
    $pdo_pizza_sizes = new PDO("mysql:host=$host;dbname=$dbname_pizza_sizes", $user, $password);
    $pdo_pizza_sizes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Вибірка з таблиці pizza_sizes
    $stmt_pizza_sizes = $pdo_pizza_sizes->prepare('SELECT * FROM pizza_sizes');
    $stmt_pizza_sizes->execute();
    $pizza_pizza_sizes = $stmt_pizza_sizes->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($pizza_pizza_sizes);
    echo '</pre>';
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}
?>