<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Bancolombia</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<br>

<div align="center">

	<br>
	<br>

	<a href="index.php"><img src="img/logo.png" style="width: 2.5em;"></a>

	<br>
	<br>

</div>

<main class="rdm--contenedor-toolbar" style="margin-top: -1em;">

	<h2 class="rdm-lista--titulo-largo">Código QR</h2>


	<section class="rdm-formulario">

        <form action="qr_negro_r.php" method="post" autocomplete="off">
                <input type="hidden" name="pagar" value="si" />

                <p class="rdm-formularios--label"><label for="producto_origen">Producto origen</label></p>
		        <p><select class="rdm-formularios--input-grande" id="producto_origen" name="producto_origen" required>
		            <option value=""></option>
		            <option value="69365472378">69365472378</option>
		            <option value="01958965563">01958965563</option>
		            <option value="41208211038">41208211038</option>
		            <option value="">--</option>
		            <option value="00931108603">00931108603</option>
		            <option value="33355127015">33355127015</option>
		            <option value="55143521833">55143521833</option>
		            <option value="02179717037">02179717037</option>
		        </select></p>
		        <p class="rdm-formularios--ayuda">Elige el producto origen</p>

                <p class="rdm-formularios--label"><label for="producto_destino">Producto destino</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="producto_destino" name="producto_destino" value="" placeholder="#" required></p>
                <p class="rdm-formularios--ayuda">Ingresa el producto destino</p>

                <p class="rdm-formularios--label"><label for="dinero">Valor a enviar</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="dinero" name="dinero" value="" placeholder="$" required></p>
                <p class="rdm-formularios--ayuda">Ingresa el valor a enviar</p>

                <p class="rdm-formularios--label"><label for="nombre_personalizado">Nombre personalizado</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="nombre_personalizado" name="nombre_personalizado" value="" placeholder="Nombre personalizado" required></p>
                <p class="rdm-formularios--ayuda">Ingresa el nombre personalizado</p>

                <p class="rdm-formularios--label"><label for="descripcion">Descripción</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="descripcion" name="descripcion" value="" placeholder="Descripción" ></p>
                <p class="rdm-formularios--ayuda">Ingrese la descripción</p>



                <p class="rdm-formularios--label"><label for="tipo_destino">Tipo de cuenta destino</label></p>
		        <p><select class="rdm-formularios--input-grande" id="tipo_destino" name="tipo_destino" required>
		            <option value=""></option>
		            <option value="Ahorros / Bancolombia A la mano">Ahorros / Bancolombia A la mano</option>
		            <option value="Corriente">Corriente</option>
		        </select></p>
		        <p class="rdm-formularios--ayuda">Elige el tipo de cuenta destino</p>


                <p class="rdm-formularios--submit"><button type="submit" class="rdm-boton--resaltado" style="width: 100%">Enviar dinero</button></p>

            </form>

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