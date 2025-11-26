<?php
$arr_respectful = [
	['respectful' => 'колего'],
	['respectful' => 'друже'],
	['respectful' => 'громадянин'],
	['respectful' => 'підписник'],
];
$arr_appeal = [
	['appeal' => 'Вас чекають.', 			'color' => 'turquoise'],
	['appeal' => 'Отримайте ці документи.', 'color' => 'blue'],
	['appeal' => 'Ви найкращий!', 			'color' => 'red'],
	['appeal' => 'Ви найрозумніший!',		'color' => 'green'],
];

function greeting($person)
{
	return function ($accost) use ($person) {
		$a = "Шановний, {$person}! {$accost}";
		return $a;
	};
}

foreach ($arr_respectful as $respectful) {
	$respectful_address = greeting($respectful['respectful']);
	foreach ($arr_appeal as $appeal) {
		echo '<p style = "color:' . $appeal['color'] . ';">' . $respectful_address($appeal['appeal']) . '</p>';
	};
	echo '<hr>';
}






