<?php
//capturo las variables que pasan por URL o formulario
if(isset($_POST['dinero'])) $dinero = $_POST['dinero']; elseif(isset($_GET['dinero'])) $dinero = $_GET['dinero']; else $dinero = null;
if(isset($_POST['producto_destino'])) $producto_destino = $_POST['producto_destino']; elseif(isset($_GET['producto_destino'])) $producto_destino = $_GET['producto_destino']; else $producto_destino = null;

if(isset($_POST['producto_origen'])) $producto_origen = $_POST['producto_origen']; elseif(isset($_GET['producto_origen'])) $producto_origen = $_GET['producto_origen']; else $producto_origen = null;
if(isset($_POST['tipo_destino'])) $tipo_destino = $_POST['tipo_destino']; elseif(isset($_GET['tipo_destino'])) $tipo_destino = $_GET['tipo_destino']; else $tipo_destino = null;
if(isset($_POST['nombre_personalizado'])) $nombre_personalizado = $_POST['nombre_personalizado']; elseif(isset($_GET['nombre_personalizado'])) $nombre_personalizado = $_GET['nombre_personalizado']; else $nombre_personalizado = null;

if(isset($_POST['descripcion'])) $descripcion = $_POST['descripcion']; elseif(isset($_GET['descripcion'])) $descripcion = $_GET['descripcion']; else $descripcion = null;

 ?>

 <?php
date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, "spanish");

//número de comprobante
$comprobante_no = str_pad(rand(11200, 80200), 10, "0", STR_PAD_LEFT);

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
$valor_enviado = number_format($valor_enviado, 2, ",", ".");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Bancolombia</title>
	<link rel="stylesheet" href="css/estilos.css">

	<script>
    window.addEventListener("load", function() {
      var loading = document.getElementById("loading");

      var tiempoAleatorio = Math.floor(Math.random() * (10000 - 5000 + 1)) + 5000;

      setTimeout(function() {
        loading.style.display = "none";
      }, tiempoAleatorio);
    });
  </script>


</head>

<div id="loading">
    <div>
      <img src="img/loader.gif" alt="Loading">
    </div>
    <br>
    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; text-align: center;">Validando Clave <br>Dinámica...</h1>
 </div>




<main class="rdm--contenedor-toolbar">



	<div align="center">

		<br>
		<br>

		<a href="index.php"><img src="img/logo.png" style="width: 2.5em;"></a>

		<br>
		<br>

		<button style="background-color: #00c389;
	    color: #2c2a29;
	    border-radius: 50%;
	    height: 3.5em;
	    width: 3.5em;
	    padding: 0em;
	    box-shadow: none;"><i class="zmdi zmdi-check zmdi-hc-2x"></i></button>

		</div>


	<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-weight: 600; font-size: 1.1em; margin-top: 1em; letter-spacing: -.47px;">¡Transferencia exitosa!</div></h1>



	<section class="rdm-tarjeta" style="margin-top: 2.5em;">




		<div class="rdm-tarjeta--primario-largo">
			<div class="rdm-tarjeta--comprobante_no">
				<h1 align="center" class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; font-size: 0.9em">Comprobante No. <?php echo $comprobante_no; ?></h1>
			</div>
			<h2 align="center" class="rdm-tarjeta--subtitulo-largo" style="color: #2c2A29; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; font-size: 0.9em"><?php echo $fecha_dia; ?> <?php echo $fecha_mes; ?> <?php echo $fecha_ano; ?> - <?php echo "$hora"; ?> <?php echo $hora_f1; ?>.<?php echo $hora_f2; ?>.</h2>
	  	</div>

	  	<div class="rdm-tarjeta--separador"></div>

	  	<div class="rdm-tarjeta--cuerpo">
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.35em; letter-spacing: -.47px; margin: 0.5em auto">Detalle código QR</h1>
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.9em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Nombre personalizado</h1>
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em"><?php echo $nombre_personalizado; ?></h1>
		</div>




		<?php
		if (!empty($descripcion))
		{


		    ?>

			<div class="rdm-tarjeta--cuerpo">
			    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.9em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Descripción</h1>
			    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em"><?php echo $descripcion; ?></h1>
			</div>

			<?php
		}
		?>


















		<div class="rdm-tarjeta--separador" style="border: solid 1px; border-color: rgba(244, 244, 244, 1);"></div>

		<div class="rdm-tarjeta--cuerpo">

		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.35em; letter-spacing: -.47px; margin: 0.5em auto">Producto destino</h1>
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.9em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em"><?php echo ($producto_destino_tipo) ?></h1>

		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em"><?php echo $pro_des_num_1; ?>-<?php echo $pro_des_num_2; ?>-<?php echo $pro_des_num_3; ?></h1>

	  	</div>






	  	<div class="rdm-tarjeta--cuerpo">

		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.9em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Valor enviado</h1>
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em">$ <?php echo $valor_enviado; ?></h1>



		</div>


		<div class="rdm-tarjeta--separador" style="border: solid 1px; border-color: rgba(244, 244, 244, 1);"></div>




	  	<div class="rdm-tarjeta--cuerpo">
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.35em; letter-spacing: -.47px; margin: 0.5em auto">Producto origen</h1>

		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.9em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Cuenta de Ahorro</h1>
		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.9em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Ahorros</h1>

		    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em"><?php echo $pro_ori_num_1; ?>-<?php echo $pro_ori_num_2; ?>-<?php echo $pro_ori_num_3; ?></h1>

		</div>


		</section>





	<section class="rdm-tarjeta" style="margin-top: 2.2em;">

		<div class="contenedor_menu">




		<div class="columna_menu"><a href="#" onclick="location.reload(); return false;"><img src="img/compartir.jpg" style="height: 1.3em;"> <span class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;"><br>Compartir</span></a></div>

	    <div class="columna_menu"><a href="index.php"><img src="img/transferir.jpg" style="height: 1.3em;"> <span class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;"><br>Realizar otra <br> transferencia</span></a></div>

	    <div class="columna_menu"><a href="index.php"><img src="img/facturas.jpg" style="height: 1.3em;"> <span class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;"><br>Pagar facturas</span></a></div>

	   </div>



	</section>


	<br>
     <br>
     <br>
     <br>
     <br>
     <br>



</main>


<div class="contenedor">
    <div class="columna"><a href="index.php"><img src="img/inicio.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Inicio</h1></a></div>




    <div class="columna" style="background-color: #FDDA24;"><a href="index.php"><img src="img/transaccionesa.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;"> Transacciones</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/explorar.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Explorar</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/tramites.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Trámites y solicitudes</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/ajustes.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Ajustes</h1></a></div>
  </div>


</body>
</html>