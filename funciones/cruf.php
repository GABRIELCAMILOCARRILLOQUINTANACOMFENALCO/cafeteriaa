<?php 


	class cruf{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			

			$sql="INSERT into venta (id_venta,Producto_ID,cantidad_v,fecha_v)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]')";
											
			return mysqli_query($conexion,$sql);
			
			
			
		}

		public function obtenDatos($idproducto){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_venta,Producto_ID,cantidad_v,fecha_v
					from venta 
					where id_venta ='$idproducto'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_venta' => $ver[0],
				'Producto_ID' => $ver[1],
				'cantidad_v' => $ver[2],
				'fecha_v' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE venta set  id_venta ='$datos[0]',
										Producto_ID ='$datos[1]',
										cantidad_v ='$datos[2]',
										fecha_v ='$datos[3]'
						where id_venta ='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}



		public function eliminar($idventa){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from venta where id_venta='$idventa'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>