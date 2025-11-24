<?php //Підключити файл data.php та створити змінні 
require_once('data.php');

// echo '<pre>';
// print_r($products);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фруктова Вітрина</title>
    <!-- Підключаємо Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <!-- Підключаємо іконки Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Підключаємо наші стилі -->
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
    <header class="site-header">
        <div class="header-top">
            <div class="header-container">
                <div class="site-title">
                    <a href="#">Фруктова Вітрина</a>
                </div>
                <nav class="site-nav">
                    <ul>
                        <li><a href="#">Головна</a></li>
                        <li><a href="#">Товари</a></li>
                        <li><a href="#">Акції</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </nav>
                <div class="cart-icon">
                    <a href="#"><i class="fas fa-shopping-cart"></i> Кошик</a>
                </div>
            </div>
        </div>
        <div class="header-banner">
            <div class="header-container">
                <div class="banner-content">
                    <h1>Свіжі Фрукти просто до вашого столу</h1>
                    <p>Широкий вибір найсмачніших фруктів за доступними цінами</p>
                    <a href="#products" class="buy-button">Переглянути товари</a>
                </div>
            </div>
            <div class="floating-blobs"></div>
        </div>
    </header>

    <!-- Flash Deals секція -->
    <section class="section flash-deals">
        <h2 class="section-title">Flash Deals</h2>
        <div class="flash-deals-container">
            <!-- додати сюди код для $flash_deals -->
            <!-- Потропляють тільки фрукти у яких знижка не= 0 -->
            <?php $count_flash = 0; ?>
            <?php foreach ($products as $f_d) : ?>
                <?php if ($f_d['special-offer'] !== 0) : ?>
                    <div class="flash-deal-card">
                        <img src=<?= $f_d['image'] ?> alt=<?= $f_d['title'] ?> class="flash-deal-image">
                        <div class="flash-deal-content">
                            <h3 class="flash-deal-title"><?= $f_d['title'] ?></h3>
                            <p class="flash-deal-price sell">Звичайна ціна: <?= number_format($f_d['price'], 2, ',', ' ') ?> <?= $f_d['currency'] ?></p>
                            <p class="flash-deal-price">Знижка <?= $f_d['special-offer'] ?> %</p>
                            <p class="flash-deal-price">ЦІНА ЗІ ЗНИЖКОЮ: </p>
                            <!-- Вираховуємо знижку -->
                            <!-- Простіший варіант (без функції) -->
                            <!-- <p class="flash-deal-price"><?= number_format($f_d['price'] * (1 - $f_d['special-offer'] / 100), 2, ',', ' ') ?> <?= $f_d['currency'] ?></p> -->
                            <!-- Варіант з функцією -->
                            <p class="flash-deal-price"><?= number_format(get_sale($f_d['price'], $f_d['special-offer']), 2, ',', ' ') ?> <?= $f_d['currency'] ?></p>
                            <p class="flash-deal-timer">Знижка закінчується через: <?= $f_d['timer'] ?></p>
                            <button class="buy-button">Купити зі знижкою</button>
                        </div>
                    </div>
                <?php $count_flash++;
                endif;
            endforeach;
            if ($count_flash === 0) : ?>
                <div class="not_flash">
                    <h1>НАЖАЛЬ, НА СЬОГОДНЯ ЗНИЖОК НЕМАЄ</h1> 
                </div>
            <?php endif ?>
        </div>
    </section>

    <!-- Products секція -->
    <section class="section products">
        <h2 class="section-title">Discover Our Products</h2>
        <div class="products-container">
            <!-- додати сюди код для $products -->
            <?php
            // функція для слайдера
            $id_border = 3;
            session_start();
            if (!isset($_SESSION['total'])) {
                $_SESSION['total'] = 0;
            }
            if (isset($_POST['num'])) {
                $_SESSION['total'] += (int)$_POST['num'];
                if ($_SESSION['total'] > count($products) - $count_flash - 1) {
                    $_SESSION['total'] = 2;
                }
                if ($_SESSION['total'] < 2) {
                    $_SESSION['total'] = count($products) - $count_flash - 1;
                }
            }
            $id_border = $_SESSION['total'];
            $productss = array_filter($products, function ($value) {
                return $value['special-offer'] === 0;
            });
            $productsss = array_values($productss);
            foreach ($productsss as $key => $product) : ?>
                <?php if ($key >= $id_border - 2 && $key <= $id_border) : ?>
                    <div id="p_c_1" class="product-card">
                        <img src=<?= $product['image'] ?> alt=<?= $product['title'] ?> class="product-image">
                        <div class="product-content">
                            <h3 class="product-title"><?= $product['title'] ?></h3>
                            <p class="product-price"><?= number_format($product['price'], 2, ',', ' ') ?> <?= $product['currency'] ?></p>
                            <button class="buy-button">Купити</button>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- Лента слайдера -->
        <div class="slider_ribbon">
            <?php for ($i = 1; $i <= count($products) - $count_flash; $i++) : ?>
                <div class=<?= ($i >= $id_border - 1 && $i <= $id_border + 1) ? 'slider_dot_big' : 'slider_dot' ?>></div>
            <?php endfor;  ?>
        </div>
        <!-- Кнопки слайдера -->
        <div>
            <form class="form_s" method="post">
                <button class="buy-button_1" type=" submit" name="num" value="-1" onclick="location.href='#p_c_1'">
                ⬅ </button>
                        <button class="buy-button_1" type=" submit" name="num" value="1" onclick="location.href='#p_c_1'">
                        ➡
                        </button>
            </form>
        </div>

    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Про нас</h3>
                <ul>
                    <li><a href="#">Наша історія</a></li>
                    <li><a href="#">Команда</a></li>
                    <li><a href="#">Кар'єра</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Клієнтам</h3>
                <ul>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Повернення</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Контакти</h3>
                <ul>
                    <li><a href="tel:+380123456789">+38 (012) 345-67-89</a></li>
                    <li><a href="mailto:info@fruitshop.com">info@fruitshop.com</a></li>
                    <li><a href="#">Адреса магазину</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Фруктова Вітрина. Всі права захищені.</p>
        </div>
    </footer>

    <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>