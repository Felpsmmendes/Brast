// ===== DARK MODE TOGGLE =====

document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const htmlElement = document.documentElement;
    const body = document.body;

    // Verificar preferência salva no LocalStorage
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    
    // Aplicar modo escuro se estava ativado
    if (isDarkMode) {
        enableDarkMode();
    } else {
        disableDarkMode();
    }

    // Adicionar event listener ao botão
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', toggleDarkMode);
    }

    function enableDarkMode() {
        body.classList.add('dark-mode');
        htmlElement.setAttribute('data-bs-theme', 'dark');
        localStorage.setItem('darkMode', 'true');
        updateToggleIcon(true);
    }

    function disableDarkMode() {
        body.classList.remove('dark-mode');
        htmlElement.removeAttribute('data-bs-theme');
        localStorage.setItem('darkMode', 'false');
        updateToggleIcon(false);
    }

    function toggleDarkMode() {
        if (body.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    }

    function updateToggleIcon(isDark) {
        if (darkModeToggle) {
            const icon = darkModeToggle.querySelector('i');
            if (icon) {
                if (isDark) {
                    // Modo escuro ativado - mostrar ícone de sol
                    icon.classList.remove('bi-moon');
                    icon.classList.add('bi-sun');
                } else {
                    // Modo claro ativado - mostrar ícone de lua
                    icon.classList.remove('bi-sun');
                    icon.classList.add('bi-moon');
                }
            }
        }
    }

    // Verificar preferência do sistema (opcional)
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && !isDarkMode) {
        // Descomentar para ativar dark mode automaticamente se o sistema estiver em dark mode
        // enableDarkMode();
    }
});
