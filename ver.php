<?php
echo "<link rel=stylesheet href=css/style_tablas.css>";
$consulta = "select * from aplicacionweb";
$conexion = new mysqli('localhost', 'root','','test' );

$insertar = $conexion->prepare($consulta);
$resultado = $conexion->query($consulta);

echo("<table border='1'>");
    echo("<tr>");
        echo("<th>Correo</th>");
        echo("<th>Título</th>");
        echo("<th>Contenido</th>");
        echo("<th>Fecha</th>");
        echo("<th>Imagen</th>");
    echo("</tr>");
    while($row=$resultado->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["correo"]."</td>");
            echo("<td>".$row["titulo"]."</td>");
            echo("<td>".$row["contenido"]."</td>");
            echo("<td>".$row["fecha"]."</td>");
            echo("<td>".$row["imagen"]."</td>");
        echo("</tr>");
    }
echo("</table>");
