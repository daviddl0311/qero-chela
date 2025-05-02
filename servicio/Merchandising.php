<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <title>Diseño de Merchandising</title>
    <link rel="preload" href="style/merchandising_css.css" as="style">
    <link rel="stylesheet" href="style/merchandising_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script> 
</head>
<body>
    <?php
        include "../php/header-s.php";
    ?>

    <main id="merchandinsing">
        <div class="merchandinsing">
            <div class="merchandinsing-img">
            </div>
            <div class="mer-div center flex flex-column gapmer">
                <div class="mer-title center-align">
                    <h2>diseño de merchandising</h2>
                </div>
                <div class="mer-text center">
                    <p class="center-align">Creamos tu logo, etiquetas y packaging con identidad propia, comunicando la esencia de tu marca con diseños únicos y funcionales.</p>
                </div>
                <div class="mer-button center">
                    <button onclick='location.href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesado%20en%20el%20Servicio%20de%20Diseño%20y%20Producción%20de%20Merchandising!"'>información</button>
                </div>
            </div>
        </div>

        <div class="diseños flex flex-column center">
            <div class="center gapdi">
                <div class="diseños-title center-align">
                    <h2>marcas con identidad</h2>
                </div>
                <div class="diseños-text center-align">
                    <p>Diseños que cuentan historias, desde el logo hasta el empaque.</p>
                </div>
            </div>
            <div class="grid grid-column-diseño gapdi-2">
                <div class="dis-img center">
                    <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da50c0996393aafe1e890_img1.JPG" alt="Botella Patrón Andino">
                </div>
                <div class="dis-img center"> 
                    <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da50c27b16308a5a41ccb_img2.jpg" alt="Botella Patrón Andino">
                </div>
                <div class="dis-img center">
                    <img src="https://cdn.prod.website-files.com/680d9cccfc716f3fc0f2ee3b/680da50b74d687afe218d7f2_img3.jpg" alt="Botella Patrón Andino">
                </div>
            </div>
        </div>
    </main>

    <?php
        include "../php/footer-s-2.php"
    ?>

    <?php
        include "../php/verificador-2.php";
    ?>
</body>
</html>