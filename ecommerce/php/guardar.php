<?php
    include '../../php/conexion.php';

    $codigo =  $_POST['codigo'];
    $departamento = $_POST['distrito'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['date'];
    $hora = $_POST['hour'];
    $pedido = $_POST['pedido'];

    $sql = "INSERT INTO envio (codigo, departamento, telf, fecha, hora, pedido) VALUES ('$codigo', '$departamento', '$telefono', '$fecha', '$hora','$pedido')";
    $resultado = mysqli_query($conexion, $sql);

    mysqli_close($conexion);
?>