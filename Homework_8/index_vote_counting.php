<?php
echo '========================================';
echo '<br>';
echo '3. Підрахунок голосів .';
echo '<br>';
echo '========================================';
echo '<br><br>';

$poll = ['так', 'ні', 'так', 'так', 'ні', 'так', 'ні'];

function vote_counting($poll)
{
    // Підрахуємо кількість входжень кожного окремого значення у масиві
    $poll_count_values = array_count_values($poll);
    
    // Вивід        
    echo 'РЕЗУЛЬТАТ ГОЛОСУВАННЯ: <br><br>';
         
    foreach ($poll_count_values as $key => $p_c_v) {
        echo mb_strtoupper($key) . '  :   ' . $p_c_v . '<br>';
        echo '<br>';
    }
};

vote_counting($poll);
