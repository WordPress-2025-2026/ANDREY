<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Pizza Builder — Створи свою піцу 🍕</title>
</head>

<?php

use function PHPSTORM_META\type;
/* -------------------
 * Includes
 * ----------------- */

$pizza = require_once 'databases.php';

/* -------------------
 * Variables
 * ----------------- */
$ingredients = $pizza['pizza_ingredience'] ?? [];
$emojis      = $pizza['pizza_emojis'] ?? [];
$sizes       = $pizza['pizza_sizes'] ?? [];

?>

<body>
    <section class="hero">
        <h1>Створи свою піцу 🍕</h1>
        <p>Обери інгредієнти — і дізнайся її ціну та калорійність!</p>
    </section>

    <main class="container">
        <form method="POST" action="pizza-builder.php">
            <div class="pizza-form">
                <div class="pizza-size-section">
                    <h2>📏 Оберіть розмір піци:</h2>
                    <div class="size-options">
                        <?php if (is_array($sizes)) :
                            foreach ($sizes as $size_key => $size) : ?>
                                <label class="size-option">
                                    <input type="radio" name="pizza_size" value="<?= $size_key; ?>" <?= $size['slug'] === 'medium' ? 'checked' : ''; ?>>
                                    <div class="size-emoji"><?= $size['emoji']; ?></div>
                                    <div class="size-name"><?= $size['name']; ?></div>
                                    <div class="size-diameter"><?= $size['diameter']; ?></div>
                                    <div class="size-price"><?= number_format($size['base_price'], 2); ?> грн</div>
                                </label>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
                <?php if (is_array($ingredients)) :
                    foreach ($ingredients as $key => $ingredient) : ?>
                        <div class="ingredient">
                            <img src="<?= $ingredient['thumbnail']; ?>" alt="<?= $ingredient['description']; ?>" title="<?= $ingredient['description']; ?>">
                            <label>
                                <input type="checkbox" name="ingredients[]" value="<?= $key; ?>">
                                <?= $ingredient['name'] . ' — '
                                    . number_format($ingredient['price'], 2) . ' грн/<br> '
                                    . $ingredient['kcal'] . ' ккал<br>'
                                    . $ingredient['description'];
                                ?>
                            </label>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
            <button class="submit-btn" type="submit">🍕 Замовити піцу*</button>
        </form>
        <div class="size-diameter">
            <h2>* Вартість інгредієнтів та калорії вираховано при замовлені Малої (25см) піци.</h2>
        </div>
        <div id="result">
            <em>Тут з’явиться ваш результат після натискання кнопки.</em>
        </div>
    </main>
</body>

</html>