// Alterna entre tema claro e escuro e lembra a escolha do visitante (localStorage).
// Usa o atributo data-bs-theme do próprio Bootstrap 5.3+, que já deixa
// cards, modais, dropdowns e tabelas escuros automaticamente.
// Usado nas 3 páginas (index.html, visuais.html, recursos.html).
document.addEventListener('DOMContentLoaded', function () {
    const botao = document.getElementById('btnTema');
    if (!botao) return;

    function aplicarTema(tema) {
        if (tema === 'dark') {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            botao.textContent = '☀️';
        } else {
            document.documentElement.removeAttribute('data-bs-theme');
            botao.textContent = '🌙';
        }
    }

    // Aplica o tema salvo de uma visita anterior, se houver
    let temaSalvo = null;
    try {
        temaSalvo = localStorage.getItem('brast-tema');
    } catch (e) {
        // localStorage pode estar bloqueado (ex.: navegação privada); ignora e usa o padrão claro
    }
    aplicarTema(temaSalvo === 'dark' ? 'dark' : 'light');

    botao.addEventListener('click', function () {
        const estaEscuro = document.documentElement.getAttribute('data-bs-theme') === 'dark';
        const novoTema = estaEscuro ? 'light' : 'dark';
        aplicarTema(novoTema);
        try {
            localStorage.setItem('brast-tema', novoTema);
        } catch (e) {
            // se não der pra salvar, a escolha só vale pra essa visita
        }
    });
});
