<?php
$favourite = [
    [
        'id' => 1,
        'img' => '/assets/images/slider_2_foto_1.jpg',
        'favourite_style' => 'Trending on instagram',
    ],
    [
        'id' => 2,
        'img' => '/assets/images/slider_2_foto_2.jpg',
        'favourite_style' => 'All Under $40',
    ],
    [
        'id' => 3,
        'img' => '/assets/images/slider_2_foto_3.jpg',
        'favourite_style' => 'Trending on instagram',
    ],
    [
        'id' => 4,
        'img' => '/assets/images/slider_2_foto_4.jpg',
        'favourite_style' => 'All Under $40',
    ],
]
?>
<section class="young_favourite">
    <div class="young_favourite_title">
        <div class="yellow_leaf_1">
            <img src="/assets/images/yellow_leaf.png" alt="3">
        </div>
        <p>Young’s Favourite</p>
    </div>
    <div class="slider_container_f">
        <div class="young_favourite_slider">
            <?php foreach ($favourite as $fav_te) : ?>
                <div class="slider_box_favourite">
                    <div class="slider_img">
                        <img src="<?= $fav_te['img'] ?>" alt="slider_1">
                    </div>
                    <div class="slider_footer">
                        <div class="slider_text">
                            <p class="s_t_1"><?= $fav_te['favourite_style'] ?></p>
                            <p class="s_t_2">Explore Now!</p>
                        </div>
                        <div class="slider_button">
                            <a href="#">&#8594</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<script>
    const slider_f = document.querySelector('.young_favourite_slider');
    const nextButton_f = document.querySelector('.slider_container_f');
    const slides_f = document.querySelectorAll('.slider_box_favourite');
    let slideIndex_f = 0;
    let procentWidth_f = 0;
    let viewportWidth_f = document.documentElement.clientWidth;
    switch (true) {
        case viewportWidth_f >= 1280:
            procentWidth_f = 50;
            break;
        default:
            procentWidth_f = 100;
            break;
    }

    nextButton_f.addEventListener('click', () => {
        slideIndex_f = (slideIndex_f + 1) % slides_f.length;
        updateSlider_f();
    });

    function updateSlider_f() {
        slider_f.style.transform = `translateX(-${slideIndex_f * procentWidth_f}%)`;
    }
</script>