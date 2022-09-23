<?php  
include_once('bd.php');

if (isset($_GET['id'])){
  $id =$_GET['id'];
  $sql2 = "SELECT * FROM productos WHERE id = $id";

  $consulta = mysqli_query($con,$sql2);
 
  $fila = mysqli_fetch_array($consulta);
  $id =$fila['id'];
  $nombre =$fila['nombre'];
  $descripcion = $fila['descripcion'];
  $precio = $fila['precio'];
  $cantidad = $fila['cantidad'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="text-align: center;" >
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
         
      
        </div>
      </nav>
    
      <label>
      <form action="./datos.php" method="POST">
        <input type="hidden" name="id" value="<?= $id?>">
            <div class="mb-3">
              <label for="nombre producto" class="form-label">Nombre Producto</label>
              <input type="text" class="form-control" id="nombre" name = "nombre" value="<?= $nombre?>">
            </div>

            <div class="mb-3">
              <label for="descripcion del producto" class="form-label">Descripción del producto</label>
              <input type="text" class="form-control" id="descripcion" name = "descripcion" value="<?= $descripcion?>">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name = "precio" value="<?= $precio?>">
              </div>

              <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name = "cantidad" value="<?= $cantidad?>">
              </div>
              <button class="btn btn-primary" type="submit" value="1" name= "editar" >Enviar</button>        
</form>


   
      
</body>
</html>


