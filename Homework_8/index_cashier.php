<?php
echo '========================================';
echo '<br>';
echo '2. Симулятор касира в АТБ =).';
echo '<br>';
echo '========================================';
echo '<br><br>';
echo 'ТОВ "АТБ-Маркет"' . '<br>';
echo 'ПРОДУКТИ 1383' . '<br>';
echo 'Україна, Полтавська обл., м.Кременчук, вул. Соборна, 21' . '<br>';
echo 'ПН 304872104175' . '<br>';
echo 'Штрих код 2999300063595' . '<br>';
echo '========================================';
echo '<br>';
echo date("d-m-Y H:i:s") . '<br>';
echo '========================================';
echo '<br>';

$products = [
    ['name' => 'Хліб', 'price' => 25],
    ['name' => 'Молоко', 'price' => 39],
    ['name' => 'Сир', 'price' => 120],
    ['name' => 'Яблука', 'price' => 18],
    ['name' => 'Ковбаса Салямі', 'price' => 180],
    ['name' => 'Банани', 'price' => 38],
    ['name' => 'Цукерки Ромашка', 'price' => 130],
    ['name' => 'Масло 82,0 %', 'price' => 98],
    ['name' => 'Цукор', 'price' => 21],
    ['name' => 'Вода Трускавецька', 'price' => 13],
];

function total_price($products)
{
    shuffle($products);

    $products_five = array_slice($products, 0, 5);

    // Перший варіант просто foreach 

    // $total_sum = 0;
    // foreach ($products_five as $products_one) {
    // echo $products_one['name'] . '  -  ' . number_format($products_one['price'], 2) . '<br>';
    // $total_sum += $products_one['price'];
    // }

    // Другий варіант array_reduce() обов'язково створити індексний масив із 'price'

    foreach ($products_five as $products_one) {
        echo $products_one['name'] . '  -  ' . number_format($products_one['price'], 2) . '<br>';
    }
    function sum($carry, $item)
    {
        $carry += $item;
        return $carry;
    }
    $products_five_price = array_column($products_five, 'price');
    $total_sum = array_reduce($products_five_price, "sum");

    echo '========================================';
    echo '<br>';
    echo 'СУМА    :' . number_format($total_sum, 2) . '<br>';
    echo 'ПДВ  20,0% :' . number_format($total_sum / 6, 2);
    echo '<br>';
};
total_price($products);
