<?php
    $conexion = mysqli_connect("localhost", "inalcorp_user_qerochela", "VXp0UUM7VPz_", "inalcorp_qerochela");
    //$conexion = mysqli_connect("localhost", "root", "", "inalcorp_qerochela");
    
    if(!$conexion){
        die("Error de conexión: " . mysqli_connect_error());
    }
?>