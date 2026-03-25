<nav class="navbar navbar-expand-lg navbar-dark navbar-elegant sticky-top">
		<div class="container-fluid">
			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="https://static.vecteezy.com/system/resources/previews/027/127/558/large_2x/brawl-stars-logo-brawl-stars-icon-transparent-free-png.png" class="tamanhoimagem" alt="Logo">
			</a>

			<!-- Texto Centralizado "Brast" -->
			<span class="navbar-text mx-auto d-none d-lg-block" >
				Brast
			</span>

			<!-- Botão Toggler -->
			<button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
				<span class="navbar-toggler-icon" style="filter: invert(1);"></span>
			</button>

			<!-- Menu colapsável -->
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<!-- Home -->
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>

					<!-- Visuais -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
							Visuais
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="brawlers.php#BrawlerDoDia">Brawler do dia</a></li>

							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle" href="#">Raridade</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="brawlers.php#Raro">Raro</a></li>
									<li><a class="dropdown-item" href="brawlers.php#Super-Raro">Super-Raro</a></li>
									<li><a class="dropdown-item" href="brawlers.php#Epico">Epico</a></li>
									<li><a class="dropdown-item" href="brawlers.php#Mitico">Mitico</a></li>
									<li><a class="dropdown-item" href="brawlers.php#Lendario">Lendario</a></li>
									<li><a class="dropdown-item" href="brawlers.php#UltraLendario">Ultra Lendario</a></li>
								</ul>
							</li>

							<li><a class="dropdown-item" href="brawlers.php#Comparacao">Comparação de Brawlers</a></li>
						</ul>
					</li>

					<!-- Brawlers -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
							Brawlers
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Todos</a></li>
							<li><a class="dropdown-item" href="#">Mais fortes</a></li>
							<li><a class="dropdown-item" href="#">Mais fracos</a></li>
						</ul>
					</li>

					<!-- Mapas -->
					<li class="nav-item">
						<a class="nav-link" href="mapas.php">Mapas</a>
					</li>

					<!-- Modos -->
					<li class="nav-item">
						<a class="nav-link" href="parcerias.php">Parcerias</a>
					</li>

					<!-- Tier List -->
					<li class="nav-item">
						<a class="nav-link" href="#">Tier List</a>
					</li>

					<!-- Sobre -->
					<li class="nav-item">
						<a class="nav-link" href="sobre.php">Sobre</a>
					</li>

					<!-- Dark Mode Toggle -->
					<li class="nav-item ms-3">
						<button id="darkModeToggle" class="btn btn-icon-theme" title="Alternar modo escuro">
							<i class="bi bi-moon"></i>
						</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>