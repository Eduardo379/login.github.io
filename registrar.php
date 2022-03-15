<?php

include("cone_db.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && 
		strlen($_POST['apellido']) >= 1 &&
		strlen($_POST['email'])) {
	    $name = trim($_POST['name']);
		$apellido = trim($_POST['apellido']);
	    $email = trim($_POST['email']);
	    $contrasena = trim($_POST['contrasena']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO usuarios(nombre, apellido, email, contrasena, fechareg) VALUES ('$name','$apellido', '$email','$contrasena', '$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>