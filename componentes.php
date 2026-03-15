<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Componentes – Bancolombia</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos_nuevos.css">
    <link rel="stylesheet" href="css/elevacion.css">
    <link rel="stylesheet" href="css/facturas.css">
    <link rel="stylesheet" href="css/snackbar.css">
    <style>

        /* ─── Página de componentes ─── */
        body {
            background-color: #f2f2f4;
            background-image: none;
        }

        .comp-seccion {
            margin: 0 auto 2.5rem auto;
            max-width: 600px;
            width: 95%;
        }

        .comp-titulo-seccion {
            font-family: 'CIBFontSans-Bold', Arial, sans-serif;
            font-size: 0.7em;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: #888;
            margin: 2rem 0 0.75rem 0.25rem;
            padding: 0;
        }

        .comp-fila {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            align-items: center;
            margin-bottom: 0.75rem;
        }

        .comp-chip {
            display: inline-block;
            background: #fff;
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 2em;
            padding: 0.25em 0.75em;
            font-size: 0.78em;
            color: #555;
            font-family: 'OpenSans-Regular', sans-serif;
        }

        /* zig-zag demo inline */
        .zigzag-top-demo {
            width: 100%;
            height: 1.25rem;
            background: linear-gradient(135deg, #333 25%, transparent 25%),
                        linear-gradient(-135deg, #333 25%, transparent 25%);
            background-size: 1.25rem 1.25rem;
            background-position: 0 0, 0 0;
            background-repeat: repeat-x;
        }
        .zigzag-bottom-demo {
            width: 100%;
            height: 1.25rem;
            background: linear-gradient(45deg, #f2f2f4 25%, transparent 25%),
                        linear-gradient(-45deg, #f2f2f4 25%, transparent 25%);
            background-size: 1.25rem 1.25rem;
            background-position: 0 0, 0 0;
            background-repeat: repeat-x;
        }

        /* Divider recibo */
        .divider-demo {
            border: none;
            height: 2px;
            background: repeating-linear-gradient(
                to right,
                #ddd 0, #ddd 11px,
                transparent 11px, transparent 20px
            );
            margin: 1.25rem 0;
        }

        /* Acordeón demo */
        .accordion-item { border-radius: 0.75rem; overflow: hidden; background-color: #fff; }
        .accordion-header {
            display: flex; justify-content: space-between; align-items: center;
            padding: 1rem; background-color: #2A2A2A; color: white; cursor: pointer;
        }
        .accordion-header h2 { font-size: 1.125rem; font-weight: 600; font-family: 'CIBFontSans-Bold', sans-serif; margin: 0; }
        .accordion-icon { font-size: 1.125rem; color: white; line-height: 1; }
        .accordion-content { padding: 1rem; background-color: #fff; }
        .payment-detail-vertical { display: flex; flex-direction: column; margin-bottom: 1rem; }
        .payment-detail-vertical .detail-label { font-size: 0.75rem; color: #333; font-family: 'OpenSans-Regular', sans-serif; }
        .payment-detail-vertical .detail-value { font-size: 1.25rem; font-weight: 700; color: #333; font-family: 'CIBFontSans-Bold', sans-serif; }

        /* Detail rows recibo */
        .detail-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem; }
        .detail-label { font-size: 0.9rem; color: #333; flex-shrink: 0; width: 50%; }
        .detail-value { font-size: 0.9rem; font-weight: 700; color: #333; text-align: right; width: 50%; word-break: break-word; }
        .section-title { font-size: 1.1rem; font-weight: 700; color: #333; margin-bottom: 1.25rem; font-family: 'CIBFontSans-Bold', sans-serif; }

        /* Eye button */
        .eye-button {
            width: 2.5rem; height: 2.5rem; background-color: #fff; border-radius: 50%;
            display: flex; justify-content: center; align-items: center;
            border: solid #dad9de 1px; cursor: pointer;
        }

        /* Action buttons */
        .action-buttons {
            display: flex; justify-content: space-between;
            background-color: #fff; border-radius: 0.75rem; padding: 1.25rem;
        }
        .action-button { display: flex; flex-direction: column; align-items: center; text-align: center; width: 30%; }
        .action-emoji { font-size: 1.75rem; margin-bottom: 0.25rem; line-height: 1; }
        .action-button p { font-size: 0.75rem; color: #333; line-height: 1.2; font-family: 'OpenSans-Regular', sans-serif; margin: 0; }

        /* Bottom nav demo */
        .bottom-nav-demo {
            width: 100%; display: flex; justify-content: space-between;
            background-color: #fff; padding: 0.625rem 0.3125rem;
            border-radius: 0.75rem;
            box-shadow: 0 2px 4px -1px rgba(0,0,0,.2), 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.11);
        }
        .nav-item { display: flex; flex-direction: column; align-items: center; width: 20%; padding: 0.1rem 0; }
        .nav-emoji { font-size: 1.375rem; margin-bottom: 0.25rem; line-height: 1; }
        .nav-item p { font-size: 0.625rem; color: #333; text-align: center; line-height: 1.1; font-family: 'OpenSans-Regular', sans-serif; margin: 0; }

        /* Preloader demo */
        .preloader-demo {
            position: relative; background-color: rgba(0,0,0,0.5);
            border-radius: 0.75rem; height: 10rem;
            display: flex; justify-content: center; align-items: center;
        }
        .loader-container-demo {
            background-color: white; border-radius: 50%;
            width: 100px; height: 100px;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .spinner-demo {
            border: 2px solid #333; border-top: 2px solid #f3f3f3;
            border-radius: 50%; width: 32px; height: 32px;
            animation: spin-demo 1s linear infinite; margin-bottom: 6px;
        }
        @keyframes spin-demo { 0%{ transform:rotate(0deg); } 100%{ transform:rotate(360deg); } }
        .loader-text-demo { font-size: 10px; color: #333; font-family: 'OpenSans-Regular', sans-serif; font-weight: 600; }

        /* Toolbar demo */
        .toolbar-demo {
            background-color: #2c2A29; color: #fff;
            border-radius: 0.75rem;
            box-shadow: 0px 2px 4px -1px rgba(0,0,0,.2), 0px 4px 5px 0px rgba(0,0,0,.14), 0px 1px 10px 0px rgba(0,0,0,.12);
        }

        /* Snackbar demo */
        .snackbar-demo {
            border-radius: 0.5rem; overflow: hidden;
        }

        /* Separador visual entre variantes */
        .comp-gap { margin-top: 0.5rem; }
    </style>
</head>
<body>

<!-- ════════════════════════════════════
     ENCABEZADO DE LA PÁGINA
════════════════════════════════════ -->
<div style="background-color: #2c2A29; padding: 2rem 1rem 2.5rem; text-align: center; position: relative; overflow: hidden;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background-color: #FDDA24;"></div>
    <img src="img/logo.png" style="width: 3em; filter: brightness(0) invert(1); margin-bottom: 1rem;" onerror="this.style.display='none'">
    <h1 style="color: #FDDA24; font-family: 'CIBFontSans-Bold', Arial, sans-serif; font-size: 1.5em; margin: 0 0 0.25em 0; letter-spacing: -0.02em;">Guía de Componentes</h1>
    <p style="color: rgba(255,255,255,0.65); font-family: 'OpenSans-Regular', Arial, sans-serif; font-size: 0.82em; margin: 0; letter-spacing: 0.05em;">Sistema de diseño · Bancolombia App</p>
</div>


<!-- ════════════════════════════════════
     1. TIPOGRAFÍA
════════════════════════════════════ -->
<p class="comp-titulo-seccion">1 · Tipografía</p>

<div class="comp-seccion">
    <div class="rdm-tarjeta">
        <div class="rdm-tarjeta--cuerpo">

            <p class="rdm-tipografia--muestra1" style="margin:0 0 0.25rem 0; color:#2c2A29;">Muestra 1 · 2.2em</p>
            <p class="rdm-tipografia--titular" style="margin:0 0 0.25rem 0; color:#2c2A29;">Titular · 1.6em</p>
            <p class="rdm-tipografia--titulo" style="margin:0 0 0.25rem 0; color:#2c2A29;">Título · 1.4em · letter-spacing .05em</p>
            <p class="rdm-tipografia--subtitulo1" style="margin:0 0 0.25rem 0; color:#2c2A29;">Subtítulo 1 · 1.1em</p>
            <p class="rdm-tipografia--subtitulo2" style="margin:0 0 0.25rem 0; color:#2c2A29;">Subtítulo 2 · 1em</p>
            <p class="rdm-tipografia--cuerpo1" style="margin:0 0 0.25rem 0; color:#2c2A29;">Cuerpo 1 · 0.9em · line-height 1.5em — texto normal de párrafo con buena legibilidad</p>
            <p class="rdm-tipografia--cuerpo2" style="margin:0 0 0.25rem 0; color:#2c2A29;">Cuerpo 2 · 0.95em · bold · letter-spacing .1em</p>
            <p class="rdm-tipografia--leyenda" style="margin:0; color:#888;">Leyenda · 0.6em · letter-spacing .1em</p>

            <div class="rdm-tarjeta--separador" style="margin: 1rem 0;"></div>

            <p style="margin: 0 0 0.25rem 0; font-family: 'CIBFontSans-Bold', Arial, sans-serif; font-size: 0.85em; color:#555;">Fuente principal → <strong>CIBFontSans-Bold</strong></p>
            <p style="margin: 0 0 0.25rem 0; font-family: 'OpenSans-SemiBold', Arial, sans-serif; font-size: 0.85em; color:#555;">Fuente secundaria → <strong>OpenSans-SemiBold</strong></p>
            <p style="margin: 0; font-family: 'OpenSans-Regular', Arial, sans-serif; font-size: 0.85em; color:#555;">Fuente terciaria → <strong>OpenSans-Regular</strong></p>
        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     2. PALETA DE COLORES
════════════════════════════════════ -->
<p class="comp-titulo-seccion">2 · Paleta de colores</p>

<div class="comp-seccion">
    <div class="rdm-tarjeta">
        <div class="rdm-tarjeta--cuerpo">
            <div class="comp-fila" style="gap: 0.75rem; flex-wrap: wrap;">

                <?php
                $colores = [
                    ['#2c2A29', '#FDDA24', 'Primario', '#FDDA24'],
                    ['#FDDA24', '#2c2A29', 'Amarillo Bancolombia', '#2c2A29'],
                    ['#00c389', '#fff',    'Verde éxito', '#fff'],
                    ['#009688', '#fff',    'Verde teal', '#fff'],
                    ['#F44336', '#fff',    'Rojo error', '#fff'],
                    ['#2196F3', '#fff',    'Azul resultado', '#fff'],
                    ['#f2f2f4', '#2c2A29','Fondo gris', '#2c2A29'],
                    ['#fff',    '#2c2A29','Blanco / Card', '#2c2A29'],
                    ['#212121', '#fff',   'Oscuro snackbar', '#fff'],
                    ['#64DD17', '#fff',   'Verde contador', '#fff'],
                ];
                foreach ($colores as $c):
                ?>
                <div style="
                    background-color: <?= htmlspecialchars($c[0]) ?>;
                    color: <?= htmlspecialchars($c[1]) ?>;
                    border-radius: 0.5rem;
                    padding: 0.6rem 0.9rem;
                    min-width: 7rem;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.15);
                    border: 1px solid rgba(0,0,0,0.06);
                    font-family: 'OpenSans-Regular', sans-serif;
                ">
                    <div style="font-size: 0.65em; opacity: 0.75; margin-bottom: 0.2em;"><?= htmlspecialchars($c[0]) ?></div>
                    <div style="font-size: 0.8em; font-weight: 700;"><?= htmlspecialchars($c[2]) ?></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     3. BOTONES
════════════════════════════════════ -->
<p class="comp-titulo-seccion">3 · Botones</p>

<div class="comp-seccion">
    <div class="rdm-tarjeta">
        <div class="rdm-tarjeta--cuerpo">

            <div class="comp-fila">
                <button class="rdm-boton--resaltado">Resaltado (primario)</button>
                <button class="rdm-boton--primario">Primario oscuro</button>
            </div>
            <div class="comp-fila">
                <button class="rdm-boton--elevado">Elevado</button>
                <button class="rdm-boton--plano">Plano</button>
                <button class="rdm-boton--plano-resaltado">Plano resaltado</button>
            </div>
            <div class="comp-fila">
                <button class="rdm-boton--icono"><i class="zmdi zmdi-check zmdi-hc-lg"></i></button>
                <span class="comp-chip">rdm-boton--icono (circular)</span>
            </div>
            <div class="comp-fila">
                <button class="rdm-boton--resaltado" style="width:100%">Botón ancho completo (width 100%)</button>
            </div>

            <div class="rdm-tarjeta--separador" style="margin: 0.75rem 0;"></div>

            <!-- FAB demo estático -->
            <div style="position:relative; height: 5rem;">
                <button class="rdm-boton--fab" style="position:absolute; bottom:0.5rem; right:0.5rem;">
                    <i class="zmdi zmdi-plus zmdi-hc-lg"></i>
                </button>
                <span class="comp-chip" style="position:absolute; bottom:1.25rem; right:5rem;">rdm-boton--fab</span>
            </div>

        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     4. TARJETAS
════════════════════════════════════ -->
<p class="comp-titulo-seccion">4 · Tarjetas</p>

<div class="comp-seccion">

    <!-- Tarjeta estándar con avatar + título -->
    <div class="rdm-tarjeta">
        <div class="rdm-tarjeta--primario">
            <div class="rdm-tarjeta--avatar" style="background-image:url('img/logo.png'); background-color:#f2f2f4; flex-shrink:0;"></div>
            <div class="rdm-tarjeta--primario-contenedor" style="margin-left:0.75rem;">
                <p class="rdm-tarjeta--titulo">Cuenta de Ahorros</p>
                <p class="rdm-tarjeta--subtitulo">693-654723-78</p>
            </div>
        </div>
        <div class="rdm-tarjeta--separador"></div>
        <div class="rdm-tarjeta--cuerpo">
            <p class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.9em; font-family:'OpenSans-Regular',Arial,sans-serif; letter-spacing:-.3px; margin:0 0 0.15em 0;">Saldo Disponible</p>
            <p class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:bold; font-size:1.6em; letter-spacing:-.47px; margin:0;">$ 7.905.125,31</p>
        </div>
        <div class="rdm-tarjeta--acciones-derecha">
            <button class="rdm-boton--plano" style="color:#009688;">Ver movimientos</button>
        </div>
    </div>

    <!-- Tarjeta dashboard -->
    <div class="rdm-tarjeta">
        <div class="rdm-tarjeta--cuerpo">
            <p class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:700; font-size:0.85em; margin:0.25rem 0 0.5rem 0; font-family:'OpenSans-Regular',sans-serif;">RESUMEN DEL MES</p>
        </div>
        <div class="rdm-tarjeta--cuerpo" style="display:flex; justify-content:space-between; padding-top:0;">
            <div>
                <p class="rdm-tarjeta--dashboard-subtitulo-positivo">Ingresos</p>
                <p class="rdm-tarjeta--dashboard-titulo-positivo" style="margin-top: 0.1em;">$ 4.2M</p>
            </div>
            <div>
                <p class="rdm-tarjeta--dashboard-subtitulo-negativo">Egresos</p>
                <p class="rdm-tarjeta--dashboard-titulo-negativo" style="margin-top: 0.1em;">$ 1.8M</p>
            </div>
            <div>
                <p class="rdm-tarjeta--dashboard-subtitulo-neutral">Resultado</p>
                <p class="rdm-tarjeta--dashboard-titulo-resultado" style="margin-top: 0.1em;">$ 2.4M</p>
            </div>
        </div>
    </div>

    <!-- Tarjeta con imagen media -->
    <div class="rdm-tarjeta">
        <div class="rdm-tarjeta--media" style="background-image:url('img/vistas.jpg'); background-color:#2c2A29;">
        </div>
        <div class="rdm-tarjeta--cuerpo">
            <p class="rdm-tarjeta--titulo-largo" style="font-weight:700; color:#2c2A29; letter-spacing:-.47px; margin:0.25rem 0 0.1rem 0; font-size:1.2em;">Titular de tarjeta media</p>
            <p class="rdm-tarjeta--subtitulo-largo">Subtítulo en color secundario rgba(0,0,0,0.6)</p>
        </div>
        <div class="rdm-tarjeta--acciones-izquierda">
            <button class="rdm-boton--plano" style="color:#009688;">Acción</button>
        </div>
    </div>

</div>


<!-- ════════════════════════════════════
     5. ELEVACIÓN (sombras dp)
════════════════════════════════════ -->
<p class="comp-titulo-seccion">5 · Elevación (niveles dp)</p>

<div class="comp-seccion">
    <div style="display:flex; flex-wrap:wrap; gap:0.75rem;">
        <?php foreach ([0,1,2,4,6,8,16,24] as $dp): ?>
        <div class="rdm-tarjeta--<?= $dp ?>dp" style="width:5.5rem; padding:0.75rem; text-align:center; margin:0;">
            <p style="font-size:0.75em; color:#555; font-family:'OpenSans-Regular',sans-serif; margin:0;"><?= $dp ?>dp</p>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- ════════════════════════════════════
     6. LISTAS
════════════════════════════════════ -->
<p class="comp-titulo-seccion">6 · Listas</p>

<div class="comp-seccion">

    <!-- Lista sencilla con iconos zmdi -->
    <section class="rdm-lista-sencillo">

        <article class="rdm-lista--item-sencillo">
            <div class="rdm-lista--izquierda-sencillo">
                <div class="rdm-lista--contenedor">
                    <div class="rdm-lista--icono"><i class="zmdi zmdi-money-box zmdi-hc-2x"></i></div>
                </div>
                <div class="rdm-lista--contenedor" style="margin-left:0.75rem;">
                    <h2 class="rdm-lista--titulo"><b>No inscritos Bancolombia / Nequi</b></h2>
                    <p class="rdm-lista--texto-secundario">Transferir a cuenta externa</p>
                </div>
            </div>
            <i class="zmdi zmdi-chevron-right" style="color:#bbb;"></i>
        </article>

        <article class="rdm-lista--item-sencillo">
            <div class="rdm-lista--izquierda-sencillo">
                <div class="rdm-lista--contenedor">
                    <div class="rdm-lista--icono"><i class="zmdi zmdi-mail-send zmdi-hc-2x"></i></div>
                </div>
                <div class="rdm-lista--contenedor" style="margin-left:0.75rem;">
                    <h2 class="rdm-lista--titulo"><b>Propios e inscritos Bancolombia</b></h2>
                    <p class="rdm-lista--texto-secundario">Entre mis cuentas</p>
                </div>
            </div>
            <span class="rdm-lista--contador">3</span>
        </article>

        <article class="rdm-lista--item-sencillo">
            <div class="rdm-lista--izquierda-sencillo">
                <div class="rdm-lista--contenedor">
                    <div class="rdm-lista--avatar-color" style="background-color:#FDDA24; color:#2c2A29; flex-shrink:0;">
                        <span class="rdm-lista--avatar-texto">BC</span>
                    </div>
                </div>
                <div class="rdm-lista--contenedor" style="margin-left:0.75rem;">
                    <h2 class="rdm-lista--titulo">Código QR</h2>
                    <p class="rdm-lista--texto-secundario">Pago con QR Bancolombia</p>
                </div>
            </div>
            <span class="rdm-lista--texto-redondo">Nuevo</span>
        </article>

    </section>

    <!-- Lista con porcentajes -->
    <section class="rdm-lista--porcentaje">
        <div class="rdm-lista--titulo-largo">Distribución de gastos</div>

        <?php
        $items_porcentaje = [
            ['Alimentación',  '$ 450.000', 65, '#009688'],
            ['Transporte',    '$ 120.000', 25, '#2196F3'],
            ['Entretenimiento','$ 80.000', 15, '#FDDA24'],
        ];
        foreach ($items_porcentaje as $it):
        ?>
        <div class="rdm-lista--item-porcentaje">
            <div class="rdm-lista--izquierda-porcentaje">
                <span class="rdm-lista--titulo-porcentaje"><?= htmlspecialchars($it[0]) ?></span>
                <div style="background:#f2f2f4; border-radius:2em; height:6px; margin-top:4px;">
                    <div style="background:<?= htmlspecialchars($it[3]) ?>; width:<?= $it[2] ?>%; height:100%; border-radius:2em;"></div>
                </div>
            </div>
            <div class="rdm-lista--derecha-porcentaje">
                <span class="rdm-lista--texto-resaltado"><?= htmlspecialchars($it[1]) ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- Lista doble -->
    <section class="rdm-lista-amplia">
        <article class="rdm-lista--item-doble">
            <div>
                <p class="rdm-lista--titulo">Pagos pendientes</p>
                <p class="rdm-lista--texto-secundario">Hace 2 horas</p>
            </div>
            <div style="text-align:right;">
                <p class="rdm-lista--texto-valor rdm-lista--texto-negativo">- $ 85.000</p>
                <p class="rdm-lista--texto-secundario">Debitado</p>
            </div>
        </article>
        <article class="rdm-lista--item-doble">
            <div>
                <p class="rdm-lista--titulo">Abono recibido</p>
                <p class="rdm-lista--texto-secundario">Ayer, 3:45 p.m.</p>
            </div>
            <div style="text-align:right;">
                <p class="rdm-lista--texto-valor rdm-lista--texto-positivo">+ $ 500.000</p>
                <p class="rdm-lista--texto-secundario">Acreditado</p>
            </div>
        </article>
    </section>

</div>


<!-- ════════════════════════════════════
     7. FORMULARIOS
════════════════════════════════════ -->
<p class="comp-titulo-seccion">7 · Formularios</p>

<div class="comp-seccion">

    <section class="rdm-formulario">
        <form autocomplete="off" onsubmit="return false;">

            <p class="rdm-formularios--label"><label for="c_producto_origen">Producto origen</label></p>
            <p>
                <select class="rdm-formularios--input-grande" id="c_producto_origen" name="producto_origen">
                    <option value=""></option>
                    <option value="69365472378">69365472378 — Cuenta Ahorros</option>
                    <option value="01958965563">01958965563 — Cuenta Corriente</option>
                </select>
            </p>
            <p class="rdm-formularios--ayuda">Elige el producto origen</p>

            <p class="rdm-formularios--label"><label for="c_producto_destino">Producto destino</label></p>
            <p><input class="rdm-formularios--input-grande" type="number" id="c_producto_destino" name="producto_destino" placeholder="#" /></p>
            <p class="rdm-formularios--ayuda">Ingresa el número de cuenta destino</p>

            <p class="rdm-formularios--label"><label for="c_dinero">Valor a enviar</label></p>
            <p><input class="rdm-formularios--input-grande" type="number" id="c_dinero" name="dinero" placeholder="$" /></p>
            <p class="rdm-formularios--ayuda">Ingresa el valor a enviar</p>

            <p class="rdm-formularios--label"><label for="c_descripcion">Descripción</label></p>
            <p><input class="rdm-formularios--input-grande" type="text" id="c_descripcion" name="descripcion" placeholder="Descripción (opcional)" /></p>

            <p class="rdm-formularios--label"><label for="c_tipo_destino">Tipo de cuenta destino</label></p>
            <p>
                <select class="rdm-formularios--input-grande" id="c_tipo_destino" name="tipo_destino">
                    <option value=""></option>
                    <option value="Ahorros / Bancolombia A la mano">Ahorros / Bancolombia A la mano</option>
                    <option value="Corriente">Corriente</option>
                    <option value="Nequi">Nequi</option>
                </select>
            </p>
            <p class="rdm-formularios--ayuda">Elige el tipo de cuenta destino</p>

            <p class="rdm-formularios--submit">
                <button type="submit" class="rdm-boton--resaltado" style="width:100%">Enviar dinero</button>
            </p>

        </form>
    </section>

    <!-- Formulario nuevo estilo (estilos_nuevos.css) -->
    <h4 style="font-family:'CIBFontSans-Bold',sans-serif; color:#2c2A29; margin:1.5rem 0 0.5rem 0;">Formulario estilo nuevo (contenedor_formulario)</h4>

    <div class="contenedor_formulario">
        <p class="rdm-formularios--label"><label for="c_monto">Monto del pago</label></p>
        <p><input class="rdm-formularios--input-grande" type="number" id="c_monto" name="monto" placeholder="$" /></p>
        <br>
        <p class="rdm-formularios--label"><label for="c_punto">Punto de venta</label></p>
        <p><input class="rdm-formularios--input-grande" type="text" id="c_punto" name="punto_venta" placeholder="Nombre del comercio" /></p>
        <br>
        <p class="rdm-formularios--label"><label for="c_codigo">Código de negocio</label></p>
        <p><input class="rdm-formularios--input-grande" type="number" id="c_codigo" name="codigo_negocio" placeholder="#" /></p>
    </div>
    <p class="rdm-formularios--submit">
        <button class="rdm-boton--resaltado" style="width:100%">Confirmar pago Bre-B</button>
    </p>

</div>


<!-- ════════════════════════════════════
     8. TOOLBAR / CABECERA
════════════════════════════════════ -->
<p class="comp-titulo-seccion">8 · Toolbar / Cabecera</p>

<div class="comp-seccion">

    <!-- Toolbar oscuro clásico -->
    <div class="rdm-toolbar--contenedor toolbar-demo" style="position:relative; border-radius:0.75rem;">
        <div class="rdm-toolbar--fila" style="background-color:#2c2A29; border-radius:0.75rem;">
            <div class="rdm-toolbar--izquierda">
                <i class="zmdi zmdi-arrow-left zmdi-hc-lg"></i>
            </div>
            <div class="rdm-toolbar--centro">
                <span class="rdm-toolbar--titulo-centro">Transferencias</span>
            </div>
            <div class="rdm-toolbar--derecha">
                <div class="rdm-toolbar--avatar" style="background-image:url('img/logo.png'); background-color:#FDDA24;"></div>
            </div>
        </div>
    </div>

    <!-- Toolbar con título + subtítulo -->
    <div class="rdm-tarjeta--2dp" style="margin-top:0.75rem; padding:0;">
        <div class="rdm-toolbar--fila" style="background-color:#2c2A29; color:#fff; border-radius:0.3em; height:auto; padding:0.9rem 1rem;">
            <div class="rdm-toolbar--izquierda">
                <i class="zmdi zmdi-menu zmdi-hc-lg"></i>
                <div style="margin-left:1rem;">
                    <p class="rdm-toolbar--titulo" style="margin:0; font-size:1em;">Saldos y movimientos</p>
                    <p class="rdm-toolbar--texto-secundario" style="color:rgba(255,255,255,0.65);">Cuenta principal</p>
                </div>
            </div>
            <div class="rdm-toolbar--derecha">
                <div class="rdm-toolbar--contador">5</div>
            </div>
        </div>
    </div>

    <!-- Header nuevo (estilos_nuevos.css) -->
    <h4 style="font-family:'CIBFontSans-Bold',sans-serif; color:#2c2A29; margin:1.25rem 0 0.5rem 0;">Header estilo nuevo (app-container)</h4>
    <div style="background-color:#f2f2f4; border-radius:0.75rem; overflow:hidden;
                box-shadow:0 2px 4px -1px rgba(0,0,0,.2), 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.11);">
        <div style="display:flex; justify-content:space-between; align-items:center; padding:0.5rem; background-color:#f2f2f4;">
            <div class="nav-text" style="flex:1;">
                <!-- vacío izquierda -->
            </div>
            <div style="display:flex; align-items:center; justify-content:center; flex:0 0 auto;">
                <img src="img/logo.png" class="logo" style="height:2.5rem;" onerror="this.style.display='none'">
            </div>
            <div class="nav-text" style="flex:1; justify-content:flex-end;">
                <span class="logout-text" style="font-size:0.85rem; color:#333; font-family:'CIBFontSans-Bold',sans-serif;">Cerrar sesión</span>
                <span style="margin-left:6px; font-size:1.1rem;">→</span>
            </div>
        </div>
    </div>

</div>


<!-- ════════════════════════════════════
     9. BARRA DE NAVEGACIÓN INFERIOR
════════════════════════════════════ -->
<p class="comp-titulo-seccion">9 · Barra de navegación inferior</p>

<div class="comp-seccion">

    <!-- Estilo clásico (toolbar.css) -->
    <div style="border-radius:0.75rem; overflow:hidden;
                box-shadow:0 2px 4px -1px rgba(0,0,0,.2), 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.11);">
        <div class="contenedor_menu">
            <div class="columna_menu" style="background-color:#fff;">
                <img src="img/inicio.jpg" style="height:1.3em;" onerror="this.style.display='none'">
                <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.7em; font-family:'OpenSans-Regular',Arial,sans-serif; margin:0.2em 0 0 0;">Inicio</h1>
            </div>
            <div class="columna_menu" style="background-color:#FDDA24;">
                <img src="img/transaccionesa.jpg" style="height:1.3em;" onerror="this.style.display='none'">
                <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.7em; font-family:'OpenSans-Regular',Arial,sans-serif; margin:0.2em 0 0 0;">Transacciones</h1>
            </div>
            <div class="columna_menu" style="background-color:#fff;">
                <img src="img/explorar.jpg" style="height:1.3em;" onerror="this.style.display='none'">
                <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.7em; font-family:'OpenSans-Regular',Arial,sans-serif; margin:0.2em 0 0 0;">Explorar</h1>
            </div>
            <div class="columna_menu" style="background-color:#fff;">
                <img src="img/tramites.jpg" style="height:1.3em;" onerror="this.style.display='none'">
                <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.7em; font-family:'OpenSans-Regular',Arial,sans-serif; margin:0.2em 0 0 0;">Trámites</h1>
            </div>
            <div class="columna_menu" style="background-color:#fff;">
                <img src="img/ajustes.jpg" style="height:1.3em;" onerror="this.style.display='none'">
                <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.7em; font-family:'OpenSans-Regular',Arial,sans-serif; margin:0.2em 0 0 0;">Ajustes</h1>
            </div>
        </div>
    </div>

    <!-- Estilo nuevo (estilos_nuevos.css) -->
    <div class="bottom-nav-demo" style="margin-top:0.75rem;">
        <div class="nav-item">
            <div class="nav-emoji">🏠</div>
            <p>Inicio</p>
        </div>
        <div class="nav-item" style="border-bottom: 3px solid #FDDA24;">
            <div class="nav-emoji">↔</div>
            <p>Transferencias</p>
        </div>
        <div class="nav-item">
            <div class="nav-emoji">🔍</div>
            <p>Explorar</p>
        </div>
        <div class="nav-item">
            <div class="nav-emoji">📋</div>
            <p>Trámites</p>
        </div>
        <div class="nav-item">
            <div class="nav-emoji">⚙</div>
            <p>Ajustes</p>
        </div>
    </div>

</div>


<!-- ════════════════════════════════════
     10. BOTONES DE ACCIÓN RÁPIDA
════════════════════════════════════ -->
<p class="comp-titulo-seccion">10 · Botones de acción rápida</p>

<div class="comp-seccion">
    <div class="action-buttons">
        <div class="action-button">
            <div class="action-emoji">↔</div>
            <p>Transferir</p>
        </div>
        <div class="action-button">
            <div class="action-emoji">📷</div>
            <p>Pagar QR</p>
        </div>
        <div class="action-button">
            <div class="action-emoji">💳</div>
            <p>Recargar</p>
        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     11. COMPROBANTE / RECIBO (estilo Bre-B)
════════════════════════════════════ -->
<p class="comp-titulo-seccion">11 · Comprobante / Recibo</p>

<?php
$comp_fecha_dia = date('j');
$comp_mes = ucfirst(substr(date('F'), 0, 3));
$comp_ano  = date('Y');
$comp_hora = date('h:i');
$comp_f1   = substr(date('a'), -2, 1);
$comp_f2   = substr(date('a'), -1);
$comp_no   = 'TR' . strtoupper(substr(md5(rand()), 0, 8)) . 'EC';
?>

<div class="comp-seccion">
    <div class="receipt-container rdm-tarjeta--4dp" style="max-width:100%;">

        <!-- Zigzag superior -->
        <div class="zigzag-top-demo"></div>

        <!-- Contenido -->
        <div style="padding: 1.5rem 1.5rem 2rem;">

            <!-- Éxito -->
            <div style="text-align:center; margin-bottom:1.5rem;">
                <div class="success-icon" style="margin: 0 auto 0.875rem; background-color:#65dbb8; border-radius:50%; width:3.25rem; height:3.25rem; display:flex; justify-content:center; align-items:center; border: solid 1px #12b786;">
                    <img src="img/nueva/exito.jpg" style="height:1.1em;" onerror="this.style.display='none'">
                    <span style="color:#fff; font-size:1.5rem;" class="zmdi zmdi-check"></span>
                </div>
                <h1 class="success-title" style="font-size:1.5rem; font-weight:700; font-family:'CIBFontSans-Bold',sans-serif; color:#333; margin-bottom:0.25em;">¡Pago exitoso!</h1>
                <p style="font-size:0.85rem; color:#666; font-family:'OpenSans-Regular',sans-serif; margin:0;">Comprobante No. <?= htmlspecialchars($comp_no) ?></p>
                <p style="font-size:0.85rem; color:#666; font-family:'OpenSans-Regular',sans-serif; margin:0;"><?= $comp_fecha_dia ?> <?= $comp_mes ?> <?= $comp_ano ?> — <?= $comp_hora ?> <?= $comp_f1 ?>.<?= $comp_f2 ?>.</p>
            </div>

            <!-- Divider -->
            <hr class="divider-demo">

            <!-- Valor -->
            <div style="text-align:center; margin-bottom:1.5rem;">
                <p style="font-size:0.9rem; color:#333; font-family:'OpenSans-Regular',sans-serif; margin:0 0 0.25em 0;">Valor del pago</p>
                <p style="font-size:2rem; font-weight:700; color:#333; font-family:'CIBFontSans-Bold',sans-serif; margin:0 0 0.5em 0;">$ 85.000</p>
                <p style="font-size:0.85rem; color:#333; font-family:'OpenSans-Regular',sans-serif; margin:0;">Costo del pago</p>
                <p style="font-size:1rem; font-weight:700; color:#333; font-family:'CIBFontSans-Bold',sans-serif; margin:0;"><span>$ 0</span><span style="font-size:0.7rem; font-weight:600;">,00</span></p>
            </div>

            <!-- Divider -->
            <hr class="divider-demo">

            <!-- Destino -->
            <h2 class="section-title">¿A quién le llegó la plata?</h2>
            <div class="detail-row">
                <span class="detail-label">Punto de venta</span>
                <span class="detail-value">MOLIDO CAF***</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Código de negocio</span>
                <span class="detail-value">0041561986</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Banco destino</span>
                <span class="detail-value">Bancolombia</span>
            </div>

            <!-- Divider -->
            <hr class="divider-demo">

            <!-- Origen -->
            <h2 class="section-title">¿De dónde salió la plata?</h2>
            <div class="detail-row">
                <span class="detail-label">Tipo</span>
                <span class="detail-value">Ahorros</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Número</span>
                <span class="detail-value">693-654723-78</span>
            </div>

        </div>

        <!-- Zigzag inferior -->
        <div class="zigzag-bottom-demo"></div>
    </div>
</div>


<!-- ════════════════════════════════════
     12. ACORDEÓN
════════════════════════════════════ -->
<p class="comp-titulo-seccion">12 · Acordeón</p>

<div class="comp-seccion">
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'none' ? 'block' : 'none'">
                <h2>Detalle del pago</h2>
                <span class="accordion-icon zmdi zmdi-chevron-down"></span>
            </div>
            <div class="accordion-content">
                <div class="payment-detail-vertical">
                    <span class="detail-label">Punto de venta</span>
                    <span class="detail-value">MOLIDO CAFE Y PAN</span>
                </div>
                <div class="payment-detail-vertical">
                    <span class="detail-label">Código de negocio</span>
                    <span class="detail-value">0041561986</span>
                </div>
                <div class="payment-detail-vertical">
                    <span class="detail-label">Valor</span>
                    <span class="detail-value">$ 85.000</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     13. SNACKBARS / NOTIFICACIONES
════════════════════════════════════ -->
<p class="comp-titulo-seccion">13 · Snackbars / Notificaciones</p>

<div class="comp-seccion">
    <div class="snackbar-demo" style="margin-bottom:0.5rem;">
        <div class="rdm-snackbar--primario" style="position:relative; border-radius:0.5rem; width:100%; padding:0.6rem 1rem; display:flex; justify-content:space-between; align-items:center;">
            <span class="rdm-snackbar--titulo">Transferencia realizada con éxito.</span>
            <button class="rdm-boton--plano" style="color:#FDDA24; padding:0.25em 0.5em; box-shadow:none; font-size:0.8em;">Cerrar</button>
        </div>
    </div>
    <div class="snackbar-demo" style="margin-bottom:0.5rem;">
        <div class="rdm-snackbar--primario-error" style="position:relative; border-radius:0.5rem; width:100%; padding:0.6rem 1rem; display:flex; justify-content:space-between; align-items:center;">
            <span class="rdm-snackbar--titulo">Error al procesar el pago.</span>
            <button class="rdm-boton--plano" style="color:#fff; padding:0.25em 0.5em; box-shadow:none; font-size:0.8em;">Reintentar</button>
        </div>
    </div>
    <div class="snackbar-demo">
        <div class="rdm-snackbar--primario-aviso" style="position:relative; border-radius:0.5rem; width:100%; padding:0.6rem 1rem; display:flex; justify-content:space-between; align-items:center;">
            <span class="rdm-snackbar--titulo">Saldo actualizado correctamente.</span>
            <button class="rdm-boton--plano" style="color:#fff; padding:0.25em 0.5em; box-shadow:none; font-size:0.8em;">OK</button>
        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     14. MODAL
════════════════════════════════════ -->
<p class="comp-titulo-seccion">14 · Modal</p>

<div class="comp-seccion">

    <!-- Botón para abrir modal -->
    <button class="rdm-boton--primario" onclick="document.getElementById('modalDemo').style.display='block'; document.getElementById('backdropDemo').style.display='block';">
        Abrir modal de ejemplo
    </button>

    <!-- Backdrop -->
    <div id="backdropDemo" class="modal-backdrop" style="display:none; z-index:1040;" onclick="document.getElementById('modalDemo').style.display='none'; this.style.display='none';"></div>

    <!-- Modal -->
    <div id="modalDemo" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; z-index:1050; display:none; overflow:auto;">
        <div class="modal-dialog modal-dialog-centered" style="max-width:480px; margin:auto; padding:1rem;">
            <div class="modal-content">
                <div class="rdm-tarjeta--primario-largo" style="background-color:#2c2A29; border-radius:0.3rem 0.3rem 0 0; padding:1rem;">
                    <p class="rdm-tarjeta--titulo-largo" style="color:#FDDA24; font-weight:700; font-size:1.1em; margin:0;">Confirmar transferencia</p>
                </div>
                <div class="rdm-tarjeta--modal-cuerpo">
                    <p>¿Estás seguro de que deseas transferir <strong>$ 150.000</strong> a la cuenta <strong>693-654723-78</strong>?</p>
                    <p style="margin-top:0.5rem; font-size:0.85em; color:#666;">Esta operación no se puede deshacer.</p>
                </div>
                <div class="rdm-tarjeta--separador"></div>
                <div class="rdm-tarjeta--acciones-derecha">
                    <button class="rdm-boton--plano" onclick="document.getElementById('modalDemo').style.display='none'; document.getElementById('backdropDemo').style.display='none';">Cancelar</button>
                    <button class="rdm-boton--resaltado" onclick="document.getElementById('modalDemo').style.display='none'; document.getElementById('backdropDemo').style.display='none';">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- ════════════════════════════════════
     15. PRELOADER / LOADING
════════════════════════════════════ -->
<p class="comp-titulo-seccion">15 · Preloader / Loading</p>

<div class="comp-seccion">
    <!-- Preloader moderno (estilos_nuevos.css) -->
    <div class="preloader-demo">
        <div class="loader-container-demo">
            <div class="spinner-demo"></div>
            <div class="loader-text-demo">Cargando...</div>
        </div>
    </div>

    <!-- Loading clásico (loader.gif) -->
    <div class="rdm-tarjeta--2dp" style="display:flex; flex-direction:column; align-items:center; padding:1.5rem; margin-top:0.75rem;">
        <img src="img/loader.gif" style="width:3.5em;" onerror="this.style.display='none'">
        <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:0.9em; font-family:'OpenSans-Regular',Arial,sans-serif; letter-spacing:-.3px; margin-top:0.75rem; text-align:center;">Validando Clave<br>Dinámica...</h1>
    </div>
</div>


<!-- ════════════════════════════════════
     16. FACTURA / TICKET
════════════════════════════════════ -->
<p class="comp-titulo-seccion">16 · Factura / Ticket</p>

<div class="comp-seccion">
    <div class="rdm-factura-ticket">
        <div class="rdm-factura--ticket-contenedor">

            <div class="rdm-factura--ticket-fila">
                <strong>COMPROBANTE DE PAGO</strong>
            </div>
            <div class="rdm-factura--ticket-fila">
                <img src="img/logo.png" style="width:2em;" onerror="this.style.display='none'"> Bancolombia
            </div>

            <div class="rdm-factura--ticket-item">
                <span class="rdm-factura--ticket-izquierda">Fecha</span>
                <span class="rdm-factura--ticket-derecha"><?= $comp_fecha_dia ?>/<?= date('m') ?>/<?= $comp_ano ?></span>
            </div>
            <div class="rdm-factura--ticket-item">
                <span class="rdm-factura--ticket-izquierda">Hora</span>
                <span class="rdm-factura--ticket-derecha"><?= $comp_hora ?> <?= $comp_f1 ?>.<?= $comp_f2 ?>.</span>
            </div>
            <div class="rdm-factura--ticket-item">
                <span class="rdm-factura--ticket-izquierda">Comprobante</span>
                <span class="rdm-factura--ticket-derecha"><?= htmlspecialchars($comp_no) ?></span>
            </div>
            <div class="rdm-factura--ticket-item">
                <span class="rdm-factura--ticket-izquierda">Producto origen</span>
                <span class="rdm-factura--ticket-derecha">Ahorros 693-****-78</span>
            </div>
            <div class="rdm-factura--ticket-item">
                <span class="rdm-factura--ticket-izquierda">Valor enviado</span>
                <span class="rdm-factura--ticket-derecha"><strong>$ 85.000</strong></span>
            </div>

            <div class="rdm-factura--ticket-fila" style="margin-top:0.5rem;">
                <small style="color:#777; font-family:'OpenSans-Regular',sans-serif; font-size:0.7em;">Conserve este comprobante</small>
            </div>

        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     17. ESTADO VACÍO
════════════════════════════════════ -->
<p class="comp-titulo-seccion">17 · Estado vacío</p>

<div class="comp-seccion">
    <div class="rdm-tarjeta">
        <div class="rdm-vacio--caja">
            <i class="zmdi zmdi-receipt zmdi-hc-4x" style="color:#ddd; margin-bottom:1rem;"></i>
            <p class="rdm-tipografia--subtitulo1" style="color:#aaa; margin:0 0 0.5rem 0; font-family:'OpenSans-Regular',sans-serif;">Sin movimientos</p>
            <p class="rdm-tipografia--cuerpo1" style="color:#bbb; margin:0; font-family:'OpenSans-Regular',sans-serif;">No hay transacciones recientes<br>para mostrar.</p>
        </div>
    </div>
</div>


<!-- ════════════════════════════════════
     18. TARJETA CUENTA (estilo índice)
════════════════════════════════════ -->
<p class="comp-titulo-seccion">18 · Tarjeta de cuenta bancaria</p>

<div class="comp-seccion">
    <section class="rdm-tarjeta">
        <div class="rdm-tarjeta--cuerpo">
            <div style="margin-top:0.8em; margin-bottom:0.5em;">

                <div style="display:flex; justify-content:space-between; align-items:flex-start;">
                    <div>
                        <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:bold; font-size:1.35em; letter-spacing:-.47px; margin:0;">Cuenta de Ahorro</h1>
                        <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:500; font-size:1em; font-family:'OpenSans-Regular',Arial,sans-serif; letter-spacing:-.3px; margin:0.1em 0 0 0;">Ahorros</h1>
                    </div>
                    <span style="font-size:0.8em; font-family:'OpenSans-Regular',sans-serif; color:#888; padding-top:0.2em;">Saldo Disponible</span>
                </div>

                <div style="margin-top:0.4em; display:flex; justify-content:space-between; align-items:flex-end;">
                    <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:bold; font-size:1.2em; font-family:'OpenSans-Regular',Arial,sans-serif; letter-spacing:-.47px; margin:0;">693-654723-78</h1>
                    <h1 class="rdm-tarjeta--titulo-largo" style="color:#2c2A29; font-weight:bold; font-size:1.55em; letter-spacing:-.47px; margin:0;">$ 7.905.125,31</h1>
                </div>

            </div>
            <div style="text-align:center; padding:0.25em 0 0.5em 0;">
                <span style="color:#2c2A29; font-size:0.8em; font-family:'OpenSans-Regular',sans-serif; text-decoration:underline; cursor:pointer;">Ver detalle y movimientos</span>
            </div>
        </div>
    </section>
</div>


<!-- ════════════════════════════════════
     19. SELECTOR DE PAGOS (select con redirect)
════════════════════════════════════ -->
<p class="comp-titulo-seccion">19 · Selector de punto de pago</p>

<div class="comp-seccion">
    <section class="rdm-lista-sencillo">
        <article class="rdm-lista--item-sencillo" style="flex-direction:column; align-items:stretch; gap:0.5rem;">

            <div class="rdm-lista--izquierda-sencillo" style="margin-bottom:0.5rem;">
                <div class="rdm-lista--contenedor">
                    <div class="rdm-lista--icono"><i class="zmdi zmdi-store zmdi-hc-2x"></i></div>
                </div>
                <div class="rdm-lista--contenedor" style="margin-left:0.75rem;">
                    <h2 class="rdm-lista--titulo"><b>Puntos de pago disponibles</b></h2>
                </div>
            </div>

            <select id="demoSelector" onchange="if(this.value){ alert('Iría a: ' + this.value); this.value=''; }" style="font-family:'CIBFontSans-Bold',Arial,sans-serif; font-size:0.9em; width:100%;">
                <option value="">--- Elija una opción ---</option>
                <optgroup label="Pagos No Inscritos">
                    <option value="pago_no_inscritos_f.php">People Pizza 80</option>
                    <option value="pago_no_inscritos_f.php">TQ Pedregal</option>
                </optgroup>
                <optgroup label="Pagos Bre-b (Interoperables)">
                    <option value="pago_breb_f.php">Pago QR Bre-b (General)</option>
                    <option value="pago_breb_f.php">Bre-b Healthy Colombia</option>
                    <option value="pago_breb_f.php">Bre-b Pergamino Arkadia</option>
                </optgroup>
            </select>

        </article>
    </section>
</div>


<!-- ════════════════════════════════════
     20. MOSAICO
════════════════════════════════════ -->
<p class="comp-titulo-seccion">20 · Mosaico</p>

<div class="comp-seccion">
    <div style="display:flex; gap:0.5rem; overflow-x:auto; padding-bottom:0.5rem;">
        <?php
        $mosaicos = [
            ['#2c2A29', 'Transferencias', 'Entre cuentas propias'],
            ['#009688', 'Pagos QR', 'Bancolombia & Nequi'],
            ['#FDDA24', 'Recarga', 'Celular y servicios'],
        ];
        foreach ($mosaicos as $m):
        ?>
        <div class="rdm-mosaico--item" style="min-width:180px; flex-shrink:0;">
            <div class="rdm-mosaico--avatar" style="background-color:<?= htmlspecialchars($m[0]) ?>; height:140px; border-radius:0.5em;"></div>
            <div class="rdm-mosaico--secundario" style="border-radius:0 0 0.5em 0.5em; width:100%; box-sizing:border-box;">
                <span class="rdm-mosaico--titulo" style="color:<?= ($m[0] === '#FDDA24') ? '#2c2A29' : '#fff' ?>;"><?= htmlspecialchars($m[1]) ?></span>
                <span class="rdm-mosaico--texto" style="color:<?= ($m[0] === '#FDDA24') ? 'rgba(0,0,0,0.6)' : 'rgba(255,255,255,0.8)' ?>;"><?= htmlspecialchars($m[2]) ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- ════════════════════════════════════
     PIE DE PÁGINA
════════════════════════════════════ -->
<div style="text-align:center; padding:2rem 1rem 4rem; color:#aaa; font-family:'OpenSans-Regular',sans-serif; font-size:0.75em;">
    <img src="img/logo.png" style="width:2em; opacity:0.3; margin-bottom:0.5rem; display:block; margin:0 auto 0.5rem;" onerror="this.style.display='none'">
    Guía de componentes · Bancolombia App<br>
    Sistema de diseño por Danny Estrada
</div>

<!-- Script solo para el acordeón -->
<script>
    // Cerrar el contenido del acordeón por defecto
    document.querySelectorAll('.accordion-content').forEach(function(el) {
        el.style.display = 'none';
    });
</script>

</body>
</html>
