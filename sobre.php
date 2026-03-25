<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <script>
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
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>