<?php
    include("../conexion.php");
    
    $id = $_GET['id'];
    $consulta = "SELECT * FROM imagenes WHERE id = '$id'";
    $resultado = mysqli_query($con,$consulta);
    while($fila = mysqli_fetch_assoc($resultado)){

?>
    <form action="update.php" method="POST">        
        <label for="">ID</label>
        <input type="text" name="txtid" placeholder="id" value="<?=$fila['id']?>"><br>
        <label for="">URL</label>
        <input type="text" name="txturl" placeholder="imagen" value="<?=$fila['url']?>"><br>
        <input type="submit" name="Actualizar" value="Actualizar"><a href="../index.php">Cancelar</a>
    </form>

    <?php 
    } ?>

<?php
    if(isset($_POST['Actualizar'])){
        $idp = $_POST['txtid'];
        $urlp = $_POST['txturl'];
        if($idp!=null || $urlp!=null){
            $consulta2 = "UPDATE imagenes SET id='$idp', url='$urlp' WHERE id = '$idp'";
            $resultado2 = mysqli_query($con,$consulta2);
            if($resultado2){
                header("Location: read.php");
            }else{
                echo "NO SE PUDO ACTUALIZAR";
            }
        }
    }
        
        
        
?>    
   
    







