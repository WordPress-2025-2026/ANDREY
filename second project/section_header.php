<header>
    <div class="container">
        <div class="header_wrapper">
            <div class="logo">
                <div class="img_logo">
                    <img src="/assets/images/logo.png" alt="logo">
                </div>
            </div>
            <div class="scroll_menu">
                <ul>
                    <li><a href="#">CATALOGUE</a></li>
                    <li><a href="#">FASHION</a></li>
                    <li><a href="#">FAVOURITE</a></li>
                    <li><a href="#">LIFESTYLE</a></li>
                </ul>
                <div class="li_button"><a href="#">SIGN UP</a> </div>
            </div>
            <div class="burger_menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <script>
        let burger = document.querySelector('.burger_menu');
        let menuOpen = document.querySelector('.scroll_menu');
        burger.addEventListener('click', function() {
            menuOpen.classList.toggle('active');
        })
    </script>
</header>