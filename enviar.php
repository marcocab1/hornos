<?php
	$destino= "jreyesp9@miumg.edu.gt"; 
	$nombre= $_POST["nombre"]; 
	$Correo= $_POST["Correo"];
	$Telefono= $_POST["Telefono"];
	$mensaje= $_POST["mensaje"];
	$contenido= "Nombre: " . $nombre . "\nCorreo: " . $Correo . "\nTeléfono: " . $Telefono . "\nMensaje: " . $mensaje; 
	mail: ($destino, "Contacto", $contenido);
	
?>