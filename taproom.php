<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="theme-color" content="#000">
    <title>Q'ero Chela - Taproom</title>
    <link rel="preload" href="css/taproom_css.css" as="style">
    <link rel="stylesheet" href="css/taproom_css.css">
    <link href="https://fonts.cdnfonts.com/css/bilcase-demo" rel="stylesheet">
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

    <main id="taproom">
        <div class="taproom center">
            <div class="taproom-img">
                <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a7ff4139ac1087ccc3_taproom-Principal.png" alt="Fondo Templo Q'ero Chela">
            </div>
            <div class="my-taproom center gappx">
                <div class="taproom-title center-align">
                    <h2>visita el templo q'ero chela</h2>
                </div>
                <div class="taproom-text center">
                    <p class="center-align">Vive el sabor auténtico de nuestra cerveza en un espacio diseñado para compartir, disfrutar y descubrir nuevas sensaciones.</p>
                </div>
                <div class="taproom-btn center">
                    <button onclick="location.href='https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20visitar%20el%20Templo%20Qero%20Chela!'">información</button>
                </div>
            </div>
        </div>
        <div class="taproom-what center gappx2">
            <div class="item-lu">
                <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a666f6511b233dd02c_Lupulos-1.png" alt="Imagenes de Lupulos">
            </div>
            <div class="flex flex-column-taproom-what gappx3">
                <div class="taproom-what-info center">
                    <div class="center-left taproom-what-title">
                       <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a634808eee318e02b5_taproom-Pregunta.png" alt="Imagen ¿Que es un Taproom?">
                    </div>
                    <div class="center-align taproom-what-text">
                        <p>Un Taproom es el espacio donde una cervecería artesanal ofrece sus cervezas directamente al público, servidas frescas y recién salidas del barril. Es el lugar ideal para conocer los productos, probar distintas variedades y vivir la experiencia cervecera en su forma más auténtica, rodeado del ambiente y la esencia de la marca.</p>
                    </div>
                </div>
                <div class="taproom-what-img">
                    <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a7afee771ed332911c_taproom-Fotos.png" alt="Imagenes Producto y Templo">
                </div>
            </div>
            <div class="item-lu-2">
                <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a69f546840cda95fff_Lupulos-2.png" alt="Imagenes de Lupulos">
            </div>
        </div>
        <div class="video-taproom center flex flex-column center">
            <div class="center">
                <div class="fondo">
                    <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a6d4a3798fc7678469_taproom-Secundario.png" alt="Fondo Video Taproom">
                </div>
                <div class="cuadro-video">
                    <div class="cuadro-video-img center">
                        <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a7f3deed0bc9fc2ba3_Fondo-Video.jpeg" alt="Fondo Video">
                    </div>
                    <div class="center cuadro-enlace">
                        <a href="https://web.facebook.com/share/r/19FCsCZmnX/">
                            <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da3a6fc716f3fc0f525e6_boton-Play-Q%27eroChela.png" alt="Botón Play Q'ero Chela" class="pulsate-fwd">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include "php/footer-p.php";
    ?>

    <?php
        include 'php/verificado.php';
    ?>
</body>
</html>