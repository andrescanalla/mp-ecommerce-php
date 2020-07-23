<?php
// Recibir el cuerpo de la petición.
$input = @file_get_contents("php://input");
// Parsear el contenido como JSON.
$eventJson = json_decode($input);

// Usar los datos del Webhooks para alguna acción.
//print $eventJson;
error_log("JSON:".$eventJson, 0);

// Responder
http_response_code(200);
?>