<?php
include("../conexion.php");

$url = $_POST['imagen'];
$consulta = "INSERT INTO imagenes(id,url) VALUES(NULL,'$url')";
$resultado = mysqli_query($con,$consulta);
if($resultado){
    header("Location: ../index.php");
}else{
    echo "NO SE PUDO CREAR LA NUEVA IMAGEN";
}