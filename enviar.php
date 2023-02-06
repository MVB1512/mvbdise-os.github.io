<?php
$destino="mvallejobarranco15@gmail.com";
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$telefono= $_POST["telefono"];
$correo= $_POST["correo"];
$mensaje= $_POST["mensaje"];
$contenido= "nombre:" .$nombre . "\nApellido: ". $apellido ."\nCorreo: " .$correo . "\nTelefono: " . $telefono ."\nMensaje: " . $mensaje;
mail($destino,"Contacto",$contenido);
?>