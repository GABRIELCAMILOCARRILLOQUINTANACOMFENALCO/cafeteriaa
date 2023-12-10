<?php 
	
	require_once "../clases/conexion.php";
	require_once "cruf.php";

	$obj= new cruf();

	echo json_encode($obj->obtenDatos($_POST['id_venta']));

 ?>