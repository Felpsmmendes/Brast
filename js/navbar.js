// Menu de navegação (usado em todas as páginas: index.html, visuais.html, recursos.html)
document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar-custom');
    const visuaisButton = document.getElementById('visuaisButton');
    const visuaisMenu = document.getElementById('visuaisMenu');
    const raridadeButton = document.getElementById('raridadeButton');
    const raridadeMenu = document.getElementById('raridadeMenu');
    const raridadeIcon = raridadeButton.querySelector('i'); // Seleciona o ícone da seta

    // Mudança de cor da navbar ao rolar a página
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Abrir/Fechar o menu "Visuais" ao clicar
    visuaisButton.addEventListener('click', function (e) {
        e.stopPropagation();
        visuaisMenu.classList.toggle('show');
        raridadeMenu.classList.remove('show');
        // Remove o foco do botão após o clique
        visuaisButton.blur();
    });

    // Abrir/Fechar o submenu "Raridade" ao clicar
    raridadeButton.addEventListener('click', function (e) {
        e.stopPropagation();
        raridadeMenu.classList.toggle('show');
        // Remove o foco do botão após o clique
        raridadeButton.blur();
    });

    // Fechar todos os submenus ao clicar fora da navbar
    document.addEventListener('click', function () {
        visuaisMenu.classList.remove('show');
        raridadeMenu.classList.remove('show');
    });

    // Fechar os submenus com a tecla Esc (acessibilidade via teclado)
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' || e.key === 'Esc') {
            const abriuAlgum = visuaisMenu.classList.contains('show') || raridadeMenu.classList.contains('show');
            visuaisMenu.classList.remove('show');
            raridadeMenu.classList.remove('show');
            // Devolve o foco pro botão "Visuais", senão o foco fica perdido no menu que sumiu
            if (abriuAlgum) {
                visuaisButton.focus();
            }
        }
    });
});
