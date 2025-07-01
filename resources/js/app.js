import './bootstrap';

// Mobile menu toggle
document.getElementById('mobile-menu-button').addEventListener('click', function () {
    const menu = document.getElementById('mobile-navigation');
    menu.classList.toggle('hidden');
});

// Tab switching
const tabButtons = document.querySelectorAll('.tab-button');
tabButtons.forEach(button => {
    button.addEventListener('click', function () {
        // Remove active class from all buttons
        tabButtons.forEach(btn => {
            btn.classList.remove('active', 'border-accent', 'text-white');
            btn.classList.add('text-gray-500');
        });

        // Add active class to clicked button
        this.classList.add('active', 'border-accent', 'text-white');
        this.classList.remove('text-gray-500');
    });
});

// Submenu toggle for mobile
const submenuToggles = document.querySelectorAll('#mobile-navigation li.relative > div');
submenuToggles.forEach(toggle => {
    toggle.addEventListener('click', function () {
        const submenu = this.nextElementSibling;
        submenu.classList.toggle('hidden');

        const icon = this.querySelector('i');
        if (icon.classList.contains('fa-chevron-down')) {
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    });
});
