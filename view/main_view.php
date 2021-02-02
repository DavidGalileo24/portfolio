<?php include_once 'view/template/header.php'; ?>
<body>
	
	<?php include_once 'view/template/menu.php'; ?>
	
	<div id="fullpage">
		<div class="container-fluid cont2 section">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center">
					<img src="assets/indice.png" alt="" class="img_personal" loading="lazy">
					<br>
					<h3>¡Hola, bienvenido!</h3>
					<h2>Mi nombre es David Galileo Salgado</h2>
					<h2><strong>Desarrollador web Frontend</strong></h2>
					<br>
					<a href="?s=portfolio" class="btn btn-info"><i class="fas fa-folder-open"></i> Portfolio</a>
					<a href="assets/David Galileo Salgado Mejía.pdf" download="" class="btn btn-primary" id="btnCV"><i class="fas fa-download"></i> Hoja de vida</a>

				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
		<!--Services-->
		<div class="container-fluid section p-1">
			
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Servicios</h1><br><br>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 text-center">
					<div class="row">
						<div class="col-md-4">
							<div class="card p-2">
								<i class="fas fa-laptop-code servicesF"></i>
								<div class="card-body">
									<h3>Desarrollo de sistemas web</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card p-2">
								<i class="fas fa-layer-group servicesF"></i>
								<div class="card-body">
									<h3>Diseño de interfaces</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card p-2">
								<i class="fas fa-shopping-cart servicesF"></i>
								<div class="card-body">
									<h3>Desarrollo de E-commerce</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card p-2">
								<i class="fas fa-mobile-alt servicesF"></i>
								<div class="card-body">
									<h3>Desarrollo de aplicaciones móvil</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card p-2">
								<i class="fas fa-laptop servicesF"></i>
								<div class="card-body">
									<h3>Desarrollo de aplicaciones de escritorio</h3>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-md-5">
					<img src="assets/images/img2.png" alt="" class="img-fluid img-responsive" loading="lazy">
				</div>
			</div>
		</div>

		<div class="container-fluid section">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Beneficios</h1><br><br>
				</div>
				<div class="col-md-5">
					<img src="assets/images/img1.png" alt="" class="img-fluid img-responsive" loading="lazy">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<ul class="beneficiosF">
						<li><h5><i class="fas fa-calendar-check iconsF"></i> Entrega de proyecto en tiempo record</h5></li>
						<li><h5><i class="fas fa-shield-alt iconsF"></i> Seguridad de su sitio en la web</h5></li>
						<li><h5><i class="fas fa-smile-beam iconsF"></i> Amabalidad y comprensión siempre</h5></li>
						<li><h5><i class="fas fa-star iconsF"></i> Desarrollo de sistemas de calidad</h5></li>
						<li><h5><i class="fas fa-wrench iconsF"></i> Mantenimiento y actualizaciones</h5></li>
						<li><h5><i class="fas fa-chart-line iconsF"></i> Crecimiento garantizado</h5></li>
						<li><h5><i class="fas fa-clipboard-list iconsF"></i> Atención a los requerimientos que solicite</h5></li>
						<li><h5><i class="fas fa-code iconsF"></i> Código fuente disponible y legible</h5></li>
					</ul>
				</div>
			</div>
		</div>

		<!--Skills-->
		<div class="container-fluid section">
			<div class="row">
				<div class="col-md-12 techs">
					<h1 class="text-center">Stack de tecnologías</h1>
					<h5>Lenguajes de programación, frameworks, librerias, CMS con las cuales desarrollo mis proyectos</h5><br><br><br>
					<?php foreach ($this->objectC->readTech() as $k):
						?>
						<img loading="lazy" src="<?php echo $k->img_tech ;?>" alt="" width="125px" height="125px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo $k->nombre_tecnologia; ?>">
					<?php endforeach; ?>
				</div>
			</div>
		</div>

	</div><!--end fullpage-->


	<?php include_once 'view/template/footer.php'; ?>
