<?php

if (isset($_POST['enviar'])) {
  if (!empty($_POST['nombre'])
  && !empty($_POST['dui'])
  && !empty($_POST['carnet'])
  && !empty($_POST['email']) 
  && !empty($_POST['date']) 
  && !empty($_POST['hora'])) {
  
    $nombre = $_POST['nombre'];
    $dui = $_POST['dui'];
    $carnet = $_POST['carnet'];
    $email = $_POST['email'];
    $fecha = $_POST['date'];
    $hora= $_POST['hora'];
    $reservacion = $date . " " . $hora;
    $datos = $nombre . " " . $dui . " " . $carnet . " " . $email;

$to = "carlosdavidmancia@gmail.com";

$headers = "From: remitente@example.com\r\n";
$headers .= "Reply-To: remitente@example.com\r\n";
$headers .= "Content-Type: text/html\r\n";

mail($to, $datos, $reservacion, $headers);

    if ($mail) {
      echo "<h4>¡Mail enviado exitosamente!</h4>";
    }
}
}

?>