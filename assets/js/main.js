console.log("JS FILE LOADED");


document.addEventListener("DOMContentLoaded", function () {

    const menuToggle = document.getElementById('nav-icon');
    const menu = document.querySelector('.nav-links')

    menuToggle.addEventListener("click", function () {
        console.log('yes');
        menu.style.display = 'block';
    });

});