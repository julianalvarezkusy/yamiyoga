<?php
    $mail = $_POST['mail'];
    $nombre = $_POST['nombre'];

    $apellido = $_POST['apellido'];
    $asunto = $_POST['asunto'];
    $texto = $_POST['texto'];


    $datos = 'Nombre: ' + $nombre + "Apellido: " + $apellido + "</br> Texto: " + $texto + "</br> mail contacto: " + $mail;
    
    
    if(
        mail("hipnokusy@gmail.com", $asunto, $datos)){
            echo 'Correcto';
        }else {
            echo 'Falló';
        }


?>