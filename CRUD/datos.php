<?php
include_once("bd.php");


if(isset($_POST['enviarr'])){

   
$nombre =$_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

echo "El nombre es ".$nombre." la descripcion es ".$descripcion." y los apellidos ".$precio;

if(!$con){
    echo("No se ha podido realizar la conexión_".mysql_connect_error()."<br>");
    print_r("tu pula me cu");
die;
}else{
    mysqli_set_charset($con,"utf8");
    echo " Se ha esablecido correctamente la conexion a la base de datos";
    $sql2 = "INSERT INTO `productos`(`nombre`, `descripcion`, `precio`, `cantidad`) VALUES ('$nombre','$descripcion',$precio,$cantidad)";
    print_r($sql2);
    $consulta = mysqli_query($con,$sql2);
   

    if(!$consulta){
        die("No se ha podido realizar el insert");
    }else{
        header("Location: /productos.php");
    }

}
}

if(isset($_POST['editar'])){

   $id = $_POST['id'];
    $nombre =$_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    
    echo "El nombre es ".$nombre." la descripcion es ".$descripcion." y los apellidos ".$precio;
    
    if(!$con){
        echo("No se ha podido realizar la conexión_".mysql_connect_error()."<br>");
        print_r("tu pula me cu");
    die;
    }else{
        mysqli_set_charset($con,"utf8");
        echo " Se ha esablecido correctamente la conexion a la base de datos";
        $sql2 = "UPDATE `productos` SET `id`=$id,`nombre`='$nombre',`descripcion`='$descripcion',`precio`=$precio,`cantidad`=$cantidad WHERE id = $id";
        print_r($sql2);
        $consulta = mysqli_query($con,$sql2);
       
    
        if(!$consulta){
            die("No se ha podido realizar el insert");
        }else{
            header("Location: /productos.php");
        }
    
    }
    }

?>




