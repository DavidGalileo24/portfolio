<?php 

include_once 'database/conexion.php';

class Personal_model{
	public $objectM;
	public $id_tecnologia;
	public $nombre_categoria;
	public $img_tech;

	public function __construct(){
		try {
			$this->objectM = conexion::conectar();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function readTech(){
		try {
			$query = "select t.id_tecnologia, t.nombre_tecnologia, c.nombre_categoria, t.img_tech from tecnologias t
			inner join categoria_tech c on c.id_categoria_tec = t.id_categoria_tec;
			";
			$smt = $this->objectM->prepare($query);
			$smt->execute();
			return $smt->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	}//end class
	?>