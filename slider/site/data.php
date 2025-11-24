<?php
$products = [
    [
        'id' => 1,
        'title' => 'Свіжі Яблука',
        'price' => 35,
        'image' => 'assets/images/apples.jpg',
        'timer' => '2:45:30',
        'special-offer' => 0, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 2,
        'title' => 'Солодкі Банани',
        'price' => 45,
        'image' => 'assets/images/banana.jpg',
        'timer' => '1:30:15',
        'special-offer' => 0, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 3,
        'title' => 'Апельсини',
        'price' => 65,
        'image' => 'assets/images/orange.webp',
        'timer' => '2:45:30',
        'special-offer' => 9, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 4,
        'title' => 'Ківі',
        'price' => 75,
        'image' => 'assets/images/kiwi.webp',
        'timer' => '2:45:30',
        'special-offer' => 11, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 5,
        'title' => 'Виноград',
        'price' => 85,
        'image' => 'assets/images/grapes.jpg',
        'timer' => '2:45:30',
        'special-offer' => 7, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 6,
        'title' => 'Манго',
        'price' => 95,
        'image' => 'assets/images/mango.jpg',
        'timer' => '2:45:30',
        'special-offer' => 0, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 7,
        'title' => 'Полуниця',
        'price' => 120,
        'image' => 'assets/images/strawberry.jpg',
        'timer' => '2:45:30',
        'special-offer' => 0, // це відсоток знижки
        'currency' => 'грн/кг'
    ],
    [
        'id' => 8,
        'title' => 'Абрикоси',
        'price' => 80,
        'image' => 'assets/images/apricot.jpeg',
        'timer' => '2:45:30',
        'special-offer' => 0, // це відсоток знижки
        'currency' => 'грн/кг'
    ]
];

function get_sale($price, $percent): float
{
    $price_offert = $price * (1 - $percent / 100);
    return $price_offert;
}

// echo '<pre>';
// print_r($store_data);
// echo '</pre>';
