<?php
// Функція для повернення запитів з бази даних
function getPizzadate(PDO $pdo_pizza, string $table): array
{
    $stmt = $pdo_pizza->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
