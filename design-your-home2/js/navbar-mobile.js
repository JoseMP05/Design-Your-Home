const btnNavMobile = document.querySelector('.container-logo_mobile');
const navbar = document.querySelector('.navbar');

btnNavMobile.addEventListener('click', () => {
    navbar.classList.toggle('navbar__active');
})