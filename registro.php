<?php
$correo = $_POST['correo'];
$titulo = $_POST['titulo'];
$pass = $_POST['pass'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];

$conexion = new mysqli('localhost', 'root','','test' );
$consulta = "INSERT INTO `aplicacionweb` (`correo`, `titulo`, `pass`, `contenido`, `fecha`, `imagen`) VALUES (?, ?, MD5(?), ?, ?,?);"; 
$insertar = $conexion->prepare($consulta);
$resultado = $insertar->execute([$correo, $titulo, $pass, $contenido, $fecha, $imagen]);
