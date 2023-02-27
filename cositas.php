<?php

// Obtener la dirección IP del usuario
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener la fecha y hora actual
$fecha = date("Y-m-d H:i:s");

// Almacenar la dirección IP y la fecha de acceso en una variable
$datos = "$ip - $fecha";

// Establecer la cookie con una duración de 1 año
setcookie("acceso", $datos, time() + 60 * 60 * 24 * 365);

// Verificar si la cookie existe
if(isset($_COOKIE["acceso"])) {

    // Mostrar la dirección IP y la fecha de acceso almacenadas en la cookie
    echo "Su dirección IP es: " . $_COOKIE["acceso"];

}else {
  
    // Si la cookie no existe, mostrar un mensaje de error
    echo "No se ha encontrado ninguna cookie";
  
}
?>
