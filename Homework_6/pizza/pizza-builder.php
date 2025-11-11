<?php
/* -------------------
 * Includes
 * ----------------- */
$data        = require_once 'data.php';
$ingredients = $data['ingredients_data'] ?? [];
$sizes       = $data['pizza_sizes'] ?? [];
$check_page  = preg_replace('/\/|\.php/', '', $_SERVER['REQUEST_URI']);

/*$check = str_replace('/' , '', $_SERVER['REQUEST_URI']);
$final_check = str_replace('.php' , '', $check);*/

/* -------------------
 * Variables
 * ----------------- */
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['ingredients'])) {
        $orders      = $_POST['ingredients'];
        $selected_size = $_POST['pizza_size'] ?? 'medium';
        $size_data = $sizes[$selected_size]; // Треба змінити [] на масив з даними. Тут буде вся інформація за розміром піци, яка зберігається в 'pizza_sizes'

        $ingredients_price = 0;
        $ingredients_kcal  = 0;
        $list        = [];

        foreach ($orders as $order) {
            $single_ingredient = $ingredients[$order];

            $ingredients_price += $single_ingredient['price'];
            $ingredients_kcal  += $single_ingredient['kcal'];
            array_push($list, $single_ingredient['name'] . '<br>');
        }

        // Застосувати множник до інгредієнтів
        $multiplier = $size_data['multiplier']; // Треба змінити 1.0 на обраний коефіцієнт. Тут отримуємо коефіцієнт розміру піци
        $ingredients_price *= $multiplier; // Треба змінити 0 на розрахунок. Ціна інгредієнтів * коефіцієнт розміру
        $ingredients_price_ = number_format($ingredients_price, 2);
        $ingredients_kcal *= $multiplier; // Треба змінити 0 на розрахунок. Калорії інгредієнтів * коефіцієнт розміру

        // Додати базову ціну піци
        $base_price = number_format($size_data['base_price'], 2) ?? 0;        
        $base_kcal = $size_data['base_kcal'] ?? 0;

        // Загальна ціна = базова ціна + інгредієнти з множником
        $total_price = number_format(($base_price + $ingredients_price), 2);  // Треба змінити 0 на розрахунок. Формується фінальна ціна. Тобто ціна на піцу ('base_price') + Ціна на інгредієнти
        $total_kcal = number_format(($base_kcal + $ingredients_kcal), 0);  // Треба змінити 0 на розрахунок. Формується фінальна калорійність. Тобто калорії піци ('base_kcal') + Калорії інгредієнтів


        $size_name = $size_data['name'] ?? 'Середня';
        $size_diameter = $size_data['diameter'] ?? '';

        $list_str = '<div class="ingredient-list">' . implode('', $list) . '</div>';

        $message  = "<div><strong>Розмір піци:</strong> $size_name ($size_diameter)</div>";
        $message .= "<div>Ви замовили наступні інгредієнти:</div>";
        $message .= $list_str;
        $message .= "<div style='margin-top: 15px; padding-top: 15px; border-top: 2px solid #ddd;'>";
        $message .= "<div><strong>Базова ціна піци:</strong> $base_price грн</div>";
        $message .= "<div><strong>Інгредієнти:</strong> $ingredients_price_ грн</div>";
        $message .= "<div style='color: #ff6600; font-size: 1.2em; margin-top: 10px;'><strong>Загальна ціна:</strong> $total_price грн</div>";
        $message .= "<div><strong>Ккал:</strong> $total_kcal ккал</div>";
        $message .= "</div>";
    } else {
        $message = 'Будь ласка, оберіть хоча б один інгредієнт.';
    }
} ?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Результат вашої піци 🍕</title>
</head>

<body class="<?= $check_page === 'pizza-builder' ? 'order-page' : ''; ?>">
    <div class="box">
        <h1>🍕 Ваша піца готова!</h1>
        <div class="box__order">
            <?= $message; ?>
        </div>
        <a href="index.php">⬅️ Повернутися</a>
    </div>
</body>

</html>