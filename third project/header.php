<?php ?>
<link rel="stylesheet" href="assets/css/styles_header.css" />
<link rel="stylesheet" href="assets/css/styles_header_media.css" />
<header>
    <div class="container">
        <div class="header_wrapper">
            <div class="burger_menu">
                <div class="burger_1"></div>
                <div class="burger_2"></div>
                <div class="burger_3"></div>
            </div>
            <div class="logo_burger">
                <a href="home.php">
                    <img src="/assets/images/tclogo 1.png" alt="logo burger" />
                </a>
            </div>
            <div class="logo">
                <a href="home.php">
                    <img src="/assets/images/logo.png" alt="logo" />
                </a>
            </div>
            <div class="scroll_menu">
                <ul>
                    <li class="button_about"><a href="sobre.php">Sobre</a></li>
                    <li class="button_contact"><a href="contact.php">Contato</a></li>
                    <li class="button_announce"><a href="announce.php">Anunciar</a></li>
                    <li class="button_stock"><a href="stock.php">Estoque</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        let burger = document.querySelector('.burger_menu');
        let menuOpen = document.querySelector('.scroll_menu');
        let burgerOne = document.querySelector('.burger_1');
        let burgerTwo = document.querySelector('.burger_2');
        let burgerThree = document.querySelector('.burger_3');
        burger.addEventListener('click', function() {
            menuOpen.classList.toggle('active');
            burgerOne.classList.toggle('active');
            burgerTwo.classList.toggle('active');
            burgerThree.classList.toggle('active');
        })
    </script>
</header>