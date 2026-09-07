// Botão "Voltar ao topo": some por padrão, aparece depois que a página é
// rolada um pouco, e leva de volta ao início com rolagem suave ao clicar.
// Usado nas 3 páginas (index.html, visuais.html, recursos.html).
document.addEventListener('DOMContentLoaded', function () {
    const botao = document.getElementById('btnVoltarTopo');
    if (!botao) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 400) {
            botao.classList.add('mostrar');
        } else {
            botao.classList.remove('mostrar');
        }
    });

    botao.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
