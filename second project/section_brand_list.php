<?php
$list_brand = [
    [
        'id' => 1,
        'img' => '/assets/images/brand_1.jpg',
    ],
    [
        'id' => 1,
        'img' => '/assets/images/brand_2.jpg',
    ],
    [
        'id' => 1,
        'img' => '/assets/images/brand_3.jpg',
    ],
    [
        'id' => 1,
        'img' => '/assets/images/brand_4.jpg',
    ],
    [
        'id' => 1,
        'img' => '/assets/images/brand_5.jpg',
    ],
    [
        'id' => 1,
        'img' => '/assets/images/brand_6.jpg',
    ],
]
?>
<section class="brand_list">
    <?php foreach($list_brand as $brand): ?> 
    <div class="brand_img">
        <a href="#">
            <img src="<?= $brand['img'] ?>" alt="brand">
        </a>
    </div>
    <?php endforeach ?>    
</section>