 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="/css/styles.css">
     <title>Project Noiceland </title>
 </head>

 <body>
     <div class="wrapper">
         <header>
             <div class="container">
                 <div class="header_wrapper">
                     <div class="logo">
                         <a href="/">
                             <img src="/img/logo.png" alt="logo">
                         </a>
                     </div>
                     <nav class="nav">
                         <ul>
                             <li><a href="#">Home</a></li>
                             <li><a href="#">Latest</a></li>
                             <li><a href="#">About</a></li>
                         </ul>
                     </nav>
                 </div>
             </div>
         </header>
         <main>
             <?php require_once('data.php') ?>
             <div class="banner">
                 <div class="container">
                     <div class="banner_wrapper">
                         <div class="banner_img">
                             <a href="#">
                                 <img src="/img/banner_img.jpg" alt="banner" class="scr">
                             </a>
                         </div>
                         <div class="banner_content">
                             <a href="#" class="text_ilustration">Illustration </a>
                             <h1><a href="#" class="banner_title">Japan House opens in mountainside to foster peak creativity.</a></h1>
                             <p><a href="#" class="banner_content_p">Enim omittam qui id, ex quo atqui dictas complectitur. Nec ad timeam accusata, hinc justo falli id eum, ferri novum molestie eos cu.</a></p>
                             <a href="#" class="author">By Reta Torphy</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="main_art">
                 <div class="container">
                     <div class="main_art_wrapper">
                         <?php foreach ($mainArt as $key) :
                                if ($key['id'] > 1 && $key['id'] < 8) : ?>
                                 <div class="article_item">
                                     <div class="article_item_img">
                                         <a href="#">
                                             <img src=<?= $key['photo'] ?> alt="article img">
                                         </a>
                                     </div>
                                     <a href="#" class="text_ilustration"><?= $key['title'] ?></a>
                                     <p class="article_item_text">
                                         <a href="#" style="text-decoration: none;">
                                             <?= $key['text'] ?>
                                         </a>
                                     </p>
                                     <a href="#" class="author"><?= $key['autor'] ?></a>
                                 </div>
                         <?php endif;
                            endforeach; ?>
                     </div>
                 </div>
             </div>
             <div class="latest_articles">
                 <div class="container">
                     <a href="#" class="latest_title">LATEST POSTS</a>
                     <div class="main_art_wrapper">
                         <?php foreach ($mainArt as $key) : ?>
                             <div class="l_article_item">
                                 <div class="article_item_img">
                                     <a href="#">
                                         <img src=<?= $key['photo'] ?> alt="article img">
                                     </a>
                                 </div>
                                 <a href="#" class="text_ilustration"><?= $key['title'] ?></a>
                                 <p class="article_item_text">
                                     <a href="#" style="text-decoration: none;">
                                         <?= $key['text'] ?>
                                     </a>
                                 </p>
                                 <a href="#" class="author"><?= $key['autor'] ?></a>
                             </div>
                         <?php endforeach; ?>
                         <a href="#" class="l_b">view all latest posts</a>

                     </div>

                 </div>
             </div>
             <div class="f_p">
                 <div class="container">
                     <a href="#" class="latest_title">featured POSTS</a>
                     <div class="main_art_wrapper">
                         <?php foreach ($mainArt as $key) : 
                            if ($key['id'] > 8) :?>
                             <div class="f_article_item">
                                 <div class="article_item_img">
                                     <a href="#">
                                         <img src=<?= $key['photo'] ?> alt="featured img">
                                     </a>
                                 </div>
                                 <a href="#" class="text_ilustration"><?= $key['title'] ?></a>
                                 <p class="article_item_text">
                                     <a href="#" style="text-decoration: none;">
                                         <?= $key['text'] ?>
                                     </a>
                                 </p>
                                 <a href="#" class="author"><?= $key['autor'] ?></a>
                             </div>
                         <?php endif; endforeach; ?>
                     </div>
                 </div>
             </div>
         </main>
         <footer>
             <div class="container">
                 <div class="logo_f">
                     <a href="/">
                         <img src="/img/f_1.png" alt="footer">
                     </a>
                     <p>© 2018 Noiceland™, all rights reserved</p>
                 </div>
                 <div class="f_1">
                     <div class="f_1_1">
                         <div class="f_1_1_1">
                             Categories
                         </div>
                         <nav class="f_1_1_2">
                            <?php foreach ($footerMenu as $key) : 
                                if ($key['id'] < 5) : ?>
                             <ul class="f_1_1_2r">
                                 <li><a href="#"><?= $key['above']?></a></li>
                                 <li><a href="#"><?= $key['down']?></a></li>
                             </ul>
                            <?php endif; endforeach; ?>
                         </nav>
                     </div>
                     <div class="f_1_2">
                         <div class="f_1_1_1">
                             Subscribe to newsletter
                         </div>
                         <div class="f_1_2_2">
                             <input class="f_1_2_2_i" type="email" id="email" pattern=".+@example\.com" size="30" placeholder="Email address" required />
                             <button>send</button>
                         </div>
                     </div>

                 </div>
                 <div class="f_2">
                    <?php foreach ($footerMenu as $key) :
                        if ($key['id'] > 4) : ?>
                     <div class="f_2r">
                         <div class="f_1_1_1"><?= $key['one_one'] ?></div>
                         <nav>
                             <ul class="f_2c">
                                 <li><a href="#"><?= $key['one'] ?></a></li>
                                 <li><a href="#"><?= $key['two'] ?></a></li>
                                 <li><a href="#"><?= $key['three'] ?></a></li>
                             </ul>
                         </nav>
                     </div>
                     <?php endif ; endforeach; ?>
                 </div>
             </div>
         </footer>
     </div>
 </body>

 </html>