<?php
require_once('registro.php');

// Verificar si el formulario ha sido enviado
if(isset($_POST["enviar"])) {

  // Enviar una respuesta de confirmación al autor
  echo "Formulario enviado con éxito";

} else {
  // Si el formulario no ha sido enviado, mostrar un mensaje de error
  echo "No se ha enviado ningún formulario";
}
