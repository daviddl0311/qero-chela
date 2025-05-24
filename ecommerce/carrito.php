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
    <div class="alert center display-none">
        <span class="myalert center"></span>
        <span class="alert-finalizar center">
            <div class="container flex flex-column gap-alert">
                <h2 class="center-align alert-title">¡Último paso!</h2>
                <p class="alert-text">
                    Confirma tu dirección para coordinar el delivery.
                </p>
                <form id="formulario" method="POST" class="flex flex-column gap-alert">
                    <div class="flex flex-column gap-alert-2">
                        <div class="departamente">
                            <select name="distrito" id="distrito" required>
                                <option value="" selected disabled>Selecciona tu distrito</option>
                                <option value="Ate - Huachipa">Ate - Huachipa</option>
                                <option value="Ate - Huaycan">Ate - Huaycan</option>
                                <option value="Ate - Salamanca">Ate - Salamanca</option>
                                <option value="Ate - Santa Clara">Ate - Santa Clara</option>
                                <option value="Ate Vitarte - Puruchuco">Ate Vitarte - Puruchuco</option>
                                <option value="Barranco">Barranco</option>
                                <option value="Bellavista">Bellavista</option>
                                <option value="Breña">Breña</option>
                                <option value="Carabayllo">Carabayllo</option>
                                <option value="Carmen de la Legua">Carmen de la Legua</option>
                                <option value="Cercado de Lima">Cercado de Lima</option>
                                <option value="Chaclacayo">Chaclacayo</option>
                                <option value="Chorrillos">Chorrillos</option>
                                <option value="Chosica">Chosica</option>
                                <option value="Comas">Comas</option>
                                <option value="El Agustino">El Agustino</option>
                                <option value="Independencia">Independencia</option>
                                <option value="Jesús María">Jesús María</option>
                                <option value="La Molina">La Molina</option>
                                <option value="La Perla">La Perla</option>
                                <option value="La Victoria">La Victoria</option>
                                <option value="Lince">Lince</option>
                                <option value="Los Olivos">Los Olivos</option>
                                <option value="Lurín">Lurín</option>
                                <option value="Magdalena">Magdalena</option>
                                <option value="Miraflores">Miraflores</option>
                                <option value="Molina - Musa">Molina - Musa</option>
                                <option value="Ñaña">Ñaña</option>
                                <option value="Pachacamac">Pachacamac</option>
                                <option value="Pueblo Libre">Pueblo Libre</option>
                                <option value="Puente Piedra">Puente Piedra</option>
                                <option value="Rímac">Rímac</option>
                                <option value="San Borja">San Borja</option>
                                <option value="San Isidro">San Isidro</option>
                                <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                                <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                                <option value="San Luis">San Luis</option>
                                <option value="San Martín de Porres">San Martín de Porres</option>
                                <option value="San Miguel">San Miguel</option>
                                <option value="Santa Anita">Santa Anita</option>
                                <option value="Surco">Surco</option>
                                <option value="Surquillo">Surquillo</option>
                                <option value="S.J.L - Jicamarca">S.J.L - Jicamarca</option>
                                <option value="S.J.L - Mariscal">S.J.L - Mariscal</option>
                                <option value="S.J.L - Montenegro">S.J.L - Montenegro</option>
                                <option value="V.M.T - José Gálvez">V.M.T - José Gálvez</option>
                                <option value="Ventanilla">Ventanilla</option>
                                <option value="Villa El Salvador">Villa El Salvador</option>
                                <option value="Villa María del Triunfo">Villa María del Triunfo</option>
                                <option value="Callao">Callao</option>
                                <option value="Callao - La Punta">Callao - La Punta</option>
                                <option value="Callao - Márquez">Callao - Márquez</option>
                                <option value="Callao - Oquendo">Callao - Oquendo</option>
                            </select>
                        </div>
                        <p class="alert-text-2">*El costo de envío varía según el distrito seleccionado.</p>
                    </div>
                    <div class="ubicacion">
                        <input type="text" name="ubicacion" id="ubicacion" placeholder="Dirección" required>
                    </div>
                    <div class="texto">
                        <p>Subtotal: S/ <span id="pay"></span></p>
                    </div>
                    <div class="texto">
                        <p>Delivery: S/ <span id="pay-delivery">0.00</span></p>
                    </div>
                    <div class="texto">
                        <p>Total: S/ <span id="pay-total">0.00</span></p>
                    </div>
                    <input type="hidden" name="pedido" id="pedido">
                    <button class="btn-submit" type="submit">Finalizar Compra</button>
                    <div class="center">
                        <p class="btn-volver">Volver</p>
                    </div>
                </form>
            </div>
        </span>
    </div>

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
                    <li class="flex flex-column gap-total">
                        <div>
                            <p class="title-carrito">Mi carrito</p>
                        </div>
                        <div>
                            <p class="precio-final">Subtotal: S/ <span class="subtotal">0.00</span></p>
                        </div>
                        <!-- <div>
                            <p class="precio-final">IGV (18%): S/ <span class="igv">0.00</span></p>
                        </div> -->
                        <!-- <div>
                            <p class="precio-final">Total: S/ <span class="total">0.00</span></p>
                        </div> -->
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
                    <h2 class="center-align">bebidas</h2>
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
                                        <div class='flex flex-column gap-stock2'>
                                            <div class='flex gap-stock'>
                                                <div class='productos-precio center'>
                                                    <p>PEN <span class='precio'>" .$producto['precio_ini']. "</span></p>
                                                </div>
                                                <div class='productos-stock center'>
                                                    <p class='stock'>" .$producto['stock']. "</p>
                                                </div>
                                            </div>
                                            <div>
                                                <small class='productos-igv'>IGV incluido</small>
                                            </div> 
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
                    <h2 class="center-align">regalo cervecero</h2>
                </div>
                <article class="grid grid-column-3 productos-gap-3 center">
                    <?php
                        // include '../php/conexion.php';

                        $query = "SELECT * FROM producto WHERE categoria = 'promo'";

                        $resultado = mysqli_query($conexion, $query);

                        while($producto = mysqli_fetch_assoc($resultado)) {
                            echo
                            "<div class='grid grid-column-3 '>
                                <div class='item-producto flex flex-column center productos-gap-2' id='promo'>
                                    <div class='productos-img center'>
                                        <img src='".$producto['img']."' alt='".$producto['nombre']."' class='img-producto'>
                                    </div>
                                    <div class='productos-name'>
                                        <p>".$producto['nombre']."</p>
                                    </div>
                                    <div class='flex flex-column gap-stock2'>
                                        <div class='flex gap-stock'>
                                            <div class='productos-precio center'>
                                                <p>PEN <span class='precio'>".$producto['precio_ini']."</span></p>
                                            </div>
                                            <div class='productos-stock center'>
                                                <p class='stock'>".$producto['stock']."</p>
                                            </div>
                                        </div>
                                        <div>
                                            <small class='productos-igv'>IGV incluido</small>
                                        </div> 
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
                            </div>";
                        }

                        mysqli_close($conexion);
                    ?>
                   
                </article>
            </div>
        </section>

        <div class="box">
            <ul class="emerge-msg flex flex-column ">
            </ul>
        </div>

        <div class="finalizar">
            <button id="finalCompra">Confirmar pedido</button>
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