<?php include_once 'view/template/header.php'; ?>
<body>
	
	<?php include_once 'view/template/menu.php'; ?>
	<?php include_once 'view/template/menu_movil.php'; ?>
	
	<div id="fullpage">
		<!--Información general-->
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
					<a href="assets/David Galileo Salgado Mejía.pdf" download="" class="btn btn-success" id="btnCV"><i class="fas fa-download"></i> Hoja de vida</a>

				</div>
				<div class="col-md-3"></div>
			</div>
		</div>

		<!--Datos personales-->
		<div class="container-fluid section">
			<div class="slide">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Sobre mí</h1>
						<br><br>
					</div>
					<div class="col-md-3">
						<p class="text-center parrafobout">Soy un desarrollador web frontend salvadoreño, fanatico de las peliculas y series y disfrutar de la compañia de mi familia y amigos</p>
					</div>
					<div class="col-md-6 aboutme">
						<div class="row">
							<div class="col-md-6">

								<p><strong>Nombre:</strong> David Galileo Salgado</p>
								<p><strong>Nacionalidad:</strong> Salvadoreña</p>
								<p><strong>Edad:</strong> 23 años (24-03-1997)</p>
								<p><strong>Hobbies:</strong> Videojuegos, series, fútbol</p>
								<p><strong>Estado civil:</strong> Soltero</p>
							</div>
							<div class="col-md-6 text-center">
								<img src="assets/images/avatar.png" alt="" class="img-fluid img-responsive avatarimg" width="75%" height="65%">
							</div>
						</div>
					</div>

					<div class="col-md-3 text-center">
						<h3>Habilidades sociales</h3>
						<ul>
							<li>Responsabilidad</li>
							<li>Respeto</li>
							<li>Empatía</li>
							<li>Solidaridad</li>
							<li>Responsabilidad</li>
							<li>Trabajo en equipo</li>
							<li>Proactividad</li>
							<li>Organización</li>						
						</ul>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12 estudios">
							<h1 class="text-center">Estudios</h1>
							<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=14WCPnwBcDbJa276WjUBhr-U5biRLGaDvP2F4h-BWmAU&font=Default&lang=en&initial_zoom=2' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12 estudios">
							<h1 class="text-center">Experiencia laboral</h1>
							<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1tL6IGWpdRNPQyn41aQFUUdo4RGtqhIDkEFimc_MkbHc&font=Default&lang=en&initial_zoom=2' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Services-->
		<div class="container-fluid servicesf section">
			
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-6 text-center">
					<h1 class="text-center">Servicios</h1>
					<div class="row">
						
						<div class="col-md-4 contcard">
							<div class="card p-2">
								<i class="fas fa-layer-group servicesF"></i>
								<div class="card-body">
									<h3>Diseño de interfaces (UI/UX)</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4 contcard">
							<div class="card p-2">
								<i class="fas fa-laptop-code servicesF"></i>
								<div class="card-body">
									<h3>Desarrollo de sistemas web</h3>
								</div>
							</div>
						</div>
						<div class="col-md-4 contcard">
							<div class="card p-2">
								<i class="fas fa-shopping-cart servicesF"></i>
								<div class="card-body">
									<h3>Desarrollo de sistemas E-commerce</h3>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-5">
					<img src="assets/images/img2.png" alt="" class="img-fluid img-responsive imgservices" loading="lazy">
				</div>
			</div>
		</div>

		<!--Beneficios
		<div class="container-fluid section">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Beneficios al adquirir mis servicios</h1><br><br>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<img src="assets/images/img1.png" alt="" class="img-fluid" loading="lazy">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<ul class="beneficiosF" style="margin: 5px">
						<li>
							<p><h5><i class="fas fa-calendar-check iconsF"></i> Entrega de proyecto en tiempo record</h5></p>
						</li>
						<li>
							<p><h5><i class="fas fa-shield-alt iconsF"></i> Seguridad de su sitio en la web</h5></p>
						</li>
						<li>
							<p><h5><i class="fas fa-smile-beam iconsF"></i> Amabalidad y comprensión siempre</h5></p>
						</li>
						<li>
							<p><h5><i class="fas fa-star iconsF"></i> Desarrollo de sistemas de calidad</h5></p>
						</li>
						<li>
							<p><h5><i class="fas fa-wrench iconsF"></i> Mantenimiento y actualizaciones</h5></p>
						</li>					<li><p><h5><i class="fas fa-chart-line iconsF"></i> Crecimiento garantizado</h5></li>
							<li>
								<p><h5><i class="fas fa-clipboard-list iconsF"></i> Atención a los requerimientos que solicite</h5></p>
							</li>
							<li>
								<p><h5><i class="fas fa-code iconsF"></i> Código fuente disponible y legible</h5></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		-->

		<!--Skills-->
		<div class="container-fluid section">
			<div class="row">
				<div class="col-md-12 techs">
					<h1 class="text-center">Tecnologías</h1>
					<h5>Lenguajes de programación, frameworks, librerias, CMS con las cuales desarrollo mis proyectos</h5><br><br><br>
					<?php foreach ($this->objectC->readTech() as $k):
						?>
						<img loading="lazy" src="<?php echo $k->img_tech ;?>" alt="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo $k->nombre_tecnologia; ?>" class="tech_images">
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="container-fluid section contactate1">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Contáctame</h2>
					<h5 class="text-center">Puedes contactarme mediante mis redes sociales... ¡Será un gusto hablar contigo!</h5>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-6 social_cont2 text-center" style="margin-bottom: 10%;">
					<a href="https://github.com/DavidGalileo24" target="blank"><i class="social2 fab fa-github" data-bs-toggle="tooltip" data-bs-placement="left" title="Github"></i></a>

					<a href="https://www.instagram.com/david_galileo24/" target="blank"><i class="social2 fab fa-instagram" data-bs-toggle="tooltip" data-bs-placement="left" title="Instagram"></i></a>

					<a href="https://www.linkedin.com/in/david-galileo-salgado-mej%C3%ADa-b1a07b128/" target="blank"><i class="social2 fab fa-linkedin" data-bs-toggle="tooltip" data-bs-placement="left" title="Linkedin"></i></a>

					<a href="https://www.pinterest.es/davidgalileos/_saved/" target="blank"><i class="social2 fab fa-pinterest" data-bs-toggle="tooltip" data-bs-placement="left" title="Pinterest"></i></a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>

		
	</div><!--end fullpage-->



	<?php include_once 'view/template/footer.php'; ?>
