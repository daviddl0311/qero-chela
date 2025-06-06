<?php
    include '../../php/conexion.php';

    $codigo =  $_POST['codigo'];
    $departamento = $_POST['distrito'];
    $telefono = $_POST['telefono'];
    $pedido = $_POST['pedido'];

    $sql = "INSERT INTO envio (codigo, departamento, telf, pedido) VALUES ('$codigo', '$departamento', '$telefono','$pedido')";
    $resultado = mysqli_query($conexion, $sql);

    mysqli_close($conexion);
?>