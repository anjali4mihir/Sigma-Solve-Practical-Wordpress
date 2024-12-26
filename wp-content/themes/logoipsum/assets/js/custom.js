
document.getElementById('notification-btn').addEventListener('click', () => {
    document.getElementById('notification-dropdown').classList.toggle('hidden');
});

document.getElementById('profile-btn').addEventListener('click', () => {
    document.getElementById('profile-dropdown').classList.toggle('hidden');
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('selectAllCheckbox').addEventListener('change', function () {
        let checkboxes = document.querySelectorAll('.checkboxes');
        
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = this.checked;
        }, this);
    });

    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle mobile menu on click
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('menu-active');
        mobileMenu.classList.toggle('hidden'); // Keep hidden class for initial state
    });
});