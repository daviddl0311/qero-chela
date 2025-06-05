<?php
    include '../../php/conexion.php';

    $codigo =  $_POST['codigo'];
    $departamento = $_POST['distrito'];
    $pedido = $_POST['pedido'];

    $sql = "INSERT INTO envio (codigo, departamento, pedido) VALUES ('$codigo', '$departamento', '$pedido')";
    $resultado = mysqli_query($conexion, $sql);

    mysqli_close($conexion);
?>