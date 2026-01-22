<?php
//capturo las variables que pasan por URL o formulario
if(isset($_POST['dinero'])) $dinero = $_POST['dinero']; elseif(isset($_GET['dinero'])) $dinero = $_GET['dinero']; else $dinero = null;

if(isset($_POST['punto_venta'])) $punto_venta = $_POST['punto_venta']; elseif(isset($_GET['punto_venta'])) $punto_venta = $_GET['punto_venta']; else $punto_venta = null;
if(isset($_POST['enviado_a'])) $enviado_a = $_POST['enviado_a']; elseif(isset($_GET['enviado_a'])) $enviado_a = $_GET['enviado_a']; else $enviado_a = null;
if(isset($_POST['codigo_negocio'])) $codigo_negocio = $_POST['codigo_negocio']; elseif(isset($_GET['codigo_negocio'])) $codigo_negocio = $_GET['codigo_negocio']; else $codigo_negocio = null;
if(isset($_POST['nombre_personalizado'])) $nombre_personalizado = $_POST['nombre_personalizado']; elseif(isset($_GET['nombre_personalizado'])) $nombre_personalizado = $_GET['nombre_personalizado']; else $nombre_personalizado = null;
if(isset($_POST['descripcion'])) $descripcion = $_POST['descripcion']; elseif(isset($_GET['descripcion'])) $descripcion = $_GET['descripcion']; else $descripcion = null;
if(isset($_POST['producto_destino'])) $producto_destino = $_POST['producto_destino']; elseif(isset($_GET['producto_destino'])) $producto_destino = $_GET['producto_destino']; else $producto_destino = null;
if(isset($_POST['tipo_destino'])) $tipo_destino = $_POST['tipo_destino']; elseif(isset($_GET['tipo_destino'])) $tipo_destino = $_GET['tipo_destino']; else $tipo_destino = null;

if(isset($_POST['producto_origen'])) $producto_origen = $_POST['producto_origen']; elseif(isset($_GET['producto_origen'])) $producto_origen = $_GET['producto_origen']; else $producto_origen = null;


?>


<?php
//PONER LOS ASTERISCOS AL PUNTO DE VENTA
if (empty($enviado_a)) {
    $enviado_a = $punto_venta;
}
$enviado_a = $enviado_a; // Ejemplo de entrada

// Dividir la cadena por espacios
$palabras = explode(' ', $enviado_a);

// Procesar cada palabra
foreach ($palabras as &$palabra) {
    // Si la palabra tiene 3 o menos caracteres, solo agregar ***
    if (strlen($palabra) <= 3) {
        $palabra = $palabra . '***';
    } else {
        // Tomar las primeras 3 letras y agregar ***
        $palabra = substr($palabra, 0, 3) . '***';
    }
}

// Unir de nuevo las palabras
$enviado_a_asterisco = implode(' ', $palabras);
?>




<?php
//FORMATEAR CODIGO NEGOCIO
$codigo_negocio = $codigo_negocio; // ejemplo

// Asegurarse de que solo haya números
$codigo_negocio = preg_replace('/\D/', '', $codigo_negocio);

// Rellenar o recortar según corresponda
if (strlen($codigo_negocio) < 10) {
    // Rellenar con ceros a la izquierda
    $codigo_negocio = str_pad($codigo_negocio, 10, '0', STR_PAD_LEFT);
} elseif (strlen($codigo_negocio) > 10) {
    // Tomar solo los últimos 10 dígitos
    $codigo_negocio = substr($codigo_negocio, -10);
}
?>



<?php
date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, "spanish");


// Función para generar un identificador aleatorio
function generarIdentificador() {
  $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $longitud = 8;
  $identificador = '';
  for ($i = 0; $i < $longitud; $i++) {
    $identificador .= $caracteres[rand(0, strlen($caracteres) - 1)];
  }
  return $identificador;
}

// Generar código aleatorio
$prefijo = 'TR';
$sufijo = 'EC';
$comprobante_no = $prefijo . generarIdentificador() . $sufijo;


//número de comprobante

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
$pro_ori_num_3 = substr($producto_origen_numero, 9, 2);

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
    <link rel="preload" as="image" href="img/nueva/header_bre_b.jpg">
    <link rel="stylesheet" href="css/estilos_nuevos.css">
    <style>

        html {
            font-size: 95%; /* reduce todas las fuentes un 10% */
        }

        body {
            background-color: #f2f2f4;
            color: #333;
            line-height: 1.4;
            letter-spacing: 0.01em;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;   
        }


        header {
        position: relative;
        top: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem;
        z-index: 0;
        left: 0;
        right: 0;
        margin: 0;
        color: #333;
        height: 10rem;

        background-image: url('img/nueva/header_bre_b.jpg');
        background-size: cover;        /* cubre todo el ancho/alto */
        background-position: center;   /* centra la imagen */
        background-repeat: no-repeat;  /* evita repetición */
        }


        /* Main content */
        .main-content {
            padding: 0rem 1rem 4.5rem 1rem;
            position: relative;
            z-index: 1;
            margin-top: -2rem;
        }

        /* Borde zigzag superior */
        .zigzag-top {
            width: 100%;
            height: 1.25rem;
            background: linear-gradient(135deg, #333 25%, transparent 25%),
                        linear-gradient(-135deg, #333 25%, transparent 25%);
            background-size: 1.25rem 1.25rem;
            background-position: 0 0, 0 0;
            background-repeat: repeat-x;
        }

        

        .receipt-container {
            background-color: #fff;
            max-width: 30rem;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        

        /* Contenido del recibo */
        .receipt-content {
            padding: 2rem 1.5rem 2.5rem;
        }

        /* Success title */
        .success-title {
            font-size: 1.75rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 0.5rem;
            color: #333;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
        }

        .receipt-number {
            font-size: 1rem;
            color: #333;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .receipt-date {
            font-size: 1rem;
            color: #333;
            margin-bottom: -1rem;
        }

        /* Divider */
        .divider {
            border: none;
            height: 2px; /* mismo alto */
            background: repeating-linear-gradient(
                to right,
                #ddd 0,
                #ddd 11px,      /* longitud del guion */
                transparent 11px,
                transparent 20px /* espacio entre guiones */
            );
            margin: 2rem 0;
            margin-bottom: 1rem;
        }

        /* Payment amount */
        .payment-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .payment-label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .payment-amount {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1rem;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
        }

        .cost-label {
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 0.15rem;
        }

        .cost-amount {
            font-size: 0.9rem;
            font-weight: 700;
            color: #333;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
            margin-bottom: -1rem;
        }

        .cost-amount-cero {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
        }





        


        /* Destination section */
        .section-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1.5rem;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center; /* ✅ centrado verticalmente en la mitad */
            margin-bottom: 1.25rem;
        }

        .detail-label {
            font-size: 0.9rem;
            color: #333;
            flex-shrink: 0;
            width: 50%; /* ✅ columnas del mismo ancho */
        }

        .detail-value {
            font-size: 0.9rem;
            font-weight: 700;
            color: #333;
            text-align: right;
            word-break: break-word;
            width: 50%; /* ✅ columnas del mismo ancho */
            white-space: normal; /* ✅ permite salto de línea */
            overflow-wrap: break-word; /* ✅ rompe texto largo si es necesario */
        }

        .detail-label2 {
            font-size: 0.9rem;
            color: #333;
            flex-shrink: 0;
            text-align: right;
        }












        /* Origin section */
        .origin-section {
            margin-bottom: 2rem;
        }

        .account-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .account-info {
            flex: 1;
        }

        .account-type-label {
            font-size: 0.875rem;
            color: #333;
            margin-bottom: 0.25rem;
            font-family: 'Open Sans', sans-serif;
        }

        .account-number {
            font-size: 0.875rem;
            font-weight: 700;
            color: #333;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
        }

        .balance-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .balance-info {
            flex: 1;
        }

        .balance-label {
            font-size: 0.9rem;
            color: #333;
            flex-shrink: 0;
        }

        .eye-button {
            width: 2.5rem;
            height: 2.5rem;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: solid #dad9de 1px;
            cursor: pointer;
        }

        .eye-button svg {
            width: 1.25rem;
            height: 1.25rem;
            fill: #666;
        }

        .balance-amount {
            font-size: 1rem;
            font-weight: 700;
            color: #333;
            margin-left: 0.5rem;
            font-family: 'Roboto', 'CIBFontSans-Bold', sans-serif;
        }




        /* Borde zigzag inferior */
        .zigzag-bottom {
            width: 100%;
            height: 1.25rem;
            background: linear-gradient(45deg, #f2f2f4 25%, transparent 25%),
                        linear-gradient(-45deg, #f2f2f4 25%, transparent 25%);
            background-size: 1.25rem 1.25rem;
            background-position: 0 0, 0 0;
            background-repeat: repeat-x;
        }

    </style>
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

    <header id="bre-b-header">
        
    </header>

        <!-- Main content -->
        <main class="main-content">
            
            
            


            <div class="receipt-container">

            <!-- Zigzag superior -->
            <div class="zigzag-top"></div>
            

            <!-- Contenido del recibo -->
            <div class="receipt-content">


            <!-- Success message -->
            <div class="success-container">
                <div class="success-icon">
                    <img src="img/nueva/exito.jpg" style="height: 0.75em;">
                </div>
                <h1 class="success-title">¡Pago exitoso!</h1>
                <!-- Info del comprobante -->
                <div class="receipt-info">
                    <p class="receipt-number">Comprobante No. <?php echo $comprobante_no; ?></p>
                    <p class="receipt-date"><?php echo $fecha_dia; ?> <?php echo $fecha_mes; ?> <?php echo $fecha_ano; ?> - <?php echo "$hora"; ?> <?php echo $hora_f1; ?>.<?php echo $hora_f2; ?>.</p>
                </div>
            </div>

           

            

            <!-- Divider -->
            <hr class="divider">

            <!-- Valor del pago -->
            <div class="payment-section">
                <p class="payment-label">Valor del pago</p>
                <p class="payment-amount">$ <?php echo $valor_enviado; ?></p>
                <p class="cost-label">Costo del pago</p>
                <p class="cost-amount"><span class="cost-amount-cero">$ 0</span>,00</p>
            </div>

            <!-- Divider -->
            <hr class="divider">

            <!-- ¿A quién le llegó la plata? -->
            <h2 class="section-title">¿A quién le llegó la plata?</h2>

            <div class="detail-row">
                <span class="detail-label">Punto de venta</span>
                <span class="detail-value"><?php echo ($punto_venta) ?></span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Enviado a</span>
                <span class="detail-value"><?php echo ($enviado_a_asterisco) ?></span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Código de negocio</span>
                <span class="detail-value"><?php echo ($codigo_negocio) ?></span>
            </div>

            


            <br>




            <!-- ¿De dónde salió? -->
            <h2 class="section-title">¿De dónde salió?</h2>


            <div class="detail-row">
                <span class="detail-label">Cuenta de Ahorros</span>
                <span class="detail-label2">Ahorros<br><b>*2378</b></span>
            </div>

            

            <div class="balance-row">
                <div class="balance-info">
                    <p class="balance-label">Nuevo saldo disponible</p>
                </div>
                <div class="eye-button">
                    <img src="img/nueva/ojo_abierto.jpg" style="height: 1.1em;">
                </div>
                <span class="balance-amount">$ * * * *</span>
            </div>
        </div>

        <!-- Zigzag inferior -->
        <div class="zigzag-bottom"></div>
    </div>








            <!-- Action buttons -->
            <div class="action-buttons">
                <div class="action-button">
                    <div class="action-emoji"><img src="img/nueva/compartir.jpg" style="height: 1em;"></div>
                    <p>Compartir</p>
                </div>
                <div class="action-button">
                    <div class="action-emoji"><img src="img/nueva/bre-b.jpg" style="height: 1em;"></div>
                    <p>Ir a Bre-B</p>
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
                <a href="pago_breb_f.php?dinero=<?php echo urlencode($dinero); ?>&punto_venta=<?php echo urlencode($punto_venta); ?>&enviado_a=<?php echo urlencode($enviado_a); ?>&codigo_negocio=<?php echo urlencode($codigo_negocio); ?>&nombre_personalizado=<?php echo urlencode($nombre_personalizado); ?>&descripcion=<?php echo urlencode($descripcion); ?>&producto_destino=<?php echo urlencode($producto_destino); ?>&tipo_destino=<?php echo urlencode($tipo_destino); ?>&producto_origen=<?php echo urlencode($producto_origen); ?>">
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