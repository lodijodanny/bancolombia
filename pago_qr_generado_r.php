<?php
//capturo las variables que pasan por URL o formulario
if(isset($_POST['dinero'])) $dinero = $_POST['dinero']; elseif(isset($_GET['dinero'])) $dinero = $_GET['dinero']; else $dinero = null;
if(isset($_POST['producto_destino'])) $producto_destino = $_POST['producto_destino']; elseif(isset($_GET['producto_destino'])) $producto_destino = $_GET['producto_destino']; else $producto_destino = null;

if(isset($_POST['producto_origen'])) $producto_origen = $_POST['producto_origen']; elseif(isset($_GET['producto_origen'])) $producto_origen = $_GET['producto_origen']; else $producto_origen = null;
if(isset($_POST['tipo_destino'])) $tipo_destino = $_POST['tipo_destino']; elseif(isset($_GET['tipo_destino'])) $tipo_destino = $_GET['tipo_destino']; else $tipo_destino = null;
if(isset($_POST['nombre_personalizado'])) $nombre_personalizado = $_POST['nombre_personalizado']; elseif(isset($_GET['nombre_personalizado'])) $nombre_personalizado = $_GET['nombre_personalizado']; else $nombre_personalizado = null;

if(isset($_POST['descripcion'])) $descripcion = $_POST['descripcion']; elseif(isset($_GET['descripcion'])) $descripcion = $_GET['descripcion']; else $descripcion = null;

?>




<?php
date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, "spanish");

// Función para generar el carácter intermedio (letra mayúscula o dígito)
function generarCaracterIntermedio() {
    $caracteres = 'ABCD0123456789';
    return $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    // Función para generar los 9 dígitos numéricos
    function generarNumerosSerie($longitud = 9) {
    $numero = '';
    for ($i = 0; $i < $longitud; $i++) {
        $numero .= rand(0, 9);
    }
    return $numero;
    }

    // Función principal para generar el número de comprobante
    function generarNumeroComprobante() {
    $prefijo = '74';
    $caracterIntermedio = generarCaracterIntermedio();
    $numeroSerie = generarNumerosSerie();
    return $prefijo . $caracterIntermedio . $numeroSerie;
    }

// Ejemplo de uso
$comprobante_no = generarNumeroComprobante();

//fecha y hora
$fecha_dia = date('j');
$fecha_mes = ucfirst(substr(strftime("%B"), 0, 3));
$fecha_ano = date('Y');

$hora = date('h:i');
$hora_f1 = substr(date('a'), -2, 1);
$hora_f2 = substr(date('a'), -1);

//producto origen
$producto_origen_tipo = "ahorros";
$producto_origen_numero = $producto_origen;
$pro_ori_num_1 = substr($producto_origen_numero, 0, 3);
$pro_ori_num_2 = substr($producto_origen_numero, 3, 6);
$pro_ori_num_3 = substr($producto_origen_numero, 7, 4);

//producto destino
$producto_destino_tipo = $tipo_destino;
$producto_destino_numero = $producto_destino;
$pro_des_num_1 = substr($producto_destino_numero, 0, 3);
$pro_des_num_2 = substr($producto_destino_numero, 3, 6);
$pro_des_num_3 = substr($producto_destino_numero, 9, 2);

$valor_enviado = $dinero;
$valor_enviado = number_format($valor_enviado, 0, ",", ".");

?>
 
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pago Exitoso</title>
    <link rel="stylesheet" href="css/estilos_nuevos.css">
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
    <div class="loader-container">
        <div class="spinner"></div>
        <div class="loader-text" id="loaderText">Cargando...</div>
    </div>
    </div>

    <div class="app-container" id="contenido" style="display:none;">

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
                <div class="text-transaccion">¡Transferencia exitosa!</div>
            </div> 
        </div>
        </a>
        
        <!-- Elemento derecho: Siguiente con icono -->
        <a href="pago_qr_generado_f.php">
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
                <div class="success-icon">
                    <img src="img/nueva/exito.jpg" style="height: 0.75em;">
                </div>
                <h1 class="success-title">¡Transferencia exitosa!</h1>
                <p class="receipt-number">Comprobante No. <?php echo $comprobante_no; ?></p>
                <p class="receipt-date"><?php echo $fecha_dia; ?> <?php echo $fecha_mes; ?> <?php echo $fecha_ano; ?> - <?php echo "$hora"; ?> <?php echo $hora_f1; ?>.<?php echo $hora_f2; ?>.</p>
            </div>

            <!-- Payment details accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h2>Datos de la transferencia</h2>
                        <div class="accordion-icon">
                            <img src="img/nueva/flecha_arriba.jpg" style="height: 1.25em;">
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="payment-detail-vertical">
                            <p class="detail-label">Descripción del QR</p>
                            <p class="description-name"><?php echo ($descripcion) ?></p>
                        </div>
                        <div class="payment-detail-vertical">
                            <p class="detail-label">Valor de la transferencia</p>
                            <p class="detail-value">$ <?php echo $valor_enviado; ?></p>
                        </div>
                        <div class="payment-detail-vertical">
                            <p class="detail-label">Costo de la transferencia</p>
                            <p class="payment-cost">$ 0<span class="decimal">,00</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Destination details accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h2>Producto destino</h2>
                        <div class="accordion-icon">
                            <img src="img/nueva/flecha_arriba.jpg" style="height: 1.25em;">
                        </div>
                    </div>
                    <div class="accordion-content">
                        <p class="merchant-name"><?php echo ($nombre_personalizado) ?></p>
                        <p class="bank-name"><?php echo ($producto_destino_tipo) ?></p>
                        <p class="account-number"><?php echo $pro_des_num_1; ?> - <?php echo $pro_des_num_2; ?> - <?php echo $pro_des_num_3; ?></p>
                    </div>
                </div>
            </div>

            <!-- Origin details accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h2>Producto origen</h2>
                        <div class="accordion-icon">
                            <img src="img/nueva/flecha_arriba.jpg" style="height: 1.25em;">
                        </div>
                    </div>
                    <div class="accordion-content">
                        <p class="account-type">Cuenta de Ahorros</p>
                        <p class="savings-label">Ahorros</p>
                        <p class="account-id"><span class="balance-amount">*</span>2378</p>
                        
                        <div class="balance-container">
                            <div class="balance-info">
                                <p class="balance-label">Nuevo saldo disponible</p>
                                <p class="balance-amount">$ * * *</p>
                            </div>
                            <div class="eye-button">
                                <img src="img/nueva/ojo.jpg" style="height: 1.1em;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action buttons -->
            <div class="action-buttons">
                <div class="action-button">
                    <div class="action-emoji"><img src="img/nueva/compartir.jpg" style="height: 1em;"></div>
                    <p>Compartir</p>
                </div>
                <div class="action-button">
                    <div class="action-emoji"><img src="img/nueva/escanear_qr.jpg" style="height: 1em;"></div>
                    <p>Escanear otro<br>código QR</p>
                </div>
                <div class="action-button">
                    <div class="action-emoji"><img src="img/nueva/transferir.jpg" style="height: 1em;"></div>
                    <p>Transferir plata</p>
                </div>
            </div>
        </main>

        <br>

        <!-- Navigation bar -->
        <nav class="bottom-nav">
            <div class="nav-item">
                <a href="pago_qr_generado_f.php?dinero=<?php echo urlencode($dinero); ?>&descripcion=<?php echo urlencode($descripcion); ?>&nombre_personalizado=<?php echo urlencode($nombre_personalizado); ?>&producto_destino=<?php echo urlencode($producto_destino); ?>&tipo_destino=<?php echo urlencode($tipo_destino); ?>&producto_origen=<?php echo urlencode($producto_origen); ?>">
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

    <script>
    window.addEventListener('load', function () {
        const loaderText = document.getElementById('loaderText');

        // Después de 2 segundos cambia el texto
        setTimeout(() => {
        loaderText.textContent = "Validando Clave Dinámica...";
        }, 3000);

        // Después de 4 segundos oculta el preloader y muestra el contenido
        setTimeout(() => {
        document.getElementById('preloader').style.display = 'none';
        document.getElementById('contenido').style.display = 'block';
        }, 7000);
    });
    </script>

    <script>
        // Función para detectar el scroll y cambiar el logo por texto
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            
            // Añade la clase 'scrolled' cuando el scroll pasa de 50px
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

</body>
</html>