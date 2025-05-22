<?php
    include '../../php/conexion.php';

    $departamento = $_POST['departamento'];
    $pedido = $_POST['productos'];

    $sql = "INSERT INTO envio (departamento, pedido) VALUES ('$departamento', '$pedido')";
    $resultado = mysqli_query($conexion, $sql);

    mysqli_close($conexion);
?>