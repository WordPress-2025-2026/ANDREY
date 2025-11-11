<?php
$data        = require_once 'data.php';
$ingredients = $data['ingredients_data'] ?? [];
$emojis      = $data['emojis'] ?? [];
$sizes       = $data['pizza_sizes'] ?? [];
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Pizza Builder — Створи свою піцу 🍕</title>
</head>

<body>
    <section class="hero">
        <h1>Створи свою піцу 🍕</h1>
        <p>Обери інгредієнти — і дізнайся її ціну та калорійність!</p>
    </section>

    <main class="container">
        <form class="pizza-form" method="POST" action="pizza-builder.php">
            <div class="pizza-size-section">
                <h2>📏 Оберіть розмір піци:</h2>
                <div class="size-options">
                    <?php if (is_array($sizes)) :
                        foreach ($sizes as $size_key => $size) : ?>
                            <label class="size-option">
                                <input type="radio" name="pizza_size" value="<?= $size_key; ?>" <?= $size_key === 'medium' ? 'checked' : ''; ?>>
                                <div class="size-emoji"><?= $size['emoji']; ?></div>
                                <div class="size-name"><?= $size['name']; ?></div>
                                <div class="size-diameter"><?= $size['diameter']; ?></div>
                                <div class="size-price"><?= $size['base_price']; ?> грн</div>
                            </label>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
            <?php if (is_array($ingredients)) :
                foreach ($ingredients as $key => $ingredient) :
                 /* -------------------
                 * Variables
                 * ----------------- */
                    $description = str_replace($emojis[$key], '', $ingredient['desc']);
            ?>
                    <div class="ingredient">
                        <img src="<?= $ingredient['thumbnail']; ?>" alt="<?= $ingredient['desc']; ?>" title="<?= $ingredient['desc']; ?>">

                        <label>
                            <input type="checkbox" name="ingredients[]" value="<?= $key; ?>">
                            <?= $ingredient['name'] . ' — '
                                . $ingredient['price'] . ' грн / '
                                . $ingredient['kcal'] . ' ккал<br>'
                                . $description;
                            ?>
                        </label>
                    </div>
            <?php endforeach;
            endif; ?>
            <div></div>
            <button class="submit-btn" type="submit">🍽️ Замовити піцу*</button>
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