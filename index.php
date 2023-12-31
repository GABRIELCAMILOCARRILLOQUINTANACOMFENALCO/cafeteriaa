<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css J/estilos.css">
    <script src="../js J/validarfinca.js"></script>
    <title>Menu Admin</title>
</head>

<body>
   
    <h3 class='text-center'>Seleccione la funcion a realizar</h3>
    <!--Botones imagenes-->
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              
                <div class="caption">
                    <h3>INVENTARIO</h3>
                    <p>En esta funcion se inicia el proceso del invetario</p>
                    <p>
                        <a id="agregar" href="../cafeteriaa/inventario/inicioinve.php" class="btn btn-primary" role="button" >Agregar Usuario</a>
                    </p>
                </div>
            </div>
            <div class="thumbnail">
               
                    <h3>COMPRA</h3>
                    <p>En esta funcion podra comprar el producto</p>
                    <p>
                        <a href="../cafeteriaa/venta/inicioventa.php" class="btn btn-primary" role="button">Editar Usuario</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
