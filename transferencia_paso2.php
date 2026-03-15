<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Producto origen – Paso 1 de 4</title>
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

        .header-logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

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
            padding: 0 1.25rem 0.6rem;
            letter-spacing: -0.03em;
            line-height: 1.15;
        }

        .page-desc {
            font-size: 0.9rem;
            color: #444;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            padding: 0 1.25rem 1.5rem;
            line-height: 1.5;
        }

        /* ── TABS ── */
        .tabs {
            display: flex;
            padding: 0 1.25rem;
            border-bottom: 1px solid #ddd;
            margin-bottom: 1rem;
        }

        .tab {
            padding: 0.6rem 0.5rem;
            margin-right: 1.5rem;
            font-size: 0.95rem;
            color: #888;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            cursor: pointer;
            border-bottom: 2.5px solid transparent;
            margin-bottom: -1px;
        }

        .tab.active {
            color: #1a1a1a;
            font-family: 'OpenSans-SemiBold', Arial, sans-serif;
            font-weight: 700;
            border-bottom-color: #1a1a1a;
        }

        /* ── TARJETA CUENTA ── */
        .cuenta-card {
            margin: 0 1rem;
            background-color: #fff;
            border-radius: 1rem;
            padding: 1.25rem 1.1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.15s;
        }

        .cuenta-card:active { background-color: #f8f8f8; }

        .cuenta-info { flex: 1; }

        .cuenta-nombre {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.02em;
            margin-bottom: 0.2rem;
        }

        .cuenta-numero {
            font-size: 0.88rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-bottom: 0.75rem;
        }

        .cuenta-saldo-label {
            font-size: 0.82rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-bottom: 0.15rem;
        }

        .cuenta-saldo-valor {
            font-size: 1.45rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.03em;
        }

        .cuenta-saldo-valor sup {
            font-size: 0.65em;
            font-weight: 700;
            vertical-align: super;
            letter-spacing: 0;
        }

        .cuenta-chevron {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            border: 1.5px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-left: 0.75rem;
            color: #888;
            font-size: 1rem;
        }

        /* ── BARRA DE PROGRESO INFERIOR ── */
        .progress-bar-container {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            padding: 0.85rem 1.25rem 1.1rem;
            border-top: 1px solid #e8e8e8;
            z-index: 100;
        }

        .progress-label {
            font-size: 0.8rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-bottom: 0.5rem;
        }

        .progress-track {
            width: 100%;
            height: 4px;
            background-color: #1a1a1a;
            border-radius: 2px;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background-color: #FDDA24;
            border-radius: 2px;
            width: 25%; /* paso 1 de 4 */
        }

        .main-content {
            padding-bottom: 5rem;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <a href="transferencia_paso1.php" class="header-nav">
        <span style="font-size:1.2rem;">✕</span>
        <span style="margin-left:0.3rem;">Cancelar</span>
    </a>

    <div class="header-logo">
        <svg class="logo-bancolombia" viewBox="0 0 48 40" fill="none">
            <rect x="0" y="4" width="48" height="7" rx="3.5" fill="#1a1a1a"/>
            <rect x="6" y="17" width="36" height="7" rx="3.5" fill="#1a1a1a"/>
            <rect x="12" y="30" width="24" height="7" rx="3.5" fill="#1a1a1a"/>
        </svg>
    </div>

    <!-- espacio derecho vacío para centrar logo -->
    <div style="width:5rem;"></div>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="main-content">

    <p class="page-breadcrumb">Transferir plata</p>
    <h1 class="page-title">Producto origen</h1>
    <p class="page-desc">Si alguno de tus productos no aparece, puede estar oculto.</p>

    <!-- TABS -->
    <div class="tabs">
        <div class="tab active">Cuentas</div>
        <div class="tab">Tarjetas de Crédito</div>
        <div class="tab">Inversiones</div>
    </div>

    <!-- TARJETA CUENTA -->
    <a href="transferencia_paso3.php" class="cuenta-card">
        <div class="cuenta-info">
            <p class="cuenta-nombre">Cuenta de Ahorros</p>
            <p class="cuenta-numero">Ahorros 693 - 654723 - 78</p>
            <p class="cuenta-saldo-label">Saldo disponible</p>
            <p class="cuenta-saldo-valor">$ 1.082<sup>,89</sup></p>
        </div>
        <div class="cuenta-chevron">›</div>
    </a>

</main>

<!-- BARRA DE PROGRESO -->
<div class="progress-bar-container">
    <p class="progress-label">Paso 1 de 4</p>
    <div class="progress-track">
        <div class="progress-fill" style="width:25%;"></div>
    </div>
</div>

</body>
</html>
