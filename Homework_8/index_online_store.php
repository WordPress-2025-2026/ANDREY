<?php
echo '==============================================';
echo '<br>';
echo '4 . Створити функцію для інтернет-магазину.';
echo '<br>';
echo '==============================================';
echo '<br><br>';

$products = [
    ['price' => 120],
    ['price' => 350],
    ['price' => 99],
    ['price' => 400],
];

function calc_total($products)
{
    // Перший варіант просто foreach 

    $total_sum = 0;
    foreach ($products as $products_price) {
    $total_sum += $products_price['price'];
    }

    // Другий варіант array_reduce() спочатку за допомогою функції array_column()
    // обов'язково створити індексний масив із колонки 'price'

    // function sum($carry, $item)
    // {
        // $carry += $item;
        // return $carry;
    // }

    // $products_total_price = array_column($products, 'price');
    // $total_sum = array_reduce($products_total_price, "sum");

    echo '<br>';
    echo 'СУМА    :' . number_format($total_sum, 2) . '<br>';
    echo '<br>';
};

calc_total($products);
