<?php
$titles_blog = [
    ['title' => '5 BENeFIts of RegUlaR Spa TreatMENts'],
    ['title' => 'Facial Care: WhY YOUR SkIN NeEDs IT'],
    ['title' => 'DETox Body RiTUals aT SerenITY SpA'],
    ['title' => 'DiscOVEr the PoWeR OF ThaI MaSSage'],
];


for ($i = 0, $size = count($titles_blog); $i < $size; $i++) {
    $titles_blog_corrected[$i]['title'] = ucfirst(strtolower($titles_blog[$i]['title']));
}

$articles = [
    [
        'article_class' => 'blog-post',
        'article_img' => '"/assets/images/massage.jpg" alt="Massage Therapy"',
        'article_title' => $titles_blog_corrected[0]['title'],
        'date' => 'May 10, 2025',
        'author' => 'by Anna Wellness',
        'text' => 'Regular spa treatments help reduce stress, improve circulation, boost immunity, relieve muscle tension, and enhance your overall sense of well-being. Make spa visits a part of your healthy lifestyle',
    ],
    [
        'article_class' => 'blog-post even',
        'article_img' => '"/assets/images/facial.jpg" alt="Facial Treatment"',
        'article_title' => $titles_blog_corrected[1]['title'],
        'date' => 'May 8, 2025',
        'author' => 'by Olga Beauty',
        'text' => 'Facial treatments deeply cleanse your skin, remove toxins, and restore natural glow. Professional care helps prevent aging and leaves your skin fresh and hydrated. Give your face the attention it deserves.',
    ],
    [
        'article_class' => 'blog-post',
        'article_img' => '"/assets/images/body-treatment.jpg" alt="Body Treatment"',
        'article_title' => $titles_blog_corrected[2]['title'],
        'date' => 'May 5, 2025',
        'author' => 'by Wellness Team',
        'text' => 'Our detox body rituals remove impurities, energize your body, and leave your skin silky smooth. Experience deep relaxation and a renewed sense of lightness with our signature treatments.',
    ],
    [
        'article_class' => 'blog-post even',
        'article_img' => '"/assets/images/tai.avif" alt="Thai Massage" class="blog-post-image"',
        'article_title' => $titles_blog_corrected[3]['title'],
        'date' => 'May 2, 2025',
        'author' => 'by Mark Relax',
        'text' => 'Thai massage combines acupressure, stretching, and deep massage to restore energy balance and flexibility. Try this ancient technique for a unique relaxation experience at our spa.',
    ],
];

?>
