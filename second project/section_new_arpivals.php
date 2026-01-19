<?php
$branded = [
    [
        'id' => 1,
        'img' => '/assets/images/slider_foto_1.jpg',
        'description_style' => 'Hoodies & Sweetshirt',
    ],
    [
        'id' => 2,
        'img' => '/assets/images/slider_foto_2.jpg',
        'description_style' => 'Coats & Parkas',
    ],
    [
        'id' => 3,
        'img' => '/assets/images/slider_foto_3.jpg',
        'description_style' => 'Tees & T-Shirt',
    ],
    [
        'id' => 4,
        'img' => '/assets/images/slider_foto_4.jpg',
        'description_style' => 'Tees & T-Shirt',
    ],
    [
        'id' => 5,
        'img' => '/assets/images/slider_foto_5.jpg',
        'description_style' => 'Tees & T-Shirt',
    ],
];
?>
<section class="new_arpivals">
    <div class="new_arpivals_title">
        <div class="yellow_leaf">
            <img src="/assets/images/yellow_leaf.png" alt="3">
        </div>
        <p>NEW ARRIVALS</p>
    </div>
    <div class="slider_container">
        <div class="new_arpivals_slider">
            <?php foreach ($branded as $key) : ?>
                <div class="slider_box">
                    <div class="slider_img">
                        <img src=<?= $key['img'] ?> alt="slider_1">
                    </div>
                    <div class="slider_footer">
                        <div class="slider_text">
                            <p class="s_t_1"><?= $key['description_style'] ?></p>
                            <p class="s_t_2">Explore Now!</p>
                        </div>
                        <div class="slider_button">
                            <a href="#">&#8594</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        const slider = document.querySelector('.new_arpivals_slider');
        const nextButton = document.querySelector('.slider_container');
        const slides = document.querySelectorAll('.slider_box');
        let slideIndex = 0;
        let procentWidth = 0;
        let viewportWidth = document.documentElement.clientWidth;
        switch (true) {
            case viewportWidth >= 1280:
                procentWidth = 33.33;
                break;
            case viewportWidth >= 640:
                procentWidth = 50;
                break;
            default:
                procentWidth = 100;
                break;
        }
        nextButton.addEventListener('click', () => {
            slideIndex = (slideIndex + 1) % slides.length;
            updateSlider();
        });
        function updateSlider() {
            slider.style.transform = `translateX(-${slideIndex * procentWidth}%)`;
        }
    </script>
</section>