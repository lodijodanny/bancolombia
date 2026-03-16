<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Bancolombia</title>
		<link rel="stylesheet" href="css/estilos.css">

		<style>
		    .container {
		      display: flex;
		      justify-content: space-between;
		    }

		    .div1, .div2 {
		      flex: 1;
		    }

		    .div1 {
		      text-align: left;
		    }

		    .div2 {
		      text-align: right;
		    }
		</style>



		<script>
	    window.addEventListener("load", function() {
	      var loading = document.getElementById("loading");
	      var video = document.getElementById("loading-video");

	      // Tiempo mínimo de visualización
	      var minTime = 3000; // 3 segundos
	      var videoReady = false;

	      // Función para ocultar el preloader
	      function hideLoading() {
	        if (loading) {
	          loading.style.display = "none";
	        }
	      }

	      // Cuando el video puede reproducirse
	      video.addEventListener("canplay", function() {
	        videoReady = true;
	        setTimeout(hideLoading, minTime);
	      });

	      // Si el video falla, ocultarlo igual
	      video.addEventListener("error", function() {
	        console.warn("Error al cargar el video");
	        setTimeout(hideLoading, minTime);
	      });

	      // Fallback: si no carga en 8 segundos, ocultar de todas formas
	      setTimeout(function() {
	        hideLoading();
	      }, 8000);

	      // Intentar reproducir manualmente si autoplay no funcionó
	      video.play().catch(function(error) {
	        console.warn("Autoplay bloqueado o error:", error);
	      });
	    });
	  </script>



	  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      // Obtener el elemento por su id
      var valorElement = document.getElementById('valor');

      // Valor inicial
      var valorOriginal = 7905125100.31;

      // Obtener el valor original formateado con el símbolo de dólar y los separadores de miles y decimales adecuados
      var valorFormateado = '$ ' + valorOriginal.toLocaleString('es', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

      // Actualizar el contenido del elemento con el valor inicial
      valorElement.innerHTML = valorFormateado;

      // Función para generar un tiempo aleatorio entre min y max
      function generarTiempoAleatorio(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }

      // Función para generar un incremento aleatorio entre 165.000 y 1.650.000
      function generarIncrementoAleatorio() {
        var incrementoAleatorio = Math.random() >= 0.5 ? 65999 : 659900;
        return incrementoAleatorio;
      }

      // Actualizar el valor con un tiempo aleatorio entre 3 y 10 segundos y un incremento aleatorio
      function actualizarValor() {
        // Generar el incremento aleatorio
        var incremento = generarIncrementoAleatorio();

        // Calcular el nuevo valor
        valorOriginal += incremento;

        // Formatear el nuevo valor con el símbolo de dólar y los separadores de miles y decimales adecuados
        var nuevoValorFormateado = '$ ' + valorOriginal.toLocaleString('es', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

        // Actualizar el contenido del elemento
        valorElement.innerHTML = nuevoValorFormateado;

        // Generar el próximo tiempo de actualización aleatorio entre 3 y 10 segundos
        var tiempoSiguiente = generarTiempoAleatorio(5000, 15000);

        // Esperar el tiempo aleatorio antes de la siguiente actualización
        setTimeout(actualizarValor, tiempoSiguiente);
      }

      // Iniciar la primera actualización
      actualizarValor();
    });
  </script>


	</head>

	<div id="loading">
	    <video id="loading-video" src="img/loading.webm" autoplay muted playsinline preload="auto" loop></video>
	 </div>




	<body>
		<br>
		<div class="rdm-toolbar--fila">
			<div class="rdm-toolbar--izquierda">
			</div>
			<div class="rdm-toolbar--centro">
				<a href="index.php">
					<img src="img/logo.png" style="width: 2.5em;">
				</a>
			</div>
			<div class="rdm-toolbar--derecha">
			</div>
		</div>
		<main class="rdm--contenedor-toolbar" style="margin-top: 0.5em; font-size: 0.95em">


			<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.975em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">TRANSACCIONES</h1>
			<h1 class="rdm-tarjeta--titulo-largo"><div align="left" style="color: #2c2A29; font-weight: 600; font-size: 1.2em; margin-top: 0.175em; letter-spacing: -.47px;">Saldos y movimientos</div></h1>
			<span class="icon-bco icon-cash-payment"></span>
			<br>
			<center>
			<div style="margin: 0em auto">
				<img src="img/vistas.jpg" style="width: 9em;">
			</div>
			</center>
			<section class="rdm-tarjeta" style="margin-bottom: 0em; z-index: 1; position: relative;">
				<div class="rdm-tarjeta--cuerpo">
					<div class="rdm-lista--izquierda-sencillo" style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--contenedor">
							<img src="img/cuentas.jpg" style="width: 2.7em;">
						</div>
						<div class="rdm-lista--contenedor">
							<h2 class="rdm-lista--titulo">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em">Cuentas </h1>
							</h2>
						</div>
					</div>
				</div>
			</section>



			<section class="rdm-tarjeta">
				<div class="rdm-tarjeta--cuerpo">
					<div style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--izquierda-porcentaje">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.4em; letter-spacing: -.47px; margin: -0.25em auto">Cuenta de Ahorro</h1>
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; margin-bottom: -2em">Ahorros</h1>
						</div>

						<div class="container">
						    <div class="div1"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.25em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: -0.2em; margin-bottom: 0.5em">693-654723-78</h1></div>
						    <div class="div2"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Saldo Disponible</h1></div>
						  </div>
					</div>

					<div align="right">
						<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.6em; letter-spacing: -.47px; margin-top: -0.7em"><span id="valor">$ 1.125.100,31</span></h1>
					</div>
					<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-size: 0.8em; margin-top: 0.3em; letter-spacing: -.47px; text-decoration: underline;">Ver detalle y movimientos</h1>
					</div>
				</section>








				<section class="rdm-tarjeta">
				<div class="rdm-tarjeta--cuerpo">
					<div style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--izquierda-porcentaje">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.4em; letter-spacing: -.47px; margin: -0.25em auto">Cuenta Corriente</h1>
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; margin-bottom: -2em">Corriente</h1>
						</div>

						<div class="container">
						    <div class="div1"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.25em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: -0.2em; margin-bottom: 0.5em">019-589655-63</h1></div>
						    <div class="div2"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Saldo Disponible</h1></div>
						  </div>
					</div>

					<div align="right">
						<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.6em; letter-spacing: -.47px; margin-top: -0.7em">$ 398.721.302,15</h1>
					</div>
					<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-size: 0.8em; margin-top: 0.3em; letter-spacing: -.47px; text-decoration: underline;">Ver detalle y movimientos</h1>
					</div>
				</section>








				<section class="rdm-tarjeta">
				<div class="rdm-tarjeta--cuerpo">
					<div style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--izquierda-porcentaje">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.4em; letter-spacing: -.47px; margin: -0.25em auto">Cuenta de Ahorro</h1>
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; margin-bottom: -2em">Ahorros</h1>
						</div>

						<div class="container">
						    <div class="div1"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.25em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: -0.2em; margin-bottom: 0.5em">005-835122-01</h1></div>
						    <div class="div2"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Saldo Disponible</h1></div>
						  </div>
					</div>

					<div align="right">
						<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.6em; letter-spacing: -.47px; margin-top: -0.7em">$ 158.212.074,03</h1>
					</div>
					<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-size: 0.8em; margin-top: 0.3em; letter-spacing: -.47px; text-decoration: underline;">Ver detalle y movimientos</h1>
					</div>
				</section>















				<br>

				<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.975em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">PUNTOS DE PAGO</h1>
				<br>
				<section class="rdm-lista-sencillo">


				<article class="rdm-lista--item-sencillo">




					<select id="pagoSelector">
						<option value="">--- Elija una opción ---</option>

						<optgroup label="Pagos No Inscritos">
							<option value="pago_no_inscritos_f.php?nombre_personalizado=Juan+Pablo+Duque+Garcia&producto_destino=34462741865&tipo_destino=Ahorros">People Pizza 80</option>
							<option value="pago_no_inscritos_f.php?nombre_personalizado=Stq+Sas&producto_destino=64700007290&tipo_destino=Ahorros">TQ Pedregal</option>
							<option value="pago_no_inscritos_f.php?nombre_personalizado=Stq+Sas&producto_destino=64700007140&tipo_destino=Ahorros">TQ San Javier</option>
						</optgroup>

						<optgroup label="Códigos QR Tradicionales">
							<option value="pago_qr_negro_f.php">Pago QR Negro</option>
							<option value="pago_qr_generado_f.php">Código QR Generado (General)</option>
							<option value="pago_qr_generado_f.php?descripcion=THEMATIC+SUITES&nombre_personalizado=MARINA+ESTER+ROZO+DE&producto_destino=00554503241&tipo_destino=Ahorros">Código QR Thematic Suites</option>
							<option value="pago_qr_generado_f.php?descripcion=spa&nombre_personalizado=JHOCELIN+LOPEZ+ROJAS&producto_destino=91290859323&tipo_destino=Ahorros">Código QR Cuervo (Spa)</option>
						</optgroup>

						<optgroup label="Pagos Bre-b (Interoperables)">
							<option value="pago_breb_f.php">Pago QR Bre-b (General)</option>
							<option value="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER1&codigo_negocio=0090366682">Bre-b Healthy Colombia</option>
							<option value="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER&codigo_negocio=0029337268">Bre-b Healthy Vizcaya</option>
							<option value="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER&codigo_negocio=0029337268">Bre-b Healthy Américas</option>
							<option value="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER&codigo_negocio=0029337268">Bre-b Healthy Laureles</option>
							<option value="pago_breb_f.php?punto_venta=PERGAMINO+ARKADIA&codigo_negocio=0081023277">Bre-b Pergamino Arkadia</option>
							<option value="pago_breb_f.php?punto_venta=MOLIDO+CAFE+Y+PAN+ROBL&codigo_negocio=0041561986">Bre-b Molido Robledo</option>
							<option value="pago_breb_f.php?punto_venta=MOLIDO+CAFE+Y+PAN+EXIT&enviado_a=MOLIDO+CAFE+Y+PAN+EXITO+COLOMBIA&codigo_negocio=0041561689">Bre-b Molido Colombia</option>
							<option value="pago_breb_f.php?punto_venta=BIZCOCHERIA+Y+GELATO&codigo_negocio=0080537608">Bre-b Bizcochería</option>
							<option value="pago_breb_f.php?punto_venta=TQ+S+CRISTOBAL+1&codigo_negocio=0089257872">Bre-b TQ San Cristobal</option>
							<option value="pago_breb_f.php?punto_venta=WELC+POWER+SAS&codigo_negocio=0039579420">Bre-b Welc Power</option>
							<option value="pago_breb_f.php?punto_venta=DISTRIBUCIONES+VGM&codigo_negocio=0029552510">Bre-b VGM</option>
						</optgroup>
					</select>
				</div>

				<script>
					// Escuchamos cuando el usuario cambia la opción
					document.getElementById('pagoSelector').onchange = function() {
						var url = this.value; // Obtenemos el link con todo y variables
						if (url) {
							window.location.href = url; // Redirigimos
						}
					};
				</script>

				</article>





					</section>






				<br>

				<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.975em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">TRANSFERIR DINERO</h1>
				<br>
				<section class="rdm-lista-sencillo">



					<a href="no_inscritos_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-money-box zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>No inscritos Bancolombia / Nequi</b></h2>
								</div>
							</div>
						</article>
					</a>
					<a href="inscritos_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-mail-send zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Propios e inscritos Bancolombia</b></h2>
								</div>
							</div>
						</article>
					</a>
					<a href="qr_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="qr_negro_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR Negro</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="otros_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-balance zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Inscritos de otros bancos</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="error_limite_transferencias.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-trending-up zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Limite de transferencias</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="error_conexion.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-network-alert zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Error de conexión</b></h2>
								</div>
							</div>
						</article>
					</a>

<hr>


					<a href="pago_no_inscritos_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago no inscritos</b></h2>
								</div>
							</div>
						</article>
					</a>


				</section>



				<br>

				<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.975em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Otros</h1>
				<br>
				<section class="rdm-lista-sencillo">

				<a href="pago_no_inscritos_f.php?nombre_personalizado=Juan+Pablo+Duque+Garcia&producto_destino=34462741865&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago no inscritos People Pizza 80</b></h2>
								</div>
							</div>
						</article>
					</a>


					<hr>

					<a href="pago_no_inscritos_f.php?nombre_personalizado=Colvanes+Sas&producto_destino=03195977213&tipo_destino=Corriente">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago no inscritos Colvanes SAS</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>

					<a href="pago_no_inscritos_f.php?nombre_personalizado=Abc+Corporation+S+A+S&producto_destino=37738024401&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago no inscritos Action Black</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>

					<a href="pago_no_inscritos_f.php?nombre_personalizado=Stq+Sas&producto_destino=64700007290&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago no inscritos TQ Pedregal</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_no_inscritos_f.php?nombre_personalizado=Stq+Sas&producto_destino=64700007140&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago no inscritos TQ San Javier</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>


					<a href="pago_qr_negro_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago QR negro</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>

					<a href="pago_qr_generado_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR Generado</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_qr_generado_f.php?descripcion=THEMATIC+SUITES&nombre_personalizado=MARINA+ESTER+ROZO+DE&producto_destino=00554503241&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR Generado Thematic</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_qr_generado_f.php?descripcion=PADRE+NUESTRO+SURAMERICANA&nombre_personalizado=SEBASTIAN+MINOTA+CA&producto_destino=36053158433&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR Generado PN Suramericana</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_qr_generado_f.php?descripcion=spa&nombre_personalizado=JHOCELIN+LOPEZ+ROJAS&producto_destino=91290859323&tipo_destino=Ahorros">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR Generado Cuervo</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>


					<a href="pago_breb_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago QR Bre-b</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER1&codigo_negocio=0090366682">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Healthy Colombia</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER&codigo_negocio=0029337268">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Healthy Vizcaya</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER&codigo_negocio=0029337268">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Healthy Américas</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=HEALTHY+MUSCLE+MAKER&codigo_negocio=0029337268">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Healthy Laureles</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>

					<a href="pago_breb_f.php?punto_venta=PERGAMINO+ARKADIA&codigo_negocio=0081023277">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Pergamino Arkadia</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=PERGAMINO+DISTRITO+VER&codigo_negocio=0081023251">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Pergamino Ciudad del rio</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=PERGAMINO+LAURELES&codigo_negocio=0081023178">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Pergamino Laureles</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=PERGAMINO+FERIA&codigo_negocio=0081023285">
					<article class="rdm-lista--item-sencillo">
						<div class="rdm-lista--izquierda-sencillo">
							<div class="rdm-lista--contenedor">
								<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
							</div>
							<div class="rdm-lista--contenedor">
								<h2 class="rdm-lista--titulo"><b>Pago Bre-b Pergamino Oviedo</b></h2>
								</div>
							</div>
						</article>
					</a>



					<a href="pago_breb_f.php?punto_venta=MOLIDO+CAFE+Y+PAN+ROBL&codigo_negocio=0041561986">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b Molido Robledo</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=MOLIDO+CAFE+Y+PAN+EXIT&enviado_a=MOLIDO+CAFE+Y+PAN+EXITO+COLOMBIA&codigo_negocio=0041561689">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b Molido Colombia</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=BIZCOCHERIA+Y+GELATO&codigo_negocio=0080537608">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b Bizcochería</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=TQ+S+CRISTOBAL+1&codigo_negocio=0089257872">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b TQ San Cristobal</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=WELC+POWER+SAS&codigo_negocio=0039579420">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b Welc Power</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=PEOPLE+PIZZA+LA+80&codigo_negocio=0091252564">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b People Pizza la 80</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=EDS+Estrella+de+Occide&codigo_negocio=0073937187">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b EDS Estrella de Occidente</b></h2>
								</div>
							</div>
						</article>
					</a>

					<hr>

					<a href="pago_breb_f.php?punto_venta=INVERSIONES+QUINTERO&codigo_negocio=0088042043">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b Parqueadero Diamante</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=Carniceria+Ok&codigo_negocio=0067440636">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b Carniceria Ok</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="pago_breb_f.php?punto_venta=DISTRIBUCIONES+VGM&codigo_negocio=0029552510">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Pago Bre-b VGM</b></h2>
								</div>
							</div>
						</article>
					</a>

				</section>










				<div class="rdm-lista--contenedor">



			</main>

			<br>
     <br>
     <br>
     <br>
     <br>
     <br>


					<div class="contenedor">
    <div class="columna"><a href="index.php"><img src="img/inicio.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Inicio</h1></a></div>




    <div class="columna" style="background-color: #FDDA24;"><a href="index.php"><img src="img/transaccionesa.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;"> Transacciones</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/explorar.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Explorar</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/tramites.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Trámites y solicitudes</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/ajustes.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Ajustes</h1></a></div>
  </div>
			</html>