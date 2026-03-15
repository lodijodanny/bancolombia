<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Transferir plata</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #f0f0f0;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            color: #1a1a1a;
            min-height: 100vh;
        }

        /* ── HEADER ── */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.25rem 0.75rem;
            background-color: #f0f0f0;
        }

        .header-nav {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 1rem;
            color: #1a1a1a;
            cursor: pointer;
            text-decoration: none;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
        }

        .header-nav .chevron {
            font-size: 1.1rem;
            line-height: 1;
        }

        .header-logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-logo img {
            height: 2.2rem;
            width: auto;
        }

        /* Logo Bancolombia (rayas) — SVG inline */
        .logo-bancolombia {
            width: 2.4rem;
            height: 2rem;
        }

        .header-ayuda {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 1rem;
            color: #1a1a1a;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            cursor: pointer;
        }

        .ayuda-circle {
            width: 1.6rem;
            height: 1.6rem;
            border-radius: 50%;
            border: 1.5px solid #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: 700;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
        }

        /* ── TÍTULO ── */
        .page-breadcrumb {
            font-size: 0.85rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            font-weight: 400;
            padding: 1.5rem 1.25rem 0.25rem;
        }

        .page-title {
            font-size: 1.9rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            padding: 0 1.25rem 1.5rem;
            letter-spacing: -0.03em;
            line-height: 1.15;
        }

        /* ── LISTA DE OPCIONES ── */
        .opciones-lista {
            padding: 0 1rem;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .opcion-item {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.15rem 1.1rem;
            cursor: pointer;
            text-decoration: none;
            color: #1a1a1a;
            transition: background-color 0.15s;
            border-bottom: 1px solid #f0f0f0;
        }

        .opcion-item:first-child {
            border-radius: 0.85rem 0.85rem 0 0;
        }

        .opcion-item:last-child {
            border-radius: 0 0 0.85rem 0.85rem;
            border-bottom: none;
        }

        .opcion-item:only-child {
            border-radius: 0.85rem;
        }

        /* Cuando hay un solo ítem independiente */
        .opcion-item-solo {
            border-radius: 0.85rem !important;
            margin-bottom: 0.75rem;
        }

        .opcion-item:active {
            background-color: #f8f8f8;
        }

        .opcion-izq {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 1;
        }

        .opcion-icono {
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .opcion-icono svg {
            width: 1.6rem;
            height: 1.6rem;
            stroke: #1a1a1a;
            fill: none;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .opcion-texto {
            display: flex;
            flex-direction: column;
        }

        .opcion-titulo {
            font-size: 1rem;
            font-weight: 500;
            color: #1a1a1a;
            font-family: 'OpenSans-SemiBold', Arial, sans-serif;
            line-height: 1.3;
        }

        .opcion-subtitulo {
            font-size: 0.82rem;
            color: #666;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-top: 0.15rem;
        }

        .opcion-der {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .badge-nuevo {
            background-color: #00c389;
            color: #fff;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.25em 0.7em;
            border-radius: 2em;
            font-family: 'OpenSans-SemiBold', Arial, sans-serif;
            white-space: nowrap;
        }

        .chevron-der {
            color: #999;
            font-size: 1.1rem;
            line-height: 1;
        }

        /* Separación entre grupos */
        .grupo-gap {
            height: 0.75rem;
        }

        /* ── ILUSTRACIÓN INFERIOR ── */
        .ilustracion-bottom {
            position: fixed;
            bottom: 3.5rem;
            left: 0;
            width: 100%;
            height: 5rem;
            overflow: hidden;
            pointer-events: none;
        }

        /* ── BOTTOM NAV ── */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            display: flex;
            justify-content: space-around;
            align-items: flex-end;
            padding: 0.5rem 0 0.6rem;
            border-top: 1px solid #e8e8e8;
            z-index: 100;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.2rem;
            cursor: pointer;
            padding: 0 0.5rem;
            min-width: 3.5rem;
        }

        .nav-item svg {
            width: 1.6rem;
            height: 1.6rem;
            stroke: #888;
            fill: none;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .nav-item.active svg {
            stroke: #1a1a1a;
        }

        .nav-item p {
            font-size: 0.6rem;
            color: #888;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            text-align: center;
            line-height: 1.2;
        }

        .nav-item.active p {
            color: #1a1a1a;
            font-family: 'OpenSans-SemiBold', Arial, sans-serif;
        }

        .main-content {
            padding-bottom: 5rem;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <a href="index.php" class="header-nav">
        <span class="chevron">‹</span>
        <span>Volver</span>
    </a>

    <div class="header-logo">
        <!-- Logo Bancolombia (3 rayas) -->
        <svg class="logo-bancolombia" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0" y="4" width="48" height="7" rx="3.5" fill="#1a1a1a"/>
            <rect x="6" y="17" width="36" height="7" rx="3.5" fill="#1a1a1a"/>
            <rect x="12" y="30" width="24" height="7" rx="3.5" fill="#1a1a1a"/>
        </svg>
    </div>

    <div class="header-ayuda">
        <span>Ayuda</span>
        <div class="ayuda-circle">?</div>
    </div>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="main-content">

    <p class="page-breadcrumb">Transacciones</p>
    <h1 class="page-title">Transferir plata</h1>

    <div class="opciones-lista">

        <!-- Ítem solo -->
        <a href="transferencia_paso2.php" class="opcion-item opcion-item-solo" style="border-radius:0.85rem; margin-bottom:0.75rem;">
            <div class="opcion-izq">
                <div class="opcion-icono">
                    <!-- Icono avión de papel -->
                    <svg viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </div>
                <div class="opcion-texto">
                    <span class="opcion-titulo">Transferir plata</span>
                </div>
            </div>
            <div class="opcion-der">
                <span class="chevron-der">›</span>
            </div>
        </a>

        <!-- Ítem con badge -->
        <a href="transferencia_paso2.php" class="opcion-item opcion-item-solo" style="border-radius:0.85rem; margin-bottom:0.75rem;">
            <div class="opcion-izq">
                <div class="opcion-icono">
                    <!-- Icono llave -->
                    <svg viewBox="0 0 24 24"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
                </div>
                <div class="opcion-texto">
                    <span class="opcion-titulo">Transferir con llaves</span>
                    <span class="opcion-subtitulo">Con Bre-B, gratis y de una</span>
                </div>
            </div>
            <div class="opcion-der">
                <span class="badge-nuevo">¡Nuevo!</span>
                <span class="chevron-der">›</span>
            </div>
        </a>

        <!-- Ítem QR -->
        <a href="pago_qr_generado_f.php" class="opcion-item opcion-item-solo" style="border-radius:0.85rem; margin-bottom:0.75rem;">
            <div class="opcion-izq">
                <div class="opcion-icono">
                    <!-- Icono QR -->
                    <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="3" height="3"/><rect x="18" y="14" width="3" height="3"/><rect x="14" y="18" width="3" height="3"/><rect x="18" y="18" width="3" height="3"/><rect x="5" y="5" width="3" height="3" fill="#1a1a1a" stroke="none"/><rect x="16" y="5" width="3" height="3" fill="#1a1a1a" stroke="none"/><rect x="5" y="16" width="3" height="3" fill="#1a1a1a" stroke="none"/></svg>
                </div>
                <div class="opcion-texto">
                    <span class="opcion-titulo">Transferir con código QR</span>
                </div>
            </div>
            <div class="opcion-der">
                <span class="chevron-der">›</span>
            </div>
        </a>

        <!-- Ítem regalo -->
        <a href="transferencia_paso2.php" class="opcion-item opcion-item-solo" style="border-radius:0.85rem; margin-bottom:0.75rem;">
            <div class="opcion-izq">
                <div class="opcion-icono">
                    <!-- Icono regalo -->
                    <svg viewBox="0 0 24 24"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/></svg>
                </div>
                <div class="opcion-texto">
                    <span class="opcion-titulo">Enviar regalo</span>
                </div>
            </div>
            <div class="opcion-der">
                <span class="chevron-der">›</span>
            </div>
        </a>

        <!-- Ítem inscribir -->
        <a href="transferencia_paso2.php" class="opcion-item opcion-item-solo" style="border-radius:0.85rem; margin-bottom:0.75rem;">
            <div class="opcion-izq">
                <div class="opcion-icono">
                    <!-- Icono documento + -->
                    <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
                </div>
                <div class="opcion-texto">
                    <span class="opcion-titulo">Inscribir productos</span>
                </div>
            </div>
            <div class="opcion-der">
                <span class="chevron-der">›</span>
            </div>
        </a>

    </div>

</main>

<!-- BOTTOM NAV -->
<nav class="bottom-nav">
    <div class="nav-item">
        <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        <p>Inicio</p>
    </div>
    <div class="nav-item active">
        <svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
        <p>Transacciones</p>
    </div>
    <div class="nav-item">
        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
        <p>Explorar</p>
    </div>
    <div class="nav-item">
        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        <p>Trámites y solicitudes</p>
    </div>
    <div class="nav-item">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
        <p>Ajustes</p>
    </div>
</nav>

</body>
</html>
