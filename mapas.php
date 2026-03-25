<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <!-- Inicio do Menu!-->	
	<?php include 'includes/navbar.php'; ?>
	<!-- Termino do Menu!-->
<div style="margin-top: 10%;"></div>
    <!-- Modos de Jogo -->
    <section id="modos" class="container mt-5">
    <h2 class="section-header text-center mb-4">Modos de Jogo</h2>
    <div class="section-content text-center mb-4">
        <p class="lead">Brawl Stars oferece diversos modos de jogo que desafiam os jogadores a se adaptarem constantemente. Cada modo traz novas mecânicas, tornando o jogo mais dinâmico e oferecendo diversas formas de competir.</p>
        <p>Explore os modos de jogo mais populares abaixo e descubra como cada um oferece uma experiência única de combate!</p>
    </div>
    <div class="row">

            <section class="container-fluid text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 m-auto" style="width: 100%;">

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Superpraia.png" class="img-fluid rounded-start" alt="..." style="height: 107%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Fute Brawl 3v3</h5>
                                    <p class="card-text">O objetivo é marcar dois gols na equipe adversária. Use ataques e habilidades para avançar com a bola, derrotar inimigos e proteger sua área de gol.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" >
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Minarochosa.png" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Pique Gema 3v3</h5>
                                    <p class="card-text">Colete e mantenha 10 gemas para vencer. As gemas aparecem no centro do mapa, e a equipe deve segurar as gemas por 15 segundos sem perder para o adversário.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Caoscibernetico.png" class="img-fluid rounded-start" alt="..." style="height: 100%;"> 
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Caos Cibernetico</h5>
                                    <p class="card-text">Enfrente ondas de robôs em um combate cooperativo. Derrote os inimigos e proteja seu time para sobreviver. Estratégia e cooperação são essenciais.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Zonasegura.png" class="img-fluid rounded-start" alt="..." style="height: 108.8%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Roubo</h5>
                                    <p class="card-text">Destrua o cofre do inimigo enquanto defende o seu próprio. Ataque o cofre adversário e use habilidades para causar o máximo de dano possível.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Pilaresdaperdicao.png" class="img-fluid rounded-start" alt="..." style="height: 118%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Duelos</h5>
                                    <p class="card-text">Um combate 1v1 onde cada jogador escolhe três Brawlers. O objetivo é eliminar todos os Brawlers do adversário para vencer o duelo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Descampado.png" class="img-fluid rounded-start" alt="..." style="height: 107%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Nocaute</h5>
                                    <p class="card-text">Elimine todos os oponentes para vencer a rodada. Quando um jogador é eliminado, ele não retorna até a próxima rodada. Melhor de três rodadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Canalgrande.png" class="img-fluid rounded-start" alt="..." style="height: 118%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Caca Estrela</h5>
                                    <p class="card-text">Derrote adversários para ganhar estrelas. A equipe com mais estrelas ao final do tempo vence. Evite ser eliminado para não perder pontos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="img/Desafioencantado.png" class="img-fluid rounded-start" alt="..." style="height: 99%;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Zona Estrategica</h5>
                                    <p class="card-text">Controle áreas específicas para ganhar pontos. Permaneça na zona de controle e impeça o time adversário de capturar a área para vencer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </section>

            <section class="container-fluid text-center">
            <div class="row row-cols-1 row-cols-lg-3 g-4 m-auto" style="width: 100%;">


                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <img src="img/Extracaoartica.png" class="img-fluid rounded-start" alt="..." style="height: 107.5%;">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Pique Gema 5v5</h5>
                                    <p class="card-text">Duas equipes de cinco jogadores competem para coletar e proteger as gemas no centro do mapa, sendo a primeira a alcançar 10 gemas a vencedora.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <img src="img/Ondulacoescongelantes.png" class="img-fluid rounded-start" alt="..." style="height: 99%;">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Fute Brawl 5v5</h5>
                                    <p class="card-text">Marque dois gols antes da equipe adversária para ganhar. Com 10 jogadores no campo, o trabalho em equipe e a defesa são ainda mais importantes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <img src="img/Cidadeemruinas.png" class="img-fluid rounded-start" alt="..." style="height: 99%;">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Nocaute 5v5</h5>
                                    <p class="card-text">Elimine todos os oponentes em três rodadas. Equipes maiores tornam o combate mais desafiador, exigindo coordenação e estratégia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <img src="img/Arenadebatalha.png" class="img-fluid rounded-start" alt="..." style="height: 107.5%;">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Combate Triplo</h5>
                                    <p class="card-text">Quatros equipes de três jogadores se enfrentam em uma batalha intensa, com o objetivo de eliminar as outras equipes e ser a última sobrevivente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <img src="img/Quartetofinal.png" class="img-fluid rounded-start" alt="..." style="height: 99%;">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Combate Duplo </h5>
                                    <p class="card-text">Cinco equipes de dois jogadores competem em batalhas, onde a cooperação entre os membros da equipe é essencial para vencer os oponentes e conquistar a vitória.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <img src="img/Tudoounada.png" class="img-fluid rounded-start" alt="..." style="height: 100%;">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">Combate Solo</h5>
                                    <p class="card-text">Neste modo, é cada jogador por si, e o último sobrevivente vence. Use o mapa e os recursos disponíveis para eliminar adversários e garantir a vitória.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </section>

        </div>
    </section>

    <div style="margin-top: 10%;"></div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>