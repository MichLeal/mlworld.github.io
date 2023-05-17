<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include('conexion.php');

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

$consulta= "INSERT INTO `contacto` (`nombre`, `correo`, `telefono`,  `mensaje`) 
VALUES ('$nombre', '$correo', '$telefono', '$mensaje');";

$resultado = mysqli_query($conexion,$consulta) or die ("Error de registro");


mysqli_close($conexion)
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ML WORLD</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="noticias.html">Noticias</a></li>
			<li><a href="contacto.html">Contacto</a></li>
		</ul>
	</nav>
	<h1>Datos guardados </h1>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<footer>
		<div class="copy">
			<p>Todos los derechos reservados</p>
			<p>&copy;ML WORLD</p>
		</div>
			<div class="redes">
						<a href="http://www.facebook.com"target="blank"><span
							class="icon-facebook-squared"></span></a>
						<a href="http://www.twitter.com"target="blank"><span
							class="icon-twitter"></span></a>
						<a href="http://www.instagram.com"target="blank"><span
							class="icon-instagram"></span></a>
		   </div>

	</footer>

</body>
</html>