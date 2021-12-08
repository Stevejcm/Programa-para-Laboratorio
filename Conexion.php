<?php
    $conexion = mysqli_connect("localhost", "root","","Laboratorio");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>