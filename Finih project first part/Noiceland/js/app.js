let burger = document.querySelector('.burger_menu');
let menuOpen = document.querySelector('.nav');

burger.addEventListener('click', function(){
    menuOpen.classList.toggle('active');
})