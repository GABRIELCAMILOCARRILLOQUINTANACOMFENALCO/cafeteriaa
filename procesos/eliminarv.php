<?php 
	
	require_once "../clases/conexion.php";
	require_once "../funciones/cruf.php";

	$obj= new cruf();

	echo $obj->eliminar($_POST['id_venta']);

 ?>