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
	<script type="text/javascript" src="https://unpkg.com/@popperjs/core@2"></script>
	

	<script>
		let myfullpage = new fullpage('#fullpage', {
			licenseKey: 'YOUR_KEY_HERE'
		});

		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
		})

		let submenu = document.querySelector('#submenu');
		submenu.addEventListener('click', function(){

		});


	</script>
</body>
</html>