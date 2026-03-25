// ===== NAVBAR SCROLL EFFECT =====

document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar-elegant');
    
    if (!navbar) return;

    // Detectar scroll e adicionar classe
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Fechar dropdown ao clicar em um link
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(item => {
        item.addEventListener('click', function() {
            const dropdownMenu = this.closest('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
});
