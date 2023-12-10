<?php 
	require_once "../clases/conexion.php";
	require_once "../funciones/cruf.php";

	$obj= new cruf();

	$datos=array(
		$_POST['id_venta'],
		$_POST['Producto_ID'],
		$_POST['cantidad_v'],
		$_POST['fecha_v']
				);

	echo $obj->agregar($datos);


	
	
 ?>