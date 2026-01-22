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
                <div class="text-transaccion">¡Pago exitoso!</div>
            </div> 
        </div>
        </a>
        
        <!-- Elemento derecho: Siguiente con icono -->
        <div class="header-item header-right">
            <div class="nav-text">
                <span class="logout-text">Cerrar sesión</span>
                <span class="icon icon-right">
                    <!-- Icono de flecha hacia adelante -->
                    <img src="img/nueva/salir.jpg" style="height: 1.5em;">
                </span>
            </div>
        </div>
    </header>

        <!-- Main content -->
        <main class="main-content">
            <!-- Success message -->
            <div class="success-container">
                <div class="success-icon">
                    <img src="img/nueva/exito.jpg" style="height: 0.75em;">
                </div>
                <h1 class="success-title">¡Pago exitoso!</h1>
                <p class="receipt-number">Comprobante No. TRW5THA46MEC</p>
                <p class="receipt-date">08 Abr 2025 - 04:19 p. m.</p>
            </div>

            <!-- Payment details accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h2>Datos del pago</h2>
                        <div class="accordion-icon">
                            <img src="img/nueva/flecha_arriba.jpg" style="height: 1.25em;">
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="payment-detail-vertical">
                            <p class="detail-label">Valor pagado</p>
                            <p class="detail-value">$ 23.000</p>
                        </div>
                        <div class="payment-detail-vertical">
                            <p class="detail-label">Costo del pago</p>
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
                        <p class="merchant-name">BIZCOCHERIA Y GELATO</p>
                        <p class="bank-name">Ahorros - Bancolombia</p>
                        <p class="account-number">935 - 529423 - 01</p>
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