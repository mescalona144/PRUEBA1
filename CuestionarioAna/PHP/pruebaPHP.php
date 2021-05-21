<?php 

//VARIABLES
$nombre=$_POST['nombre'];

$apellidos=$_POST['apellidos'];

$correo=$_POST['correo'];

$telefono=$_POST['telefono'];

$edad=$_POST['edad'];

$mensaje=$_POST['mensaje'];

// configuramos datos de email del destinatario

$destinatario="mescalona144@gmail.com";

$asunto= "Mensaje desde la web";


// cuerpo de correo

$cuerpo.="Nombres: ".$nombre."\n";

$cuerpo.="Apellidos: ".$apellidos."\n";

$cuerpo.="E-mail: ".$correo."\n";

$cuerpo.="Teléfonos: ".$telefono."\n";

$cuerpo.="Edad: ".$edad."\n";

$cuerpo.="Comentario: ".$mensaje."\n";


// cuando el usuario envia el formulario

mail($destinatario,$asunto,$cuerpo);

echo $nombre, "Gracias por contactarnos!!!";		

?>