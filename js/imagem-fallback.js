// Várias imagens do site vêm de fora (Brawl Stars Wiki). Se algum link
// quebrar no futuro, em vez do ícone de imagem quebrada do navegador,
// mostra um retângulo com o nome do Brawler/imagem (o texto do "alt").
// Usa a fase de captura porque o evento "error" de <img> não borbulha.
document.addEventListener('error', function (e) {
    const img = e.target;
    if (!img || img.tagName !== 'IMG' || img.dataset.fallbackAplicado) {
        return;
    }
    img.dataset.fallbackAplicado = 'true';

    const texto = (img.alt || 'Imagem indisponível')
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');

    const svg =
        '<svg xmlns="http://www.w3.org/2000/svg" width="300" height="300">' +
        '<rect width="100%" height="100%" fill="#64B5F6"/>' +
        '<text x="50%" y="50%" fill="#ffffff" font-family="sans-serif" font-size="16" ' +
        'text-anchor="middle" dominant-baseline="middle">' + texto + '</text>' +
        '</svg>';

    img.src = 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(svg);
    img.classList.add('img-fallback');
}, true);
