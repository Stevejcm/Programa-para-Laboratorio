<?php
    require "Conexion.php";
    $rsBD = mysqli_query($conexion, "SELECT * FROM paciente");
    $pacienteBD = "";

    $pacienteBD .= "<table>";
    $pacienteBD .= "<tr>";
    $pacienteBD .= "<th>Nombre</th>";
    $pacienteBD .= "<th>Apellido</th>";
    $pacienteBD .= "<th>Cedula</th>";
    $pacienteBD .= "<th>Correo</th>";
    $pacienteBD .= "<th>Telefono</th>";
    $pacienteBD .= "<th>Direccion</th>";
    $pacienteBD .= "<th>Padecimiento</th>";
    $pacienteBD .= "<th>Genero</th>";
    $pacienteBD .= "</tr>";

    while($fila = mysqli_fetch_assoc($resBD))
    {
        $pacienteBD .= "<tr>";
        $pacienteBD .= "<td>". $fila['Nombre']."</td>";
        $pacienteBD .= "<td>". $fila['Apellido']."</td>";
        $pacienteBD .= "<td>". $fila['Cedula']."</td>";
        $pacienteBD .= "<td>". $fila['Correo']."</td>";
        $pacienteBD .= "<td>". $fila['Telefono']."</td>";
        $pacienteBD .= "<td>". $fila['Direccion']."</td>";
        $pacienteBD .= "<td>". $fila['Padecimiento']."</td>";
        $pacienteBD .= "<td>". $fila['Genero']."</td>";
        $pacienteBD .= "</tr>"
    }
    $pacienteBD .= "</table>";
    echo $pacienteBD;
    $mysql_close();
?>