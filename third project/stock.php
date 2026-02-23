<?php
$data        = require_once 'data_stock.php';
$models_note = $data['models'] ?? [];

// Різні розрахунки
$number_models = count($models_note);
$number_models_6 = $number_models % 6;
$number_models_6_integer = floor($number_models / 6);
$number_page_all = ($number_models_6 == 0) ? $number_models_6_integer : $number_models_6_integer + 1;
$number_page = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,
      500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,
      wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles_stock.css" />
  <link rel="stylesheet" href="assets/css/styles_stock_media.css" />
  <title>Stock</title>
</head>

<body>
  <div class="wrapper">
  <style>
  .button_stock {
    background-color: #000000;
    border-radius: 20px;
    padding: 9px 18px;
  }
  .button_stock a {
    color: #ffffff;
  }
</style>
    <?php require_once('header.php'); ?>
    <main>
      <div class="container">
        <section class="stock_wrapper">
          <div class="stock_title">
            <div class="stock_title_title">
              <p>Nossos modelos</p>
            </div>
            <div class="stock_title_button">
              <button>fffffff</button>
            </div>
          </div>
          <div class="stock_container">
            <div class="search_form">
              <div class="search_form_block">
                <div class="block_left">
                  <p>MARCAS</p>
                  <input type="text" placeholder="Todas ˅">
                </div>
                <div class="block_right">
                  <p>MODELOS</p>
                  <input type="text" placeholder="Todas ˅">
                </div>
              </div>
              <div class="search_form_block">
                <div class="block_left">
                  <p>BLINDADO</p>
                  <input type="text" placeholder="Todas ˅">
                </div>
                <div class="block_right">
                  <p>MOTORIZAÇÃO</p>
                  <input type="text" placeholder="Todas ˅">
                </div>
              </div>
              <div class="search_form_block">
                <div class="block_left">
                  <p>ANO</p>
                  <input type="number" placeholder="2020">
                </div>
                <div class="middle_block">
                  <p>ATÉ</p>
                </div>
                <div class="block_right">
                  <input type="number" placeholder="2025">
                </div>
              </div>
              <div class="search_form_block">
                <div class="block_left">
                  <p>VALOR</p>
                  <input type="number" placeholder="100.000">
                </div>
                <div class="middle_block">
                  <p>ATÉ</p>
                </div>
                <div class="block_right">
                  <input type="text" placeholder="4.250.000">
                </div>
              </div>
              <div class="search_form_block">
                <div class="block_left">
                  <p>QUILOMETRAGEM</p>
                  <input type="text" placeholder="0km">
                </div>
                <div class="middle_block">
                  <p>ATÉ</p>
                </div>
                <div class="block_right">
                  <input type="text" placeholder="50.000km">
                </div>
              </div>
              <div class="button_clear">
                <button>Limpar</button>
              </div>
              <div class="button_filter">
                <button>Filtrar</button>
              </div>
            </div>
            <div class="models_bank">
              <div class="models_poster">
                <?php
                session_start();
                if (!isset($_SESSION['number'])) {
                  $_SESSION['number'] = 1;
                }
                if (isset($_POST['num'])) {
                  $_SESSION['number'] += (int)$_POST['num'];
                  if ($_SESSION['number'] > $number_page_all) {
                    $_SESSION['number'] = 1;
                  }
                  if ($_SESSION['number'] < 1) {
                    $_SESSION['number'] = $number_page_all;
                  }
                }
                $models_note_post = array_slice($models_note, $_SESSION['number'] * 6 - 6, 6);
                foreach ($models_note_post as $key => $models) :   ?>
                  <div class="models_note">
                    <div class="note_img">
                      <img src="<?= $models['model_img'] ?>" alt="sw46">
                    </div>
                    <div class="note_text">
                      <div class="note_name">
                        <p><?php echo $models['model_name_1'].'  '.$models['model_name_2'];   ?></p>
                      </div>
                      <div class="note_car_age_mileage">
                        <p><?= $models['model_age'] ?> | <?= number_format($models['model_mil'], 2, ',', '.') ?>kM</p>
                      </div>
                    </div>
                    <div class="note_price">
                      <div class="note_price_rs">
                        <p>R$</p>
                      </div>
                      <div class="note_price_price">
                        <p><?= number_format($models['model_price'], 2, ',', '.') ?></p>
                      </div>
                    </div>
                    <div class="note_arrow">
                      <a href="sw_4_diamond.php">></a>
                      <div class="note_arrow_car_engine">
                        <?php
                        if ($models['model_armed'] == 'BLINDADO') {
                          $armed  = '<div class="note_arrow_car_engine_armed"><p>BLINDADO</p></div>';
                          echo $armed;
                        }
                        if ($models['model_engine'] == 'ELÉTRICO') {
                          $electro = '<div class="note_arrow_car_engine_electric"><p>ELÉTRICO</p></div>';
                          echo $electro;
                        }
                        if ($models['model_engine'] == 'HÍBRIDO') {
                          $hybrid  = '<div class="note_arrow_car_engine_hybrid"><p>HÍBRIDO</p></div>';
                          echo $hybrid;
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <form class="form_s" method="post">
                <div class="pass_page">
                  <div class="pass_page_o">
                    <p>Página <span style="color:black "><?= $_SESSION['number'] ?></span> de <?= $number_page_all ?> </p>
                  </div>
                  <div>
                    <button class="buy-button_1" type=" submit" name="num" value="-1">
                      < </button>
                        <button class="buy-button_1" type=" submit" name="num" value="1">
                          >
                        </button>
                  </div>
                </div>
                <div class="pass_page_mobil">
                  <p>Ver mais</p>
                  <button class="buy-button_1" type=" submit" name="num" value="1">
                    ˅
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <?php require_once('home_main_s_form.php'); ?>
      </div>
    </main>
    <?php require_once('footer.php'); ?>
  </div>
</body>

</html>