<?php
    include '../../php/conexion.php';

    $departamento = $_POST['distrito'];
    $pedido = $_POST['pedido'];

    $sql = "INSERT INTO envio (departamento, pedido) VALUES ('$departamento', '$pedido')";
    $resultado = mysqli_query($conexion, $sql);

    mysqli_close($conexion);
?>