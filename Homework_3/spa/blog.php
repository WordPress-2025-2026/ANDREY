<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Luxury Spa & Wellness</title>
    <link rel="stylesheet" href="/assets/css/styles_blog.css">
</head>

<body>
    <?php
    require_once('components/header.php');
    ?>
    <main>
        <section class="blog-hero">
            <div class="hero-content">
                <h1>Our Blog</h1>
                <p>Latest news, tips, and updates from Serenity Spa</p>
            </div>
        </section>
        <section class="blog-posts">
            <h2>Recent Posts</h2>
            <article class="blog-post">
                <img src="/assets/images/massage.jpg" alt="Massage Therapy" class="blog-post-image">
                <div class="blog-post-content">
                    <h3> <?php echo ucfirst(strtolower('5 BENeFIts of RegUlaR Spa TreatMENts')); ?></h3>
                    <span class="blog-date">May 10, 2025</span>
                    <span class="blog-author">by Anna Wellness</span>
                    <p>Regular spa treatments help reduce stress, improve circulation, boost immunity, relieve muscle tension, and enhance your overall sense of well-being. Make spa visits a part of your healthy lifestyle.</p>
                    <a href="#" class="cta-button">Read More</a>
                </div>
            </article>
            <article class="blog-post even">
                <img src="/assets/images/facial.jpg" alt="Facial Treatment" class="blog-post-image">
                <div class="blog-post-content">
                    <h3><?php echo ucfirst(strtolower('Facial Care: WhY YOUR SkIN NeEDs IT')); ?></h3>
                    <span class="blog-date">May 8, 2025</span>
                    <span class="blog-author">by Olga Beauty</span>
                    <p>Facial treatments deeply cleanse your skin, remove toxins, and restore natural glow. Professional care helps prevent aging and leaves your skin fresh and hydrated. Give your face the attention it deserves.</p>
                    <a href="#" class="cta-button">Read More</a>
                </div>
            </article>
            <article class="blog-post">
                <img src="/assets/images/body-treatment.jpg" alt="Body Treatment" class="blog-post-image">
                <div class="blog-post-content">
                    <h3><?php echo ucfirst(strtolower('DETox Body RiTUals aT SerenITY SpA')); ?></h3>
                    <span class="blog-date">May 5, 2025</span>
                    <span class="blog-author">by Wellness Team</span>
                    <p>Our detox body rituals remove impurities, energize your body, and leave your skin silky smooth. Experience deep relaxation and a renewed sense of lightness with our signature treatments.</p>
                    <a href="#" class="cta-button">Read More</a>
                </div>
            </article>
            <article class="blog-post even">
                <img src="/assets/images/tai.avif" alt="Thai Massage" class="blog-post-image">
                <div class="blog-post-content">
                    <h3><?php echo ucfirst(strtolower('DiscOVEr the PoWeR OF ThaI MaSSage')); ?></h3>
                    <span class="blog-date">May 2, 2025</span>
                    <span class="blog-author">by Mark Relax</span>
                    <p>Thai massage combines acupressure, stretching, and deep massage to restore energy balance and flexibility. Try this ancient technique for a unique relaxation experience at our spa.</p>
                    <a href="#" class="cta-button">Read More</a>
                </div>
            </article>
            <!-- Add more posts here -->
            <div style="margin-top:2em;">
                <a href="/index.php" class="cta-button">Back to Home</a>
            </div>

        </section>                    
       
    </main>
    <?php
    require_once('components/footer.php');
    ?>


</body>

</html>