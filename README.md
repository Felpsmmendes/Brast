# Brast

Site estático (fã-feito) sobre o jogo **Brawl Stars**, com informações sobre o jogo, os Brawlers por raridade e eventos colaborativos.

## Estrutura do projeto

```
index.html           Página inicial: sobre o jogo, componentes e modos de jogo
visuais.html          Brawler do dia, Brawlers por raridade e comparador de Brawlers
recursos.html         Eventos colaborativos (Godzilla, Bob Esponja, BT21)

css/
  style.css           Estilos comuns a todas as páginas (navbar, botões, dropdown,
                       cards, tema escuro, rodapé, botões flutuantes)
  index.css           Estilos específicos da index.html
  visuais.css         Estilos específicos da visuais.html
  recursos.css        Estilos específicos da recursos.html

js/
  navbar.js            Menu de navegação (abrir/fechar submenus, cor ao rolar,
                        fechar com Esc), usado nas 3 páginas
  tema.js               Alterna entre tema claro/escuro e lembra a escolha
                        (localStorage), usado nas 3 páginas
  voltar-topo.js        Botão flutuante que leva de volta ao topo, usado nas 3 páginas
  imagem-fallback.js    Se alguma imagem externa falhar ao carregar, mostra um
                        retângulo com o texto do "alt" no lugar, usado nas 3 páginas

img/                  Imagens e vídeos hospedados localmente no projeto
```

A maioria das imagens dos Brawlers, mapas e eventos é carregada direto do
[Brawl Stars Wiki](https://brawlstars.fandom.com/) (Fandom), não fica salva no
repositório.

## Tecnologias

- HTML5 e CSS3 puros
- JavaScript vanilla (sem frameworks)
- [Bootstrap 5.3.3](https://getbootstrap.com/) via CDN, para grid, navbar, modais e accordions
- Fonte [Bangers](https://fonts.google.com/specimen/Bangers) (Google Fonts) e ícones [Font Awesome](https://fontawesome.com/) via CDN

Não há build, dependências de Node ou passos de instalação: é só HTML/CSS/JS estático.

## Funcionalidades

- Tema claro/escuro (botão no menu, lembra a escolha entre visitas)
- Brawlers por raridade, com modal de animação de vitória
- Comparador de Brawlers (não deixa escolher o mesmo Brawler nos dois lados)
- Botão "voltar ao topo"
- Rodapé com links e aviso de que é um projeto de fã

## Como abrir o projeto

Basta abrir o `index.html` direto no navegador (duplo-clique) ou, se preferir servir localmente:

```bash
# qualquer servidor estático simples funciona, por exemplo:
npx serve .
```

## Status conhecido

- A maioria dos Brawlers ainda não tem vídeo de animação de vitória de verdade
  (só o Barley tem); os demais mostram a imagem do Brawler no lugar do vídeo.
- O histórico do repositório Git ainda está pesado (vídeos grandes de versões
  antigas ficaram gravados no histórico); os arquivos atuais já foram
  comprimidos, mas o histórico em si não foi reescrito.
