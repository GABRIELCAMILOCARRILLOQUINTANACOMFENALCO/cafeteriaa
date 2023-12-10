<?php 


	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			

			$sql="INSERT into productos (id_producto,nombre_p,referencia,precio,peso,ID_Categoria,stock,fecha_creacion,fecha_ac)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]',
											'$datos[6]',
											'$datos[7]',
											'$datos[8]')";
											
			return mysqli_query($conexion,$sql);
			
			
			
		}

		public function obtenDatos($idproducto){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT *
					from productos 
					where id_producto ='$idproducto'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_producto' => $ver[0],
				'nombre_p' => $ver[1],
				'referencia' => $ver[2],
				'precio' => $ver[3],
				'peso' => $ver[4],
				'ID_Categoria' => $ver[5],
				'stock' => $ver[6],
				'fecha_creacion' => $ver[7],
				'fecha_ac' => $ver[8]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE productos set  id_producto='$datos[0]',
										nombre_p='$datos[1]',
										referencia='$datos[2]',
										precio='$datos[3]',
										peso='$datos[4]',
										ID_Categoria='$datos[5]',
										stock='$datos[6]',
										fecha_creacion='$datos[7]',
										fecha_ac='$datos[8]'											
						where id_producto='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idproducto){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from productos where id_producto='$idproducto'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>