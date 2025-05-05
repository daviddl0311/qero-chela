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
    <title>Q'ero Chela - Carrito</title>
    <link rel="preload" href="../css/carrito.css" as="style">
    <link rel="stylesheet" href="../css/carrito.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f8146c15656b15c111316_Logo-Web.png">
    <script src="https://kit.fontawesome.com/8bc6f858e7.js" crossorigin="anonymous"></script>   
</head>
<body>
    <?php
        include '../php/header-s.php';
    ?>

    <main>
        <section class="producto flex flex-column center">
            <div class="flex gap-fun-4">
                <div class="flex flex-column center gap-fun producto-item">
                    <div class="producto-img center">
                        <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png" alt="Nombre">
                    </div>
                    <div class="producto-nombre center">
                        <p>aborigen</p>
                    </div>
                    <!-- <div class="producto-precio center">
                        <p>
                            S/. <span>0</span>.00
                        </p>
                    </div> -->
                    <div class="producto-formato center">
                        <!-- CREAR BOTONES PARA LA SELECCIÓN -->
                        <!-- <select name="" id="lista-formato">
                            <option value="" selected disabled>Formato</option>
                            <option value="">unidad</option>
                            <option value="">6 unid.</option>
                            <option value="">pack 24</option>
                            <option value="">30 l</option>
                            <option value="">50 l</option>
                        </select> -->
                    </div>
                    <div class="producto-cantidad center">
                        <div class="flex gap-fun-3">
                            <button class="center btn-minus">
                                -
                            </button>
                            <div class="center cantidad">
                                0
                            </div>
                            <button class="center btn-plus">
                                +
                            </button>
                        </div>
                    </div>
                    <div class="producto-btn center">
                        <button id="btn">añadir</button>
                    </div>
                </div>
                <div class="flex flex-column center gap-fun producto-item">
                    <div class="producto-img center">
                        <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png" alt="Nombre">
                    </div>
                    <div class="producto-nombre center">
                        <p>aborigen</p>
                    </div>
                    <div class="producto-cantidad center">
                        <div class="flex gap-fun-3">
                            <button class="center btn-minus">
                                -
                            </button>
                            <div class="center cantidad">
                                0
                            </div>
                            <button class="center btn-plus">
                                +
                            </button>
                        </div>
                    </div>
                    <div class="producto-formato center">
                        <select name="" id="lista-formato">
                            <option value="" selected disabled>Formato</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="producto-btn center">
                        <button id="btn">añadir</button>
                    </div>
                </div>
                <div class="flex flex-column center gap-fun producto-item">
                    <div class="producto-img center">
                        <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/680f815308fe96f66a6284b9_QeroChela_Aborigen.png" alt="Nombre">
                    </div>
                    <div class="producto-nombre center">
                        <p>aborigen</p>
                    </div>
                    <div class="producto-cantidad center">
                        <div class="flex gap-fun-3">
                            <button class="center btn-minus">
                                -
                            </button>
                            <div class="center cantidad" id="ctd">
                                0
                            </div>
                            <button class="center btn-plus">
                                +
                            </button>
                        </div>
                    </div>
                    <div class="producto-formato center">
                        <select name="" id="lista-formato">
                            <option value="" selected disabled>Formato</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="producto-btn center">
                        <button id="btn">añadir</button>
                    </div>
                </div>

            </div>
            <h2>hola</h2>
                <div>
                    <ul class="carrito">
                    </ul>
                </div>
        </section>

    </main>

    <?php
        include '../php/footer-s.php';
    ?>

    <script src="js/carrito.js"></script>
    <script src="js/button.js"></script>
</body>
</html>