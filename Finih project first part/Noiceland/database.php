<?php
// ВИБІРКА ДАНИХ З БД
// Змінні
$host     = 'localhost:8889'; // Порт
$mydbName = 'noiceland'; // Назва БД 
$mytableMain = 'table_first'; // Назва першої таблиці
$mytableFooter = 'table_second'; // Назва другої таблиці
$user     = 'root'; // Користувач
$password = 'root'; // Пароль

try {
    $pdo = new PDO("mysql:host=$host;dbname=$mydbName", $user, $password);
    $pdo->setAttribute(
		PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION
    );

	// Вибірка з таблиці table_first
	$stmtNo = $pdo->prepare("SELECT * FROM $mytableMain");
	$stmtNo->execute();
	$mainArt = $stmtNo->fetchAll(PDO::FETCH_ASSOC);
	// echo '<pre>';
	    // print_r($mainArt);
	// echo '</pre>';

    // Вибірка з таблиці table_second
    $stmtNoi = $pdo->prepare("SELECT * FROM $mytableFooter");
    $stmtNoi->execute();
    $footerMenu = $stmtNoi->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
        // print_r($footerMenu);
    // echo '</pre>';

} catch(PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}




?>