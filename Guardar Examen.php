<?php
    include_once('Conexion.php');
    $nombre = $_POST['NombreExamen'];
    $padecimiento = $_POST['PadecimientoExamen'];
    $sql = "INSERT INTO examenes (nombre,padecimiento)
            values('$nombre','$padecimiento')";
    $rsQ = mysqli_query($conexion, $Q) or die(mysqli_error($conexion));
?>