<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Brawler - <?php echo htmlspecialchars($brawler['nome'] ?? ''); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container my-5">
        <?php
        include("database/conexao.php");

        $id = $_GET['id'] ?? '';

        if ($id) {
            $sql = "SELECT * FROM brawlers WHERE id = " . intval($id);
            $resultado = mysqli_query($conexao, $sql);
            $brawler = mysqli_fetch_assoc($resultado);

            if ($brawler) {
                $vida_base = $brawler['vida_base'];
                $dano_base = $brawler['dano_base'];
                $super_base = $brawler['super_base'];

                $crescimento_vida = $brawler['crescimento_vida'];
                $crescimento_dano = $brawler['crescimento_dano'];
                $crescimento_super = $brawler['crescimento_super'];

                $nivel = 1;

                $vida = $vida_base + ($nivel - 1) * $crescimento_vida;
                $dano = $dano_base + ($nivel - 1) * $crescimento_dano;
                $super = $super_base + ($nivel - 1) * $crescimento_super;
                ?>

                <h1><?php echo htmlspecialchars($brawler['nome']); ?></h1>
                <img src="<?php echo htmlspecialchars($brawler['imagem']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($brawler['nome']); ?>">

                <p><?php echo nl2br(htmlspecialchars($brawler['descricao'] ?? '')); ?></p>

                <h3>Stats no Nível 1</h3>
                <p>Vida: <?php echo $vida; ?></p>
                <p>Dano: <?php echo $dano; ?></p>
                <p>Super: <?php echo $super; ?></p>
                <p>Alcance: <?php echo htmlspecialchars($brawler['alcance'] ?? ''); ?></p>
                <p>Recarga: <?php echo htmlspecialchars($brawler['recarga'] ?? ''); ?></p>
                <p>Velocidade: <?php echo htmlspecialchars($brawler['velocidade'] ?? ''); ?></p>

                <?php if ($brawler['video']): ?>
                    <h3>Vídeo</h3>
                    <div class="ratio ratio-16x9">
                        <iframe src="<?php echo htmlspecialchars($brawler['video']); ?>" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>

                <?php
            } else {
                echo '<p>Brawler não encontrado.</p>';
            }
        } else {
            echo '<p>ID do brawler não especificado.</p>';
        }
        ?>
    </div>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/navbar-scroll.js"></script>
    <script src="js/darkmode.js"></script>
</body>
</html>