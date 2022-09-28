<?php 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    //Datos del correo
    $destinatario = "bazanmatias2004@gmail.com";
    $asunto = "Contacto desde nuestra web";

    $carta = "De: $nombre \n";
    $carta .= "De: $apellido \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje \n";

    //Enviar con mail los datos
    mail($destinatario, $asunto, $carta);
?>