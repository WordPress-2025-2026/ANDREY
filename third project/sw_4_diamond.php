<!DOCTYPE html>

<?php
$data        = require_once 'data_stock.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/styles_sw_4.css" />
    <link rel="stylesheet" href="assets/css/styles_sw_4_media.css" />
    <title>SW 4 DIAMOND</title>
</head>

<body>
    <div class="wrapper">
        <?php require_once('header.php'); ?>
        <main>
            <div class="container">
                <section class="sw_4_screen">
                    <div class="screen_text">
                        <div class="screen_title">
                            <div class="screen_title_1"><?= $data['models'][1]['model_name_1'] ?></div>
                            <div class="screen_title_2"><?= $data['models'][1]['model_name_2'] ?></div>
                        </div>
                        <div class="screen_data">
                            <div class="screen_age_km">
                                <div class="screen_age">
                                    <div class="screen_age_1">Ano</div>
                                    <div class="screen_age_2"><?= $data['models'][1]['model_age'] ?></div>
                                </div>
                                <div class="screen_km">
                                    <div class="screen_km_1">Km</div>
                                    <div class="screen_km_2"><?= number_format($data['models'][1]['model_mil'], 0, ' ', '.') ?></div>
                                </div>
                            </div>
                            <div class="screen_price">
                                <div class="screen_price_1">R$</div>
                                <div class="screen_price_2"><?= number_format($data['models'][1]['model_price'], 2, ',', '.') ?></div>
                            </div>
                        </div>
                        <div class="screen_button">
                            <button>Entrar em contato</button>
                        </div>
                    </div>
                    <div class="screen_img">
                        <img src="/assets/images/sw_4/sw_4_poster.jpg" alt="sw_4" />
                    </div>
                </section>
                <section class="arrow_down">
                    <a href="#footer">
                        <img src="/assets/images/keyboard_arrow_down.png" alt="arrow_down" />
                    </a>
                </section>
                <section class="sw_4_inform">
                    <div class="inform_table">
                        <div class="inform_table_text">
                            <div class="inform_table_text_1">TOYOTA</div>
                            <div class="inform_table_text_2">SW4 DIAMOND</div>
                        </div>
                        <div class="inform_table_menu">
                            <nav>
                                <ul>
                                    <li class="button_img">Imagens</li>
                                    <li class="button_datasheet">Ficha técnica</li>
                                    <li class="button_details">Detalhes</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inform_poster">
                        <div class="inform_poster_img">
                            <div class="poster_title_img">Imagens</div>
                            <div class="slider">
                                <?php foreach ($data['models'][1]['model_img_stock'] as $img) : ?>
                                    <div class="slide">
                                        <img src="<?= $img ?>" alt="Фото авто" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="button_container">
                                <div class="img_number">1</div>
                                <div class="img_number_middle">/</div>
                                <div class="img_number_all"></div>
                                <button class="prev-button">
                                    << /button>
                                        <button class="next-button">></button>
                            </div>
                            <script>
                                const slider = document.querySelector(".slider");
                                const prevButton = document.querySelector(".prev-button");
                                const nextButton = document.querySelector(".next-button");
                                const slides = document.querySelectorAll(".slide");
                                let slideIndex = 0;
                                let screenWidth = window.screen.width;
                                let trIndex;
                                screenWidth > 749 ? (trIndex = 87.25) : (trIndex = 100);

                                // console.log("Разрешение экрана:", screenWidth);

                                prevButton.addEventListener("click", () => {
                                    slideIndex =
                                        (slideIndex - 1 + slides.length) % slides.length;
                                    updateSlider();
                                });

                                nextButton.addEventListener("click", () => {
                                    slideIndex = (slideIndex + 1) % slides.length;
                                    updateSlider();
                                });

                                function updateSlider() {
                                    slider.style.transform = `translateX(-${slideIndex * trIndex}%)`;
                                    document.querySelector(".img_number").textContent = slideIndex + 1;
                                }

                                document.querySelector(".img_number_all").textContent =
                                    slides.length;
                            </script>
                        </div>
                        <div class="inform_poster_datasheet_one">
                            <div class="poster_title_datasheet">Ficha técnica</div>
                            <div class="inform_poster_datasheet">

                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">MOTOR</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_motor_l'] . ' ' . $data['models'][1]['model_cilindros'] ?> CILINDROS</div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">CV</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_motor_cv'] ?>CV</div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">TORQUE</div>
                                    <div class="datasheet_block_1_2"><?= number_format($data['models'][1]['model_motor_power'], 1, ',', ' ') ?>KGFM</div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">TRANSMISSÃO</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_transmission'] ?></div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">TRAÇÃO</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_traction'] ?></div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">0-100KM/H</div>
                                    <div class="datasheet_block_1_2"><?= number_format($data['models'][1]['model_dynamics'], 1, ',', ' ') ?>S</div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">VELOCIDADE MÁXIMA</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_speed_max'] ?>KM/H</div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">COR</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_color'] ?></div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">BANCOS</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_color_bumper'] ?></div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">LUGARES</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_places'] ?></div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">COMBUSTÍVEL</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_fuel'] ?></div>
                                </div>
                                <div class="datasheet_block_1">
                                    <div class="datasheet_block_1_1">PORTA-MALAS</div>
                                    <div class="datasheet_block_1_2"><?= $data['models'][1]['model_trunk'] ?>L</div>
                                </div>
                            </div>
                        </div>
                        <div class="inform_poster_details">
                            <div class="poster_title_details">Detalhes</div>
                            <p><?= $data['models'][1]['model_details'] ?></p>
                        </div>
                    </div>
                    <script>
                        let buttonImg = document.querySelector(".button_img");
                        let buttonData = document.querySelector(".button_datasheet");
                        let buttonDetails = document.querySelector(".button_details");
                        let infImg = document.querySelector(".inform_poster_img");
                        let infData = document.querySelector(".inform_poster_datasheet_one");
                        let infDetails = document.querySelector(".inform_poster_details");
                        infImg.classList.add("active_1");
                        buttonImg.classList.add("active_1");

                        buttonImg.addEventListener("click", function() {
                            infImg.classList.add("active_1");
                            infData.classList.remove("active_2");
                            infDetails.classList.remove("active_3");

                            buttonImg.classList.add("active_1");
                            buttonData.classList.remove("active_2");
                            buttonDetails.classList.remove("active_3");
                        });
                        buttonData.addEventListener("click", function() {
                            infImg.classList.remove("active_1");
                            infData.classList.add("active_2");
                            infDetails.classList.remove("active_3");

                            buttonImg.classList.remove("active_1");
                            buttonData.classList.add("active_2");
                            buttonDetails.classList.remove("active_3");
                        });
                        buttonDetails.addEventListener("click", function() {
                            infImg.classList.remove("active_1");
                            infData.classList.remove("active_2");
                            infDetails.classList.add("active_3");

                            buttonImg.classList.remove("active_1");
                            buttonData.classList.remove("active_2");
                            buttonDetails.classList.add("active_3");
                        });
                    </script>
                </section>
                <?php require_once('home_main_s_form.php'); ?>
            </div>
        </main>
        <?php require_once('footer.php'); ?>
    </div>
</body>

</html>