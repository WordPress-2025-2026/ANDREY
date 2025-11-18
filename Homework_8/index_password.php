<?php
echo '========================================';
echo '<br>';
echo '1. Генератор випадкових паролів.';
echo '<br>';
echo '========================================';
echo '<br><br>';

function generate_password($length = 5)
{
    //Обираємо усі можливі символи пароля 
    $ar_one = range('a', 'z');
    $ar_two = range('A', 'Z');
    $ar_three = range('0', '9');

    // З'єднуємо до одного загального масиву
    $ar_pas_base = array_merge($ar_one, $ar_two, $ar_three);

    // Перемішуємо загальний масив в рандомному порядку
    shuffle($ar_pas_base);

    // Обираємо потрібну кількість елементів з рандомного індексу
    $ar_index_rand = rand(0, count($ar_pas_base) - $length);
    $ar_pas_five = array_slice($ar_pas_base, $ar_index_rand, $length);

    // Перетворюємо масив на рядок
    $pass = implode($ar_pas_five);

    // Виводимо пароль
    echo "Ваш пароль ($length):  $pass";
    echo '<br>';
    echo '========================================';
    echo '<br>';

    return $pass;
}
generate_password(4);
generate_password(5);
generate_password(6);
generate_password(7);
generate_password(9);
