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

	<h2 class="rdm-lista--titulo-largo">Inscritos de otros bancos</h2>


	<section class="rdm-formulario">

        <form action="otros_r.php" method="post" autocomplete="off">
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

                <p class="rdm-formularios--label"><label for="dinero">Valor a enviar</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="dinero" name="dinero" value="" placeholder="$" required></p>
                <p class="rdm-formularios--ayuda">Ingresa el valor a enviar</p>

                <p class="rdm-formularios--label"><label for="nombre_personalizado">Nombre personalizado</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="nombre_personalizado" name="nombre_personalizado" value="" placeholder="Nombre personalizado" required></p>
                <p class="rdm-formularios--ayuda">Ingresa el nombre personalizado</p>

                <p class="rdm-formularios--label"><label for="producto_destino">Producto destino</label></p>
                <p><input class="rdm-formularios--input-grande" type="number" id="producto_destino" name="producto_destino" value="" placeholder="#" required></p>
                <p class="rdm-formularios--ayuda">Ingresa el producto destino</p>

                <p class="rdm-formularios--label"><label for="tipo_destino">Tipo de cuenta destino</label></p>
		        <p><select class="rdm-formularios--input-grande" id="tipo_destino" name="tipo_destino" required>
		            <option value=""></option>
		            <option value="ahorros">Ahorros</option>
		            <option value="corriente">Corriente</option>
		        </select></p>
		        <p class="rdm-formularios--ayuda">Elige el tipo de cuenta destino</p>

		        <p class="rdm-formularios--label"><label for="banco_destino">Banco destino</label></p>
		        <p><select class="rdm-formularios--input-grande" id="banco_destino" name="banco_destino" required>
		           	<option value=""></option>
					   <option value="BANCOLOMBIA">BANCOLOMBIA</option>
					   <option value="BANCO AGRARIO">BANCO AGRARIO</option>
					   <option value="BANCO AV VILLAS">BANCO AV VILLAS </option>
					   <option value="BANCO CAJA SOCIAL">BANCO CAJA SOCIAL</option>
					   <option value="BANCO COOPERATIVO COOPCENTRAL">BANCO COOPERATIVO COOPCENTRAL</option>
					   <option value="BANCO GALICIA">BANCO GALICIA</option>
					   <option value="BANCO DAVIVIENDA">BANCO DAVIVIENDA </option>
					   <option value="BANCO DE BOGOTÁ ">BANCO DE BOGOTÁ </option>
					   <option value="BANCO DE LAS MICROFINANZAS BANCAMIA S.A.">BANCO DE LAS MICROFINANZAS BANCAMIA S.A.</option>
					   <option value="BANCO DE OCCIDENTE">BANCO DE OCCIDENTE </option>
					   <option value="BANCO FALABELLA S.A.">BANCO FALABELLA S.A.</option>
					   <option value="BANCO FINANDINA S.A.">BANCO FINANDINA S.A.</option>
					   <option value="BANCO GNB COLOMBIA S.A">BANCO GNB COLOMBIA S.A</option>
					   <option value="BANCO GNB SUDAMERIS">BANCO GNB SUDAMERIS </option>
					   <option value="BANCO MUNDO MUJER">BANCO MUNDO MUJER</option>
					   <option value="BANCO PICHINCHA">BANCO PICHINCHA</option>
					   <option value="BANCO POPULAR">BANCO POPULAR </option>
					   <option value="BANCO PROCREDIT">BANCO PROCREDIT</option>
					   <option value="BANCO SANTANDER DE NEGOCIOS">BANCO SANTANDER DE NEGOCIOS</option>
					   <option value="BANCO SERFINANZA">BANCO SERFINANZA</option>
					   <option value="BANCO W S.A">BANCO W S.A</option>
					   <option value="BANCOOMEVA">BANCOOMEVA</option>
					   <option value="BANCÓLDEX S.A.">BANCÓLDEX S.A.</option>
					   <option value="BBVA ">BBVA </option>
					   <option value="BNP PARIBAS">BNP PARIBAS</option>
					   <option value="CITIBANK">CITIBANK </option>
					   <option value="COLTEFINANCIERA S.A.">COLTEFINANCIERA S.A.</option>
					   <option value="CONFIAR">CONFIAR </option>
					   <option value="COOFINEP COOPERATIVA FINANCIERA">COOFINEP COOPERATIVA FINANCIERA</option>
					   <option value="COOPERATIVA FINANCIERA DE ANTIOQUIA">COOPERATIVA FINANCIERA DE ANTIOQUIA</option>
					   <option value="COTRAFA COOPERATIVA FINANCIERA">COTRAFA COOPERATIVA FINANCIERA</option>
					   <option value="Daviplata">Daviplata</option>
					   <option value="FINANCIERA JURISCOOP S.A. COMPAÑÍA DE FINANCIAMIENTO">FINANCIERA JURISCOOP S.A. COMPAÑÍA DE FINANCIAMIENTO</option>
					   <option value="GIROS Y FINANZAS COMPAÑÍA DE FINANCIAMIENTO S.A.">GIROS Y FINANZAS COMPAÑÍA DE FINANCIAMIENTO S.A.</option>
					   <option value="ITAÚ">ITAÚ</option>
					   <option value="ITAÚ antes CorpBanca">ITAÚ antes CorpBanca</option>
					   <option value="MIBANCO S.A.">MIBANCO S.A.</option>
					   <option value="NEQUI">NEQUI</option>
					   <option value="Rappipay">Rappipay</option>
					   <option value="Scotiabank Colpatria S.A">Scotiabank Colpatria S.A</option>
		        </select></p>
		        <p class="rdm-formularios--ayuda">Elige el banco de cuenta destino</p>

		        <p class="rdm-formularios--label"><label for="referencia">Referencia (Opcional)</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="referencia" name="referencia" value="" placeholder="" ></p>
                <p class="rdm-formularios--ayuda">Ingresa la referencia</p>

                <p class="rdm-formularios--label"><label for="mas_informacion">Más información (Opcional)</label></p>
                <p><input class="rdm-formularios--input-grande" type="text" id="mas_informacion" name="mas_informacion" value="" placeholder="" ></p>
                <p class="rdm-formularios--ayuda">Ingresa más información</p>


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