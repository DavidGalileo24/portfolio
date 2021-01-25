<?php 

	include_once 'database/conexion.php';
	include_once 'controller/personal_controller.php';
	$objectI = new Personal_controller();

	if(!isset($_REQUEST['s'])){
		$objectI->main();
	}else{
		$action = $_REQUEST['s'];
		call_user_func(array($objectI, $action));
	}



	/*
		Options +FollowSymLinks
		RewriteEngine on
		RewriteRule ^blog/([0-9]+)$ blog.php?publicacion_id=$1
	*/

?>