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
        <?php
        require_once('components/blog_components.php');
        ?>

        <section class="blog-posts">
            <h2>Recent Posts</h2>
            <?php foreach ($articles as $key =>$article): ?>
            <article class="<?php echo $article['article_class']; ?>">
                <img src=<?php echo $article['article_img']; ?> class="blog-post-image">
                <div class="blog-post-content">
                    <h3> <?php echo $article['article_title']; ?></h3>
                    <span class="blog-date"><?php echo $article['date']; ?></span>
                    <span class="blog-author"><?php echo $article['author']; ?></span>
                    <p><?php echo $article['text']; ?></p>
                    <a href="#" class="cta-button">Read More</a>
                </div>
            </article>
            <?php endforeach; ?>
        
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