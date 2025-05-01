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
    <header>
        <nav class="grid column-header">
            <div class="flex title-logo">
                <div class="center">
                    <a href="../index.php">
                        <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9d168d4fd6f40ddc976c_logo-Qero-Chela.png" alt="Logo Q'ero Chela">
                    </a>
                </div>
            </div>
            <div class="flex navegation">
                <input type="checkbox" id="burgercheck">
                <label for="burgercheck" class="burger-icon">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <ul class="flex gap5rem flex-row-2"> 
                    <li class="logo-burger">
                        <div class="flex">
                            <div class="center logo-burger-img">
                                <a href="../index.php">
                                    <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9d168d4fd6f40ddc976c_logo-Qero-Chela.png" alt="Logo Q'ero Chela">
                                </a>
                            </div>
                        </div>
                    </li>       
                    <li class="center burger-center">
                        <a href="../productos.php">Productos</a>
                    </li>
                    <li class="center burger-center">
                        <a href="../servicios.html">Servicios</a>
                    </li>
                    <li class="center burger-center">
                        <a href="../taproom.html">
                            Taproom
                        </a>
                    </li>
                    <li class="center burger-center">
                        <a href="../nosotros.html">Nosotros</a>
                    </li>
                    <li class="center burger-center">
                        <a href="https://drive.google.com/file/d/13l0jRu1-jTnoHsqHDHLKZHBEltW0Ig9d/view?usp=sharing" target="_blank">Brochure</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

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
                                    <button id='bt2' class='button' onclick='location.href=`#".$producto['nombre']."`'>6 unid.</button>
                                    <button id='bt3' class='button' onclick='location.href=`#".$producto['nombre']."`'>pack 24</button>
                                    <button id='bt4' class='button' onclick='location.href=`#".$producto['nombre']."`'>30 l</button>
                                    <button id='bt5' class='button' onclick='location.href=`#".$producto['nombre']."`'>50 l</button>
                                </div>
                                <div class='producto-precio'>
                                    <span id='precio'>
                                        pen 7.50
                                    </span>
                                </div>
                                <div class='flex flex-column producto-buttons'>
                                    <button class='producto-info' onclick='location.href=` ".$producto['info']." `'>Informacion</button>
                                    <button class='producto-comprar' onclick='location.href='https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20producto!''>Comprar ahora</button>
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

    <footer class="footer center">
        <div class="my-footer grid footer-column-2 center">
            <div class="flex footer-flex flex-column">
                <div class="title-footer center-footer ">
                    <h2>¿listo para pedir?</h2>
                </div>
                <div class="text-footer center-text-footer">
                    <p>Descubre el sabor perfecto para cada ocasión y vive una experiencia única. ¡Haz tu pedido ahora!</p>
                </div>
                <div class="button-footer center-footer">
                    <button onclick="location.href='https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20producto!'">comprar</button>
                </div>
            </div>
            <div class="img-footer">
                <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680d9d165d44931472a2a765_Muestra-QeroChela.png" alt="Muestra Q'ero Chela">
            </div>
        </div>
        <div class="my-footer2 flex footer-column-2-2">
            <div class="flex flex-2"> 
                <div class="flex title-logo">
                    <div class="center">
                        <a href="../index.php">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da092f2f6d2dda40ff911_logo-footer.png" alt="Logo Footer Q'ero Chela">
                        </a>
                    </div>
                </div>
                <div class="flex title-telefono">
                    <div class="center">
                        <i class="fa-solid fa-phone center"></i>
                    </div>
                    <div class="center">
                        <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20producto!">
                           +51 935 287 218 
                        </a>
                    </div>
                </div>
                <div class="flex title-email">
                    <div class="center">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="center">
                        <a href="mailto:ventas@qerochela.com?Subject=Aquí%20el%20asunto%20del%20mail">
                            ventas@qerochela.com
                        </a>
                    </div>
                </div>
                <div class="flex social-media gap-footer">
                    <a href="https://www.facebook.com/profile.php?id=61573955267865" class="social-enlace" target="_blank">
                        <div class="social social-f center">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/qerochela?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                        <div class="social social-i center">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </a>
                    <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20producto!" target="_blank">
                        <div class="social social-w center">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid footer-column-3 gap-footer-2">
                <div class="flex flex-2">
                    <h2>Empresa</h2>
                    <div class="flex flex-2 gap-footer-3">
                        <a href="../nosotros.html">Nosotros</a>
                        <a href="../taproom.html">Taproom</a>
                    </div>
                </div>
                <div class="flex flex-2">
                    <h2>Productos</h2>
                    <div class="flex flex-2 gap-footer-3">
                        <a href="../index.php">Q'ero Chela</a>
                        <a href="https://tantrica.pe/">Tantrica</a>
                    </div>
                </div>
                <div class="flex flex-2">
                    <h2>Servicios</h2>
                    <div class="flex flex-2 gap-footer-3">
                        <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20Servicio%20de%20Asesoría%20e%20Implementación%20de%20Plantas%20Cerveceras!" target="_blank">Asesoría Cervecera</a>
                        <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20Servicio%20de%20Instalación%20de%20Barras%20de%20Cerveza!" target="_blank">Instalación de Barras</a>
                        <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20Servicio%20de%20Cerveza%20para%20Eventos%20en%20Botellas%20o%20Barril!" target="_blank">Cerveza para Eventos</a>
                        <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20Servicio%20de%20Maquila%20y%20Marca%20Blanca!" target="_blank">Maquila y Marca Blanca</a>
                        <a href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20Servicio%20de%20Cursos%20y%20Capacitaciones!" target="_blank">Cursos Especializados</a>
                        <a href="../servicio/Merchandising.html">Diseño de Merchandising</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/app.js"></script>
    <script src="../js/verificado.js"></script>
</body>
</html>