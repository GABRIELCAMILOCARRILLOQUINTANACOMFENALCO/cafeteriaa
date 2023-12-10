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
							Comprar <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						By Cafeteria
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
                                                    <input type="text" name="id_venta" id="id_venta" class="form-control">
                                                </div>
                                            </div>

                                        </div>        
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Producto</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="Producto_ID" id="Producto_ID" class="form-control">
                                    </div>
                                </div>
                                                                                        
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Cantidad</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="cantidad_v" id="cantidad_v" class="form-control">
                                    </div>
                                </div>                                                              
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Fecha de creacion</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="date"  type="date" name="fecha_v"class="form-control" value="<?php echo date('Y-m-d'); ?>">
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
                                                    <input type="text" name="venta" id="venta" class="form-control">
                                                </div>
                                            </div>

                                        </div>        
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Producto</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="Producto" id="Producto" class="form-control">
                                    </div>
                                </div>
                                                                                        
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Cantidad</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="text"  name="cantidad" id="cantidad" class="form-control">
                                    </div>
                                </div>                                                              
                            </div>
                            <div class="form-group row">
                                <div class="col-5">
                                    <label class="col-form-label float-right">Fecha de creacion</label>
                                </div>
                                <div class="col-7">
                                    <div>
                                        <input type="date"  type="date" name="fecha"  class="form-control" value="<?php echo date('Y-m-d'); ?>">
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
				url:"../procesos/agregarv.php",
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
				url:"../funciones/actualizarv.php",
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
	function agregaFrmActualizar(idventa){
        
       
		$.ajax({
			type:"POST",
			data:"id_venta=" + idventa,
			url:"../funciones/datos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$("#venta").val(datos['id_venta']);
				$('#Producto').val(datos['Producto_ID']);
				$('#cantidad').val(datos['cantidad_v']);
				$('#fecha').val(datos['fecha_v']);
           
			}
		});
   
	}

	function eliminarDatos(idproducto){
		alertify.confirm('Eliminar un juego', '¿Seguro de eliminar este producto :(?', function(){ 

			$.ajax({
				type:"POST",
				data:"id_venta=" + idproducto,
				url:"../procesos/eliminarv.php",
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