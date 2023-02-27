<?php
$conexion = new mysqli('localhost', 'root','','test' );
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];


$stmt = $conexion->query("SELECT * FROM `aplicacionweb`");
if($nombre=="admin@admin.es" and $pass=='123'){
    header('location:actualizar.html');
    session_start();
    $_SESSION['token'] = session_id();
}else{
    echo('No puedes acceder. Vuelve a intentarlo');
}
