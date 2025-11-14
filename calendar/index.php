<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Календар!!!!</title>
</head>

<body>
    <div class="container">
        <form method="post">
            Який рік Вас цікавить:<br>
            <input class="input_field" type="number" name="some" value="1969" max="9999">
            <input class="input_button" type="submit" name="submit" value="ЗРОБИТИ КАЛЕНДАР">
        </form>
        <?php
        $in_year = $_POST['some']; //.. отримали рік
        $day_week_title = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']; //масив днів тижня
        ?>
        <div class="title_year">
            <?php echo $in_year; ?>
        </div>
        <div class="container_month">
            <?php for ($mon_number = 1; $mon_number <= 12; $mon_number++) : ?>
                <div class="mon_bloc">
                    <?php
                    $day_week_first_number = date("N", mktime(0, 0, 0, $mon_number, 1, $in_year)); // День тижня перше число місяця

                    $number_days_month = date("t", mktime(0, 0, 0, $mon_number, 1, $in_year)); // Кількість днів в місяці 

                    $mon_title = date("F", mktime(0, 0, 0, $mon_number, 1, $in_year)); // Назва місяця

                    $m_e = []; // Масив для місяця (макс 42)   
                    // echo '<pre>';
                    // print_r ($m_e);
                    // echo '</pre>';     

                    for ($i = 1; $i <= $number_days_month; $i++) { // Додаємо в масив числа місяця
                        array_push($m_e, $i);
                    };

                    for ($j = 1; $j < $day_week_first_number; $j++) { // Додаємо пусті ячейки на початку місяця
                        array_unshift($m_e, '&nbsp');
                    };

                    $k_ = 42 - count($m_e);  // Додаємо пусті ячейки в кінці місяця до 42

                    for ($k = 1; $k <= $k_; $k++) {
                        array_push($m_e, '&nbsp');
                    }
                    ?>
                    <div class="mon_title"><?php echo $mon_title  ?></div>
                    <table>
                        <tbody>
                            <tr> <!--Дні тижня -->
                                <?php for ($mon_col = 0; $mon_col <= 6; $mon_col++) : ?>
                                    <th>
                                        <?php echo $day_week_title[$mon_col]; ?>
                                    </th>
                                <?php endfor; ?>
                            </tr>
                            <?php for ($mon_str = 0; $mon_str <= 5; $mon_str++) : ?>
                                <tr>
                                    <?php $m_e_seven = array_slice($m_e, 7 * $mon_str, 7);
                                    for ($mon_col = 0; $mon_col <= 6; $mon_col++) : ?>
                                        <td style="<?= ($mon_col === 5 || $mon_col === 6) ? 'color: red;' : '' ?>">
                                            <?php echo $m_e_seven[$mon_col]; ?>
                                        </td>
                                    <?php endfor; ?>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</body>

</html>