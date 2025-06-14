<?php
    include "conexion.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sql = "INSERT INTO formulario_em (nombre, apellido, correo) VALUES ('$nombre', '$apellido', '$email')";
    $resultado = mysqli_query($conexion, $sql);

    mysqli_close($conexion);
?>