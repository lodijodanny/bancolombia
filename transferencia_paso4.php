<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Producto destino – Paso 3 de 4</title>
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
            gap: 0.35rem;
            font-size: 1rem;
            color: #1a1a1a;
            text-decoration: none;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
        }

        .header-logo { display: flex; align-items: center; justify-content: center; }
        .logo-bancolombia { width: 2.4rem; height: 2rem; }

        /* ── BREADCRUMB + TÍTULO ── */
        .page-breadcrumb {
            font-size: 0.85rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            padding: 1.5rem 1.25rem 0.2rem;
        }

        .page-title {
            font-size: 1.9rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            padding: 0 1.25rem 1.5rem;
            letter-spacing: -0.03em;
        }

        /* ── GRUPOS DE OPCIONES ── */
        .grupo {
            padding: 0 1rem;
            margin-bottom: 1.25rem;
        }

        .grupo-label {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
            padding: 0 0.1rem;
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

        .opcion-item:first-of-type { border-radius: 0.85rem 0.85rem 0 0; }
        .opcion-item:last-of-type  { border-radius: 0 0 0.85rem 0.85rem; border-bottom: none; }
        .opcion-item:only-of-type  { border-radius: 0.85rem; }
        .opcion-item:active { background-color: #f8f8f8; }

        .opcion-titulo {
            font-size: 0.97rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
        }

        .opcion-titulo-bold {
            font-size: 0.97rem;
            color: #1a1a1a;
            font-family: 'OpenSans-SemiBold', Arial, sans-serif;
            font-weight: 600;
        }

        .chevron-der {
            color: #999;
            font-size: 1.1rem;
        }

        /* ── SOLO ÍTEM ── */
        .opcion-solo {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.15rem 1.1rem;
            cursor: pointer;
            text-decoration: none;
            color: #1a1a1a;
            border-radius: 0.85rem;
            transition: background-color 0.15s;
        }

        .opcion-solo:active { background-color: #f8f8f8; }

        /* ── BARRA DE PROGRESO ── */
        .progress-bar-container {
            position: fixed;
            bottom: 0; left: 0;
            width: 100%;
            background-color: #fff;
            padding: 0.85rem 1.25rem 1.1rem;
            border-top: 1px solid #e8e8e8;
            z-index: 100;
        }

        .progress-label { font-size: 0.8rem; color: #555; font-family: 'OpenSans-Regular', Arial, sans-serif; margin-bottom: 0.4rem; }

        .progress-track { width: 100%; height: 4px; background-color: #1a1a1a; border-radius: 2px; }
        .progress-fill  { height: 100%; background-color: #FDDA24; border-radius: 2px; }

        .main-content { padding-bottom: 5rem; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <a href="transferencia_paso3.php" class="header-nav">
        <span style="font-size:1.1rem;">‹</span>
        <span>Volver</span>
    </a>

    <div class="header-logo">
        <svg class="logo-bancolombia" viewBox="0 0 48 40" fill="none">
            <rect x="0" y="4" width="48" height="7" rx="3.5" fill="#1a1a1a"/>
            <rect x="6" y="17" width="36" height="7" rx="3.5" fill="#1a1a1a"/>
            <rect x="12" y="30" width="24" height="7" rx="3.5" fill="#1a1a1a"/>
        </svg>
    </div>

    <div style="width:5rem;"></div>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="main-content">

    <p class="page-breadcrumb">Transferir plata</p>
    <h1 class="page-title">Producto destino</h1>

    <!-- Ítem solo: tus productos -->
    <div class="grupo">
        <a href="transferencia_paso5.php" class="opcion-solo">
            <span class="opcion-titulo-bold">Tus productos Bancolombia</span>
            <span class="chevron-der">›</span>
        </a>
    </div>

    <!-- Grupo: Productos inscritos -->
    <div class="grupo">
        <p class="grupo-label">Productos inscritos</p>
        <div>
            <a href="transferencia_paso5.php" class="opcion-item">
                <span class="opcion-titulo">De Bancolombia</span>
                <span class="chevron-der">›</span>
            </a>
            <a href="transferencia_paso5.php" class="opcion-item">
                <span class="opcion-titulo">De otros bancos</span>
                <span class="chevron-der">›</span>
            </a>
            <a href="transferencia_paso5.php" class="opcion-item">
                <span class="opcion-titulo">Inscribir productos</span>
                <span class="chevron-der">›</span>
            </a>
        </div>
    </div>

    <!-- Grupo: Productos no inscritos -->
    <div class="grupo">
        <p class="grupo-label">Productos no inscritos</p>
        <div>
            <a href="transferencia_paso5.php" class="opcion-item">
                <span class="opcion-titulo">De Bancolombia</span>
                <span class="chevron-der">›</span>
            </a>
            <a href="transferencia_paso5.php" class="opcion-item">
                <span class="opcion-titulo">De Nequi</span>
                <span class="chevron-der">›</span>
            </a>
        </div>
    </div>

</main>

<!-- BARRA DE PROGRESO -->
<div class="progress-bar-container">
    <p class="progress-label">Paso 3 de 4</p>
    <div class="progress-track">
        <div class="progress-fill" style="width:75%;"></div>
    </div>
</div>

</body>
</html>
