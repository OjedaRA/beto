<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensajes'];
$headers = "From: remitente@example.com\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$enviado = mail('robertoandres2300@gmail.com', 'Contacto desde mi sitio', $mensaje, $headers);

if ($enviado) {
    echo '<p>Hola ' . $nombre . ', su mensaje "' . $mensaje . '" se ha enviado correctamente.</p>';
} else {
    echo '<p>Hubo un problema al enviar su mensaje. Por favor, inténtelo de nuevo más tarde.</p>';
}
?>
