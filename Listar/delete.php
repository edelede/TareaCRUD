<?php include("../conexion.php");


$id = $_GET['id'];

$consulta = "DELETE FROM imagenes WHERE id = '$id'";
$resultado = mysqli_query($con,$consulta);

if($resultado){
    header("Location: read.php");
}