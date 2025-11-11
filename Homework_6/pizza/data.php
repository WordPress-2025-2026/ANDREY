<?php
return [
	'emojis' => [
		'cheese'    => '🧀',
		'ham'       => '🥩',
		'olives'    => '🫒',
		'mushrooms' => '🍄',
		'pepper'    => '🌶️',
		'salami'    => '🥓',
	],
	'ingredients_data' => [
		'cheese' => [
			'thumbnail' => 'images/png-clipart-cheese-cheese.png',
			'price'     => 25,
			'kcal'      => 150,
			'name'      => '🧀 Сир',
			'desc'      => '🧀 Сир — шматочки моцарели на піці',
		],
		'ham' => [
			'thumbnail' => 'images/istockphoto-488330599-612x612.jpg',
			'price'     => 20,
			'kcal'      => 120,
			'name'      => '🥩 Шинка',
			'desc'      => '🥩 Шинка на піці',
		],
		'olives' => [
			'thumbnail' => 'images/black-olive-slices-isolated-on-600nw-2268507705.webp',
			'price'     => 12,
			'kcal'      => 100,
			'name'      => '🫒 Оливки',
			'desc'      => '🫒 Чорні оливки',
		],
		'mushrooms' => [
			'thumbnail' => 'images/sliced-champignons-closeup-isolated-on-260nw-2290995497.webp',
			'price'     => 19,
			'kcal'      => 90,
			'name'      => '🍄 Гриби',
			'desc'      => '🍄 Гриби шампіньйони',
		],
		'pepper' => [
			'thumbnail' => 'images/sliced-rings-red-bell-pepper-isolated-white-background-top-view_270100-1630.jpg',
			'price'     => 23,
			'kcal'      => 95,
			'name'      => '🌶️ Перець',
			'desc'      => '🌶️ Червоний болгарський перець',
		],
		'salami' => [
			'thumbnail' => 'images/kovbasa-zimbo-salyami-po-provansky.jpg',
			'price'     => 57,
			'kcal'      => 100,
			'name'      => '🥓 Салямі',
			'desc'      => '🥓 Салямі по Прованські',
		],
	],
	'pizza_sizes' => [
		'small' => [
			'name' => 'Мала',
			'emoji' => '🍕',
			'multiplier' => 1.0,
			'base_price' => 80,
			'base_kcal' => 200,
			'diameter' => '25 см'
		],
		'medium' => [
			'name' => 'Середня',
			'emoji' => '🍕',
			'multiplier' => 1.3,
			'base_price' => 100,
			'base_kcal' => 260,
			'diameter' => '30 см'
		],
		'large' => [
			'name' => 'Велика',
			'emoji' => '🍕',
			'multiplier' => 1.6,
			'base_price' => 120,
			'base_kcal' => 320,
			'diameter' => '35 см'
		],
	],
];