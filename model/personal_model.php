<?php 

include_once 'database/conexion.php';

	class Personal_model{
		public $objectM;

		public function __construct(){
			try {
				$this->objectM = Conexion::conectar();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	}//end class
?>