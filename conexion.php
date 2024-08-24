<?php

    $conexion = mysqli_connect("127.0.0.1", "root", "", "Regularizacion");

    if (!$conexion) 
    {
        die("Error en la conexión: " . mysqli_connect_error());
    } 
    else 
    {
        echo "Se conectó a la base de datos";
    }

    mysqli_close($conexion);

?>
