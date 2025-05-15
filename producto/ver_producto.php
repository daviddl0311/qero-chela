<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="theme-color" content="#000">
    <title>Q'ero Chela - Productos</title>
    <link rel="preload" href="../css/producto_css.css" as="style">
    <link rel="stylesheet" href="../css/producto_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script>   
</head>
<body>
    <?php
        include "../php/header-s.php"
    ?>

    <main>
        <?php
            if(isset($_GET['id'])) {
                $id_producto = $_GET['id'];

                include '../php/conexion.php';

                $query = "SELECT * FROM producto WHERE id_producto = $id_producto";

                $resultado = mysqli_query($conexion, $query);

                while($producto = mysqli_fetch_assoc($resultado)) {
                    echo
                    "<section class='ver-producto center' id='".$producto['nombre']."'>
                        <article class='grid ver-producto-column-2'>
                            <div class='ver-producto-img center'>
                                <img src=' ". $producto['img'] ."' alt='".$producto['nombre']."' id='img-change' class='producto-img'>
                            </div>
                            <div class='flex flex-column ver-producto-2'>
                                <div class='producto-title'>
                                    <h2 id='h2-t'>" .$producto['nombre']. "</h2>
                                </div>
                                <div class='producto-text'>
                                    <p>" .$producto['descripcion']. "</p>    
                                </div>
                                <div class='producto-formato grid'>
                                    <button id='bt1' class='button producto-opacity' onclick='location.href=`#".$producto['nombre']."`'>unidad</button>
                                    <button id='bt2' class='button' onclick='location.href=`#".$producto['nombre']."`'>4 pack</button>
                                    <button id='bt3' class='button' onclick='location.href=`#".$producto['nombre']."`'>6 pack</button>
                                    <button id='bt4' class='button' onclick='location.href=`#".$producto['nombre']."`'>24 pack</button>
                                    <button id='bt5' class='button' onclick='location.href=`#".$producto['nombre']."`'>30 l</button>
                                    <button id='bt6' class='button' onclick='location.href=`#".$producto['nombre']."`'>50 l</button>
                                </div>
                                <div class='producto-precio'>
                                    <span id='precio'>
                                        pen 7.50
                                    </span>
                                </div>
                                <div class='flex flex-column producto-buttons'>
                                    <button class='producto-info' onclick='location.href=` ".$producto['info']." `'>Informacion</button>
                                    <button class='producto-comprar' onclick='location.href=`../ecommerce/carrito.php`'>Comprar ahora</button>
                                    <sub style='color:gray; font-size: 15px;'>*Producto fuera de IGV</sub>
                                </div>
                            </div>
                        </article>
                    </section>";
                }

                mysqli_close($conexion);
            }
        ?>
        <section class="productos" id="productos">
            <section class="center">
                <div class="center">
                    <h2 class="title-section">nuestros productos</h2>
                </div>
                <div class="center">
                    <p class="text-section center-align">Cerveza artesanal con identidad. Sabor que cuenta una historia.</p>
                </div>
            </section>
            <div class="grid productos-column-3 center">
                <?php
                    include '../php/conexion.php';
    
                    $query = "SELECT * FROM producto";
    
                    $resultado = mysqli_query($conexion, $query);
    
                    while($producto = mysqli_fetch_assoc($resultado)) {
                        if($producto['nombre'] == "tántrica") {
                            echo
                            "<div class='center'>
                                <div class='item-producto'>
                                    <div class='my-item grid gap1-3rem'>
                                        <div class='img-producto center'>
                                            <a href='".$producto['info']."' target='_blank'>
                                                <img src='".$producto['img']."' alt='".$producto['nombre']."'>
                                            </a>
                                        </div>
                                        <div class='text-producto center'>
                                            <p>".$producto['nombre']."</p>
                                        </div>
                                        <div class='description center'>
                                            <p>".$producto['resumen']."</p>
                                        </div>
                                        <div class='button-producto center'>
                                            <button onclick='location.href=`".$producto['info']."`'>ordenar ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        } else {
                            echo
                            "<div class='center'>
                                <div class='item-producto'>
                                    <div class='my-item grid gap1-3rem'>
                                        <div class='img-producto center'>
                                            <a href='ver_producto.php?id={$producto['id_producto']}'>
                                                <img src='".$producto['img']."' alt='".$producto['nombre']."'>
                                            </a>
                                        </div>
                                        <div class='text-producto center'>
                                            <p>".$producto['nombre']."</p>
                                        </div>
                                        <div class='description center'>
                                            <p>".$producto['resumen']."</p>
                                        </div>
                                        <div class='button-producto center'>
                                            <button onclick='location.href=`ver_producto.php?id={$producto['id_producto']}`'>ordenar ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
                    }

                    mysqli_close($conexion);
                ?>
            </div>
        </section>
    </main>

    <?php
        include "../php/footer-s.php"
    ?>

    <script src="../js/app.js"></script>
    
    <?php
        include "../php/verificado-2.php";
    ?>
</body>
</html>