const menu = document.querySelector('.menu');
const navMenu = document.querySelector('.navMenu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    navMenu.classList.toggle('ativo');
})
