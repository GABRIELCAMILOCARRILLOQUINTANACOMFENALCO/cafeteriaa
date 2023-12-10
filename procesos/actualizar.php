<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['producto'],
		$_POST['nombre'],
		$_POST['refe'],
		$_POST['pre'],
		$_POST['pes'],
		$_POST['categoria'],
		$_POST['stockk'],
		$_POST['fechaa'],
		$_POST['fechaac']
				);

	echo $obj->actualizar($datos);
 ?>