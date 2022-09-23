<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ddb4510e0.js" crossorigin="anonymous"></script>
</head>
<body>
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


    <table class = "table">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Desc</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Editar</td>
            <td>Borrar</td>
        </tr>
        <?php
        include_once('bd.php');
                 $sql2="SELECT * from `productos`";
                 $consulta=mysqli_query($con,$sql2);
                 while($fila=$consulta->fetch_assoc()){
                    echo"<tr>";
                    echo"<td>".$fila["id"]."</td>";
                    echo"<td>".$fila["nombre"]."</td>";
                    echo"<td>".$fila["descripcion"]."</td>";
                    echo"<td>".$fila["precio"]."</td>";
                    echo"<td>".$fila["cantidad"]."</td>";
                    echo"<td><a class = 'btn btn-primary 'href = 'editar.php?id=".$fila['id']."'><i class='fa-sharp fa-solid fa-pencil'></i></a></td>";
                    echo"<td><a class = 'btn btn-danger' href = 'borrar.php?id=".$fila['id']."'><i class='fa-solid fa-ban'></i></a></td>";
                    echo"</tr>";
                 }
                 
                 ?>
</table>

</body>
</html>