<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <title>Q'ero Chela</title>
    <link rel="preload" href="css/verificador_css.css" as="style">
    <link rel="stylesheet" href="css/verificador_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script>   
</head>
<body>
    <main class="verificador">
        <div class="button-verificador center">
            <div class="div flex flex-column gap center">
                <div class="item">
                    <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/6812c91230e31c2e38408f10_da-Photoroom.png" alt="Q'ero Chela Botella">
                </div>
                <div class="verificador-text center-align">
                    <h1>¿eres mayor de edad?</h1>
                </div>
                <div class="grid grid-template-column gap-2">
                    <div class="center">
                        <button id="btn">
                            si
                        </button>
                    </div>
                    <div class="center">
                        <button id="btn2">
                            no
                        </button>
                    </div>
                </div>
                <div class="item-2">
                    <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/6812c910a47655d46d2f944e_da2-Photoroom.png" alt="Q'ero Chela Botella">
                </div>
            </div>
        </div>
    </main>

    <?php
        include "php/verificador.php";
    ?>
</body>
</html>