<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP початок</title>
</head>

<body>
    <div class="container">Homework 1 
        <div class="cell">
            <?php
            echo '<br/>' . '<br/>' . 'Площа прямокутника.' . '<br/>' . '<br/>';
            ?>
        </div>
        <img src="1.jpg">
        <div class="cell">
            <?php
            $AB = 3;
            echo '<br/> Сторона АВ = ' . $AB . ' см.,' . '<br/>';
            $BC = 7;
            echo 'Сторона ВC = ' . $BC . ' см.,' . '<br/>';
            $PP = $AB * $BC;
            echo 'Площа S пр. = ' . $PP . ' кв.см.<br/><br/><br/>';
            echo 'Площа кола.' . '<br/>' . '<br/>';
            ?>
        </div>
        <img src="2.jpg">
        <div class="cell">
            <?php
            $pi = floor(PI()*10000)/10000;
            echo '<br/> <br/> Число π = ' . $pi . ',' . '<br/>';
            $rc = 7;
            echo 'Радіус кола r = ' . $rc . ' см.,' . '<br/>';
            $PP = $pi * $rc * $rc;
            echo 'Площа S кола =' . number_format($PP, 4) . '<br/>';
            echo '<br/>' . '<br/>' . 'Зведення у ступень.' . '<br/>' . '<br/>';
            ?>
        </div>
        <img src="3_.jpg">
        <div class="cell">
            <?php
            $a = 3;
            echo '<br/> <br/> Число 3 звести у 5-ту ступень.' . '<br/>';
            $an = 5;
            $stup = $a ** $an;
            echo 'Дорівнює: ' . $stup;
            ?>
        </div>
    </div>
    <style>
        .container {
            font-size: 30px;
            display: flex;
            flex-direction: column;
            max-width: 1400px;
            margin: auto;
            align-items: center;
        }

        img {
            border: 2px solid red;
        }

    </style>
</body>

</html>