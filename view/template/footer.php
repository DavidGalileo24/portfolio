	
	
	<!--jquery-->
	<script  src="node_modules/jquery/dist/jquery.js"></script>
	<!--bootstrap-->
	<script  src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script  src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!--js main-->
	<script  src="assets/js/script.js"></script>
	<!--fullpage-->
	<script  src="node_modules/fullpage.js/dist/fullpage.js"></script>
	<!--popper-->
	<script  src="assets/js/popper.min.js"></script>
	<!--timeline js-->
	<script src="node_modules/timelinejs-slider/dist/js/timeline.min.js"></script>
	

	<script>

		//fullpage js
		let myfullpage = new fullpage('#fullpage', {
			navigation: true,
			menu: '#menu',
			anchors: ['inicio', 'portfolio', 'sobremi', 'servicios', 'contactame'],
			navigationTooltips: ['Inicio', 'Portfolio', 'Sobre mí', 'Servicios', 'Contáctame'],
			showActiveTooltips: true,
			verticalCentered: true,
			controlArrows: true,
			slidesNavigation: false
		});

		//popper js
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
		});

		//timeline js
		$('.js-timeline').Timeline();

	</script>
</body>
</html>