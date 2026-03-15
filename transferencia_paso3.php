<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Valor – Paso 2 de 4</title>
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
            cursor: pointer;
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
            color: #bbb; /* gris cuando no hay valor */
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            cursor: default;
            transition: color 0.2s;
        }

        .header-continuar.activo {
            color: #1a1a1a;
            cursor: pointer;
        }

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
            padding: 0 1.25rem 1.25rem;
            letter-spacing: -0.03em;
        }

        /* ── INFO CUENTA ── */
        .cuenta-info-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 0 1.25rem 1.25rem;
        }

        .cuenta-num-label {
            font-size: 0.82rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-bottom: 0.2rem;
        }

        .cuenta-num-valor {
            font-size: 0.95rem;
            font-weight: 600;
            color: #1a1a1a;
            font-family: 'OpenSans-SemiBold', Arial, sans-serif;
            letter-spacing: -0.01em;
        }

        .saldo-col { text-align: right; }

        .saldo-label {
            font-size: 0.82rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-bottom: 0.2rem;
        }

        .saldo-valor {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 0.35rem;
            font-size: 0.95rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
        }

        .ojo-icon {
            width: 1.2rem;
            height: 1.2rem;
            stroke: #555;
            fill: none;
            stroke-width: 1.8;
            stroke-linecap: round;
        }

        /* ── CARD INPUT ── */
        .input-card {
            margin: 0 1rem;
            background-color: #fff;
            border-radius: 1rem;
            padding: 1.25rem 1rem;
        }

        .input-wrapper {
            border: 1.5px solid #1a1a1a;
            border-radius: 0.75rem;
            padding: 0.9rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            background-color: #fff;
            transition: border-color 0.2s;
        }

        .input-wrapper:focus-within {
            border-color: #1a1a1a;
        }

        .input-prefix {
            font-size: 1.05rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            flex-shrink: 0;
        }

        .input-field-wrap {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .input-floating-label {
            font-size: 0.72rem;
            color: #888;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            display: none; /* se muestra con JS cuando hay valor */
            margin-bottom: 0.1rem;
        }

        .input-field-wrap.tiene-valor .input-floating-label {
            display: block;
        }

        .input-valor {
            font-size: 1.05rem;
            color: #888;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            border: none;
            outline: none;
            background: transparent;
            width: 100%;
            -webkit-appearance: none;
        }

        .input-field-wrap.tiene-valor .input-valor {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1a1a1a;
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            letter-spacing: -0.02em;
        }

        /* ── BOTÓN CONTINUAR FIJO ── */
        .bottom-fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            padding: 0.85rem 1.25rem;
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
            letter-spacing: -0.01em;
            display: block;
            text-align: center;
            text-decoration: none;
        }

        .btn-continuar.activo {
            border-color: #1a1a1a;
            color: #1a1a1a;
            cursor: pointer;
            font-weight: 700;
        }

        .progress-label {
            font-size: 0.8rem;
            color: #555;
            font-family: 'OpenSans-Regular', Arial, sans-serif;
            margin-top: 0.6rem;
        }

        .progress-track {
            width: 100%;
            height: 4px;
            background-color: #1a1a1a;
            border-radius: 2px;
            margin-top: 0.4rem;
        }

        .progress-fill {
            height: 100%;
            background-color: #FDDA24;
            border-radius: 2px;
            width: 50%; /* paso 2 de 4 */
        }

        .main-content { padding-bottom: 9rem; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <a href="transferencia_paso2.php" class="header-nav">
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

    <a href="transferencia_paso4.php" class="header-continuar" id="headerContinuar">
        <span>Continuar</span>
        <span style="font-size:1.1rem;">›</span>
    </a>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="main-content">

    <p class="page-breadcrumb">Transferir plata</p>
    <h1 class="page-title">Valor</h1>

    <!-- INFO CUENTA -->
    <div class="cuenta-info-row">
        <div>
            <p class="cuenta-num-label">Número de cuenta</p>
            <p class="cuenta-num-valor">693 - 654723 - 78</p>
        </div>
        <div class="saldo-col">
            <p class="saldo-label">Saldo disponible</p>
            <div class="saldo-valor">
                <!-- Icono ojo tachado -->
                <svg class="ojo-icon" viewBox="0 0 24 24">
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
                    <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/>
                    <line x1="1" y1="1" x2="23" y2="23"/>
                </svg>
                <span>$ 1.082<span style="font-size:0.72em; font-weight:700;">,89</span></span>
            </div>
        </div>
    </div>

    <!-- CARD INPUT -->
    <div class="input-card">
        <div class="input-wrapper" id="inputWrapper">
            <span class="input-prefix">$</span>
            <div class="input-field-wrap" id="inputFieldWrap">
                <span class="input-floating-label">Ingresa el valor a transferir</span>
                <input
                    class="input-valor"
                    id="inputValor"
                    type="number"
                    min="1"
                    placeholder="Ingresa el valor a transferir"
                    autocomplete="off"
                    inputmode="numeric"
                >
            </div>
        </div>
    </div>

</main>

<!-- BOTÓN CONTINUAR FIJO -->
<div class="bottom-fixed">
    <a href="#" class="btn-continuar" id="btnContinuar">Continuar</a>
    <p class="progress-label">Paso 2 de 4</p>
    <div class="progress-track">
        <div class="progress-fill"></div>
    </div>
</div>

<script>
    var input = document.getElementById('inputValor');
    var fieldWrap = document.getElementById('inputFieldWrap');
    var btn = document.getElementById('btnContinuar');
    var headerBtn = document.getElementById('headerContinuar');

    input.addEventListener('input', function() {
        var val = this.value.trim();
        if (val && parseFloat(val) > 0) {
            fieldWrap.classList.add('tiene-valor');
            btn.classList.add('activo');
            btn.href = 'transferencia_paso4.php?valor=' + encodeURIComponent(val);
            headerBtn.classList.add('activo');
        } else {
            fieldWrap.classList.remove('tiene-valor');
            btn.classList.remove('activo');
            btn.href = '#';
            headerBtn.classList.remove('activo');
        }
    });

    btn.addEventListener('click', function(e) {
        if (!btn.classList.contains('activo')) e.preventDefault();
    });
</script>

</body>
</html>
