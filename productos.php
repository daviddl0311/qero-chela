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
    <link rel="preload" href="css/productos_css.css" as="style">
    <link rel="stylesheet" href="css/productos_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script>   
</head>
<body>
    <?php
        include "php/header-p.php";
    ?>

    <main class="productos flex flex-column center gap-pro" id="productos">
        <article>
            <div class="title-productos center">
                <h2>productos</h2>
            </div>
            <section class="my-products center grid productos-column-3">
                <?php
                    include 'php/conexion.php';

                    $query = "SELECT * FROM producto WHERE nombre = 'aborigen'";

                    $resultado = mysqli_query($conexion, $query);

                    while($producto = mysqli_fetch_assoc($resultado)) {
                        echo
                        "<div class='item-flex flex flex-column'>
                            <div class='center'>
                                <a href='producto/ver_producto.php?id={$producto['id_producto']}'>
                                    <img src='".$producto['img']."' alt='Q'ero Chela ".$producto['nombre']."' class='item-img'>
                                </a>
                            </div>
                            <div class='producto-info flex flex-column'>
                                <div class='center'>
                                    <p>".$producto['nombre']."</p>
                                </div>
                                <div class='center'>
                                    <button onclick='location.href=`producto/ver_producto.php?id={$producto['id_producto']}`'>conoce más</button>
                                </div>
                            </div>
                        </div>";
                    }

                    mysqli_close($conexion);
                ?>
                <div class="item-flex flex flex-column">
                    <div class="center">
                        <a href="https://tantrica.pe/">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043afee771ed3316164_Tantrica.png" alt="Tántrica" class="item-img">
                        </a>
                    </div>
                    <div class="producto-info flex flex-column">
                        <div class="center">
                            <p>tántrica</p>
                        </div>
                        <div class="center">
                            <button onclick="location.href='https://tantrica.pe/'">conoce más</button>
                        </div>
                    </div>
                </div>

                <?php
                    include 'php/conexion.php';

                    $query = "SELECT * FROM producto WHERE nombre = 'luna de miel'";

                    $resultado = mysqli_query($conexion, $query);

                    while($producto = mysqli_fetch_assoc($resultado)) {
                        echo
                        "<div class='item-flex flex flex-column'>
                            <div class='center'>
                                <a href='producto/ver_producto.php?id={$producto['id_producto']}'>
                                    <img src='".$producto['img']."' alt='Q'ero Chela ".$producto['nombre']."' class='item-img'>
                                </a>
                            </div>
                            <div class='producto-info flex flex-column'>
                                <div class='center'>
                                    <p>".$producto['nombre']."</p>
                                </div>
                                <div class='center'>
                                    <button onclick='location.href=`producto/ver_producto.php?id={$producto['id_producto']}`'>conoce más</button>
                                </div>
                            </div>
                        </div>";
                    }

                    mysqli_close($conexion);
                ?>
            </section>
        </article>

        <!-- <article>
            <div class="title-productos center">
                <h2>promos festivos</h2>
            </div>
            <section class="my-products center grid productos-column-3">
                <div class="item-flex flex flex-column">
                    <div class="center">
                        <a href="producto/qerochela.html">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043f98fb67f81903884_QeroChela_Aborigen.png" alt="Q'ero Chela Aborigen" class="item-img">
                        </a>
                    </div>
                    <div class="producto-info flex flex-column">
                        <div class="center">
                            <p>basico</p>
                        </div>
                        <div class="center">
                            <button onclick="location.href='producto/qerochela.html'">conoce más</button>
                        </div>
                    </div>
                </div>
                <div class="item-flex flex flex-column">
                    <div class="center">
                        <a href="https://tantrica.pe/">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da043afee771ed3316164_Tantrica.png" alt="Tántrica" class="item-img">
                        </a>
                    </div>
                    <div class="producto-info flex flex-column">
                        <div class="center">
                            <p>intermedio</p>
                        </div>
                        <div class="center">
                            <button onclick="location.href='https://tantrica.pe/'">conoce más</button>
                        </div>
                    </div>
                </div>
                <div class="item-flex flex flex-column">
                    <div class="center">
                        <a href="producto/qerochela-luna-miel.html">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da04352c03b07f7dcf05b_QeroChela_LunaMiel.png" alt="Q'ero Chela Luna de Miel" class="item-img">
                        </a>
                    </div>
                    <div class="producto-info flex flex-column">
                        <div class="center">
                            <p>premium</p>
                        </div>
                        <div class="center">
                            <button onclick="location.href='producto/qerochela-luna-miel.html'">conoce más</button>
                        </div>
                    </div>
                </div>
            </section>
        </article> -->
    </main>

    <?php
        include "php/footer-p.php";
    ?>

    <script src="js/verificado.js"></script>
</body>
</html>