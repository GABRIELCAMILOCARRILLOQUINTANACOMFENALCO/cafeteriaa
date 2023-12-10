


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Registro y control del invetario
					</div>
					<div class="card-body">
						<span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo producto <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
				
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevo producto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                <div class="row">
            <div class="col">
			<form id="frmnuevo">
            <div class="row">
                        <div class="col-12 col-md-6"> 
                        <div class="form-group row">
                                            <div class="col-5">
                                                <label class="col-form-label float-right">Numero</label>
                                            </div>
                                            <div class="col-7">
                                                <div>
                                                    <input type="text" name="id_producto" id="id_producto" class="form-control">
                                                </div>
                                            </div>

                                        </div>        
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Nombre</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="nombre_p" id="nombre_p" class="form-control">
                                    </div>
                                </div>
                                                                                        
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Referencia</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="referencia" id="referencia" class="form-control">
                                    </div>
                                </div>                                                              
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Precio</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="precio" id="precio" class="form-control">
                                    </div>
                                </div>
                                </div> 
                                <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Peso</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text" name="peso" id="peso" class="form-control">
                                    </div>
                                </div>
                                                                                        
                            </div>  
                                     <div class="form-group row">

                                    <div class="col-5">
                                        <label class="col-form-label float-right">Categoria</label>
                                    </div>
                                    <select name="ID_Categoria" id="ID_Categoria">
    <option value="" selected="selected">-----------------</option>
    <option value="1">cafe</option>
    <option value="2">Tea</option>
    <option value="3">Reposteria</option>
</select>
                                                                                                                                   
                                     </div>                                 
                            
                         
                       
                        </div>
                        <div class="col-12 col-md-6">
                                                                                           
                           
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Stock</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="stock" id="stock" class="form-control">
                                    </div>
                                </div>                                                           
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Fecha de creacion</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="date"  type="date" name="fecha_creacion"class="form-control">
                                    </div>
                                </div>                                                                
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Fecha de Actualizacion</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="date"  type="date" name="fecha_ac"class="form-control">
                                    </div>
                                </div>                                                                
                            </div>
                        
                             
                                           
                        </div>
                    </div>



                </form>
            </div>
        </div>
              </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
			</div>
		</div>
	</div>


	<!-- ventana de editar el producto -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Categorias </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                <div class="row">
            <div class="col">
			<form id="frmnuevoU">
            <div class="row">
                        <div class="col-12 col-md-6"> 
                        <div class="form-group row">
                                            <div class="col-5">
                                                <label class="col-form-label float-right">Numero</label>
                                            </div>
                                            <div class="col-7">
                                                <div>
                                                    <input type="text" name="producto" id="producto" class="form-control">
                                                </div>
                                            </div>

                                        </div>        
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Nombre</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="nombre" id="nombre" class="form-control">
                                    </div>
                                </div>
                                                                                        
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Referencia</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="refe" id="refe" class="form-control">
                                    </div>
                                </div>                                                              
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Precio</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="pre" id="pre" class="form-control">
                                    </div>
                                </div>
                                </div> 
                                <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Peso</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text" name="pes" id="pes" class="form-control">
                                    </div>
                                </div>
                                                                                        
                            </div>  
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Categoria</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="categoria" id="categoria" class="form-control">
                                    </div>
                                </div>                                                           
                            </div>                                
                            
                         
                       
                        </div>
                        <div class="col-12 col-md-6">
                                                                                           
                           
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Stock</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="stockk" id="stockk" class="form-control">
                                    </div>
                                </div>                                                           
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Fecha de creacion</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="date"  type="date" name="fechaa" id="fechaa" class="form-control" readonly>
                                    </div>
                                </div>                                                                
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Fecha de Actualizacion</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="date"  type="date" name="fechaac"id="fechaac"class="form-control">
                                    </div>
                                </div>                                                                
                            </div>
                        
                             
                                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
              </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>


</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos/agregar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("agregado con exito :D");
					}else{
                        $('#frmnuevo')[0].reset();
						//$('#tablaDatatable').load('tabla.php');
						alertify.error("Fallo al agregar :(");
                        
					}
                    
				}
			});
		});

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos/actualizar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Actualizado con exito :D");
					}else{
                        
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idproducto){
   
    $.ajax({
        type: "POST",
        data: "id_producto=" + idproducto,
        url: "../procesos/obtenDatos.php",
        success: function(r){
            console.log(r); // Verifica qué datos se están recibiendo
            datos = jQuery.parseJSON(r);
            $('#producto').val(datos['id_producto']);
            $('#nombre').val(datos['nombre_p']);
            $('#refe').val(datos['referencia']);
            $('#pre').val(datos['precio']);
            $('#pes').val(datos['peso']);
            $('#categoria').val(datos['ID_Categoria']);
            $('#stockk').val(datos['stock']);
            $('#fechaa').val(datos['fecha_creacion']);
            $('#fechaac').val(datos['fecha_ac']);
        }
    });
}

	function eliminarDatos(idproducto){
		alertify.confirm('Eliminar un juego', '¿Seguro de eliminar este producto :(?', function(){ 

			$.ajax({
				type:"POST",
				data:"id_producto=" + idproducto,
				url:"../procesos/eliminar.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('tabla.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}
</script>

