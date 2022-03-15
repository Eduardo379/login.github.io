<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilosform.css">
</head>
<body class="animate__animated animate__fadeIn">
	<div class="container">
		<h1>Registrarte</h1>
		<p>Es rápido y fácil</p>

		<div class="formularios">
			<form  method="post">
				<div class="input-contenedor-name">
					 <input type="text" placeholder="Nombre" class="nombre" name="name"> <br/><input type="text" placeholder="Apellido" class="entrada" name="apellido">  
				</div>

				
				<div class="input-contenedor">
					<input type="Email" placeholder="Correo Electronico" class="entrada" name="email">
				</div>

				<div class="input-contenedor">
					<input type="Password" placeholder="Contraseña nueva" maxlength="15" minlength="5" class="entrada" name="contrasena">
				</div>
				<!-- cuando ingresamos los datos el boton no nos redirecciona al index sino que envia los datos
				al script para insertarlos a las tablas sql, pero si no insertas los datos en el formulario
				te manda al link que le ingresaste al boton -->
				<input type="submit" value="Registrarte" name="register">
			</form>
		</div>
	</div>
	<?php

	include("registrar.php");

	?>
</body>
</html>