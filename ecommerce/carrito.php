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
    <title>Q'ero Chela - Mi Carrito</title>
    <link rel="preload" href="../css/mi_carrito.css" as="style">
    <link rel="stylesheet" href="../css/mi_carrito.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/bilcase-demo" rel="stylesheet">
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
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div id="n-items">
                        0
                    </div>
                </label>
                <ul class="flex gap2rem flex-row-2"> 
                    <li class="center burger-center">
                        <p class="title-carrito">Mi carrito:</p>
                    </li>
                    <ul class="flex gap2rem flex-row-2" id="mi-carrito">
                        
                    </ul>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="productos flex flex-column gap-carrito">
            <div>
                <div class="title-productos center">
                    <h2>bebidas</h2>
                </div>
                <article class="grid grid-column-3 productos-gap-3 center">
                    <?php
                        include '../php/conexion.php';
        
                        $query = "SELECT * FROM producto WHERE categoria = 'bebida'";
        
                        $resultado = mysqli_query($conexion, $query);
        
                        while($producto = mysqli_fetch_assoc($resultado)) {
                            echo 
                            "<div class='grid grid-column-3'>
                                <div class='item-producto flex flex-column center productos-gap' id='bebida'>
                                    <div class='productos-img center'>
                                        <img src='".$producto['img']."' alt='".$producto['nombre']."' class='img-producto'>
                                    </div>
                                    <div class='productos-info flex flex-column productos-gap-2'>
                                        <div class='productos-name'>
                                            <p>".$producto['nombre']."</p>
                                        </div>
                                        <div class='productos-precio'>
                                            <p>PEN <span class='precio'>7.50</span></p>
                                        </div>
                                        <div class='productos-formato grid grid-column-2'>
                                            <button id='btn1' class='formato formato-selected'>unid.</button>
                                            <button id='btn2' class='formato'>4 pack</button>
                                            <button id='btn3' class='formato'>6 pack</button>
                                            <button id='btn4' class='formato'>24 pack</button>
                                            <button id='btn5' class='formato'>30 l</button>
                                            <button id='btn6' class='formato'>50 l</button>
                                        </div>
                                        <div class='cantidad center'>
                                            <div class='flex productos-gap-4'>
                                                <button class='center btn-minus'>
                                                    -
                                                </button>
                                                <div class='center producto-cantidad'>
                                                    1
                                                </div>
                                                <button class='center btn-plus'>
                                                    +
                                                </button>
                                            </div>
                                        </div>
                                        <div class='productos-button-enviar'>
                                            <button class='input-enviar'>añadir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
                    ?>
                </article>
            </div>
            <div>
                <div class="title-productos center">
                    <h2>promos</h2>
                </div>
                <article class="grid grid-column-3 productos-gap-3 center">
                    <div class='grid grid-column-3 '>
                        <div class="item-producto flex flex-column center productos-gap-2" id='promo'>
                            <div class='productos-img center'>
                                <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/681b9f81da511ce9b6ed78cf_caja-de-24.png" alt="" class='img-producto'>
                            </div>
                            <div class='productos-name'>
                                <p>Promo 1</p>
                            </div>
                            <div class='productos-precio'>
                                <p>PEN <span class='precio'>5.00</span></p>
                            </div>
                            <div class='cantidad center'>
                                <div class='flex productos-gap-4'>
                                    <button class='center btn-minus'>
                                        -
                                    </button>
                                    <div class='center producto-cantidad'>
                                        1
                                    </div>
                                    <button class='center btn-plus'>
                                        +
                                    </button>
                                </div>
                            </div>
                            <div class="productos-button-enviar">
                                <button class='input-enviar'>añadir</button>
                            </div>
                        </div>
                    </div>
                    <div class='grid grid-column-3'>
                        <div class="item-producto flex flex-column center productos-gap-2" id='promo'>
                            <div class='productos-img center'>
                                <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/681b9f81da511ce9b6ed78cf_caja-de-24.png" alt="" class='img-producto'>
                            </div>
                            <div class='productos-name'>
                                <p>Promo 2</p>
                            </div>
                            <div class='productos-precio'>
                                <p>PEN <span class='precio'>10.00</span></p>
                            </div>
                            <div class='cantidad center'>
                                <div class='flex productos-gap-4'>
                                    <button class='center btn-minus'>
                                        -
                                    </button>
                                    <div class='center producto-cantidad'>
                                        1
                                    </div>
                                    <button class='center btn-plus'>
                                        +
                                    </button>
                                </div>
                            </div>
                            <div class="productos-button-enviar">
                                <button class='input-enviar'>añadir</button>
                            </div>
                        </div>
                    </div>
                     <div class='grid grid-column-3'>
                        <div class="item-producto flex flex-column center productos-gap-2" id='promo'>
                            <div class='productos-img center'>
                                <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/681b9f81da511ce9b6ed78cf_caja-de-24.png" alt="" class='img-producto'>
                            </div>
                            <div class='productos-name'>
                                <p>Promo 3</p>
                            </div>
                            <div class='productos-precio'>
                                <p>PEN <span class='precio'>60.00</span></p>
                            </div>
                            <div class='cantidad center'>
                                <div class='flex productos-gap-4'>
                                    <button class='center btn-minus'>
                                        -
                                    </button>
                                    <div class='center producto-cantidad'>
                                        1
                                    </div>
                                    <button class='center btn-plus'>
                                        +
                                    </button>
                                </div>
                            </div>
                            <div class="productos-button-enviar">
                                <button class='input-enviar'>añadir</button>
                            </div>
                        </div>
                    </div>
                     <div class='grid grid-column-3'>
                        <div class="item-producto flex flex-column center productos-gap-2" id='promo'>
                            <div class='productos-img center'>
                                <img src="https://cdn.prod.website-files.com/680f81021936b0d565d34173/681b9f81da511ce9b6ed78cf_caja-de-24.png" alt="" class='img-producto'>
                            </div>
                            <div class='productos-name'>
                                <p>Promo 4</p>
                            </div>
                            <div class='productos-precio'>
                                <p>PEN <span class='precio'>20.00</span></p>
                            </div>
                            <div class='cantidad center'>
                                <div class='flex productos-gap-4'>
                                    <button class='center btn-minus'>
                                        -
                                    </button>
                                    <div class='center producto-cantidad'>
                                        1
                                    </div>
                                    <button class='center btn-plus'>
                                        +
                                    </button>
                                </div>
                            </div>
                            <div class="productos-button-enviar">
                                <button class='input-enviar'>añadir</button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <div class="box">
            <ul class="emerge-msg flex flex-column ">
            </ul>
        </div>

        <div class="finalizar">
            <button id="finalCompra">Finalizar Compra</button>
        </div> 
    </main>

    <?php
        include '../php/footer-s.php';
    ?>

    <script src="js/button.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/finalizar-compra.js"></script>
</body>
</html>