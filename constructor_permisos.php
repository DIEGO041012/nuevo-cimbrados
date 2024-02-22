<?php
require './conexiondatabase.php';


$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí obtienes los datos del formulario
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $cargo = $_POST['cargo'];
    $motivo_solicitud = $_POST['motivo_solicitud'];
    
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    
    echo "nombre: " . $nombre . "<br>";
    echo "cedula: " . $cedula . "<br>";
    echo "cargo: " . $cargo . "<br>";
    echo "motivo_solicitud: " . $motivo_solicitud . "<br>";
   
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO formulario_permisos( nombre, cedula, cargo, motivo_solicitud) VALUES ('$nombre','$cedula','$cargo','$motivo_solicitud')";

    $conexion->query($sql);

}
?>