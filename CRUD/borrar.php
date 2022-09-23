<?php
include_once("bd.php");



if(!$con){
    echo("No se ha podido realizar la conexión_".mysql_connect_error()."<br>");

die;
}else{
    
    $id =$_GET['id'];
    $sql2 = "DELETE FROM `productos` WHERE id = $id";
    print_r($sql2);
    $consulta = mysqli_query($con,$sql2);
   

    if(!$consulta){
        die("No se ha podido realizar el insert");
    }else{
        header("Location: /productos.php");
    }

}