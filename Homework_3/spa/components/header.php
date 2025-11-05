<?php $links = [
    ['text' => 'Home',     'href' => '#home'],
    ['text' => 'Services', 'href' => '#services'],
    ['text' => 'About',    'href' => '#about'],
    ['text' => 'Contact',  'href' => '#contact'],
    ['text' => 'Blog',     'href' => '/blog.php'],


];
?>

<header>
    <nav>
        <div class="logo">Serenity Spa</div>
        <ul>
            <?php foreach ($links as $item): ?>
                <li><a href="<?php echo $item['href']; ?>"> <?php echo $item['text']; ?></a></li>
            <?php endforeach; ?>
        </ul>
     </nav>
 </header>


