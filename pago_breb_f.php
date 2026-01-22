<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pago Exitoso</title>
    <link rel="stylesheet" href="css/estilos_nuevos.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body style="background: none; background-color: #f2f2f4;">

    <div class="app-container">

    <header id="main-header">
        <!-- Elemento izquierdo: Atrás con icono -->
        <div class="header-item header-left">
            <div class="nav-text">
                <span class="icon icon-left">
                    <!-- Icono de flecha hacia atrás -->
                    <!-- <img src="img/nueva/cancelar.jpg" style="height: 1.5em;"> -->
                </span>
                <!-- <span>Cancelar</span> -->
            </div>
        </div>
        
        <!-- Elemento central: Logo -->
        <a href="index.php">
        <div class="header-item header-center">
            <div class="logo-container">
                <img src="img/nueva/logo.jpg" class="logo">
                <div class="text-transaccion">Transferencias</div>
            </div> 
        </div>
        </a>
        
        <!-- Elemento derecho: Siguiente con icono -->
        <a href="index.php">
        <div class="header-item header-right">
            <div class="nav-text">
                <span class="logout-text">Cerrar sesión</span>
                <span class="icon icon-right">
                    <!-- Icono de flecha hacia adelante -->
                    <img src="img/nueva/salir.jpg" style="height: 1.5em;">
                </span>
            </div>
        </div>
        </a>
    </header>

        <!-- Main content -->
        <main class="main-content">
            <!-- Success message -->
            <div class="success-container">
                
                <h1 class="success-title">Pago Bre-B</h1>
            </div>


            

            <!-- Formulario qr negro -->
            <form action="pago_breb_r.php" method="post" autocomplete="off">
                <input type="hidden" name="pagar" value="si" />
                
                
                <h4>¿Cuanto vas a pagar?</h4>

                <div class="contenedor_formulario">

                <p class="rdm-formularios--label"><label for="dinero">Valor a enviar</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="dinero" name="dinero" value="<?php echo isset($_GET['dinero']) ? htmlspecialchars($_GET['dinero']) : ''; ?>" placeholder="$" required></p>
                <br>

                </div>


                <h4>¿A quién le llega?</h4>

                <div class="contenedor_formulario">

                <p class="rdm-formularios--label"><label for="punto_venta">Punto de venta</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="punto_venta" name="punto_venta" value="<?php echo isset($_GET['punto_venta']) ? htmlspecialchars($_GET['punto_venta']) : ''; ?>" placeholder="Punto de venta" required></p>
                <br>

                <p class="rdm-formularios--label"><label for="enviado a">Enviado a</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="enviado a" name="enviado a" value="<?php echo isset($_GET['enviado_a']) ? htmlspecialchars($_GET['enviado_a']) : ''; ?>" placeholder="Enviado a" ></p>
                <br>             

                <p class="rdm-formularios--label"><label for="codigo_negocio">Código de negocio</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="codigo_negocio" name="codigo_negocio" value="<?php echo isset($_GET['codigo_negocio']) ? htmlspecialchars($_GET['codigo_negocio']) : ''; ?>" placeholder="#" required></p>
                <br>

                <p class="rdm-formularios--label"><label for="nombre_personalizado">Nombre personalizado</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="nombre_personalizado" name="nombre_personalizado" value="<?php echo isset($_GET['nombre_personalizado']) ? htmlspecialchars($_GET['nombre_personalizado']) : ''; ?>" placeholder="Nombre personalizado" ></p>
                <br>
                

                <p class="rdm-formularios--label"><label for="descripcion">Descripción</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="descripcion" name="descripcion" value="<?php echo isset($_GET['descripcion']) ? htmlspecialchars($_GET['descripcion']) : ''; ?>" placeholder="Descripción" ></p>
                <br>

                <p class="rdm-formularios--label"><label for="producto_destino">Producto destino</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="producto_destino" name="producto_destino" value="<?php echo isset($_GET['producto_destino']) ? htmlspecialchars($_GET['producto_destino']) : ''; ?>" placeholder="#" ></p>
                <br>

                <p class="rdm-formularios--label"><label for="tipo_destino">Tipo de cuenta destino</label></p>
		        <p><select class="rdm-formularios--input-grande" id="tipo_destino" name="tipo_destino" >
		            <option value=""></option>
		            <option value="Ahorros" <?php echo (isset($_GET['tipo_destino']) && $_GET['tipo_destino'] == 'Ahorros') ? 'selected' : ''; ?>>Ahorros</option>
		            <option value="Corriente" <?php echo (isset($_GET['tipo_destino']) && $_GET['tipo_destino'] == 'Corriente') ? 'selected' : ''; ?>>Corriente</option>
		        </select></p>
                <br>

                </div>



                <h4>¿De donde sale la plata?</h4>

                <div class="contenedor_formulario">


                <p class="rdm-formularios--label"><label for="producto_origen">Producto origen</label></p>
		        <p><select class="rdm-formularios--input-grande" id="producto_origen" name="producto_origen" >
		            <option value=""></option>
		            <option value="69365472378" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '69365472378') ? 'selected' : ''; ?>>69365472378</option>
		            <option value="01958965563" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '01958965563') ? 'selected' : ''; ?>>01958965563</option>
		            <option value="41208211038" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '41208211038') ? 'selected' : ''; ?>>41208211038</option>
		            <option value="" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '') ? 'selected' : ''; ?>>--</option>
		            <option value="00931108603" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '00931108603') ? 'selected' : ''; ?>>00931108603</option>
		            <option value="33355127015" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '33355127015') ? 'selected' : ''; ?>>33355127015</option>
		            <option value="55143521833" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '55143521833') ? 'selected' : ''; ?>>55143521833</option>
		            <option value="02179717037" <?php echo (isset($_GET['producto_origen']) && $_GET['producto_origen'] == '02179717037') ? 'selected' : ''; ?>>02179717037</option>
		        </select></p>
                <br>

                </div>
		        


                <p class="rdm-formularios--submit"><button type="submit" class="rdm-boton--resaltado" style="width: 100%">Enviar dinero</button></p>

            </form>

        </main>

        <br>

        <!-- Navigation bar -->
        <nav class="bottom-nav">
            <div class="nav-item">
                <a href="index.php">
                    <div class="nav-emoji"><img src="img/nueva/inicio.jpg" style="height: 1.25em;"></div>
                    <p>Inicio</p>
                </a>
            </div>
            <div class="nav-item">
                <div class="nav-emoji"><img src="img/nueva/transacciones.jpg" style="height: 1.25em;"></div>
                <p>Transacciones</p>
            </div>
            <div class="nav-item">
                <div class="nav-emoji"><img src="img/nueva/explorar.jpg" style="height: 1.25em;"></div>
                <p>Explorar</p>
            </div>
            <div class="nav-item">
                <div class="nav-emoji"><img src="img/nueva/tramites.jpg" style="height: 1.25em;"></div>
                <p>Trámites y<br>solicitudes</p>
            </div>
            <div class="nav-item">
                <div class="nav-emoji"><img src="img/nueva/ajustes.jpg" style="height: 1.25em;"></div>
                <p>Ajustes</p>
            </div>
        </nav>
    </div>

</body>
</html>