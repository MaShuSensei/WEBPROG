// script.js

document.addEventListener('DOMContentLoaded', function () {
    const logo = document.getElementById('logo');
    const content = document.querySelector('.content');

    function rotateLogo() {
        logo.style.transform = 'rotate(360deg)';
        logo.style.transition = 'transform 1s ease';

        setTimeout(() => {
            logo.style.transform = 'rotate(0deg)';
        }, 1000);
    }

    function fadeInContent() {
        content.style.opacity = 0;
        content.style.transition = 'opacity 1s ease';

        setTimeout(() => {
            content.style.opacity = 1;
        }, 1000);
    }
    rotateLogo();
    fadeInContent();
});
