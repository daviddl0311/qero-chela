<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <title>Q'ero Chela - Embajadoras</title>
    <link rel="preload" href="css/embajadoras_css.css" as="style">
    <link rel="stylesheet" href="css/embajadoras_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/bilcase-demo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script>   
</head>
<body>
    <?php
        include "php/header-p.php";
    ?>

    <main>
        <div class="embajadoras">
            <div class="embajadoras-img">
            </div>
            <div class="em-div center flex flex-column gapem">
                <div class="em-title center-align">
                    <h2>embajadoras q'ero chela</h2>
                </div>
                <div class="em-text center">
                    <p class="center-align">Únete a nuestro equipo de mamás emprendedoras y genera ingresos compartiendo nuestra cerveza artesanal peruana.</p>
                </div>
                <div class="em-button center">
                    <button onclick='location.href="https://wa.me/51935287218/?text=¡Hola,%20estoy%20interesada%20en%20el%20Programa%20Embajadoras!"'>información</button>
                </div>
            </div>
        </div>

        <div class="container-em center flex flex-column gap-em2">
            <div class="grid grid-template-column-em emprender-em center">
                <div class="text-em center flex flex-column gap-em">
                    <h2>¡Mamá emprendedora, este es tu momento!</h2>
    
                    <p>Gana ingresos desde casa como micro vendedora de Q'ero Chela. No necesitas experiencia, solo entusiasmo y ganas de crecer. ¡Convierte tu tiempo libre en oportunidades!</p>
                </div>
                <div class="img-em center">
                    <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/684c671eece6bf62f010030d_Dise%C3%B1o-sin-t%C3%ADtulo-(1)nvf%20(1).jpg" alt="Embajadoras">
                </div>
            </div>
            <div>
                <h2>Regístrate y da el primer paso</h2>
                <form action="" class="flex flex-column center">
                        <input type="text" placeholder="Nombre"><input type="text" placeholder="Correo">
                        <input type="submit" value ="Registrate">
                </form>
            </div>
             <div class="grid grid-template-column-em emprender-em center">
                 <div class="img-em center">
                     <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/684c6e8d2297df27c721bd90_Dise%C3%B1o-sin-t%C3%ADtulo-(2).jpg" alt="Embajadoras">
                 </div>
                <div class="text-em center flex flex-column gap-em">
                   <h2>Aprende y crece con nosotras</h2>

                    <p>Muy pronto tendrás acceso a una capacitación especial con herramientas de venta, consejos y motivación para impulsar tu crecimiento como emprendedora Q'ero Chela.</p>
                </div>
            </div>
        </div>
    </main>

    <?php
        include "php/footer-p.php";
    ?>
</body>
</html>