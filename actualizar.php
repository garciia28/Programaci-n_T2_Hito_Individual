<?php
// Recibimos los datos del formulario
$correo = $_POST['correo'];
$titulo = $_POST['titulo'];
$pass = $_POST['pass'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];

// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root','','test' );

// Realizacion de actualizacion
$consulta = "UPDATE aplicacionweb SET correo='$correo', titulo='$titulo', pass='$pass', contenido='$contenido', fecha= '$fecha', imagen='$imagen' WHERE correo=$correo, fecha=$fecha";
$resultado = $conexion->query($consulta);
header('location:index.html');