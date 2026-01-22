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
                <p><input class="rdm-formularios--input-grande" type="number" id="dinero" name="dinero" value="" placeholder="$" required></p>
                <br>

                </div>


                <h4>¿A quién le llega?</h4>

                <div class="contenedor_formulario">

                <p class="rdm-formularios--label"><label for="punto_venta">Punto de venta</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="punto_venta" name="punto_venta" value="HEALTHY MUSCLE MAKER1" placeholder="Punto de venta" required></p>
                <br>                

                <p class="rdm-formularios--label"><label for="codigo_negocio">Código de negocio</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="codigo_negocio" name="codigo_negocio" value="0090366682" placeholder="#" required></p>
                <br>

                <p class="rdm-formularios--label"><label for="nombre_personalizado">Nombre personalizado</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="nombre_personalizado" name="nombre_personalizado" value="" placeholder="Nombre personalizado" ></p>
                <br>
                

                <p class="rdm-formularios--label"><label for="descripcion">Descripción</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="descripcion" name="descripcion" value="" placeholder="Descripción" ></p>
                <br>

                <p class="rdm-formularios--label"><label for="producto_destino">Producto destino</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="producto_destino" name="producto_destino" value="" placeholder="#" ></p>
                <br>

                <p class="rdm-formularios--label"><label for="tipo_destino">Tipo de cuenta destino</label></p>
		        <p><select class="rdm-formularios--input-grande" id="tipo_destino" name="tipo_destino" >
		            <option value=""></option>
		            <option value="Ahorros">Ahorros</option>
		            <option value="Corriente">Corriente</option>
		        </select></p>
                <br>

                </div>



                <h4>¿De donde sale la plata?</h4>

                <div class="contenedor_formulario">


                <p class="rdm-formularios--label"><label for="producto_origen">Producto origen</label></p>
		        <p><select class="rdm-formularios--input-grande" id="producto_origen" name="producto_origen" >
		            <option value=""></option>
		            <option value="69365472378">69365472378</option>
		            <option value="01958965563">01958965563</option>
		            <option value="41208211038">41208211038</option>
		            <option value="">--</option>
		            <option value="00931108603">00931108603</option>
		            <option value="33355127015">33355127015</option>
		            <option value="55143521833">55143521833</option>
		            <option value="02179717037">02179717037</option>
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
                <div class="nav-emoji"><img src="img/nueva/inicio.jpg" style="height: 1.25em;"></div>
                <p>Inicio</p>
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