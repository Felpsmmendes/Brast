<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brast - Brawl Stars Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/cards.css">
	<link rel="stylesheet" href="css/darkmode.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body> 
 
	<?php include 'includes/navbar.php'; ?>

<?php
include 'database/conexao.php';
$sql = "SELECT * FROM brawlers ORDER BY raridade, nome";
$result = mysqli_query($conexao, $sql);
if (!$result) {
    die("Erro na query: " . mysqli_error($conexao));
}
?>

	<div id="BrawlerDoDia"></div>

	<div class="container my-5">
		<!-- Título -->
		<h2 class="text-center mb-4">Brawler do Dia</h2>
		<!-- Card do Brawler do Dia -->
		<div id="brawlerOfTheDay" class="card shadow-lg border-0">
			<div class="row g-0">
				<div class="col-md-4">
					<img id="brawlerImage" src="img/CorvoDia.png" class="img-fluid rounded-start" alt="Brawler do Dia">
				</div>
				<div class="col-md-8">
					<div class="card-body d-flex flex-column justify-content-between" style="line-height: 1.5;">
						<!-- Título centralizado -->
						<br><br><h5 id="brawlerName" class="card-title text-center text-primary">Corvo</h5>

						<!-- Descrição do Brawler -->
						<div class="text-center">
							<p id="brawlerDescription" class="card-text text-secondary">
							Corvo é um brawler lendário especializado em causar dano gradual com seu veneno mortal. Seus ataques reduzem a vida dos oponentes lentamente, permitindo que ele mantenha pressão constante enquanto se mantém seguro à distância. Corvo é ágil e difícil de capturar, o que o torna um adversário frustrante.
							</p>
							<p>
							Com seu super, ele salta rapidamente e causa dano em área, ideal para surpreender inimigos ou escapar de situações complicadas. O super também permite reposicionamento estratégico, essencial para controlar o campo de batalha e pegar oponentes desprevenidos.
							</p>
						</div>

						<!-- Explicação do Brawler do Dia -->
						<div class="text-center mt-3">
							<h6>O que é o Brawler do Dia?</h6>
							<p>
							O <strong>Brawler do Dia</strong> é uma seção especial do nosso site, onde escolhemos um brawler e oferecemos uma análise completa sobre suas habilidades, pontos fortes e fracos. Nosso objetivo é ajudar você a entender melhor o brawler e usá-lo com eficiência nas partidas.
							</p>
							<p>
							Hoje, destacamos o Corvo, um brawler que se destaca por sua velocidade e ataques envenenados. Assista ao tutorial abaixo para aprender táticas avançadas e dominar o uso deste brawler em diferentes modos de jogo, maximizando seu potencial.
							</p>
						</div>

						<!-- Botão centralizado -->
						<div class="text-center mt-3">
							<button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#animationModal">
							Ver Tutorial
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

			<!-- Modal para Animação do Brawler do Dia -->
			<div class="modal fade" id="animationModal" tabindex="-1" aria-labelledby="animationModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content bg-dark text-light">
						<div class="modal-header">
						<h5 class="modal-title" id="animationModalLabel">Tutorial de como jogar com Corvo</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="ratio ratio-16x9">
								<iframe src="https://www.youtube.com/embed/i-4R28cnOiU?start=3" title="Tutorial Corvo" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div style="margin-top: 5%;"></div>

	

    <!-- Continue com outras raridades, seguindo o mesmo estilo -->


	<div style="margin-top: 5%;"></div>  

	<div><h1>Raro</h1></div>

	<div id="Raro"></div>

	<div style="margin-top: 3%;"></div>

	<section class="container-fluid text-center caixa ">
		<div>
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 m-auto " style="width: 95%; padding-left: 16.2%; padding-right: 15%;" >
			
			<?php
			// Filtrar Raro do banco, se existir; caso contrário, mostrar cards de exemplo
			$sql_raro = "SELECT * FROM brawlers WHERE raridade = 'Raro' ORDER BY nome";
			$result_raro = mysqli_query($conexao, $sql_raro);
			$has_raro = $result_raro && mysqli_num_rows($result_raro) > 0;
			?>

			<?php if ($has_raro): ?>
				<?php while ($b = mysqli_fetch_assoc($result_raro)): ?>
					<div class="col">
						<div class="card raro" style="width: 16em;">
							<div class="card-body">
								<h5 class="card-title"><?= htmlspecialchars($b['nome']) ?></h5>
								<p class="card-text"><?= htmlspecialchars($b['raridade']) ?></p>
							</div>
							<a href="brawler.php?id=<?= $b['id'] ?>" target="_blank">
								<img src="<?= htmlspecialchars($b['imagem']) ?>" class="card-img-top img" alt="<?= htmlspecialchars($b['nome']) ?>" style="object-fit: cover; height: 155px;">
							</a>
							<div class="accordion" id="accordion-<?= strtolower($b['nome']) ?>">
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= strtolower($b['nome']) ?>" aria-expanded="false" aria-controls="collapse-<?= strtolower($b['nome']) ?>">
											Ver Descrição
										</button>
									</h2>
									<div id="collapse-<?= strtolower($b['nome']) ?>" class="accordion-collapse collapse" data-bs-parent="#accordion-<?= strtolower($b['nome']) ?>">
										<div class="accordion-body">
											<p><?= htmlspecialchars($b['descricao'] ?? 'Descrição não disponível.') ?></p>
											<a href="brawler.php?id=<?= $b['id'] ?>" class="btn btn-primary">Ver Mais</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
				<!-- Cards de exemplo enquanto o banco não está populado -->
			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Nita</h5>
			    			<p class="card-text">Destruidor</p>
			    		</div>
			    		<img src="imagem" class="card-img-top" data-bs-toggle="modal" data-bs-target="#modalNome">
			    		<div class="accordion" id="accordion-nita">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-nita" aria-expanded="false" aria-controls="collapse-nita">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-nita" class="accordion-collapse collapse" data-bs-parent="#accordion-nita">
			    					<div class="accordion-body">
			    						<p>Nita é feroz e nunca desiste de uma luta. O urso de pelúcia que ela usa como gorro dá uma dica aos adversários: não se aproxime do urso!</p>
			    						<a href="brawler.php?id=1" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Brock</h5>
			    			<p class="card-text">Destruidor</p>
			    		</div>
			    		<img src="imagem" class="card-img-top" data-bs-toggle="modal" data-bs-target="#modalNome">
			    		<div class="accordion" id="accordion-brock">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-brock" aria-expanded="false" aria-controls="collapse-brock">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-brock" class="accordion-collapse collapse" data-bs-parent="#accordion-brock">
			    					<div class="accordion-body">
			    						<p>Quem vê o Brock todo estilosão gritando ao jogar videogame (seu hobby preferido) não acredita que o cara é introvertido. É melhor não dar mole, pois ele vai fazer tudo para ganhar!</p>
			    						<a href="brawler.php?id=2" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Colt</h5>
			    			<p class="card-text">Destruidor</p>
			    		</div>
			    		<img src="imagem" class="card-img-top" data-bs-toggle="modal" data-bs-target="#modalNome">
			    		<div class="accordion" id="accordion-colt">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-colt" aria-expanded="false" aria-controls="collapse-colt">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-colt" class="accordion-collapse collapse" data-bs-parent="#accordion-colt">
			    					<div class="accordion-body">
			    						<p>Todo mundo que visita o Starr Park quer ver o Colt de perto, pois o cara é boa-pinta, carismático e cheio de truques com suas pistolas. A única que não entende o sucesso dele é a Shelly.</p>
			    						<a href="brawler.php?id=3" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Bull</h5>
			    			<p class="card-text">Tanque</p>
			    		</div>
			    		<img src="imagem" class="card-img-top" data-bs-toggle="modal" data-bs-target="#modalNome">
			    		<div class="accordion" id="accordion-bull">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-bull" aria-expanded="false" aria-controls="collapse-bull">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-bull" class="accordion-collapse collapse" data-bs-parent="#accordion-bull">
			    					<div class="accordion-body">
			    						<p>Como todo milenial, Bull já não é o touro selvagem de antes, é meio careta e tem até horário para dormir. Mas cuidado! Ele ainda faz picadinho de quem pisa na bola.</p>
			    						<a href="brawler.php?id=4" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">El Primo</h5>
			    			<p class="card-text">Tanque</p>
			    		</div>
			    		<img src="imagem" class="card-img-top" data-bs-toggle="modal" data-bs-target="#modalNome">
			    		<div class="accordion" id="accordion-elprimo">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-elprimo" aria-expanded="false" aria-controls="collapse-elprimo">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-elprimo" class="accordion-collapse collapse" data-bs-parent="#accordion-elprimo">
			    					<div class="accordion-body">
			    						<p>El Primo gosta de se exibir no ringue e nasceu para isso. Todo mundo delira quando ele entra em cena. Alguns de alegria, outro de dor mesmo...</p>
			    						<a href="brawler.php?id=5" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Barley</h5>
			    			<p class="card-text">Detonador</p>
			    		</div>
			    		<img src="imagem" class="card-img-top" data-bs-toggle="modal" data-bs-target="#modalNome">
			    		<div class="accordion" id="accordion-barley">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-barley" aria-expanded="false" aria-controls="collapse-barley">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-barley" class="accordion-collapse collapse" data-bs-parent="#accordion-barley">
			    					<div class="accordion-body">
			    						<p>Um barman-robô projetado para preparar bebidas e entreter clientes, Barley faz questão de deixar o bar sempre brilhando. Se precisar, ele usa os baderneiros como pano de chão.</p>
			    						<a href="brawler.php?id=6" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Poco</h5>
			    			<p class="card-text">Suporte</p>
			    		</div>
						<img src="img/Poco.png" class="card-img-top img" alt="Poco" style="object-fit: cover;">
						<div class="accordion" id="accordion-poco">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-poco" aria-expanded="false" aria-controls="collapse-poco">
										Ver Descrição
									</button>
								</h2>
								<div id="collapse-poco" class="accordion-collapse collapse" data-bs-parent="#accordion-poco">
									<div class="accordion-body">
										<p>Poco acredita no poder curativo da música e, por isso está sempre tocando (mesmo quando pedem para ele parar).</p>
										<a href="brawler.php?id=7" class="btn btn-primary">Ver Mais</a>
									</div>
								</div>
							</div>
						</div>
			    	</div>
			  	</div>

			  	<div class="col">
			    	<div class="card raro" style="width: 100%;">
			    		<div class="card-body">
			    			<h5 class="card-title">Rosa</h5>
			    			<p class="card-text">Tanque</p>
			    		</div>
			    		<a href="brawler.php?id=8" target="_blank">
			    			<img src="img/Rosa.png" class="card-img-top img" alt="Rosa" style="object-fit: cover;">
			    		</a>
						<!-- Modal Rico -->
						<div class="modal fade" id="modalRico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRicoLabel" aria-hidden="true">
							<!-- Modal com tamanho médio -->
							<div class="modal-dialog modal-md">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="modalRicoLabel">Rico - Animação de Vitória</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
										<video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
											<source src="img/Rico_.mp4" type="video/mp4">
											Seu navegador não suporta o vídeo.
										</video>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
									</div>
								</div>
							</div>
						</div>
			    		<div class="accordion" id="accordion-rosa">
			    			<div class="accordion-item">
			    				<h2 class="accordion-header">
			    					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-rosa" aria-expanded="false" aria-controls="collapse-rosa">
			    						Ver Descrição
			    					</button>
			    				</h2>
			    				<div id="collapse-rosa" class="accordion-collapse collapse" data-bs-parent="#accordion-rosa">
			    					<div class="accordion-body">
			    						<p>Rosa é uma botânica muito ligada às plantas. Ela também é boxeadora e não vacila em plantar a mão na cara de quem a desobedecer!</p>
			    						<a href="brawler.php?id=8" class="btn btn-primary">Ver Mais</a>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			  	</div>
			<?php endif; ?>

			</div>
		</div>
	</section>

</div>
		</div>
	</section>
	
	<div style="margin-top: 5%;"></div>

	<div><h1>Super-Raro</h1></div>

	<br id="Super-Raro">

	<div style="margin-top: 3%;"></div>

	<section class="container-fluid text-center caixa ">
		<div class="row row-cols-1 row-cols-md-4 g-4 m-auto" style="width: 95%; padding-left: 16.2%; padding-right: 15%;">

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Carl</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Carl.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalCarl" >

		      		<!-- Modal Carl -->
					    <div class="modal fade" id="modalCarl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCarlLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalCarlLabel">Carl - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Carl_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Carl é um robô-minerador fascinado por pedra... Pedras não, rochas. Se não quiser que ele vire uma matraca, é melhor nem falar de gemas, ou serão horas de palestrinha sobre os efeitos delas.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Jacky</h5>
			        <p class="card-text">Tanque</p>
			      	</div>
		      		<img src="img/Jacky.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalJacky">

		      		<!-- Modal Jacky -->
					    <div class="modal fade" id="modalJacky" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalJackyLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalJackyLabel">Jacky - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Jacky_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Jacky é uma operária de boca um pouco suja na hora de falar sobre o trabalho. É uma sorte do @&*$#% que os palavrões sejam abafados pelo barulho da sua britadeira.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Rico</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Rico.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalRico">

					<!-- Modal Rico -->
					<div class="modal fade" id="modalRico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRicoLabel" aria-hidden="true">
						<!-- Modal com tamanho médio -->
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="modalRicoLabel">Rico - Animação de Vitória</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
									<video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
										<source src="img/Rico_.mp4" type="video/mp4">
										Seu navegador não suporta o vídeo.
									</video>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		O quê? Máquinas de chiclete? Claro que não... O Rico é um caçador espacial de recompensas que persegue os criminosos mais procurados da galáxia!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Gus</h5>
			        <p class="card-text">Suporte</p>
			      	</div>
		      		<img src="img/Gus.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalGus">

		      		<!-- Modal Gus -->
					    <div class="modal fade" id="modalGus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGusLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalGusLabel">Gus - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Gus_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		  			<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Gus se parece demais com uma daquelas crianças fantasmas de filmes, sabe? É tão parecido que muita gente se assusta quando ele passa. Ainda bem que ele nem liga, pois ele ama o sobrenatural!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Darryl</h5>
			        <p class="card-text">Tanque</p>
			      	</div>
		      		<img src="img/Darryl.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalDarryl">

		      		<!-- Modal Darryl -->
					    <div class="modal fade" id="modalDarryl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDarrylLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalDarrylLabel">Darryl - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Darryl_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Darryl virou capitão para fugir do trabalho pesado, mas agora é obrigado a defender o navio. Parece que o tiro saiu pela culatra...
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Jessie</h5>
			        <p class="card-text">Controle</p>
			      	</div>
		      		<img src="img/Jessie.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalJessie">

		      		<!-- Modal Jessie -->
					    <div class="modal fade" id="modalJessie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalJessieLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalJessieLabel">Jessie - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Jessie_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Apesar de ser um verdadeiro prodígio e construir armas com sucata, Jessie não passa de uma garotinha aos olhos de sua mãe, Pam.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Tick</h5>
			        <p class="card-text">Detonador</p>
			      	</div>
		      		<img src="img/Tick.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalTick">

		      		<!-- Modal Tick -->
					    <div class="modal fade" id="modalTick" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTickLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalTickLabel">Tick - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Tick_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Tick segue Penny por tudo como um cachorrinho. Ele não colabora muito com os planos e apenas explode as coisas por perto, mas isso já é uma ajuda e tanto!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Piper</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Piper.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalPiper">

		      		<!-- Modal Piper -->
					    <div class="modal fade" id="modalPiper" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPiperLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalPiperLabel">Piper - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Piper_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Piper é uma caçadora de recompensas que usa um rifle de paintball. Ela é muito precisa e gosta de atirar de longe.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card super-raro" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Penny</h5>
			        <p class="card-text">Suporte</p>
		      		</div>
		      		<img src="img/Penny.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalPenny">

		      		<!-- Modal Penny -->
					    <div class="modal fade" id="modalPenny" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPennyLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalPennyLabel">Penny - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Penny_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Penny é uma menina que usa um canhão de fogo. Ela é muito animada e gosta de explodir coisas.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		</div>
	</section>

	<div style="margin-top: 5%;"></div>

	<div><h1>Epico</h1></div>

	<br id="Epico">

	<div style="margin-top: 3%;"></div>

	<section class="container-fluid text-center caixa ">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 m-auto" style="width: 95%; padding-left: 16.2%; padding-right: 15%;">

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Stu</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Stu.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalStu" >

		      		<!-- Modal Stu -->
					    <div class="modal fade" id="modalStu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalStuLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalStuLabel">Stu - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Stu_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Apesar do pneu estar um pouco bambo e de alguns amassados na lataria por conta de sua longa carreira, Stu ainda é o dublê mais requisitado de todos, graças a suas derrapadas de tirar o fôlego!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Emz</h5>
			        <p class="card-text">Controle</p>
			      	</div>
		      		<img src="img/Emz.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalEmz">

		      		<!-- Modal Barley -->
					    <div class="modal fade" id="modalEmz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEmzLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalEmzLabel">Emz - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Emz_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse1">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Dizem que a influencer Emz também trabalha no necrotério do seu tio Mortis, mas quase não aparece por lá. Ela anda muito ocupada promovendo sua linha de sprays para cabelo na internet. Tudo pom?
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Piper</h5>
			        <p class="card-text">Tiro Preciso</p>
			      	</div>
		      		<img src="img/Piper.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalPiper">

		      		<!-- Modal Piper -->
				    <div class="modal fade" id="modalPiper" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPiperLabel" aria-hidden="true">

				      	<!-- Modal com tamanho médio -->
				      	<div class="modal-dialog modal-md">
				        	<div class="modal-content">
				          		<div class="modal-header">
				            		<h1 class="modal-title fs-5" id="modalPiperLabel">Piper - Animação de Vitória</h1>
				            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				          		</div>
				          		<div class="modal-body">
						            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
						            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
						              <source src="img/Piper_.mp4" type="video/mp4">
						              Seu navegador não suporta o vídeo.
						            </video>
				          		</div>
					          	<div class="modal-footer">
						            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
					          	</div>
				        	</div>
				      	</div>
				    </div>

				    <!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse19" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		O maior sonho da Piper é ser confeiteira para fazer tortas, biscoitos e vários doces. Só não pergunte sobre o seu passado se não quiser acabar no forno.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Gale</h5>
			        <p class="card-text">Controle</p>
			      	</div>
		      		<img src="img/Gale.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalGale">

		      		<!-- Modal Gale -->
					    <div class="modal fade" id="modalGale" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGaleLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalGaleLabel">Gale - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Gale_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse20" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		O trabalho do Gale é usar seu soprador de folhas para limpar os arredores do Hotel Nevado do Mister P. Não se assuste caso veja gente voando, pois ninguém disse que ele deveria parar quando os hóspedes chegassem...
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Bibi</h5>
			        <p class="card-text">Tanque</p>
			      	</div>
		      		<img src="img/Bibi.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalBibi">

		      		<!-- Modal Bibi -->
					    <div class="modal fade" id="modalBibi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalBibiLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalBibiLabel">Bibi - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Bibi_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse21" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Bibi é uma punh durona com um taco de beisebol e muita atitude. Ela também é meio nerd, mas faz de tudo para esconder, afinal tem uma imagem a zelar!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Belle</h5>
			        <p class="card-text">Tiro Preciso</p>
			      	</div>
		      		<img src="img/Belle.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalBelle">

		      		<!-- Modal Belle -->
					    <div class="modal fade" id="modalBelle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalBelleLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalBelleLabel">Belle - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Belle_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse22" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Belle, a líder renomada da Gangue do Braço Dourado, quer mais do que grana. Seu plano é descobrir quem está por trás do Starr Park para acabar com tudo! Muahahaha!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Maisie</h5>
			        <p class="card-text">Tiro Preciso</p>
			      	</div>
		      		<img src="img/Maisie.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalMaisie">

		      		<!-- Modal Maisie -->
					    <div class="modal fade" id="modalMaisie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMaisieLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalMaisieLabel">Maisie - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Maisie_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse23" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Maisie trabalha como chefe de segurança, mas no fundo gosta de situações perigosas. Quando ela está perto, algo perigoso sempre acontece. Será coincidência?
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
		        	<h5 class="card-title">Colette</h5>
		        	<p class="card-text">Destruidor</p>
		      		</div>
		      		<img src="img/Colette.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalColette">

		      		<!-- Modal Colette -->
					    <div class="modal fade" id="modalColette" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalColetteLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalColetteLabel">Colette - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Colette_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse24" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Colette tem uma coleção de miniaturas e bichos de pelúcia de cada um dos Brawlers. Obcecada? Sim. Será que ela vive num mundinho só dela? Com certeza.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Sam</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Sam.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalSam">

		      		<!-- Modal Sam -->
					    <div class="modal fade" id="modalSam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSamLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalSamLabel">Sam - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Sam_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse25" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Sam é um cowboy que usa revólveres. Ele é rápido no gatilho e gosta de duelos.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Bea</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Bea.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalBea">

		      		<!-- Modal Bea -->
					    <div class="modal fade" id="modalBea" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalBeaLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalBeaLabel">Bea - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Bea_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse26" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Bea é uma boxeadora que usa luvas. Ela é forte e gosta de lutar corpo a corpo.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Larry & Lawrie</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Larry & Lawrie.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalLarryLawrie">

		      		<!-- Modal Larry & Lawrie -->
					    <div class="modal fade" id="modalLarryLawrie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLarryLawrieLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalLarryLawrieLabel">Larry & Lawrie - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Larry & Lawrie_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse27" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Larry & Lawrie são irmãos gêmeos que usam armas. Eles são idênticos e gostam de confusão.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Edgar</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Edgar.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalEdgar">

		      		<!-- Modal Edgar -->
					    <div class="modal fade" id="modalEdgar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEdgarLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalEdgarLabel">Edgar - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Edgar_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse28" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Edgar é um vampiro que suga sangue. Ele é misterioso e gosta da noite.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card epico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Amber</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Amber.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalAmber">

		      		<!-- Modal Amber -->
					    <div class="modal fade" id="modalAmber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAmberLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalAmberLabel">Amber - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Amber_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse29" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Amber é uma arqueira que usa arco. Ela é precisa e gosta de caçar.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		</div>
	</section>

	<div style="margin-top: 5%;"></div>

	<div><h1>Mitico</h1></div>

	<br id="Mitico">

	<div style="margin-top: 3%;"></div>

	<section class="container-fluid text-center caixa ">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 m-auto" style="width: 95%; padding-left: 16.2%; padding-right: 15%;">

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Mortis</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Mortis.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalMortis" >

		      		<!-- Modal Mortis -->
					    <div class="modal fade" id="modalMortis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMortisLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalMortisLabel">Mortis - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Mortis_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse25" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mortis tinha grandes projetos como agente funerário e vampiro, mas, como ainda não tem ninguém com o pé na cova no Starr Park, os negócios vão de mal a pior.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Tara</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Tara.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalTara">

		      		<!-- Modal Tara -->
					    <div class="modal fade" id="modalTara" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTaraLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalTaraLabel">Tara - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Tara_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse26" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Tara viu nas cartas que o futuro é nebuloso, mas não se preocupe! Além de prever o futuro, ela vende amuletos protetores por uma bagatela! Vai querer um?
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Lou</h5>
			        <p class="card-text">Controle</p>
			      	</div>
		      		<img src="img/Lou.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalLou">

		      		<!-- Modal Lou -->
					    <div class="modal fade" id="modalLou" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLouLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalLouLabel">Lou - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Lou_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse27" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Lou é um robô-vendedor de sorvetes que ainda não vendeu nadica de nada. Será que viver numa montanha cheia de neve tem a ver com a falta de sorte dele?
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Fang</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Fang.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalFang">

		      		<!-- Modal Fang -->
					    <div class="modal fade" id="modalFang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalFangLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalFangLabel">Fang - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Fang_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse28" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Fang é tão obcecado por filmes de Kung Fu que é como se ele vivesse um! Além disso, é decidido, simpático e megaoriginal, pois ele nunca usa as mãos se puder usar os pés.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Clancy</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Clancy.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalClancy">

		      		<!-- Modal Clancy -->
					    <div class="modal fade" id="modalClancy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalClancyLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalClancyLabel">Clancy - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Clancy_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse29" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Quando começa alguma coisa, Clancy nunca volta atrás (a não ser que esteja sob ordens do Hank). Ele entrou totalmente no personagem crustáceo e não mede esforços por seus colegas.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col"> 
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Moe</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Moe.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalMoe">

		      		<!-- Modal Moe -->
					    <div class="modal fade" id="modalMoe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMoeLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalMoeLabel">Moe - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Moe_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse30" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Moe é um rato cego que vivia nos esgotos do Starr Park até ser encontrado e adotado por Grom. Hoje, trabalha na equipe de manutenção do parque e usa sua escavadeira para explorar os túneis subterrâneos. Para o desespero do Ash, ele semeia o caos por onde passa.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Byron</h5>
			        <p class="card-text">Suporte</p>
			      	</div>
		      		<img src="img/Byron.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalByron">

		      		<!-- Modal Byron -->
					    <div class="modal fade" id="modalByron" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalByronLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalByronLabel">Byron - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Byron_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse31" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Byron produz misturas capazes de curar ou prejudicar das mais variadas maneiras. Antes de desafiá-lo, é bom saber que a grande maioria dos seus medicamentos se enquadra na segunda categoria.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Max</h5>
			        <p class="card-text">Suporte</p>
		      		</div>
		      		<img src="img/Max.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalMax">

		      		<!-- Modal Max -->
					    <div class="modal fade" id="modalMax" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMaxLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalMaxLabel">Max - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Max_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse32" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Abastecida por energéticos, Max aparece para ajudar num piscar de olhos, mas acaba passando como trovão, sem tempo de fazer muita coisa. Bem, o que vale é a intenção.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Otis</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Otis.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalOtis">

		      		<!-- Modal Otis -->
					    <div class="modal fade" id="modalOtis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalOtisLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalOtisLabel">Otis - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Otis_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse33" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Otis é um urso preguiçoso que adora dormir e comer mel. Ele é muito forte, mas prefere não se esforçar muito.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Gene</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Gene.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalGene">

		      		<!-- Modal Gene -->
					    <div class="modal fade" id="modalGene" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGeneLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalGeneLabel">Gene - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Gene_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse34" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Gene é um cientista louco que cria invenções malucas. Ele é muito inteligente, mas suas criações nem sempre funcionam como esperado.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Sprout</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Sprout.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalSprout">

		      		<!-- Modal Sprout -->
					    <div class="modal fade" id="modalSprout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSproutLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalSproutLabel">Sprout - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Sprout_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse35" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Sprout é um robô agricultor que cuida das plantas. Ele é muito cuidadoso e gosta de fazer tudo crescer.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Surge</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Surge.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalSurge">

		      		<!-- Modal Surge -->
					    <div class="modal fade" id="modalSurge" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSurgeLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalSurgeLabel">Surge - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Surge_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse36" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Surge é um robô elétrico que controla raios. Ele é muito poderoso e gosta de causar choques.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Chester</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Chester.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalChester">

		      		<!-- Modal Chester -->
					    <div class="modal fade" id="modalChester" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalChesterLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalChesterLabel">Chester - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Chester_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse37" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Chester é um gato preguiçoso que adora dormir. Ele é muito fofo, mas não faz muito esforço.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Piper</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Piper.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalPiper">

		      		<!-- Modal Piper -->
					    <div class="modal fade" id="modalPiper" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPiperLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalPiperLabel">Piper - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Piper_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse38" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Piper é uma menina que usa um rifle de paintball. Ela é muito precisa e gosta de atirar de longe.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Brock</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Brock.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalBrock">

		      		<!-- Modal Brock -->
					    <div class="modal fade" id="modalBrock" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalBrockLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalBrockLabel">Brock - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Brock_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse39" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Brock é um lutador profissional que usa socos e chutes. Ele é muito forte e gosta de lutar corpo a corpo.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Dynamike</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Dynamike.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalDynamike">

		      		<!-- Modal Dynamike -->
					    <div class="modal fade" id="modalDynamike" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDynamikeLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalDynamikeLabel">Dynamike - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Dynamike_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse40" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Dynamike é um mineiro que usa dinamite. Ele é explosivo e gosta de causar destruição.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Buzz</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Buzz.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalBuzz">

		      		<!-- Modal Buzz -->
					    <div class="modal fade" id="modalBuzz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalBuzzLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalBuzzLabel">Buzz - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Buzz_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Buzz é um robô que controla abelhas. Ele é muito zumbidor e gosta de picar inimigos.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Griff</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Griff.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalGriff">

		      		<!-- Modal Griff -->
					    <div class="modal fade" id="modalGriff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGriffLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalGriffLabel">Griff - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Griff_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse42" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Griff é um pássaro que voa alto. Ele é muito rápido e gosta de atacar do céu.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Ash</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Ash.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalAsh">

		      		<!-- Modal Ash -->
					    <div class="modal fade" id="modalAsh" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAshLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalAshLabel">Ash - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Ash_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse43" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Ash é um caçador que usa arco e flecha. Ele é muito preciso e gosta de caçar presas.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Lola</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Lola.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalLola">

		      		<!-- Modal Lola -->
					    <div class="modal fade" id="modalLola" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLolaLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalLolaLabel">Lola - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Lola_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse44" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Lola é uma acrobata que usa acrobacias. Ela é muito ágil e gosta de se mover rapidamente.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card mitico" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Ruffs</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Ruffs.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalRuffs">

		      		<!-- Modal Ruffs -->
					    <div class="modal fade" id="modalRuffs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRuffsLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalRuffsLabel">Ruffs - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Ruffs_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse45" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Ruffs é um cachorro que late muito. Ele é leal e gosta de proteger seus amigos.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		</div>
	</section>

	<div style="margin-top: 5%;"></div>

	<div><h1>Lendario</h1></div>

	<br id="Lendario">

	<div style="margin-top: 3%;"></div>

	<section class="container-fluid text-center caixa ">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 m-auto" style="width: 95%; padding-left: 16.2%; padding-right: 15%;">

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Corvo</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Corvo.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalCorvo" >

		      		<!-- Modal Corvo -->
					    <div class="modal fade" id="modalCorvo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCorvoLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalCorvoLabel">Corvo - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Corvo_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse33" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Corvo é caladão e não confia em ninguém, mas dizem por aí que ele sempre aparece na lanchonete do Starr Park para encontrar o Bull e a Bibi.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Spike</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Spike.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalSpike">

		      		<!-- Modal Spike -->
					    <div class="modal fade" id="modalSpike" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSpikeLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalSpikeLabel">Spike - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Spike_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse34" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Muita gente acha que o Spike é o bichinho de estimação do Colt e da Shelly. O coitado começou a fazer terapia só por conta disso, sabia?
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Sandy</h5>
			        <p class="card-text">Controle</p>
			      	</div>
		      		<img src="img/Sandy.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalSandy">

		      		<!-- Modal Sandy -->
					    <div class="modal fade" id="modalSandy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSandyLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalSandyLabel">Sandy - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Sandy_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse35" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Nas raríssimas ocasiões em que não está dormindo, Sandy tenta ajudar Tara na loja. No entanto, o papo dos clientes dá um sono, e todo o trabalho fica para sua irmã...
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Leon</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Leon.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalLeon">

		      		<!-- Modal Leon -->
					    <div class="modal fade" id="modalLeon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLeonLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalLeonLabel">Leon - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Leon_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse36" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Como o Leon não gosta de socializar, sua invisibilidade é muito útil. A única pessoa de quem ele não se esconde é a Nita, sua irmãzinha.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Wattson</h5>
			        <p class="card-text">Destruidor</p>
			      	</div>
		      		<img src="img/Wattson.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalWattson">

		      		<!-- Modal Wattson -->
					    <div class="modal fade" id="modalWattson" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalWattsonLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalWattsonLabel">Wattson - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Wattson_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse37" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Sempre que SURGE um churrasco, pode apostar que Wattson está lá! O brother é pura animação, tem gingado e um suprimento infinito de energéticos. Bebida é o que não vai faltar!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Cordelius</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Cordelius.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalCordelius">

		      		<!-- Modal Cordelius -->
					    <div class="modal fade" id="modalCordelius" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCordeliusLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalCordeliusLabel">Cordelius - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Cordelius_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse38" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Ele é jardineiro e cuidador da floresta e não se dá muito bem com estranhos. Obcecado por cogumelos.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Kenji</h5>
			        <p class="card-text">Algoz</p>
			      	</div>
		      		<img src="img/Kenji.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalKenji">

		      		<!-- Modal Kenji -->
					    <div class="modal fade" id="modalKenji" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKenjiLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalKenjiLabel">Kenji - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Kenji_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse39" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Este samurai trocou a katana pelos utensílios de cozinha para cuidar do restaurante de sushi no Starr Park. Parece que ele está escondendo algo sobre o seu passado, mas seus sushis são tão deliciosos que ninguém se importa!
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
		        	<h5 class="card-title">Chester</h5>
		        	<p class="card-text">Destruidor</p>
		      		</div>
		      		<img src="img/Chester.png" class="card-img-top img" alt="..." data-bs-toggle="modal" data-bs-target="#modalChester">

		      		<!-- Modal Chester -->
					    <div class="modal fade" id="modalChester" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalChesterLabel" aria-hidden="true">
					      	<!-- Modal com tamanho médio -->
					      	<div class="modal-dialog modal-md">
					        	<div class="modal-content">
					          		<div class="modal-header">
					            		<h1 class="modal-title fs-5" id="modalChesterLabel">Chester - Animação de Vitória</h1>
					            		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					          		</div>
					          		<div class="modal-body">
							            <!-- Vídeo MP4 no Modal, com autoplay e sem controles -->
							            <video autoplay muted loop class="w-100" style="max-width: 100%; max-height: 400px; object-fit: contain;">
							              <source src="img/Chester_.mp4" type="video/mp4">
							              Seu navegador não suporta o vídeo.
							            </video>
					          		</div>
						          	<div class="modal-footer">
							            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						          	</div>
					        	</div>
					      	</div>
					    </div>

		      		<!-- Accordion (se necessário) -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse40" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Chester está sempre zoando os outros. Quanto mais ele irrita alguém, mais ele se diverte... ainda mais se esse alguém for a Mandy.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Mandy</h5>
			        <p class="card-text">Destruidor</p>
		      		</div>
		      		<img src="img/Mandy.png" class="card-img-top img" alt="..." >
		      		<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Gale</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Gale.png" class="card-img-top img" alt="..." >
					<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Belle</h5>
			        <p class="card-text">Suporte</p>
		      		</div>
		      		<img src="img/Belle.png" class="card-img-top img" alt="..." >
					<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Ash</h5>
			        <p class="card-text">Algoz</p>
		      		</div>
		      		<img src="img/Ash.png" class="card-img-top img" alt="..." >
					<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		  	<div class="col">
		    	<div class="card lendario" style="width: 16em;" >
		      		<div class="card-body">
			        <h5 class="card-title">Lola</h5>
			        <p class="card-text">Suporte</p>
		      		</div>
		      		<img src="img/Lola.png" class="card-img-top img" alt="..." >
					<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
		    	</div>
		  	</div>

		</div>
	</section>
<div><h1>Ultra Lendario</h1></div>
	<br id="UltraLendario">
	<div style="margin-top: 3%;"></div>
	<section class="container-fluid text-center caixa ">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 m-auto" style="width: 95%; padding-left: 16.2%; padding-right: 15%;">
			<div class="col">
				<div class="card ultra-lendario" style="width: 16em;" >
					<div class="card-body">
					<h5 class="card-title">kaze</h5>
					<p class="card-text">Algoz</p>
					</div>
					<img src="img/Leon.png" class="card-img-top img" alt="..." >
					<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card ultra-lendario" style="width: 16em;" >
					<div class="card-body">
					<h5 class="card-title">Spike</h5>
					<p class="card-text">Algoz</p>
					</div>
					<img src="img/Spike.png" class="card-img-top img" alt="..." >
					<!-- Accordion -->
		      		<div class="accordion" id="accordionExample">
					  	<div class="accordion-item">
					    	<h2 class="accordion-header">
					      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
					       	 		Veja mais
					      		</button>
					    	</h2>
					    	<div id="collapse41" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      		<div class="accordion-body">
					        		Mandy é uma destruidora lendária.
					      		</div>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div style="margin-top: 7%;"></div>

	<div class="container mt-5">
  	<h2>Comparação de Brawlers</h2>
  	<div id="Comparação de Brawlers"></div>
  	<div class="row">
    	<!-- Primeiro Brawler -->
	    <div class="col-md-6">
	      	<label for="brawlerSelect1" >Escolha o primeiro Brawler:</label>
	      		<select id="brawlerSelect1" class="form-select mb-3">
			        <option value="">Selecione um Brawler</option>
			        <option value="Nita">Nita</option>
			        <option value="Brock">Brock</option>
			        <option value="Colt">Colt</option>
			        <option value="Bull">Bull</option>
			        <option value="El Primo">El Primo</option>
			        <option value="Barley">Barley</option>
			        <option value="Poco">Poco</option>
			        <option value="Rosa">Rosa</option>
			        <option value="Carl">Carl</option>
			        <option value="Jacky">Jacky</option>
			        <option value="Rico">Rico</option>
			        <option value="Gus">Gus</option>
			        <option value="Darryl">Darryl</option>
			        <option value="Jessie">Jessie</option>
			        <option value="Tick">Tick</option>
			        <option value="Dynamike">Dynamike</option>
			        <option value="Stu">Stu</option>
			        <option value="Emz">Emz</option>
			        <option value="Piper">Piper</option>
			        <option value="Gale">Gale</option>
			        <option value="Bibi">Bibi</option>
			        <option value="Belle">Belle</option>
			        <option value="Maisie">Maisie</option>
			        <option value="Colette">Colette</option>
			        <option value="Mortis">Mortis</option>
			        <option value="Tara">Tara</option>
			        <option value="Lou">Lou</option>
			        <option value="Fang">Fang</option>
			        <option value="Clancy">Clancy</option>
			        <option value="Moe">Moe</option>
			        <option value="Byron">Byron</option>
			        <option value="Max">Max</option>
			        <option value="Corvo">Corvo</option>
			        <option value="Spike">Spike</option>
			        <option value="Leon">Leon</option>
			        <option value="Sandy">Sandy</option>
			        <option value="Wattson">Wattson</option>
			        <option value="Cordelius">Cordelius</option>
			        <option value="Kenji">Kenji</option>
			        <option value="Chester">Chester</option>
			        <!-- Adicione mais opções conforme necessário -->
			    </select>
		      		<!-- Primeiro Brawler -->
<div id="brawlerCard1" class="card border-primary border-3 d-none">
  <div class="card-header">Primeiro Brawler</div>
  <div class="card-body">
    <h5 class="card-title" id="brawlerName1"></h5>
    <p class="card-text" id="brawlerDescription1"></p>
    <button type="button" class="btn btn-danger" id="attackButton1" data-bs-toggle="modal" data-bs-target="#brawlerModal1">Ver Ataque</button>
    <button type="button" class="btn btn-warning" id="superButton1" data-bs-toggle="modal" data-bs-target="#brawlerModal1">Ver Super</button>
  </div>
</div>

					</div>

	    <!-- Segundo Brawler -->
	    <div class="col-md-6">
	      <label for="brawlerSelect2">Escolha o segundo Brawler:</label>
	      <select id="brawlerSelect2" class="form-select mb-3">
	        <option value="">Selecione um Brawler</option>
	        <option value="Nita">Nita</option>
	        <option value="Brock">Brock</option>
	        <option value="Colt">Colt</option>
	        <option value="Bull">Bull</option>
	        <option value="El Primo">El Primo</option>
	        <option value="Barley">Barley</option>
	        <option value="Poco">Poco</option>
	        <option value="Rosa">Rosa</option>
	        <option value="Carl">Carl</option>
	        <option value="Jacky">Jacky</option>
	        <option value="Rico">Rico</option>
	        <option value="Gus">Gus</option>
	        <option value="Darryl">Darryl</option>
	        <option value="Jessie">Jessie</option>
	        <option value="Tick">Tick</option>
	        <option value="Dynamike">Dynamike</option>
	        <option value="Stu">Stu</option>
	        <option value="Emz">Emz</option>
	        <option value="Piper">Piper</option>
	        <option value="Gale">Gale</option>
	        <option value="Bibi">Bibi</option>
	        <option value="Belle">Belle</option>
	        <option value="Maisie">Maisie</option>
	        <option value="Colette">Colette</option>
	        <option value="Mortis">Mortis</option>
	        <option value="Tara">Tara</option>
	        <option value="Lou">Lou</option>
	        <option value="Fang">Fang</option>
	        <option value="Clancy">Clancy</option>
	        <option value="Moe">Moe</option>
	        <option value="Byron">Byron</option>
	        <option value="Max">Max</option>
	        <option value="Corvo">Corvo</option>
	        <option value="Spike">Spike</option>
	        <option value="Leon">Leon</option>
	        <option value="Sandy">Sandy</option>
	        <option value="Wattson">Wattson</option>
	        <option value="Cordelius">Cordelius</option>
	        <option value="Kenji">Kenji</option>
	        <option value="Chester">Chester</option>
	        <!-- Adicione mais opções conforme necessário -->
	      </select>
	      <div id="brawlerCard2" class="card border-dark border-3 d-none">
  <div class="card-header">Segundo Brawler</div>
  <div class="card-body">
    <h5 class="card-title" id="brawlerName2"></h5>
    <p class="card-text" id="brawlerDescription2"></p>
    <button type="button" class="btn btn-danger" id="attackButton2" data-bs-toggle="modal" data-bs-target="#brawlerModal2">Ver Ataque</button>
    <button type="button" class="btn btn-warning" id="superButton2" data-bs-toggle="modal" data-bs-target="#brawlerModal2">Ver Super</button>
  </div>
</div>

  </div>

  <!-- Modal para o Primeiro Brawler -->
  <div class="modal fade" id="brawlerModal1" tabindex="-1" aria-labelledby="brawlerModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="brawlerModalLabel1"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <video id="brawlerVideo1" autoplay loop muted width="100%"></video>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para o Segundo Brawler -->
  <div class="modal fade" id="brawlerModal2" tabindex="-1" aria-labelledby="brawlerModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="brawlerModalLabel2"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <video id="brawlerVideo2" autoplay loop muted width="100%"></video>
        </div>
      </div>
    </div>
  </div>
</div>




<div style="margin-top: 20%;"></div>










<!-- Inicio Modal Brawler do dia -->

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const animationModal = document.getElementById('animationModal');
    const animationVideo = document.getElementById('animationVideo');

    // Evento disparado quando o modal é fechado
    animationModal.addEventListener('hide.bs.modal', () => {
      if (animationVideo) {
        animationVideo.pause(); // Pausa o vídeo
        animationVideo.currentTime = 0; // Reinicia o vídeo
      }
    });
  });
</script>

<!-- Termino Modal Brawler do dia -->

<!-- Inicio Accordion esteja aberto -->

<script>
  // Código do script para garantir que apenas um item de accordion esteja aberto por vez
  const accordionButtons = document.querySelectorAll('.accordion-button');

  accordionButtons.forEach(button => {
    button.addEventListener('click', function () {
      // Fecha todos os outros itens de accordion
      const target = document.querySelector(button.getAttribute('data-bs-target'));
      const allAccordions = document.querySelectorAll('.accordion-collapse');

      allAccordions.forEach(accordion => {
        if (accordion !== target) {
          accordion.classList.remove('show');
        }
      });
    });
  });
</script>


<!-- Termino Accordion esteja aberto -->


<!-- Inicio Comparacao dos Brawlers-->

<script>
  const brawlers = {
    "Nita": { name: "Nita", description: "Ataque: Cria um terremoto.<br>Super: Invoca o urso.", attackVideo: "img/AtaqueNita.mp4", superVideo: "img/SuperNita.mp4" },
    "Brock": { name: "Brock", description: "Ataque: Lança foguetes.<br>Super: Dispara múltiplos foguetes.", attackVideo: "img/AtaqueBrock.mp4", superVideo: "img/SuperBrock.mp4" },
    "Colt": { name: "Colt", description: "Ataque: Dispara balas rápidas.<br>Super: Dispara tiros destrutivos.", attackVideo: "img/AtaqueColt.mp4", superVideo: "img/SuperColt.mp4" },
    "Bull": { name: "Bull", description: "Ataque: Tiros poderosos de curto alcance.<br>Super: Investida destrutiva.", attackVideo: "img/AtaqueBull.mp4", superVideo: "img/SuperBull.mp4" },
    "El Primo": { name: "El Primo", description: "Ataque: Socos poderosos.<br>Super: Salto esmagador.", attackVideo: "img/AtaqueElPrimo.mp4", superVideo: "img/SuperElPrimo.mp4" },
    "Barley": { name: "Barley", description: "Ataque: Joga garrafas de veneno.<br>Super: Área de dano.", attackVideo: "img/AtaqueBarley.mp4", superVideo: "img/SuperBarley.mp4" },
    "Poco": { name: "Poco", description: "Ataque: Ondas de som.<br>Super: Cura aliados.", attackVideo: "img/AtaquePoco.mp4", superVideo: "img/SuperPoco.mp4" },
    "Rosa": { name: "Rosa", description: "Ataque: Socos.<br>Super: Escudo protetor.", attackVideo: "img/AtaqueRosa.mp4", superVideo: "img/SuperRosa.mp4" },
    
    "Carl": { name: "Carl", description: "Ataque: Lança bumerangue.<br>Super: Giro rápido.", attackVideo: "img/AtaqueCarl.mp4", superVideo: "img/SuperCarl.mp4" },
    "Jacky": { name: "Jacky", description: "Ataque: Impacto no chão.<br>Super: Puxa inimigos.", attackVideo: "img/AtaqueJacky.mp4", superVideo: "img/SuperJacky.mp4" },
    "Rico": { name: "Rico", description: "Ataque: Balas que ricocheteiam.<br>Super: Tiros múltiplos.", attackVideo: "img/AtaqueRico.mp4", superVideo: "img/SuperRico.mp4" },
    "Gus": { name: "Gus",description: "Ataque: Projéteis rápidos.<br>Super: Lança armadilha.", attackVideo: "img/AtaqueGus.mp4", superVideo: "img/SuperGus.mp4" },
    "Darryl": { name: "Darryl", description: "Ataque: Tiros curtos.<br>Super: Rola pelo mapa.", attackVideo: "img/AtaqueDarryl.mp4", superVideo: "img/SuperDarryl.mp4" },
    "Jessie": { name: "Jessie", description: "Ataque: Dispara raio.<br>Super: Constrói torreta.", attackVideo: "img/AtaqueJessie.mp4", superVideo: "img/SuperJessie.mp4" },
    "Tick": { name: "Tick", description: "Ataque: Lança minas.<br>Super: Bomba teleguiada.", attackVideo: "img/AtaqueTick.mp4", superVideo: "img/SuperTick.mp4" },
    "Dynamike": { name: "Dynamike", description: "Ataque: Joga dinamites.<br>Super: Explosão poderosa.", attackVideo: "img/AtaqueDynamike.mp4", superVideo: "img/SuperDynamike.mp4" },

    "Stu": { name: "Stu", description: "Ataque: Dispara rajadas de fogo.<br>Super: Dash explosivo.", attackVideo: "img/AtaqueStu.mp4", superVideo: "img/SuperStu.mp4" },
    "Emz": { name: "Emz", description: "Ataque: Spray de veneno.<br>Super: Área de dano contínuo.", attackVideo: "img/AtaqueEmz.mp4", superVideo: "img/SuperEmz.mp4" },
    "Piper": { name: "Piper", description: "Ataque: Dispara tiros precisos.<br>Super: Foge com granadas.", attackVideo: "img/AtaquePiper.mp4", superVideo: "img/SuperPiper.mp4" },
    "Gale": { name: "Gale", description: "Ataque: Ventos congelantes.<br>Super: Empurra inimigos.", attackVideo: "img/AtaqueGale.mp4", superVideo: "img/SuperGale.mp4" },
    "Bibi": {name: "Bibi", description: "Ataque: Bola de beisebol.<br>Super: Lança bolão.", attackVideo: "img/AtaqueBibi.mp4",superVideo: "img/SuperBibi.mp4" },
    "Belle": {name: "Belle",description: "Ataque: Dispara um tiro que ricocheteia.<br>Super: Lança um choque em área.",attackVideo: "img/AtaqueBelle.mp4",superVideo: "img/SuperBelle.mp4" },
    "Maisie": { name: "Maisie", description: "Ataque: Tiro rápido.<br>Super: Tiro em área.", attackVideo: "img/AtaqueMaisie.mp4", superVideo: "img/SuperMaisie.mp4" },
    "Colette": { name: "Colette", description: "Ataque: Dano baseado na saúde do inimigo.<br>Super: Dá dano a todos os inimigos em volta.", attackVideo: "img/AtaqueColette.mp4", superVideo: "img/SuperColette.mp4" },

    "Mortis": { name: "Mortis", description: "Ataque: Dispara lâminas em linha reta.<br>Super: Movimentos rápidos com lâminas.", attackVideo: "img/AtaqueMortis.mp4", superVideo: "img/SuperMortis.mp4" },
    "Tara": { name: "Tara", description: "Ataque: Cartas com dano.<br>Super: Cria um buraco negro.", attackVideo: "img/AtaqueTara.mp4", superVideo: "img/SuperTara.mp4" },
    "Lou": { name: "Lou", description: "Ataque: Lança gelo.<br>Super: Congela os inimigos.", attackVideo: "img/AtaqueLou.mp4", superVideo: "img/SuperLou.mp4" },
     "Fang": { name: "Fang", description: "Ataque: Socos rápidos.<br>Super: Explosão de dano em área.", attackVideo: "img/AtaqueFang.mp4", superVideo: "img/SuperFang.mp4" },
    "Clancy": { name: "Clancy", description: "Ataque: Dispara uma bola de energia.<br>Super: Redefine o ataque com dano extra.", attackVideo: "img/AtaqueClancy.mp4", superVideo: "img/SuperClancy.mp4" },
    "Moe": { name: "Moe", description: "Ataque: Ataques em área com golpes fortes.<br>Super: Deixa inimigos lentos.", attackVideo: "img/AtaqueMoe.mp4", superVideo: "img/SuperMoe.mp4" },
    "Byron": { name: "Byron", description: "Ataque: Dispara veneno que causa dano.<br>Super: Cura ou envenena inimigos.", attackVideo: "img/AtaqueByron.mp4", superVideo: "img/SuperByron.mp4" },
    "Max": { name: "Max", description: "Ataque: Dispara rajadas rápidas.<br>Super: Aumenta a velocidade dos aliados.", attackVideo: "img/AtaqueMax.mp4", superVideo: "img/SuperMax.mp4" },

    "Corvo": { name: "Corvo", description: "Ataque: Lança cianotoxinas.<br>Super: Dá dano e cura-se.", attackVideo: "img/AtaqueCorvo.mp4", superVideo: "img/SuperCorvo.mp4" },
    "Spike": { name: "Spike", description: "Ataque: Espinhos em todas as direções.<br>Super: Área de espinhos.", attackVideo: "img/AtaqueSpike.mp4", superVideo: "img/SuperSpike.mp4" },
    "Leon": { name: "Leon", description: "Ataque: Lâminas giratórias.<br>Super: Invisibilidade.", attackVideo: "img/AtaqueLeon.mp4", superVideo: "img/SuperLeon.mp4" },
    "Sandy": { name: "Sandy", description: "Ataque: Areia atravessa inimigos.<br>Super: Tempestade de areia.", attackVideo: "img/AtaqueSandy.mp4", superVideo: "img/SuperSandy.mp4" },
    "Wattson": { name: "Wattson", description: "Ataque: Tiro rápido.<br>Super: Cria campo de eletricidade.", attackVideo: "img/AtaqueWattson.mp4", superVideo: "img/SuperWattson.mp4" },
    "Cordelius": { name: "Cordelius", description: "Ataque: Joga cordas.<br>Super: Atrai inimigos.", attackVideo: "img/AtaqueCordelius.mp4", superVideo: "img/SuperCordelius.mp4" },
    "Kenji": { name: "Kenji", description: "Ataque: Dispara rajadas de lâminas.<br>Super: Aumenta a velocidade de movimento.", attackVideo: "img/AtaqueKenji.mp4", superVideo: "img/SuperKenji.mp4" },
    "Chester": { name: "Chester", description: "Ataque: Projéteis explosivos.<br>Super: Habilidade aleatória.", attackVideo: "img/AtaqueChester.mp4", superVideo: "img/SuperChester.mp4" }
};



function updateBrawlerCard(selectId, cardId, nameId, descriptionId, attackButtonId, superButtonId, modalLabelId, videoId) {
  const brawlerName = document.getElementById(selectId).value;
  const cardElement = document.getElementById(cardId);

  if (brawlerName && brawlers[brawlerName]) {
    const brawler = brawlers[brawlerName];
    cardElement.classList.remove("d-none");
    document.getElementById(nameId).textContent = brawler.name;
    document.getElementById(descriptionId).innerHTML = brawler.description;

    document.getElementById(attackButtonId).onclick = () => {
      document.getElementById(videoId).src = brawler.attackVideo;
      document.getElementById(modalLabelId).textContent = `${brawler.name} - Ataque`;
    };

    document.getElementById(superButtonId).onclick = () => {
      document.getElementById(videoId).src = brawler.superVideo;
      document.getElementById(modalLabelId).textContent = `${brawler.name} - Super`;
    };
  } else {
    cardElement.classList.add("d-none");
  }
}

document.getElementById("brawlerSelect1").addEventListener("change", () => {
  updateBrawlerCard("brawlerSelect1", "brawlerCard1", "brawlerName1", "brawlerDescription1", "attackButton1", "superButton1", "brawlerModalLabel1", "brawlerVideo1");
});

document.getElementById("brawlerSelect2").addEventListener("change", () => {
  updateBrawlerCard("brawlerSelect2", "brawlerCard2", "brawlerName2", "brawlerDescription2", "attackButton2", "superButton2", "brawlerModalLabel2", "brawlerVideo2");
});

</script>


<!--Termino Comparacao dos Brawlers-->
<?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/navbar-scroll.js"></script>
    <script src="js/darkmode.js"></script>

</body>
</html>