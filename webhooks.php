<?php
// Recibir el cuerpo de la petición.
$input = @file_get_contents("php://input");
// Parsear el contenido como JSON.
$eventJson = json_decode($input);

// Usar los datos del Webhooks para alguna acción.
//print $eventJson;
echo("JSON:".$eventJson);

// Responder
http_response_code(200);
?>