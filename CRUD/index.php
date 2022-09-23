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
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Insertar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="productos.php">Productos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
      <label>
      <form action="./datos.php" method="POST">
            <div class="mb-3">
              <label for="nombre producto" class="form-label">Nombre Producto</label>
              <input type="text" class="form-control" id="nombre" name = "nombre">
            </div>

            <div class="mb-3">
              <label for="descripcion del producto" class="form-label">Descripción del producto</label>
              <input type="text" class="form-control" id="descripcion" name = "descripcion">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name = "precio">
              </div>

              <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name = "cantidad">
              </div>
              <button class="btn btn-primary" type="submit" value="1" name= "enviarr" >Enviar</button>        
</form>


   
      
</body>
</html>
