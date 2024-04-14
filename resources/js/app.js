import './bootstrap';

document.querySelector('.burger__menu').addEventListener('click', function () {
    document.querySelector('.burger__menu').classList.toggle("active");
    let mobile = document.querySelectorAll('.header-mobile');
    for (let i = 0; i < mobile.length; i++) { // Объявляем переменную i с помощью let
        if (mobile[i].classList.contains('active')) {
            mobile[i].classList.remove('active');
        } else {
            mobile[i].className += ' active';
        }
    }
    document.querySelector('body').classList.toggle("active");
    document.querySelector('.header').classList.toggle("active");
});
