<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="xpoTEYLsWWpB3aX2gen7grDnZnYk6zHu1HlW5TYNdCc" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="theme-color" content="#000">
    <title>Q'ero Chela</title>
    <link rel="preload" href="css/css.css" as="style">
    <link rel="stylesheet" href="css/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script>   
</head>
<body>
    <div class="message display-none">
        <div class="my-message center">
        </div>
        <div class="message-img center flex flex-column">
            <div class="message-a">
                <div>
                    <a href="https://www.facebook.com/share/p/1FM9N5Qz6J/" target="_blank">
                        <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680ffef71de9d700edc097f1_post%20temploo%20(16).jpg" alt="Publicidad Templo Q'ero Chela" class="pulsate-fwd">
                    </a>
                </div>
                <i class="fa-solid fa-x" id="close"></i>
            </div>
        </div>
    </div>

    <?php
        include 'php/header-p.php';
    ?>

    <main class="container" id="qerochela">
        <section class="banner">
            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9ec174d687afe216b795_Banner.png" alt="Banner">
        </section>
        <section class="categorias center">
            <article class="grid cat-column-2">
                <div class="item-img">
                    <a href="producto/qerochela.html">
                        <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9ec0f98fb67f818fb902_Publicidad1.avif" alt="Publicidad 1">
                    </a>
                </div>
                <div class="grid cat-subcolumn-2">
                    <div class="item-img2">
                        <a href="https://tantrica.pe/" target="_blank">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9ec05fbc5dc9636fd1f3_Publicidad2.avif" alt="Publicidad 2">
                        </a>
                    </div>
                    <div class="item-img2">
                        <a href="producto/qerochela-luna-miel.html">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9ec05b46e54492a06460_Publicidad3.avif" alt="Publicidad 3">
                        </a>
                    </div>
                </div>
            </article>
        </section>
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
                include 'php/conexion.php';

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
                                        <a href='producto/ver_producto.php?id={$producto['id_producto']}'>
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
                                        <button onclick='location.href=`producto/ver_producto.php?id={$producto['id_producto']}`'>ordenar ahora</button>
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
        include 'php/footer-p.php';
    ?>

    <script src="js/message.js"></script>
    
    <script src="js/verificado.js"></script>
</body>
</html>