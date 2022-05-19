<?php
include("../conexion.php");
$consulta = "SELECT * FROM imagenes";
$resultado = mysqli_query($con, $consulta);
$imagenes = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>
<a href="../index.php">Volver</a>
<table>
    <tr>
        <th>ID</th>
        <th>URL</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach ($imagenes as $imagen) { ?>
        <tr>

            <td><?php echo $imagen['id'] ?></td>
            <td><?php echo $imagen['url'] ?></td>
            <td><a href="update.php?id=<?php echo $imagen['id'] ?>">Modificar</a></td>
            <td><a href="delete.php?id=<?php echo $imagen['id'] ?>">Eliminar</a></td>
        </tr>
    <?php } ?>
</table>


<?php
foreach ($imagenes as $imagen) {
    echo "<img src='" . $imagen['url'] . "'>";
}
?>