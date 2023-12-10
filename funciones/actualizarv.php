<?php 
	require_once "../clases/conexion.php";
	require_once "cruf.php";
	$obj= new cruf();

	$datos=array(
		$_POST['venta'],
		$_POST['producto'],
		$_POST['cantidad'],
		$_POST['fecha']
				);

	echo $obj->actualizar($datos);
 ?>