<?php
    include_once('Conexion.php');
    $nombre = $_POST['NombrePaciente'];
    $apellido = $_POST['ApellidoPaciente'];
    $cedula = $_POST['CedulaPaciente'];
    $correo = $_POST['CorreoPaciente'];
    $telefono = $_POST['TelefonoPaciente'];
    $direccion = $_POST['DireccionPaciente'];
    $padecimiento = $_POST['PadecimientoPaciente'];
    $Genero = $_POST['Genero'];
    $sql = "INSERT INTO pacientes (nombre,apellido,cedula,correo,telefono,direccion,padecimiento,genero)
            values('$nombre','$apellido'.'$cedula', '$correo','$telefono','$direccion','$padecimiento','$Genero')";
    $rsQ = mysqli_query($conexion, $Q) or die(mysqli_error($conexion));
?>