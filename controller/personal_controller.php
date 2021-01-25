<?php 
	
	include_once 'model/personal_model.php';
	class Personal_controller{
		public $objectC;

		public function __construct(){
			$this->objectC = new Personal_model();
		}

		public function main(){
			include_once 'view/main_view.php';
		}
		public function about(){
			include_once 'view/about_view.php';
		}
		public function contact(){
			include_once 'view/contact_view.php';
		}
		public function portfolio(){
			include_once 'view/portfolio_view.php';
		}

	}//end class
 ?>