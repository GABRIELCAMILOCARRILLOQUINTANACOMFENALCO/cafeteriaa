<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['id_producto'],
		$_POST['nombre_p'],
		$_POST['referencia'],
		$_POST['precio'],
		$_POST['peso'],
		$_POST['ID_Categoria'],
		$_POST['stock'],
		$_POST['fecha_creacion'],
		$_POST['fecha_ac']
				);

	echo $obj->agregar($datos);


	
	
 ?>