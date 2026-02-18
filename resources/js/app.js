import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

 document.addEventListener("DOMContentLoaded", function () {

    const usersTab = document.getElementById('usersTab');
    const productsTab = document.getElementById('productsTab');
    const usersSection = document.getElementById('usersSection');
    const productsSection = document.getElementById('productsSection');

    if (usersTab && productsTab) {

        usersTab.addEventListener('click', function () {
            usersSection.classList.remove('hidden');
            productsSection.classList.add('hidden');
        });

        productsTab.addEventListener('click', function () {
            productsSection.classList.remove('hidden');
            usersSection.classList.add('hidden');
        });

    }

});
