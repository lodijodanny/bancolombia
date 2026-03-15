<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Verifica la transferencia</title>
    <link rel="stylesheet" href="css/estilos.css">
    <?php
        // Recibir parámetros de los pasos anteriores
        $valor    = isset($_GET['valor'])  ? number_format((float)$_GET['valor'], 0, ',', '.') : '1.000';
        $cuenta   = isset($_GET['cuenta']) ? htmlspecialchars($_GET['cuenta']) : '001 - 546337 - 69';
        $tipo     = isset($_GET['tipo'])   ? ucfirst(htmlspecialchars($_GET['tipo'])) : 'Ahorros';

        // Formatear número de cuenta destino con guiones
        $raw = preg_replace('/\D/', '', isset($_GET['cuenta']) ? $_GET['cuenta'] : '00154633769');
        if (strlen($raw) >= 9) {
            $c1 = substr($raw, 0, 3);
            $c2 = substr($raw, 3, 6);
            $c3 = substr($raw, 9);
            $cuenta_fmt = $c1 . ' - ' . $c2 . ' - ' . $c3;
        } else {
            $cuenta_fmt = $cuenta;
        }
    ?>
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

        .header-title {
            font-size: 0.95rem;
            color: #1a1a1a;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            letter-spacing: -0.01em;
        }

        /* ── BREADCRUMB + TÍTULO ── */
        .page-breadcrumb {
            font-size: 0.82rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            padding: 1.25rem 1.25rem 0.2rem;
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            padding: 0 1.25rem 1.5rem;
            letter-spacing: -0.03em;
        }

        /* ── SECCIONES ── */
        .seccion {
            padding: 0 1rem;
            margin-bottom: 1.25rem;
        }

        .seccion-titulo {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.02em;
            margin-bottom: 0.5rem;
            padding: 0 0.1rem;
        }

        /* ── FILAS DE DATOS ── */
        .fila-dato {
            background-color: #fff;
            padding: 1rem 1.1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f0f0f0;
        }

        .fila-dato:first-of-type { border-radius: 0.85rem 0.85rem 0 0; }
        .fila-dato:last-of-type  { border-radius: 0 0 0.85rem 0.85rem; border-bottom: none; }
        .fila-dato:only-of-type  { border-radius: 0.85rem; }

        .fila-izq { flex: 1; }

        .fila-label {
            font-size: 0.82rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-bottom: 0.2rem;
        }

        .fila-valor {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.02em;
        }

        .fila-valor-secondary {
            font-size: 1rem;
            font-weight: 400;
            color: #1a1a1a;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
        }

        .fila-valor sup {
            font-size: 0.65em;
            vertical-align: super;
            font-weight: 700;
        }

        .cambiar-btn {
            display: flex;
            align-items: center;
            gap: 0.2rem;
            font-size: 0.88rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            text-decoration: none;
            cursor: pointer;
            white-space: nowrap;
            flex-shrink: 0;
            margin-left: 0.5rem;
        }

        .cambiar-chevron { font-size: 1rem; color: #999; }

        /* ── BOTONES FIJOS ── */
        .bottom-fixed {
            position: fixed;
            bottom: 0; left: 0;
            width: 100%;
            background-color: #f0f0f0;
            padding: 0.85rem 1rem 1.25rem;
            z-index: 100;
        }

        .btn-transferir {
            width: 100%;
            padding: 1.05rem;
            border-radius: 3rem;
            border: none;
            background-color: #FDDA24;
            font-size: 1.05rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            cursor: pointer;
            letter-spacing: -0.02em;
            margin-bottom: 0.65rem;
            text-align: center;
            text-decoration: none;
            display: block;
            transition: background-color 0.15s;
        }

        .btn-transferir:active { background-color: #f5cf00; }

        .btn-cancelar {
            width: 100%;
            padding: 1.05rem;
            border-radius: 3rem;
            border: 1.5px solid #1a1a1a;
            background-color: transparent;
            font-size: 1.05rem;
            font-weight: 600;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            cursor: pointer;
            letter-spacing: -0.02em;
            text-align: center;
            text-decoration: none;
            display: block;
            transition: background-color 0.15s;
        }

        .btn-cancelar:active { background-color: #f0f0f0; }

        .main-content { padding-bottom: 10rem; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <a href="transferencia_paso5.php" class="header-nav">
        <span style="font-size:1.1rem;">‹</span>
    </a>

    <span class="header-title">Verifica la transferencia</span>

    <a href="transferencia_paso6.php" class="header-nav" style="justify-content:flex-end;">
        <span style="font-size:1.1rem;">›</span>
    </a>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="main-content">

    <p class="page-breadcrumb">Transferir a productos no inscritos de Bancolombia</p>
    <h1 class="page-title">Verifica la transferencia</h1>

    <!-- DATOS DE LA TRANSFERENCIA -->
    <div class="seccion">
        <p class="seccion-titulo">Datos de la transferencia</p>

        <div class="fila-dato">
            <div class="fila-izq">
                <p class="fila-label">Valor a transferir</p>
                <p class="fila-valor">$ <?= $valor ?></p>
            </div>
            <a href="transferencia_paso3.php" class="cambiar-btn">
                Cambiar <span class="cambiar-chevron">›</span>
            </a>
        </div>

        <div class="fila-dato">
            <div class="fila-izq">
                <p class="fila-label">Costo de la transferencia</p>
                <p class="fila-valor">$ 0<sup>,00</sup></p>
            </div>
        </div>
    </div>

    <!-- PRODUCTO DESTINO -->
    <div class="seccion">
        <p class="seccion-titulo">Producto destino</p>

        <div class="fila-dato">
            <div class="fila-izq">
                <p class="fila-label"><?= $tipo ?> - Bancolombia</p>
                <p class="fila-valor"><?= $cuenta_fmt ?></p>
            </div>
            <a href="transferencia_paso5.php" class="cambiar-btn">
                Cambiar <span class="cambiar-chevron">›</span>
            </a>
        </div>
    </div>

    <!-- PRODUCTO ORIGEN -->
    <div class="seccion">
        <p class="seccion-titulo">Producto origen</p>

        <div class="fila-dato">
            <div class="fila-izq">
                <p class="fila-valor">Cuenta de Ahorros</p>
                <p class="fila-valor-secondary" style="margin-top:0.15rem;">Ahorros</p>
                <p class="fila-valor-secondary">693 - 654723 - 78</p>
            </div>
        </div>
    </div>

    <!-- DETALLES DE LA TRANSFERENCIA -->
    <div class="seccion">
        <p class="seccion-titulo">Detalles de la transferencia</p>

        <div class="fila-dato">
            <div class="fila-izq">
                <p class="fila-label">Categoría</p>
                <p class="fila-valor">Sin categoría</p>
            </div>
            <a href="#" class="cambiar-btn">
                Cambiar <span class="cambiar-chevron">›</span>
            </a>
        </div>

        <div class="fila-dato">
            <div class="fila-izq">
                <p class="fila-label">Motivo</p>
                <p class="fila-valor-secondary" style="color:#bbb; font-style: italic;">Sin motivo</p>
            </div>
            <a href="#" class="cambiar-btn">
                Cambiar <span class="cambiar-chevron">›</span>
            </a>
        </div>
    </div>

</main>

<!-- BOTONES FIJOS -->
<div class="bottom-fixed">
    <a href="qr_r.php?dinero=<?= urlencode(isset($_GET['valor']) ? $_GET['valor'] : '1000') ?>&producto_origen=69365472378&tipo_destino=<?= urlencode($tipo) ?>&producto_destino=<?= urlencode(isset($_GET['cuenta']) ? $_GET['cuenta'] : '') ?>" class="btn-transferir">
        Transferir plata
    </a>
    <a href="transferencia_paso1.php" class="btn-cancelar">Cancelar</a>
</div>

</body>
</html>
